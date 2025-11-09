# # GetAllClients200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** |  | [optional]
**datev_client_number** | **string** | the number of the Client (Mandantennummer) in Datev (https://apps.datev.de/help-center/documents/1071263 chapter 2) | [optional]
**datev_consultant_number** | **string** | the number of the Consultant (Beraternummer) in Datev (https://apps.datev.de/help-center/documents/1071263 chapter 2) | [optional]
**datev_supported** | **bool** | true if this client supports export of transactions in Datev format. Defaults to true | [optional] [default to true]
**email** | **string** |  | [optional]
**id** | **int** |  |
**meta** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseMeta**](GetBookings200ResponseDataInnerBookingBaseMeta.md) |  |
**name** | **string** |  |
**phone** | **string** |  | [optional]
**postal_code** | **string** |  | [optional]
**sort_key** | **int** |  |
**street** | **string** |  | [optional]
**treasurer** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy**](GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy.md) |  | [optional]
**treasurer_id** | **int** | Person ID of treasurer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
