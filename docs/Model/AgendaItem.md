# # AgendaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | Duration of agenda item in seconds. |
**id** | **int** |  |
**is_before_event** | **bool** |  |
**meta** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseExceptionsInnerMeta**](GetBookings200ResponseDataInnerBookingBaseExceptionsInnerMeta.md) |  |
**note** | **string** |  |
**position** | **int** |  |
**responsible** | [**\ChurchTools\Model\AgendaItemResponsible**](AgendaItemResponsible.md) |  |
**service_group_notes** | [**\ChurchTools\Model\AgendaItemServiceGroupNotesInner[]**](AgendaItemServiceGroupNotesInner.md) | Array of notes per service group. You will only see the service groups, you are allowed to see. |
**start** | **\DateTime** | The start time of a position is dynamically calculated based on previous items and the start time of the event. |
**start_times** | **array<string,\DateTime>** | List of start times if this agenda is shared between multiple events. |
**title** | **string** |  |
**type** | **string** |  |
**song** | [**\ChurchTools\Model\GetAgendaForEvent200ResponseDataItemsInnerOneOf1AllOfSong**](GetAgendaForEvent200ResponseDataItemsInnerOneOf1AllOfSong.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
