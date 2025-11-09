# # PublicGroup1Information

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_groups** | [**\ChurchTools\Model\GetGroupAgegroups200ResponseDataInner[]**](GetGroupAgegroups200ResponseDataInner.md) | List of target age groups for this group. | [optional]
**campus** | [**\ChurchTools\Model\GetAllCampuses200ResponseDataInner**](GetAllCampuses200ResponseDataInner.md) |  | [optional]
**date_of_foundation** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**group_category** | [**\ChurchTools\Model\GetGroupGroupcategories200ResponseDataInner**](GetGroupGroupcategories200ResponseDataInner.md) |  | [optional]
**group_places** | [**\ChurchTools\Model\PublicGroup1InformationGroupPlacesInner[]**](PublicGroup1InformationGroupPlacesInner.md) | List of the group&#39;s meeting places. Only returned if the group homepage is set to display a map. | [optional]
**group_status_id** | **int** |  | [optional]
**image_url** | **string** | URL to a group image if provided. | [optional]
**leader** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy[]**](GetBookings200ResponseDataInnerBookingBaseInvolvedPersonsDomainObjectsCreatedBy.md) | List of person objects of all group leaders if the group is set to display leaders. | [optional]
**meeting_time** | **string** | Free text field when group meetings take place. | [optional]
**note** | **string** | The group description. | [optional]
**target_group** | [**\ChurchTools\Model\GetGroupTargetgroups200ResponseDataInner**](GetGroupTargetgroups200ResponseDataInner.md) |  | [optional]
**weekday** | [**\ChurchTools\Model\PublicGroup1InformationWeekday**](PublicGroup1InformationWeekday.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
