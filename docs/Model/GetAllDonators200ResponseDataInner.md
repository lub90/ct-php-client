# # GetAllDonators200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Total number of donations in the specified accounting period. |
**donation_receipt_created_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**has_all_donator_data** | **bool** | Indicator if all necessary data for a donation receipt is available. |
**has_donation_receipt** | **bool** | Indicator if a donation receipt is available. |
**has_donator_data** | [**\ChurchTools\Model\GetAllDonators200ResponseDataInnerHasDonatorData**](GetAllDonators200ResponseDataInnerHasDonatorData.md) |  |
**is_donation_receipt_outdated** | **bool** | Indicator if the donation receipt is outdated. |
**last_donation_amount** | **int** | Value of the last donation in cent. |
**last_donation_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**last_donation_modified_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**persons** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy[]**](GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy.md) | Contains either one element (a single donator) or two elements (donator and their spouse). |
**sum** | **int** | Value is in cent. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
