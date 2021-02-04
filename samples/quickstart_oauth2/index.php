<?php
// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

$property_id = 'YOUR-GA4-PROPERTY-ID';
// [START analytics_data_quickstart_oauth2]

require 'vendor/autoload.php';

use Google\Analytics\Data\V1alpha\AlphaAnalyticsDataClient;
use Google\Analytics\Data\V1alpha\DateRange;
use Google\Analytics\Data\V1alpha\Dimension;
use Google\Analytics\Data\V1alpha\Entity;
use Google\Analytics\Data\V1alpha\Metric;
use Google\ApiCore\ApiException;
use Google\Auth\OAuth2;

/**
 * TODO(developer): Uncomment this variable and replace with your GA4
 *   property ID before running the sample.
 */
$property_id = '222596558';

// Start a session to persist credentials.
session_start();

// Set authorization parameters.
$s = file_get_contents('./oauth2.keys.json');
$keys = json_decode($s);
$oauth = new OAuth2([
    'scope' => 'https://www.googleapis.com/auth/analytics.readonly',
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
    'authorizationUri' => $keys->{'web'}->{'auth_uri'},
    'clientId' => $keys->{'web'}->{'client_id'},
    'clientSecret' => $keys->{'web'}->{'client_secret'},
    'redirectUri' => 'http://' . $_SERVER['HTTP_HOST'] . '/',
]);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    // This is the final step of the OAuth2 authorization process, where an
    // OAuth2 access token is available and can be used to set up a client.
    $oauth->updateToken(['refresh_token' => $_SESSION['access_token']]);

    // Make an API call.
    $client = new AlphaAnalyticsDataClient(['credentials' => $oauth]);
    try {
        $response = $client->runReport([
            'entity' => new Entity([
                'property_id' => $property_id
            ]),
            'dateRanges' => [
                new DateRange([
                    'start_date' => '2020-03-31',
                    'end_date' => 'today',
                ]),
            ],
            'dimensions' => [new Dimension(
                [
                    'name' => 'city',
                ]),
            ],
            'metrics' => [new Metric(
                [
                    'name' => 'activeUsers',
                ])
            ]
        ]);

        // Print results of an API call.
        print 'Report result: <br />';

        foreach ($response->getRows() as $row) {
            print $row->getDimensionValues()[0]->getValue()
                . ' ' . $row->getMetricValues()[0]->getValue() . '<br />';
        }
    } catch (ApiException $e) {
        // Print an error message.
        print $e->getMessage();
    }

} elseif (isset($_GET['code']) && $_GET['code']) {
    // If an OAuth2 authorization code is present in the URL, exchange it for
    // an access token.
    $oauth->setCode($_GET['code']);
    $oauth->fetchAuthToken();

    // Persist the acquired access token in a session.
    $_SESSION['access_token'] = $oauth->getAccessToken();

    // Refresh the current page.
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
} else {
    // Redirect to Google's OAuth 2.0 server.
    $auth_url = $oauth->buildFullAuthorizationUri();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
}

// [END analytics_data_quickstart_oauth2]
