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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/analytics/data/v1beta/analytics_data_api.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Analytics\Data\V1beta\Client;

use Google\Analytics\Data\V1beta\AudienceExport;
use Google\Analytics\Data\V1beta\BatchRunPivotReportsRequest;
use Google\Analytics\Data\V1beta\BatchRunPivotReportsResponse;
use Google\Analytics\Data\V1beta\BatchRunReportsRequest;
use Google\Analytics\Data\V1beta\BatchRunReportsResponse;
use Google\Analytics\Data\V1beta\CheckCompatibilityRequest;
use Google\Analytics\Data\V1beta\CheckCompatibilityResponse;
use Google\Analytics\Data\V1beta\CreateAudienceExportRequest;
use Google\Analytics\Data\V1beta\GetAudienceExportRequest;
use Google\Analytics\Data\V1beta\GetMetadataRequest;
use Google\Analytics\Data\V1beta\ListAudienceExportsRequest;
use Google\Analytics\Data\V1beta\Metadata;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\Pivot;
use Google\Analytics\Data\V1beta\QueryAudienceExportRequest;
use Google\Analytics\Data\V1beta\QueryAudienceExportResponse;
use Google\Analytics\Data\V1beta\RunPivotReportRequest;
use Google\Analytics\Data\V1beta\RunPivotReportResponse;
use Google\Analytics\Data\V1beta\RunRealtimeReportRequest;
use Google\Analytics\Data\V1beta\RunRealtimeReportResponse;
use Google\Analytics\Data\V1beta\RunReportRequest;
use Google\Analytics\Data\V1beta\RunReportResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Google Analytics reporting data service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface batchRunPivotReportsAsync(BatchRunPivotReportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchRunReportsAsync(BatchRunReportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface checkCompatibilityAsync(CheckCompatibilityRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createAudienceExportAsync(CreateAudienceExportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAudienceExportAsync(GetAudienceExportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getMetadataAsync(GetMetadataRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAudienceExportsAsync(ListAudienceExportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface queryAudienceExportAsync(QueryAudienceExportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runPivotReportAsync(RunPivotReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runRealtimeReportAsync(RunRealtimeReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runReportAsync(RunReportRequest $request, array $optionalArgs = [])
 */
final class BetaAnalyticsDataClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.analytics.data.v1beta.BetaAnalyticsData';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'analyticsdata.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'analyticsdata.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/analytics',
        'https://www.googleapis.com/auth/analytics.readonly',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/beta_analytics_data_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/beta_analytics_data_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/beta_analytics_data_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/beta_analytics_data_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     *
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     *
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * audience_export resource.
     *
     * @param string $property
     * @param string $audienceExport
     *
     * @return string The formatted audience_export resource.
     *
     * @experimental
     */
    public static function audienceExportName(string $property, string $audienceExport): string
    {
        return self::getPathTemplate('audienceExport')->render([
            'property' => $property,
            'audience_export' => $audienceExport,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a metadata
     * resource.
     *
     * @param string $property
     *
     * @return string The formatted metadata resource.
     *
     * @experimental
     */
    public static function metadataName(string $property): string
    {
        return self::getPathTemplate('metadata')->render([
            'property' => $property,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a property
     * resource.
     *
     * @param string $property
     *
     * @return string The formatted property resource.
     *
     * @experimental
     */
    public static function propertyName(string $property): string
    {
        return self::getPathTemplate('property')->render([
            'property' => $property,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - audienceExport: properties/{property}/audienceExports/{audience_export}
     * - metadata: properties/{property}/metadata
     * - property: properties/{property}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'analyticsdata.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Returns multiple pivot reports in a batch. All reports must be for the same
     * GA4 Property.
     *
     * The async variant is {@see BetaAnalyticsDataClient::batchRunPivotReportsAsync()}
     * .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/batch_run_pivot_reports.php
     *
     * @param BatchRunPivotReportsRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchRunPivotReportsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function batchRunPivotReports(BatchRunPivotReportsRequest $request, array $callOptions = []): BatchRunPivotReportsResponse
    {
        return $this->startApiCall('BatchRunPivotReports', $request, $callOptions)->wait();
    }

    /**
     * Returns multiple reports in a batch. All reports must be for the same
     * GA4 Property.
     *
     * The async variant is {@see BetaAnalyticsDataClient::batchRunReportsAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/batch_run_reports.php
     *
     * @param BatchRunReportsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchRunReportsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function batchRunReports(BatchRunReportsRequest $request, array $callOptions = []): BatchRunReportsResponse
    {
        return $this->startApiCall('BatchRunReports', $request, $callOptions)->wait();
    }

    /**
     * This compatibility method lists dimensions and metrics that can be added to
     * a report request and maintain compatibility. This method fails if the
     * request's dimensions and metrics are incompatible.
     *
     * In Google Analytics, reports fail if they request incompatible dimensions
     * and/or metrics; in that case, you will need to remove dimensions and/or
     * metrics from the incompatible report until the report is compatible.
     *
     * The Realtime and Core reports have different compatibility rules. This
     * method checks compatibility for Core reports.
     *
     * The async variant is {@see BetaAnalyticsDataClient::checkCompatibilityAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/check_compatibility.php
     *
     * @param CheckCompatibilityRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CheckCompatibilityResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function checkCompatibility(CheckCompatibilityRequest $request, array $callOptions = []): CheckCompatibilityResponse
    {
        return $this->startApiCall('CheckCompatibility', $request, $callOptions)->wait();
    }

    /**
     * Creates an audience export for later retrieval. This method quickly returns
     * the audience export's resource name and initiates a long running
     * asynchronous request to form an audience export. To export the users in an
     * audience export, first create the audience export through this method and
     * then send the audience resource name to the `QueryAudienceExport` method.
     *
     * See [Creating an Audience
     * Export](https://developers.google.com/analytics/devguides/reporting/data/v1/audience-list-basics)
     * for an introduction to Audience Exports with examples.
     *
     * An audience export is a snapshot of the users currently in the audience at
     * the time of audience export creation. Creating audience exports for one
     * audience on different days will return different results as users enter and
     * exit the audience.
     *
     * Audiences in Google Analytics 4 allow you to segment your users in the ways
     * that are important to your business. To learn more, see
     * https://support.google.com/analytics/answer/9267572. Audience exports
     * contain the users in each audience.
     *
     * Audience Export APIs have some methods at alpha and other methods at beta
     * stability. The intention is to advance methods to beta stability after some
     * feedback and adoption. To give your feedback on this API, complete the
     * [Google Analytics Audience Export API
     * Feedback](https://forms.gle/EeA5u5LW6PEggtCEA) form.
     *
     * The async variant is {@see BetaAnalyticsDataClient::createAudienceExportAsync()}
     * .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/create_audience_export.php
     *
     * @param CreateAudienceExportRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function createAudienceExport(CreateAudienceExportRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateAudienceExport', $request, $callOptions)->wait();
    }

    /**
     * Gets configuration metadata about a specific audience export. This method
     * can be used to understand an audience export after it has been created.
     *
     * See [Creating an Audience
     * Export](https://developers.google.com/analytics/devguides/reporting/data/v1/audience-list-basics)
     * for an introduction to Audience Exports with examples.
     *
     * Audience Export APIs have some methods at alpha and other methods at beta
     * stability. The intention is to advance methods to beta stability after some
     * feedback and adoption. To give your feedback on this API, complete the
     * [Google Analytics Audience Export API
     * Feedback](https://forms.gle/EeA5u5LW6PEggtCEA) form.
     *
     * The async variant is {@see BetaAnalyticsDataClient::getAudienceExportAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/get_audience_export.php
     *
     * @param GetAudienceExportRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AudienceExport
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getAudienceExport(GetAudienceExportRequest $request, array $callOptions = []): AudienceExport
    {
        return $this->startApiCall('GetAudienceExport', $request, $callOptions)->wait();
    }

    /**
     * Returns metadata for dimensions and metrics available in reporting methods.
     * Used to explore the dimensions and metrics. In this method, a Google
     * Analytics GA4 Property Identifier is specified in the request, and
     * the metadata response includes Custom dimensions and metrics as well as
     * Universal metadata.
     *
     * For example if a custom metric with parameter name `levels_unlocked` is
     * registered to a property, the Metadata response will contain
     * `customEvent:levels_unlocked`. Universal metadata are dimensions and
     * metrics applicable to any property such as `country` and `totalUsers`.
     *
     * The async variant is {@see BetaAnalyticsDataClient::getMetadataAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/get_metadata.php
     *
     * @param GetMetadataRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Metadata
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getMetadata(GetMetadataRequest $request, array $callOptions = []): Metadata
    {
        return $this->startApiCall('GetMetadata', $request, $callOptions)->wait();
    }

    /**
     * Lists all audience exports for a property. This method can be used for you
     * to find and reuse existing audience exports rather than creating
     * unnecessary new audience exports. The same audience can have multiple
     * audience exports that represent the export of users that were in an
     * audience on different days.
     *
     * See [Creating an Audience
     * Export](https://developers.google.com/analytics/devguides/reporting/data/v1/audience-list-basics)
     * for an introduction to Audience Exports with examples.
     *
     * Audience Export APIs have some methods at alpha and other methods at beta
     * stability. The intention is to advance methods to beta stability after some
     * feedback and adoption. To give your feedback on this API, complete the
     * [Google Analytics Audience Export API
     * Feedback](https://forms.gle/EeA5u5LW6PEggtCEA) form.
     *
     * The async variant is {@see BetaAnalyticsDataClient::listAudienceExportsAsync()}
     * .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/list_audience_exports.php
     *
     * @param ListAudienceExportsRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function listAudienceExports(ListAudienceExportsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListAudienceExports', $request, $callOptions);
    }

    /**
     * Retrieves an audience export of users. After creating an audience, the
     * users are not immediately available for exporting. First, a request to
     * `CreateAudienceExport` is necessary to create an audience export of users,
     * and then second, this method is used to retrieve the users in the audience
     * export.
     *
     * See [Creating an Audience
     * Export](https://developers.google.com/analytics/devguides/reporting/data/v1/audience-list-basics)
     * for an introduction to Audience Exports with examples.
     *
     * Audiences in Google Analytics 4 allow you to segment your users in the ways
     * that are important to your business. To learn more, see
     * https://support.google.com/analytics/answer/9267572.
     *
     * Audience Export APIs have some methods at alpha and other methods at beta
     * stability. The intention is to advance methods to beta stability after some
     * feedback and adoption. To give your feedback on this API, complete the
     * [Google Analytics Audience Export API
     * Feedback](https://forms.gle/EeA5u5LW6PEggtCEA) form.
     *
     * The async variant is {@see BetaAnalyticsDataClient::queryAudienceExportAsync()}
     * .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/query_audience_export.php
     *
     * @param QueryAudienceExportRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QueryAudienceExportResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function queryAudienceExport(QueryAudienceExportRequest $request, array $callOptions = []): QueryAudienceExportResponse
    {
        return $this->startApiCall('QueryAudienceExport', $request, $callOptions)->wait();
    }

    /**
     * Returns a customized pivot report of your Google Analytics event data.
     * Pivot reports are more advanced and expressive formats than regular
     * reports. In a pivot report, dimensions are only visible if they are
     * included in a pivot. Multiple pivots can be specified to further dissect
     * your data.
     *
     * The async variant is {@see BetaAnalyticsDataClient::runPivotReportAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/run_pivot_report.php
     *
     * @param RunPivotReportRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RunPivotReportResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function runPivotReport(RunPivotReportRequest $request, array $callOptions = []): RunPivotReportResponse
    {
        return $this->startApiCall('RunPivotReport', $request, $callOptions)->wait();
    }

    /**
     * Returns a customized report of realtime event data for your property.
     * Events appear in realtime reports seconds after they have been sent to
     * the Google Analytics. Realtime reports show events and usage data for the
     * periods of time ranging from the present moment to 30 minutes ago (up to
     * 60 minutes for Google Analytics 360 properties).
     *
     * For a guide to constructing realtime requests & understanding responses,
     * see [Creating a Realtime
     * Report](https://developers.google.com/analytics/devguides/reporting/data/v1/realtime-basics).
     *
     * The async variant is {@see BetaAnalyticsDataClient::runRealtimeReportAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/run_realtime_report.php
     *
     * @param RunRealtimeReportRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RunRealtimeReportResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function runRealtimeReport(RunRealtimeReportRequest $request, array $callOptions = []): RunRealtimeReportResponse
    {
        return $this->startApiCall('RunRealtimeReport', $request, $callOptions)->wait();
    }

    /**
     * Returns a customized report of your Google Analytics event data. Reports
     * contain statistics derived from data collected by the Google Analytics
     * tracking code. The data returned from the API is as a table with columns
     * for the requested dimensions and metrics. Metrics are individual
     * measurements of user activity on your property, such as active users or
     * event count. Dimensions break down metrics across some common criteria,
     * such as country or event name.
     *
     * For a guide to constructing requests & understanding responses, see
     * [Creating a
     * Report](https://developers.google.com/analytics/devguides/reporting/data/v1/basics).
     *
     * The async variant is {@see BetaAnalyticsDataClient::runReportAsync()} .
     *
     * @example samples/V1beta/BetaAnalyticsDataClient/run_report.php
     *
     * @param RunReportRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RunReportResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function runReport(RunReportRequest $request, array $callOptions = []): RunReportResponse
    {
        return $this->startApiCall('RunReport', $request, $callOptions)->wait();
    }
}
