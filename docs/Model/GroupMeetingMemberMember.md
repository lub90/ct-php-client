# # GroupMeetingMemberMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** |  | [optional]
**fields** | **object** |  | [optional]
**follow_up_diff_days** | **int** |  |
**follow_up_step** | **int** |  |
**follow_up_unsuccessful_back_group_id** | **int** |  |
**group** | [**\ChurchTools\Model\ChangeImpact200ResponseDataGroup**](ChangeImpact200ResponseDataGroup.md) |  |
**group_member_status** | **string** |  |
**group_type_role_id** | **int** |  |
**member_end_date** | **\DateTime** | A simple date in ISO format, e.g. &#39;2022-10-19&#39; | [optional]
**member_start_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**person** | [**\ChurchTools\Model\PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy**](PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy.md) |  |
**person_fields** | **object[]** |  | [optional]
**person_id** | **int** | use person.domainIdentifier (type: string) instead. |
**registered_by** | **int** |  |
**tags** | [**\ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner[]**](PostCheckinPersons201ResponseDataTagsInner.md) |  | [optional]
**waitinglist_position** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
