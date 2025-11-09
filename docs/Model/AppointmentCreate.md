# # AppointmentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionals** | [**\ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner[]**](PostBookings201ResponseDataAdditionalsInner.md) |  |
**additions** | [**\ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner[]**](PostBookings201ResponseDataAdditionalsInner.md) | Use &#39;additionals&#39; instead | [optional]
**address** | [**\ChurchTools\Model\AppointmentCreateAllOfAddress**](AppointmentCreateAllOfAddress.md) |  |
**all_day** | **bool** |  |
**calendar** | [**\ChurchTools\Model\AppointmentCreateAllOfCalendar**](AppointmentCreateAllOfCalendar.md) |  |
**caption** | **string** | Use &#39;title&#39; instead | [optional]
**description** | **string** |  |
**end_date** | [**\ChurchTools\Model\AppointmentCreateAllOfEndDate**](AppointmentCreateAllOfEndDate.md) |  |
**exceptions** | [**\ChurchTools\Model\AppointmentCreateAllOfExceptions[]**](AppointmentCreateAllOfExceptions.md) |  |
**id** | **int** |  |
**image** | [**\ChurchTools\Model\AppointmentCreateAllOfImage**](AppointmentCreateAllOfImage.md) |  |
**information** | **string** | Use &#39;description&#39; instead | [optional]
**is_internal** | **bool** |  |
**link** | **string** |  |
**meta** | [**\ChurchTools\Model\AccountingPeriodAllOfMeta**](AccountingPeriodAllOfMeta.md) |  |
**note** | **string** | Use &#39;subtitle&#39; instead | [optional]
**on_behalf_of_pid** | **int** |  |
**repeat_frequency** | **int** |  |
**repeat_id** | **int** | ID of the repeat pattern, NONE &#x3D; 0, DAILY &#x3D; 1, WEEKLY &#x3D; 7, MONTHLY_BY_DATE &#x3D; 31, MONTHLY_BY_WEEKDAY &#x3D; 32, YEARLY &#x3D; 365, MANUALLY &#x3D; 999 |
**repeat_option** | **int** |  |
**repeat_until** | **\DateTime** | A simple date in ISO format, e.g. &#39;2022-10-19&#39; |
**signup** | [**\ChurchTools\Model\GetCalendarsAppointments200ResponseDataInnerAppointmentBaseSignup**](GetCalendarsAppointments200ResponseDataInnerAppointmentBaseSignup.md) |  |
**start_date** | [**\ChurchTools\Model\AppointmentCreateAllOfStartDate**](AppointmentCreateAllOfStartDate.md) |  |
**subtitle** | **string** |  |
**title** | **string** |  |
**version** | **int** |  |
**bookings** | [**\ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfBookingsInner[]**](PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfBookingsInner.md) |  | [optional]
**events** | [**\ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfEventsInner[]**](PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfEventsInner.md) |  | [optional]
**meetingrequests** | [**\ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfMeetingrequestsInner[]**](PutCalendarsCalendarIdAppointmentsAppointmentIdRequestAllOfAllOfMeetingrequestsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
