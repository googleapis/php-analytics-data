<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for compatibility information for a report's dimensions and
 * metrics. Check compatibility provides a preview of the compatibility of a
 * report; fields shared with the `runReport` request should be the same values
 * as in your `runReport` request.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.CheckCompatibilityRequest</code>
 */
class CheckCompatibilityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A Google Analytics GA4 property identifier whose events are tracked. To
     * learn more, see [where to find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * `property` should be the same value as in your `runReport` request.
     * Example: properties/1234
     * Set the Property ID to 0 for compatibility checking on dimensions and
     * metrics common to all properties. In this special mode, this method will
     * not return custom dimensions and metrics.
     *
     * Generated from protobuf field <code>string property = 1;</code>
     */
    protected $property = '';
    /**
     * The dimensions in this report. `dimensions` should be the same value as in
     * your `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics in this report. `metrics` should be the same value as in your
     * `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * The filter clause of dimensions. `dimensionFilter` should be the same value
     * as in your `runReport` request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     */
    protected $dimension_filter = null;
    /**
     * The filter clause of metrics. `metricFilter` should be the same value as in
     * your `runReport` request
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     */
    protected $metric_filter = null;
    /**
     * Filters the dimensions and metrics in the response to just this
     * compatibility. Commonly used as `”compatibilityFilter”: “COMPATIBLE”`
     * to only return compatible dimensions & metrics.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility_filter = 6;</code>
     */
    protected $compatibility_filter = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           A Google Analytics GA4 property identifier whose events are tracked. To
     *           learn more, see [where to find your Property
     *           ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *           `property` should be the same value as in your `runReport` request.
     *           Example: properties/1234
     *           Set the Property ID to 0 for compatibility checking on dimensions and
     *           metrics common to all properties. In this special mode, this method will
     *           not return custom dimensions and metrics.
     *     @type array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions in this report. `dimensions` should be the same value as in
     *           your `runReport` request.
     *     @type array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics in this report. `metrics` should be the same value as in your
     *           `runReport` request.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $dimension_filter
     *           The filter clause of dimensions. `dimensionFilter` should be the same value
     *           as in your `runReport` request.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $metric_filter
     *           The filter clause of metrics. `metricFilter` should be the same value as in
     *           your `runReport` request
     *     @type int $compatibility_filter
     *           Filters the dimensions and metrics in the response to just this
     *           compatibility. Commonly used as `”compatibilityFilter”: “COMPATIBLE”`
     *           to only return compatible dimensions & metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked. To
     * learn more, see [where to find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * `property` should be the same value as in your `runReport` request.
     * Example: properties/1234
     * Set the Property ID to 0 for compatibility checking on dimensions and
     * metrics common to all properties. In this special mode, this method will
     * not return custom dimensions and metrics.
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked. To
     * learn more, see [where to find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * `property` should be the same value as in your `runReport` request.
     * Example: properties/1234
     * Set the Property ID to 0 for compatibility checking on dimensions and
     * metrics common to all properties. In this special mode, this method will
     * not return custom dimensions and metrics.
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * The dimensions in this report. `dimensions` should be the same value as in
     * your `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The dimensions in this report. `dimensions` should be the same value as in
     * your `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @param array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Dimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * The metrics in this report. `metrics` should be the same value as in your
     * `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics in this report. `metrics` should be the same value as in your
     * `runReport` request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @param array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * The filter clause of dimensions. `dimensionFilter` should be the same value
     * as in your `runReport` request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return $this->dimension_filter;
    }

    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }

    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }

    /**
     * The filter clause of dimensions. `dimensionFilter` should be the same value
     * as in your `runReport` request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->dimension_filter = $var;

        return $this;
    }

    /**
     * The filter clause of metrics. `metricFilter` should be the same value as in
     * your `runReport` request
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getMetricFilter()
    {
        return $this->metric_filter;
    }

    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }

    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }

    /**
     * The filter clause of metrics. `metricFilter` should be the same value as in
     * your `runReport` request
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->metric_filter = $var;

        return $this;
    }

    /**
     * Filters the dimensions and metrics in the response to just this
     * compatibility. Commonly used as `”compatibilityFilter”: “COMPATIBLE”`
     * to only return compatible dimensions & metrics.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility_filter = 6;</code>
     * @return int
     */
    public function getCompatibilityFilter()
    {
        return $this->compatibility_filter;
    }

    /**
     * Filters the dimensions and metrics in the response to just this
     * compatibility. Commonly used as `”compatibilityFilter”: “COMPATIBLE”`
     * to only return compatible dimensions & metrics.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.Compatibility compatibility_filter = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCompatibilityFilter($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1beta\Compatibility::class);
        $this->compatibility_filter = $var;

        return $this;
    }

}

