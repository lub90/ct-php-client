# # GetAllMeetings200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attendances** | **array<string,string>** | Map of person IDs to attendance status | [optional]
**comment** | **string** |  | [optional]
**date_from** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**date_to** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**end_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**group_id** | **int** |  |
**has_editing_started** | **bool** |  | [optional]
**id** | **int** |  |
**is_canceled** | **bool** |  | [optional]
**is_completed** | **bool** |  | [optional]
**meta** | [**\ChurchTools\Model\GetAllMeetings200ResponseDataInnerMeta**](GetAllMeetings200ResponseDataInnerMeta.md) |  |
**num_guests** | **int** |  | [optional]
**poll_result** | [**\ChurchTools\Model\PostGroupMeetingtemplatesRequestTemplateInner[]**](PostGroupMeetingtemplatesRequestTemplateInner.md) |  | [optional]
**start_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**statistics** | [**\ChurchTools\Model\GetAllMeetings200ResponseDataInnerStatistics**](GetAllMeetings200ResponseDataInnerStatistics.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
