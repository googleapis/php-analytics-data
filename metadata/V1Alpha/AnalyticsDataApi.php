<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace GPBMetadata\Google\Analytics\Data\V1Alpha;

class AnalyticsDataApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�8
6google/analytics/data/v1alpha/analytics_data_api.protogoogle.analytics.data.v1alphagoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
"CreateRecurringAudienceListRequestJ
parent (	B:�A�A42analyticsdata.googleapis.com/RecurringAudienceListZ
recurring_audience_list (24.google.analytics.data.v1alpha.RecurringAudienceListB�A"�
RecurringAudienceList
name (	B�A�A
audience (	B�A"
audience_display_name (	B�AI

dimensions (20.google.analytics.data.v1alpha.AudienceDimensionB�A\'
active_days_remaining (B�AH �
audience_lists (	B�A:��A�
2analyticsdata.googleapis.com/RecurringAudienceListFproperties/{property}/recurringAudienceLists/{recurring_audience_list}*recurringAudienceLists2recurringAudienceListB
_active_days_remaining"k
GetRecurringAudienceListRequestH
name (	B:�A�A4
2analyticsdata.googleapis.com/RecurringAudienceList"�
!ListRecurringAudienceListsRequestJ
parent (	B:�A�A42analyticsdata.googleapis.com/RecurringAudienceList
	page_size (B�A

page_token (	B�A"�
"ListRecurringAudienceListsResponseV
recurring_audience_lists (24.google.analytics.data.v1alpha.RecurringAudienceList
next_page_token (	H �B
_next_page_token"Y
GetAudienceListRequest?
name (	B1�A�A+
)analyticsdata.googleapis.com/AudienceList"�
ListAudienceListsRequestA
parent (	B1�A�A+)analyticsdata.googleapis.com/AudienceList
	page_size (B�A

page_token (	B�A"�
ListAudienceListsResponseC
audience_lists (2+.google.analytics.data.v1alpha.AudienceList
next_page_token (	H �B
_next_page_token"�
CreateAudienceListRequestA
parent (	B1�A�A+)analyticsdata.googleapis.com/AudienceListG
audience_list (2+.google.analytics.data.v1alpha.AudienceListB�A"�
AudienceList
name (	B�A�A
audience (	B�A"
audience_display_name (	B�AI

dimensions (20.google.analytics.data.v1alpha.AudienceDimensionB�AJ
state (21.google.analytics.data.v1alpha.AudienceList.StateB�AH �A
begin_creating_time (2.google.protobuf.TimestampB�AH�*
creation_quota_tokens_charged (B�A
	row_count (B�AH�
error_message	 (	B�AH�&
percentage_completed (B�AH�)
recurring_audience_list (	B�AH�"D
State
STATE_UNSPECIFIED 
CREATING

ACTIVE

FAILED:��A}
)analyticsdata.googleapis.com/AudienceList3properties/{property}/audienceLists/{audience_list}*audienceLists2audienceListB
_stateB
_begin_creating_timeB

_row_countB
_error_messageB
_percentage_completedB
_recurring_audience_list"
AudienceListMetadata"V
QueryAudienceListRequest
name (	B�A
offset (B�A
limit (B�A"�
QueryAudienceListResponseG
audience_list (2+.google.analytics.data.v1alpha.AudienceListH �A
audience_rows (2*.google.analytics.data.v1alpha.AudienceRow
	row_count (H�B
_audience_listB

_row_count"�
SheetExportAudienceListRequest?
name (	B1�A�A+
)analyticsdata.googleapis.com/AudienceList
offset (B�A
limit (B�A"�
SheetExportAudienceListResponse
spreadsheet_uri (	H �
spreadsheet_id (	H�
	row_count (H�G
audience_list (2+.google.analytics.data.v1alpha.AudienceListH�B
_spreadsheet_uriB
_spreadsheet_idB

_row_countB
_audience_list"^
AudienceRowO
dimension_values (25.google.analytics.data.v1alpha.AudienceDimensionValue"0
AudienceDimension
dimension_name (	B�A"6
AudienceDimensionValue
value (	H B
	one_value"�
RunFunnelReportRequest
property (	B�AB
date_ranges (2(.google.analytics.data.v1alpha.DateRangeB�A:
funnel (2%.google.analytics.data.v1alpha.FunnelB�AM
funnel_breakdown (2..google.analytics.data.v1alpha.FunnelBreakdownB�AP
funnel_next_action (2/.google.analytics.data.v1alpha.FunnelNextActionB�Au
funnel_visualization_type (2M.google.analytics.data.v1alpha.RunFunnelReportRequest.FunnelVisualizationTypeB�A=
segments (2&.google.analytics.data.v1alpha.SegmentB�A
limit	 (B�AN
dimension_filter
 (2/.google.analytics.data.v1alpha.FilterExpressionB�A"
return_property_quota (B�A"m
FunnelVisualizationType)
%FUNNEL_VISUALIZATION_TYPE_UNSPECIFIED 
STANDARD_FUNNEL
TRENDED_FUNNEL"�
RunFunnelReportResponseD
funnel_table (2..google.analytics.data.v1alpha.FunnelSubReportL
funnel_visualization (2..google.analytics.data.v1alpha.FunnelSubReportD
property_quota (2,.google.analytics.data.v1alpha.PropertyQuota
kind (	2�
AlphaAnalyticsData�
RunFunnelReport5.google.analytics.data.v1alpha.RunFunnelReportRequest6.google.analytics.data.v1alpha.RunFunnelReportResponse";���5"0/v1alpha/{property=properties/*}:runFunnelReport:*�
CreateAudienceList8.google.analytics.data.v1alpha.CreateAudienceListRequest.google.longrunning.Operation"����=",/v1alpha/{parent=properties/*}/audienceLists:audience_list�Aparent,audience_list�A$
AudienceListAudienceListMetadata�
QueryAudienceList7.google.analytics.data.v1alpha.QueryAudienceListRequest8.google.analytics.data.v1alpha.QueryAudienceListResponse"D���7"2/v1alpha/{name=properties/*/audienceLists/*}:query:*�Aname�
SheetExportAudienceList=.google.analytics.data.v1alpha.SheetExportAudienceListRequest>.google.analytics.data.v1alpha.SheetExportAudienceListResponse"J���="8/v1alpha/{name=properties/*/audienceLists/*}:exportSheet:*�Aname�
GetAudienceList5.google.analytics.data.v1alpha.GetAudienceListRequest+.google.analytics.data.v1alpha.AudienceList";���.,/v1alpha/{name=properties/*/audienceLists/*}�Aname�
ListAudienceLists7.google.analytics.data.v1alpha.ListAudienceListsRequest8.google.analytics.data.v1alpha.ListAudienceListsResponse"=���.,/v1alpha/{parent=properties/*}/audienceLists�Aparent�
CreateRecurringAudienceListA.google.analytics.data.v1alpha.CreateRecurringAudienceListRequest4.google.analytics.data.v1alpha.RecurringAudienceList"w���P"5/v1alpha/{parent=properties/*}/recurringAudienceLists:recurring_audience_list�Aparent,recurring_audience_list�
GetRecurringAudienceList>.google.analytics.data.v1alpha.GetRecurringAudienceListRequest4.google.analytics.data.v1alpha.RecurringAudienceList"D���75/v1alpha/{name=properties/*/recurringAudienceLists/*}�Aname�
ListRecurringAudienceLists@.google.analytics.data.v1alpha.ListRecurringAudienceListsRequestA.google.analytics.data.v1alpha.ListRecurringAudienceListsResponse"F���75/v1alpha/{parent=properties/*}/recurringAudienceLists�Aparent��Aanalyticsdata.googleapis.com�A�https://www.googleapis.com/auth/analytics,https://www.googleapis.com/auth/analytics.readonly,https://www.googleapis.com/auth/drive,https://www.googleapis.com/auth/drive.file,https://www.googleapis.com/auth/spreadsheetsB�
!com.google.analytics.data.v1alphaBAnalyticsDataApiProtoPZAgoogle.golang.org/genproto/googleapis/analytics/data/v1alpha;data�A?
&analyticsadmin.googleapis.com/Propertyproperties/{property}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

