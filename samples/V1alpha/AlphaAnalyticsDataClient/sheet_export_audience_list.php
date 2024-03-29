<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START analyticsdata_v1alpha_generated_AlphaAnalyticsData_SheetExportAudienceList_sync]
use Google\Analytics\Data\V1alpha\Client\AlphaAnalyticsDataClient;
use Google\Analytics\Data\V1alpha\SheetExportAudienceListRequest;
use Google\Analytics\Data\V1alpha\SheetExportAudienceListResponse;
use Google\ApiCore\ApiException;

/**
 * Exports an audience list of users to a Google Sheet. After creating an
 * audience, the users are not immediately available for listing. First, a
 * request to `CreateAudienceList` is necessary to create an audience list of
 * users, and then second, this method is used to export those users in the
 * audience list to a Google Sheet.
 *
 * See [Creating an Audience
 * List](https://developers.google.com/analytics/devguides/reporting/data/v1/audience-list-basics)
 * for an introduction to Audience Lists with examples.
 *
 * Audiences in Google Analytics 4 allow you to segment your users in the ways
 * that are important to your business. To learn more, see
 * https://support.google.com/analytics/answer/9267572.
 *
 * This method is introduced at alpha stability with the intention of
 * gathering feedback on syntax and capabilities before entering beta. To give
 * your feedback on this API, complete the
 * [Google Analytics Audience Export API
 * Feedback](https://forms.gle/EeA5u5LW6PEggtCEA) form.
 *
 * @param string $formattedName The name of the audience list to retrieve users from.
 *                              Format: `properties/{property}/audienceLists/{audience_list}`
 *                              Please see {@see AlphaAnalyticsDataClient::audienceListName()} for help formatting this field.
 */
function sheet_export_audience_list_sample(string $formattedName): void
{
    // Create a client.
    $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();

    // Prepare the request message.
    $request = (new SheetExportAudienceListRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var SheetExportAudienceListResponse $response */
        $response = $alphaAnalyticsDataClient->sheetExportAudienceList($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = AlphaAnalyticsDataClient::audienceListName('[PROPERTY]', '[AUDIENCE_LIST]');

    sheet_export_audience_list_sample($formattedName);
}
// [END analyticsdata_v1alpha_generated_AlphaAnalyticsData_SheetExportAudienceList_sync]
