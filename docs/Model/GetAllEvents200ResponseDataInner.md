# # GetAllEvents200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin_ids** | **int[]** |  | [optional]
**appointment_id** | **int** |  | [optional]
**calendar** | [**\ChurchTools\Model\GetAllEvents200ResponseDataInnerCalendar**](GetAllEvents200ResponseDataInnerCalendar.md) |  | [optional]
**chat_status** | **string** | status of chat room | [optional]
**description** | **string** |  | [optional]
**end_date** | **\DateTime** |  | [optional]
**event_admin_ids** | **int[]** |  | [optional]
**event_files** | [**\ChurchTools\Model\GetDomainobjects200ResponseDataInnerAnyOf4[]**](GetDomainobjects200ResponseDataInnerAnyOf4.md) |  | [optional]
**event_services** | [**\ChurchTools\Model\GetAllEvents200ResponseDataInnerEventServicesInner[]**](GetAllEvents200ResponseDataInnerEventServicesInner.md) | to include set query-param &#x60;include&#x3D;eventServices&#x60; | [optional]
**guid** | **string** |  | [optional]
**id** | **int** |  | [optional]
**is_canceled** | **bool** |  | [optional]
**name** | **string** |  | [optional]
**note** | **string** |  | [optional]
**start_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
