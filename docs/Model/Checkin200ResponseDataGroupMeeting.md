# # Checkin200ResponseDataGroupMeeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attendances** | **array<string,string>** | Map of person IDs to attendance status | [optional]
**comment** | **string** |  | [optional] [default to 'null']
**date_from** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**date_to** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**end_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**group_id** | **int** |  |
**has_editing_started** | **bool** |  | [optional]
**id** | **int** |  |
**is_canceled** | **bool** |  | [optional]
**is_completed** | **bool** |  | [optional]
**meta** | [**\ChurchTools\Model\Checkin200ResponseDataGroupMeetingMeta**](Checkin200ResponseDataGroupMeetingMeta.md) |  |
**num_guests** | **int** |  | [optional] [default to null]
**poll_result** | [**\ChurchTools\Model\PostGroupMeetingtemplatesRequestTemplateInner[]**](PostGroupMeetingtemplatesRequestTemplateInner.md) |  | [optional]
**start_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**statistics** | [**\ChurchTools\Model\Checkin200ResponseDataGroupMeetingStatistics**](Checkin200ResponseDataGroupMeetingStatistics.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
