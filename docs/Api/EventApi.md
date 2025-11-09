# ChurchTools\EventApi

Endpoints for event module

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agendaExport()**](EventApi.md#agendaExport) | **POST** /agendas/{agendaId}/export | Exports the agenda |
| [**deleteEventEventservice()**](EventApi.md#deleteEventEventservice) | **DELETE** /events/{eventId}/eventservices/{serviceId} | Delete event service |
| [**deleteEvents()**](EventApi.md#deleteEvents) | **DELETE** /events/{eventId} | Delete a single event |
| [**deleteEventsEventIdFactsFactId()**](EventApi.md#deleteEventsEventIdFactsFactId) | **DELETE** /events/{eventId}/facts/{factId} | Delete event fact |
| [**deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy()**](EventApi.md#deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy) | **DELETE** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests/{requestId} | Delete a service exchange request |
| [**deletePersonIdExchangerequestsRequestId()**](EventApi.md#deletePersonIdExchangerequestsRequestId) | **DELETE** /persons/{personId}/exchangerequests/{requestId} | Decline a service exchange request |
| [**getAgendaForEvent()**](EventApi.md#getAgendaForEvent) | **GET** /events/{eventId}/agenda | Get agenda for event |
| [**getAllEvents()**](EventApi.md#getAllEvents) | **GET** /events | Get all events |
| [**getAllForPerson()**](EventApi.md#getAllForPerson) | **GET** /persons/{personId}/exchangerequests | Get all service exchange requests for a user |
| [**getAllForService()**](EventApi.md#getAllForService) | **GET** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Get all service exchange requests of a user for a service |
| [**getCandidates()**](EventApi.md#getCandidates) | **GET** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests/candidates | Get candidates for service exchange request |
| [**getEvent()**](EventApi.md#getEvent) | **GET** /events/{eventId} | Get a single event |
| [**getEventMasterdata()**](EventApi.md#getEventMasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot; |
| [**getEventsEventIdFacts()**](EventApi.md#getEventsEventIdFacts) | **GET** /events/{eventId}/facts | Read facts for event |
| [**getEventsEventIdFactsFactId()**](EventApi.md#getEventsEventIdFactsFactId) | **GET** /events/{eventId}/facts/{factId} | Read one event fact |
| [**getEventsEventIdServicesServiceIdPossiblepersons()**](EventApi.md#getEventsEventIdServicesServiceIdPossiblepersons) | **GET** /events/{eventId}/services/{serviceId}/possiblepersons | Get all possible persons for a service |
| [**getEventsIcal()**](EventApi.md#getEventsIcal) | **GET** /events/ical |  |
| [**getEventsServiceIdPossiblepersons()**](EventApi.md#getEventsServiceIdPossiblepersons) | **GET** /events/{serviceId}/possiblepersonsforservice | Get all possible persons for a service |
| [**getPersonEvents()**](EventApi.md#getPersonEvents) | **GET** /persons/{personId}/events | Get events that person is involved with |
| [**getSongsOfAgenda()**](EventApi.md#getSongsOfAgenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda |
| [**postEventIcal()**](EventApi.md#postEventIcal) | **POST** /events/ical |  |
| [**postEventIdServicerequestsRequestIdAccept()**](EventApi.md#postEventIdServicerequestsRequestIdAccept) | **POST** /events/{eventId}/servicerequests/{requestId}/accept | Accept service request |
| [**postEventIdServicerequestsRequestIdDecline()**](EventApi.md#postEventIdServicerequestsRequestIdDecline) | **POST** /events/{eventId}/servicerequests/{requestId}/decline | Decline service request |
| [**postEventIdServicerequestsRequestIdUndo()**](EventApi.md#postEventIdServicerequestsRequestIdUndo) | **POST** /events/{eventId}/servicerequests/{requestId}/undo | Undo service request |
| [**postPersonIdEventsEventIdServicesServiceIdExchangerequests()**](EventApi.md#postPersonIdEventsEventIdServicesServiceIdExchangerequests) | **POST** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Create a new service exchange request |
| [**putEventEventservice()**](EventApi.md#putEventEventservice) | **PUT** /events/{eventId}/eventservices/{serviceId} | Update event service |
| [**putEventEventservices()**](EventApi.md#putEventEventservices) | **PUT** /events/{eventId}/eventservices | Update event services |
| [**putEvents()**](EventApi.md#putEvents) | **PUT** /events/{eventId} | Update a single event |
| [**putEventsEventIdFactsFactId()**](EventApi.md#putEventsEventIdFactsFactId) | **PUT** /events/{eventId}/facts/{factId} | Create or update event fact |
| [**putEventsEventIdServicerequestsRequestId()**](EventApi.md#putEventsEventIdServicerequestsRequestId) | **PUT** /events/{eventId}/servicerequests/{requestId} | Update service request |
| [**putEventsServicerequests()**](EventApi.md#putEventsServicerequests) | **PUT** /events/{eventId}/servicerequests | Update event services |
| [**putPersonIdExchangerequestsRequestId()**](EventApi.md#putPersonIdExchangerequestsRequestId) | **PUT** /persons/{personId}/exchangerequests/{requestId} | Accept a service exchange request |
| [**sendAgendaEmail()**](EventApi.md#sendAgendaEmail) | **POST** /agendas/send | Send agenda email to recipients |
| [**sendEventEmail()**](EventApi.md#sendEventEmail) | **POST** /events/send | Send Mail to Event Participants |
| [**startStopEventChat()**](EventApi.md#startStopEventChat) | **POST** /events/{eventId}/chat | Start or stop an event chat |


## `agendaExport()`

```php
agendaExport($target, $agenda_id, $agenda_export_request): \ChurchTools\Model\AgendaExport200Response
```

Exports the agenda

Exports the agenda as zip file for imports in presenter-programs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target = 'target_example'; // string
$agenda_id = 'agenda_id_example'; // string
$agenda_export_request = new \ChurchTools\Model\AgendaExportRequest(); // \ChurchTools\Model\AgendaExportRequest

try {
    $result = $apiInstance->agendaExport($target, $agenda_id, $agenda_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->agendaExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target** | **string**|  | |
| **agenda_id** | **string**|  | |
| **agenda_export_request** | [**\ChurchTools\Model\AgendaExportRequest**](../Model/AgendaExportRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\AgendaExport200Response**](../Model/AgendaExport200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEventEventservice()`

```php
deleteEventEventservice($event_id, $service_id, $delete_event_eventservice_request)
```

Delete event service

Delete an event service with a person outside of CT. No connection to a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$service_id = 56; // int
$delete_event_eventservice_request = new \ChurchTools\Model\DeleteEventEventserviceRequest(); // \ChurchTools\Model\DeleteEventEventserviceRequest

try {
    $apiInstance->deleteEventEventservice($event_id, $service_id, $delete_event_eventservice_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deleteEventEventservice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **service_id** | **int**|  | |
| **delete_event_eventservice_request** | [**\ChurchTools\Model\DeleteEventEventserviceRequest**](../Model/DeleteEventEventserviceRequest.md)|  | |

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

## `deleteEvents()`

```php
deleteEvents($event_id, $delete_events_request)
```

Delete a single event

Delete an event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$delete_events_request = new \ChurchTools\Model\DeleteEventsRequest(); // \ChurchTools\Model\DeleteEventsRequest

try {
    $apiInstance->deleteEvents($event_id, $delete_events_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deleteEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **delete_events_request** | [**\ChurchTools\Model\DeleteEventsRequest**](../Model/DeleteEventsRequest.md)|  | |

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

## `deleteEventsEventIdFactsFactId()`

```php
deleteEventsEventIdFactsFactId($event_id, $fact_id, $dry_run)
```

Delete event fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$fact_id = 'fact_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteEventsEventIdFactsFactId($event_id, $fact_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deleteEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **fact_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy()`

```php
deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy($person_id, $event_id, $service_id, $request_id, $hard_delete)
```

Delete a service exchange request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$request_id = 'request_id_example'; // string
$hard_delete = True; // bool | If set to true, the service exchange request gets deleted from database, otherwise (the default) it just gets a status of CANCELLED.

try {
    $apiInstance->deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy($person_id, $event_id, $service_id, $request_id, $hard_delete);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **request_id** | **string**|  | |
| **hard_delete** | **bool**| If set to true, the service exchange request gets deleted from database, otherwise (the default) it just gets a status of CANCELLED. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersonIdExchangerequestsRequestId()`

```php
deletePersonIdExchangerequestsRequestId($person_id, $request_id)
```

Decline a service exchange request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 'request_id_example'; // string

try {
    $apiInstance->deletePersonIdExchangerequestsRequestId($person_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deletePersonIdExchangerequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgendaForEvent()`

```php
getAgendaForEvent($event_id): \ChurchTools\Model\GetAgendaForEvent200Response
```

Get agenda for event

Fetch all agenda items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getAgendaForEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAgendaForEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\ChurchTools\Model\GetAgendaForEvent200Response**](../Model/GetAgendaForEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllEvents()`

```php
getAllEvents($canceled, $direction, $limit, $include, $from, $to, $page): \ChurchTools\Model\GetAllEvents200Response
```

Get all events

Get all events that meet the given search criteria. It is important to note that the some of the search parameters are mutually exclusive. Most importantly, pagination only works when `from` is used in combination with `direction`. When a range is used with `from` and `to`, the `direction` parameter as well as `page` and `limit` are ignored. Furthermore, when neither `to` nor `direction` are supplied, a `to` value with the current date plus two monthsis used. (NB: The `to` parameter is here still *inclusive*, but will be *exclusive* at a future point in time.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$canceled = True; // bool | If true, include also canceled events
$direction = forward; // string | The direction of the result set
$limit = 10; // int | Number of results per page.
$include = eventServices; // string | to include the eventServices
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.

try {
    $result = $apiInstance->getAllEvents($canceled, $direction, $limit, $include, $from, $to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **canceled** | **bool**| If true, include also canceled events | [optional] |
| **direction** | **string**| The direction of the result set | [optional] [default to &#39;forward&#39;] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **include** | **string**| to include the eventServices | [optional] |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |

### Return type

[**\ChurchTools\Model\GetAllEvents200Response**](../Model/GetAllEvents200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllForPerson()`

```php
getAllForPerson($person_id, $person_is_requester): \ChurchTools\Model\PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest[]
```

Get all service exchange requests for a user

Returns all exchange requests for a certain user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$person_is_requester = false; // bool | If set to true, service exchange requests that the user requested are returned. Otherwise (default) requests from other users for the user are returned.

try {
    $result = $apiInstance->getAllForPerson($person_id, $person_is_requester);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **person_is_requester** | **bool**| If set to true, service exchange requests that the user requested are returned. Otherwise (default) requests from other users for the user are returned. | [optional] |

### Return type

[**\ChurchTools\Model\PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest[]**](../Model/PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllForService()`

```php
getAllForService($person_id, $event_id, $service_id, $incoming): \ChurchTools\Model\GetAllForService200ResponseInner[]
```

Get all service exchange requests of a user for a service

Returns all exchange requests that a user requested for a certain service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$incoming = false; // bool | If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned.

try {
    $result = $apiInstance->getAllForService($person_id, $event_id, $service_id, $incoming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllForService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **incoming** | **bool**| If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned. | [optional] |

### Return type

[**\ChurchTools\Model\GetAllForService200ResponseInner[]**](../Model/GetAllForService200ResponseInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidates()`

```php
getCandidates($person_id, $event_id, $service_id): \ChurchTools\Model\GetCandidates200Response
```

Get candidates for service exchange request

Returns all possible candidates for an exchange of a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->getCandidates($person_id, $event_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getCandidates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetCandidates200Response**](../Model/GetCandidates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($event_id): \ChurchTools\Model\GetEvent200Response
```

Get a single event

Get a event by id, with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\ChurchTools\Model\GetEvent200Response**](../Model/GetEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventMasterdata()`

```php
getEventMasterdata(): \ChurchTools\Model\GetEventMasterdata200Response
```

Fetch MasterData for Module \"Event\"

The master data are the backbone of ChurchTools. This endpoint returns all data for that module to work with. Different endpoints don't include the master data directly but only state the ID for this data and this endpoint provides the data with all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEventMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetEventMasterdata200Response**](../Model/GetEventMasterdata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsEventIdFacts()`

```php
getEventsEventIdFacts($event_id): \ChurchTools\Model\GetEventsEventIdFacts200Response
```

Read facts for event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getEventsEventIdFacts($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsEventIdFacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\ChurchTools\Model\GetEventsEventIdFacts200Response**](../Model/GetEventsEventIdFacts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsEventIdFactsFactId()`

```php
getEventsEventIdFactsFactId($event_id, $fact_id): \ChurchTools\Model\GetEventsEventIdFactsFactId200Response
```

Read one event fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$fact_id = 'fact_id_example'; // string

try {
    $result = $apiInstance->getEventsEventIdFactsFactId($event_id, $fact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **fact_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetEventsEventIdFactsFactId200Response**](../Model/GetEventsEventIdFactsFactId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsEventIdServicesServiceIdPossiblepersons()`

```php
getEventsEventIdServicesServiceIdPossiblepersons($event_id, $service_id): \ChurchTools\Model\GetEventsEventIdServicesServiceIdPossiblepersons200Response
```

Get all possible persons for a service

Gets a list of all possible persons for a service with their availability

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->getEventsEventIdServicesServiceIdPossiblepersons($event_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsEventIdServicesServiceIdPossiblepersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetEventsEventIdServicesServiceIdPossiblepersons200Response**](../Model/GetEventsEventIdServicesServiceIdPossiblepersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsIcal()`

```php
getEventsIcal($person_id): \ChurchTools\Model\GetEventsIcal200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int

try {
    $result = $apiInstance->getEventsIcal($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsIcal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetEventsIcal200Response**](../Model/GetEventsIcal200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsServiceIdPossiblepersons()`

```php
getEventsServiceIdPossiblepersons($service_id): \ChurchTools\Model\GetEventsServiceIdPossiblepersons200Response
```

Get all possible persons for a service

Gets a list of all possible persons for a service with their availability. This endpoint is used to get the persons for a service that is not part of an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->getEventsServiceIdPossiblepersons($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsServiceIdPossiblepersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetEventsServiceIdPossiblepersons200Response**](../Model/GetEventsServiceIdPossiblepersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonEvents()`

```php
getPersonEvents($person_id): \ChurchTools\Model\GetEvent200Response
```

Get events that person is involved with

Gets a list of all events that a person is involved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonEvents($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetEvent200Response**](../Model/GetEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsOfAgenda()`

```php
getSongsOfAgenda($event_id): \ChurchTools\Model\GetSongsOfAgenda200Response
```

Get All Songs of Agenda

Get all songs of agenda for this event. Only those songs are returned, which the user may see. The user may see that the song is on the agenda, but s/he may not view all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getSongsOfAgenda($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getSongsOfAgenda: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\ChurchTools\Model\GetSongsOfAgenda200Response**](../Model/GetSongsOfAgenda200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEventIcal()`

```php
postEventIcal(): \ChurchTools\Model\GetEventsIcal200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postEventIcal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postEventIcal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetEventsIcal200Response**](../Model/GetEventsIcal200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEventIdServicerequestsRequestIdAccept()`

```php
postEventIdServicerequestsRequestIdAccept($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request)
```

Accept service request

Accept the specified service request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$request_id = 42; // int | ID of a service request
$post_event_id_servicerequests_request_id_accept_request = new \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest(); // \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest

try {
    $apiInstance->postEventIdServicerequestsRequestIdAccept($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postEventIdServicerequestsRequestIdAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **request_id** | **int**| ID of a service request | |
| **post_event_id_servicerequests_request_id_accept_request** | [**\ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest**](../Model/PostEventIdServicerequestsRequestIdAcceptRequest.md)|  | |

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

## `postEventIdServicerequestsRequestIdDecline()`

```php
postEventIdServicerequestsRequestIdDecline($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request)
```

Decline service request

Decline the specified service request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$request_id = 42; // int | ID of a service request
$post_event_id_servicerequests_request_id_accept_request = new \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest(); // \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest

try {
    $apiInstance->postEventIdServicerequestsRequestIdDecline($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postEventIdServicerequestsRequestIdDecline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **request_id** | **int**| ID of a service request | |
| **post_event_id_servicerequests_request_id_accept_request** | [**\ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest**](../Model/PostEventIdServicerequestsRequestIdAcceptRequest.md)|  | |

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

## `postEventIdServicerequestsRequestIdUndo()`

```php
postEventIdServicerequestsRequestIdUndo($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request)
```

Undo service request

Undo the specified service request which was previouly accepted or declined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$request_id = 42; // int | ID of a service request
$post_event_id_servicerequests_request_id_accept_request = new \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest(); // \ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest

try {
    $apiInstance->postEventIdServicerequestsRequestIdUndo($event_id, $request_id, $post_event_id_servicerequests_request_id_accept_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postEventIdServicerequestsRequestIdUndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **request_id** | **int**| ID of a service request | |
| **post_event_id_servicerequests_request_id_accept_request** | [**\ChurchTools\Model\PostEventIdServicerequestsRequestIdAcceptRequest**](../Model/PostEventIdServicerequestsRequestIdAcceptRequest.md)|  | |

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

## `postPersonIdEventsEventIdServicesServiceIdExchangerequests()`

```php
postPersonIdEventsEventIdServicesServiceIdExchangerequests($person_id, $event_id, $service_id, $incoming, $post_person_id_events_event_id_services_service_id_exchangerequests_request)
```

Create a new service exchange request

Creates a new service exchange request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$incoming = false; // bool | If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned.
$post_person_id_events_event_id_services_service_id_exchangerequests_request = new \ChurchTools\Model\PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest(); // \ChurchTools\Model\PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest

try {
    $apiInstance->postPersonIdEventsEventIdServicesServiceIdExchangerequests($person_id, $event_id, $service_id, $incoming, $post_person_id_events_event_id_services_service_id_exchangerequests_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postPersonIdEventsEventIdServicesServiceIdExchangerequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **incoming** | **bool**| If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned. | [optional] |
| **post_person_id_events_event_id_services_service_id_exchangerequests_request** | [**\ChurchTools\Model\PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest**](../Model/PostPersonIdEventsEventIdServicesServiceIdExchangerequestsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEventEventservice()`

```php
putEventEventservice($event_id, $service_id, $put_event_eventservice_request)
```

Update event service

Update an event service with a person outside of CT. No connection to a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$service_id = 56; // int
$put_event_eventservice_request = new \ChurchTools\Model\PutEventEventserviceRequest(); // \ChurchTools\Model\PutEventEventserviceRequest

try {
    $apiInstance->putEventEventservice($event_id, $service_id, $put_event_eventservice_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEventEventservice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **service_id** | **int**|  | |
| **put_event_eventservice_request** | [**\ChurchTools\Model\PutEventEventserviceRequest**](../Model/PutEventEventserviceRequest.md)|  | |

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

## `putEventEventservices()`

```php
putEventEventservices($event_id, $put_event_eventservices_request)
```

Update event services

Update the event services of an event. The request body must contain an array of event service objects. Each object must contain the serviceId and the count for that service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$put_event_eventservices_request = new \ChurchTools\Model\PutEventEventservicesRequest(); // \ChurchTools\Model\PutEventEventservicesRequest

try {
    $apiInstance->putEventEventservices($event_id, $put_event_eventservices_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEventEventservices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **put_event_eventservices_request** | [**\ChurchTools\Model\PutEventEventservicesRequest**](../Model/PutEventEventservicesRequest.md)|  | |

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

## `putEvents()`

```php
putEvents($event_id, $put_events_request): \ChurchTools\Model\GetEvent200Response
```

Update a single event

Update a event by id, with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$put_events_request = new \ChurchTools\Model\PutEventsRequest(); // \ChurchTools\Model\PutEventsRequest

try {
    $result = $apiInstance->putEvents($event_id, $put_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **put_events_request** | [**\ChurchTools\Model\PutEventsRequest**](../Model/PutEventsRequest.md)|  | |

### Return type

[**\ChurchTools\Model\GetEvent200Response**](../Model/GetEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEventsEventIdFactsFactId()`

```php
putEventsEventIdFactsFactId($event_id, $fact_id, $put_events_event_id_facts_fact_id_request): \ChurchTools\Model\GetEventsEventIdFactsFactId200Response
```

Create or update event fact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$fact_id = 'fact_id_example'; // string
$put_events_event_id_facts_fact_id_request = new \ChurchTools\Model\PutEventsEventIdFactsFactIdRequest(); // \ChurchTools\Model\PutEventsEventIdFactsFactIdRequest | Pass the `value` for that fact as payload. For numeric facts the value MUST be a numeric value. For select facts the value MUST be a valid option.

try {
    $result = $apiInstance->putEventsEventIdFactsFactId($event_id, $fact_id, $put_events_event_id_facts_fact_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **fact_id** | **string**|  | |
| **put_events_event_id_facts_fact_id_request** | [**\ChurchTools\Model\PutEventsEventIdFactsFactIdRequest**](../Model/PutEventsEventIdFactsFactIdRequest.md)| Pass the &#x60;value&#x60; for that fact as payload. For numeric facts the value MUST be a numeric value. For select facts the value MUST be a valid option. | [optional] |

### Return type

[**\ChurchTools\Model\GetEventsEventIdFactsFactId200Response**](../Model/GetEventsEventIdFactsFactId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEventsEventIdServicerequestsRequestId()`

```php
putEventsEventIdServicerequestsRequestId($event_id, $request_id, $put_events_event_id_servicerequests_request_id_request)
```

Update service request

Update the specified service request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$request_id = 42; // int | ID of a service request
$put_events_event_id_servicerequests_request_id_request = new \ChurchTools\Model\PutEventsEventIdServicerequestsRequestIdRequest(); // \ChurchTools\Model\PutEventsEventIdServicerequestsRequestIdRequest

try {
    $apiInstance->putEventsEventIdServicerequestsRequestId($event_id, $request_id, $put_events_event_id_servicerequests_request_id_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEventsEventIdServicerequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **request_id** | **int**| ID of a service request | |
| **put_events_event_id_servicerequests_request_id_request** | [**\ChurchTools\Model\PutEventsEventIdServicerequestsRequestIdRequest**](../Model/PutEventsEventIdServicerequestsRequestIdRequest.md)|  | |

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

## `putEventsServicerequests()`

```php
putEventsServicerequests($event_id, $put_events_servicerequests_request)
```

Update event services

Update the service requests of an event. The request body must contain an array of service request objects. Each object must contain the serviceId and the count for that service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$put_events_servicerequests_request = new \ChurchTools\Model\PutEventsServicerequestsRequest(); // \ChurchTools\Model\PutEventsServicerequestsRequest

try {
    $apiInstance->putEventsServicerequests($event_id, $put_events_servicerequests_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putEventsServicerequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **put_events_servicerequests_request** | [**\ChurchTools\Model\PutEventsServicerequestsRequest**](../Model/PutEventsServicerequestsRequest.md)|  | |

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

## `putPersonIdExchangerequestsRequestId()`

```php
putPersonIdExchangerequestsRequestId($person_id, $request_id)
```

Accept a service exchange request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 'request_id_example'; // string

try {
    $apiInstance->putPersonIdExchangerequestsRequestId($person_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putPersonIdExchangerequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAgendaEmail()`

```php
sendAgendaEmail($send_agenda_email_request): \ChurchTools\Model\SendAgendaEmail200Response
```

Send agenda email to recipients

An agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_agenda_email_request = new \ChurchTools\Model\SendAgendaEmailRequest(); // \ChurchTools\Model\SendAgendaEmailRequest | E-Mail information and recipients

try {
    $result = $apiInstance->sendAgendaEmail($send_agenda_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendAgendaEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_agenda_email_request** | [**\ChurchTools\Model\SendAgendaEmailRequest**](../Model/SendAgendaEmailRequest.md)| E-Mail information and recipients | |

### Return type

[**\ChurchTools\Model\SendAgendaEmail200Response**](../Model/SendAgendaEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEventEmail()`

```php
sendEventEmail($send_event_email_request): \ChurchTools\Model\SendEventEmail200Response
```

Send Mail to Event Participants

A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_event_email_request = {"appendAgendaButton":false,"body":"I have a updated the agenda for the upcoming service. Please review the changes.","eventIds":[31,32],"files":[0],"recipients":[40,41,116],"sendCopyToMe":true,"subject":"Agenda Updated"}; // \ChurchTools\Model\SendEventEmailRequest | E-Mail information and recipients

try {
    $result = $apiInstance->sendEventEmail($send_event_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendEventEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_event_email_request** | [**\ChurchTools\Model\SendEventEmailRequest**](../Model/SendEventEmailRequest.md)| E-Mail information and recipients | |

### Return type

[**\ChurchTools\Model\SendEventEmail200Response**](../Model/SendEventEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startStopEventChat()`

```php
startStopEventChat($event_id, $start_stop_event_chat_request)
```

Start or stop an event chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$start_stop_event_chat_request = new \ChurchTools\Model\StartStopEventChatRequest(); // \ChurchTools\Model\StartStopEventChatRequest

try {
    $apiInstance->startStopEventChat($event_id, $start_stop_event_chat_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->startStopEventChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **start_stop_event_chat_request** | [**\ChurchTools\Model\StartStopEventChatRequest**](../Model/StartStopEventChatRequest.md)|  | |

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
