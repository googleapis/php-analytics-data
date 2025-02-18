<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event segments are subsets of events that were triggered on your site or app.
 * for example, all purchase events made in a particular location; app_exception
 * events that occurred on a specific operating system.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.EventSegment</code>
 */
class EventSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines which events are included in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentCriteria event_inclusion_criteria = 1;</code>
     */
    protected $event_inclusion_criteria = null;
    /**
     * Defines which events are excluded in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentExclusion exclusion = 2;</code>
     */
    protected $exclusion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\EventSegmentCriteria $event_inclusion_criteria
     *           Defines which events are included in this segment. Optional.
     *     @type \Google\Analytics\Data\V1alpha\EventSegmentExclusion $exclusion
     *           Defines which events are excluded in this segment. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines which events are included in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentCriteria event_inclusion_criteria = 1;</code>
     * @return \Google\Analytics\Data\V1alpha\EventSegmentCriteria|null
     */
    public function getEventInclusionCriteria()
    {
        return $this->event_inclusion_criteria;
    }

    public function hasEventInclusionCriteria()
    {
        return isset($this->event_inclusion_criteria);
    }

    public function clearEventInclusionCriteria()
    {
        unset($this->event_inclusion_criteria);
    }

    /**
     * Defines which events are included in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentCriteria event_inclusion_criteria = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\EventSegmentCriteria $var
     * @return $this
     */
    public function setEventInclusionCriteria($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\EventSegmentCriteria::class);
        $this->event_inclusion_criteria = $var;

        return $this;
    }

    /**
     * Defines which events are excluded in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentExclusion exclusion = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\EventSegmentExclusion|null
     */
    public function getExclusion()
    {
        return $this->exclusion;
    }

    public function hasExclusion()
    {
        return isset($this->exclusion);
    }

    public function clearExclusion()
    {
        unset($this->exclusion);
    }

    /**
     * Defines which events are excluded in this segment. Optional.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegmentExclusion exclusion = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\EventSegmentExclusion $var
     * @return $this
     */
    public function setExclusion($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\EventSegmentExclusion::class);
        $this->exclusion = $var;

        return $this;
    }

}

