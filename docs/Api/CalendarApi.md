# ChurchTools\CalendarApi

Endpoint to list and create appointment templates

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeImpact()**](CalendarApi.md#changeImpact) | **POST** /calendars/{calendarId}/appointments/{appointmentId}/changeimpact | Get the change of impact of an appointment |
| [**createTemplate()**](CalendarApi.md#createTemplate) | **POST** /calendars/appointments/templates | Create new appointment template |
| [**deleteCalendarsCalendarIdAppointmentsAppointmentId()**](CalendarApi.md#deleteCalendarsCalendarIdAppointmentsAppointmentId) | **DELETE** /calendars/{calendarId}/appointments/{appointmentId} | Delete an appointment |
| [**deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId()**](CalendarApi.md#deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId) | **DELETE** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests/{meetingRequestId} | Delete a meeting request |
| [**deleteTemplate()**](CalendarApi.md#deleteTemplate) | **DELETE** /calendars/appointments/templates/{templateId} | Delete an appointment template identified by id |
| [**getAllTemplates()**](CalendarApi.md#getAllTemplates) | **GET** /calendars/appointments/templates | Get all appointment templates |
| [**getCalendars()**](CalendarApi.md#getCalendars) | **GET** /calendars | Get all calendars |
| [**getCalendarsAppointments()**](CalendarApi.md#getCalendarsAppointments) | **GET** /calendars/appointments | Get all appointments |
| [**getCalendarsAppointmentsAppointmentIdStartDate()**](CalendarApi.md#getCalendarsAppointmentsAppointmentIdStartDate) | **GET** /calendars/appointments/{appointmentId}/{startDate} | Get an appointment with all bookings and meeting requests |
| [**getCalendarsCalendarIdAppointments()**](CalendarApi.md#getCalendarsCalendarIdAppointments) | **GET** /calendars/{calendarId}/appointments | Get all appointments of a calendar |
| [**getCalendarsCalendarIdAppointmentsAppointmentId()**](CalendarApi.md#getCalendarsCalendarIdAppointmentsAppointmentId) | **GET** /calendars/{calendarId}/appointments/{appointmentId} | Get an appointment |
| [**getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests()**](CalendarApi.md#getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests) | **GET** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests | Get all meeting requests of an appointment |
| [**getCalendarsCalendarIdAppointmentsAppointmentIdStartDate()**](CalendarApi.md#getCalendarsCalendarIdAppointmentsAppointmentIdStartDate) | **GET** /calendars/{calendarId}/appointments/{appointmentId}/{startDate} | Get an appointment with all bookings and meeting requests |
| [**getCalendarsCalendarIdMeetingrequestpersons()**](CalendarApi.md#getCalendarsCalendarIdMeetingrequestpersons) | **GET** /calendars/{calendarId}/meetingrequestpersons | Get possible persons to request for meeting |
| [**getTemplateById()**](CalendarApi.md#getTemplateById) | **GET** /calendars/appointments/templates/{templateId} | Get a appointment template |
| [**postCalendarsCalendarIdAppointments()**](CalendarApi.md#postCalendarsCalendarIdAppointments) | **POST** /calendars/{calendarId}/appointments | Create a new appointment in a calendar |
| [**postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests()**](CalendarApi.md#postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests) | **POST** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests | Create a new meeting request |
| [**putCalendarsCalendarIdAppointmentsAppointmentId()**](CalendarApi.md#putCalendarsCalendarIdAppointmentsAppointmentId) | **PUT** /calendars/{calendarId}/appointments/{appointmentId} | Update an appointment |
| [**putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId()**](CalendarApi.md#putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId) | **PUT** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests/{meetingRequestId} | Update a meeting request |
| [**updateTemplate()**](CalendarApi.md#updateTemplate) | **PUT** /calendars/appointments/templates/{templateId} | Update a appointment template identified by id |


## `changeImpact()`

```php
changeImpact($calendar_id, $appointment_id2, $additionals, $appointment_id, $end_date, $exceptions, $repeat_frequency, $repeat_id, $repeat_option, $repeat_until, $start_date): \ChurchTools\Model\ChangeImpact200Response
```

Get the change of impact of an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id2 = 4; // int | ID of appointment
$additionals = array(new \ChurchTools\Model\\ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner()); // \ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner[]
$appointment_id = 56; // int
$end_date = 2022-01-01T12:00:00Z; // \DateTime
$exceptions = array(new \ChurchTools\Model\\ChurchTools\Model\GetCalendarsAppointments200ResponseDataInnerAppointmentBaseExceptionsInner()); // \ChurchTools\Model\GetCalendarsAppointments200ResponseDataInnerAppointmentBaseExceptionsInner[]
$repeat_frequency = 56; // int
$repeat_id = 56; // int
$repeat_option = 56; // int
$repeat_until = 2022-01-01; // \DateTime
$start_date = 2022-01-01T12:00:00Z; // \DateTime

try {
    $result = $apiInstance->changeImpact($calendar_id, $appointment_id2, $additionals, $appointment_id, $end_date, $exceptions, $repeat_frequency, $repeat_id, $repeat_option, $repeat_until, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->changeImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id2** | **int**| ID of appointment | |
| **additionals** | [**\ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner[]**](../Model/\ChurchTools\Model\PostBookings201ResponseDataAdditionalsInner.md)|  | [optional] |
| **appointment_id** | **int**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |
| **exceptions** | [**\ChurchTools\Model\GetCalendarsAppointments200ResponseDataInnerAppointmentBaseExceptionsInner[]**](../Model/\ChurchTools\Model\GetCalendarsAppointments200ResponseDataInnerAppointmentBaseExceptionsInner.md)|  | [optional] |
| **repeat_frequency** | **int**|  | [optional] |
| **repeat_id** | **int**|  | [optional] |
| **repeat_option** | **int**|  | [optional] |
| **repeat_until** | **\DateTime**|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |

### Return type

[**\ChurchTools\Model\ChangeImpact200Response**](../Model/ChangeImpact200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplate()`

```php
createTemplate($create_template_request): \ChurchTools\Model\GetAllTemplates200Response
```

Create new appointment template

Create new appointment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_request = new \ChurchTools\Model\CreateTemplateRequest(); // \ChurchTools\Model\CreateTemplateRequest | appointment template data

try {
    $result = $apiInstance->createTemplate($create_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_request** | [**\ChurchTools\Model\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)| appointment template data | [optional] |

### Return type

[**\ChurchTools\Model\GetAllTemplates200Response**](../Model/GetAllTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCalendarsCalendarIdAppointmentsAppointmentId()`

```php
deleteCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id)
```

Delete an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment

try {
    $apiInstance->deleteCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteCalendarsCalendarIdAppointmentsAppointmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId()`

```php
deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId($calendar_id, $appointment_id, $meeting_request_id)
```

Delete a meeting request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment
$meeting_request_id = 19; // int | ID of meeting request

try {
    $apiInstance->deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId($calendar_id, $appointment_id, $meeting_request_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |
| **meeting_request_id** | **int**| ID of meeting request | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id)
```

Delete an appointment template identified by id

Delete a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template

try {
    $apiInstance->deleteTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| ID of appointment template | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTemplates()`

```php
getAllTemplates(): \ChurchTools\Model\GetAllTemplates200Response
```

Get all appointment templates

get all appointment templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllTemplates200Response**](../Model/GetAllTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendars()`

```php
getCalendars(): \ChurchTools\Model\GetCalendars200Response
```

Get all calendars

Get all calendars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCalendars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetCalendars200Response**](../Model/GetCalendars200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsAppointments()`

```php
getCalendarsAppointments($calendar_ids, $include, $from, $to, $query): \ChurchTools\Model\GetCalendarsAppointments200Response
```

Get all appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_ids = array(56); // int[]
$include = array('include_example'); // string[]
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$query = 'query_example'; // string

try {
    $result = $apiInstance->getCalendarsAppointments($calendar_ids, $include, $from, $to, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_ids** | [**int[]**](../Model/int.md)|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **query** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetCalendarsAppointments200Response**](../Model/GetCalendarsAppointments200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsAppointmentsAppointmentIdStartDate()`

```php
getCalendarsAppointmentsAppointmentIdStartDate($appointment_id, $start_date): \ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200Response
```

Get an appointment with all bookings and meeting requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 4; // int | ID of appointment
$start_date = 'start_date_example'; // string

try {
    $result = $apiInstance->getCalendarsAppointmentsAppointmentIdStartDate($appointment_id, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsAppointmentsAppointmentIdStartDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appointment_id** | **int**| ID of appointment | |
| **start_date** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200Response**](../Model/GetCalendarsAppointmentsAppointmentIdStartDate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdAppointments()`

```php
getCalendarsCalendarIdAppointments($calendar_id, $from, $to, $query, $include): \ChurchTools\Model\GetCalendarsCalendarIdAppointments200Response
```

Get all appointments of a calendar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$query = 'query_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getCalendarsCalendarIdAppointments($calendar_id, $from, $to, $query, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **query** | **string**|  | [optional] |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetCalendarsCalendarIdAppointments200Response**](../Model/GetCalendarsCalendarIdAppointments200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdAppointmentsAppointmentId()`

```php
getCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id): \ChurchTools\Model\GetCalendarsCalendarIdAppointments200Response
```

Get an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment

try {
    $result = $apiInstance->getCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdAppointmentsAppointmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |

### Return type

[**\ChurchTools\Model\GetCalendarsCalendarIdAppointments200Response**](../Model/GetCalendarsCalendarIdAppointments200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests()`

```php
getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests($calendar_id, $appointment_id): \ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests200Response
```

Get all meeting requests of an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment

try {
    $result = $apiInstance->getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests($calendar_id, $appointment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |

### Return type

[**\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests200Response**](../Model/GetCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdAppointmentsAppointmentIdStartDate()`

```php
getCalendarsCalendarIdAppointmentsAppointmentIdStartDate($calendar_id, $appointment_id, $start_date): \ChurchTools\Model\ChangeImpact200Response
```

Get an appointment with all bookings and meeting requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment
$start_date = 'start_date_example'; // string

try {
    $result = $apiInstance->getCalendarsCalendarIdAppointmentsAppointmentIdStartDate($calendar_id, $appointment_id, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdAppointmentsAppointmentIdStartDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |
| **start_date** | **string**|  | |

### Return type

[**\ChurchTools\Model\ChangeImpact200Response**](../Model/ChangeImpact200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdMeetingrequestpersons()`

```php
getCalendarsCalendarIdMeetingrequestpersons($calendar_id): \ChurchTools\Model\GetCalendarsCalendarIdMeetingrequestpersons200Response
```

Get possible persons to request for meeting

Get possible persons to request for meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar

try {
    $result = $apiInstance->getCalendarsCalendarIdMeetingrequestpersons($calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdMeetingrequestpersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |

### Return type

[**\ChurchTools\Model\GetCalendarsCalendarIdMeetingrequestpersons200Response**](../Model/GetCalendarsCalendarIdMeetingrequestpersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateById()`

```php
getTemplateById($template_id): \ChurchTools\Model\GetTemplateById200Response
```

Get a appointment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template

try {
    $result = $apiInstance->getTemplateById($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getTemplateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| ID of appointment template | |

### Return type

[**\ChurchTools\Model\GetTemplateById200Response**](../Model/GetTemplateById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCalendarsCalendarIdAppointments()`

```php
postCalendarsCalendarIdAppointments($calendar_id, $post_calendars_calendar_id_appointments_request)
```

Create a new appointment in a calendar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$post_calendars_calendar_id_appointments_request = new \ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest(); // \ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest | 

try {
    $apiInstance->postCalendarsCalendarIdAppointments($calendar_id, $post_calendars_calendar_id_appointments_request);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->postCalendarsCalendarIdAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **post_calendars_calendar_id_appointments_request** | [**\ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest**](../Model/PostCalendarsCalendarIdAppointmentsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests()`

```php
postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests($calendar_id, $appointment_id, $person_id): \ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner
```

Create a new meeting request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment
$person_id = 56; // int

try {
    $result = $apiInstance->postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests($calendar_id, $appointment_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->postCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |
| **person_id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner**](../Model/GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCalendarsCalendarIdAppointmentsAppointmentId()`

```php
putCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id, $put_calendars_calendar_id_appointments_appointment_id_request): \ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentId200Response
```

Update an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment
$put_calendars_calendar_id_appointments_appointment_id_request = new \ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequest(); // \ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequest

try {
    $result = $apiInstance->putCalendarsCalendarIdAppointmentsAppointmentId($calendar_id, $appointment_id, $put_calendars_calendar_id_appointments_appointment_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->putCalendarsCalendarIdAppointmentsAppointmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |
| **put_calendars_calendar_id_appointments_appointment_id_request** | [**\ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentIdRequest**](../Model/PutCalendarsCalendarIdAppointmentsAppointmentIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutCalendarsCalendarIdAppointmentsAppointmentId200Response**](../Model/PutCalendarsCalendarIdAppointmentsAppointmentId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId()`

```php
putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId($calendar_id, $appointment_id, $meeting_request_id): \ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner
```

Update a meeting request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 4; // int | ID of appointment
$meeting_request_id = 19; // int | ID of meeting request

try {
    $result = $apiInstance->putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId($calendar_id, $appointment_id, $meeting_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->putCalendarsCalendarIdAppointmentsAppointmentIdMeetingrequestsMeetingRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **appointment_id** | **int**| ID of appointment | |
| **meeting_request_id** | **int**| ID of meeting request | |

### Return type

[**\ChurchTools\Model\GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner**](../Model/GetCalendarsAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($template_id, $get_template_by_id200_response_data): \ChurchTools\Model\GetTemplateById200Response
```

Update a appointment template identified by id

update a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template
$get_template_by_id200_response_data = new \ChurchTools\Model\GetTemplateById200ResponseData(); // \ChurchTools\Model\GetTemplateById200ResponseData | appointment template data

try {
    $result = $apiInstance->updateTemplate($template_id, $get_template_by_id200_response_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| ID of appointment template | |
| **get_template_by_id200_response_data** | [**\ChurchTools\Model\GetTemplateById200ResponseData**](../Model/GetTemplateById200ResponseData.md)| appointment template data | |

### Return type

[**\ChurchTools\Model\GetTemplateById200Response**](../Model/GetTemplateById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
