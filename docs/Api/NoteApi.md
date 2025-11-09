# ChurchTools\NoteApi

Endpoints for notes in different domain types

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNote()**](NoteApi.md#createNote) | **POST** /notes/{domainType}/{domainId} |  |
| [**deleteNote()**](NoteApi.md#deleteNote) | **DELETE** /notes/{domainType}/{domainId}/{noteId} |  |
| [**deleteNotesNoteId()**](NoteApi.md#deleteNotesNoteId) | **DELETE** /notes/{noteId} |  |
| [**getNotes()**](NoteApi.md#getNotes) | **GET** /notes/{domainType}/{domainId} |  |
| [**updateNote()**](NoteApi.md#updateNote) | **PUT** /notes/{domainType}/{domainId}/{noteId} |  |


## `createNote()`

```php
createNote($domain_type, $domain_id, $create_note_request): \ChurchTools\Model\CreateNote201Response
```



Create a note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = group; // string | Domain types that notes can be used with
$domain_id = 35; // int | the domain id
$create_note_request = new \ChurchTools\Model\CreateNoteRequest(); // \ChurchTools\Model\CreateNoteRequest

try {
    $result = $apiInstance->createNote($domain_type, $domain_id, $create_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that notes can be used with | |
| **domain_id** | **int**| the domain id | |
| **create_note_request** | [**\ChurchTools\Model\CreateNoteRequest**](../Model/CreateNoteRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CreateNote201Response**](../Model/CreateNote201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNote()`

```php
deleteNote($domain_type, $domain_id, $note_id)
```



Delete a note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = group; // string | Domain types that notes can be used with
$domain_id = 35; // int | the domain id
$note_id = 101; // int | ID of note

try {
    $apiInstance->deleteNote($domain_type, $domain_id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that notes can be used with | |
| **domain_id** | **int**| the domain id | |
| **note_id** | **int**| ID of note | |

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

## `deleteNotesNoteId()`

```php
deleteNotesNoteId($note_id)
```



Delete a note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_id = 101; // int | ID of note

try {
    $apiInstance->deleteNotesNoteId($note_id);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNotesNoteId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_id** | **int**| ID of note | |

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

## `getNotes()`

```php
getNotes($domain_type, $domain_id): \ChurchTools\Model\GetNotes200Response
```



Get all notes for a domain object. The domain object can be a group or a arrangement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = group; // string | Domain types that notes can be used with
$domain_id = 35; // int | the domain id

try {
    $result = $apiInstance->getNotes($domain_type, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that notes can be used with | |
| **domain_id** | **int**| the domain id | |

### Return type

[**\ChurchTools\Model\GetNotes200Response**](../Model/GetNotes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNote()`

```php
updateNote($domain_type, $domain_id, $note_id, $create_note_request): \ChurchTools\Model\CreateNote201Response
```



Update a note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = group; // string | Domain types that notes can be used with
$domain_id = 35; // int | the domain id
$note_id = 101; // int | ID of note
$create_note_request = new \ChurchTools\Model\CreateNoteRequest(); // \ChurchTools\Model\CreateNoteRequest

try {
    $result = $apiInstance->updateNote($domain_type, $domain_id, $note_id, $create_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that notes can be used with | |
| **domain_id** | **int**| the domain id | |
| **note_id** | **int**| ID of note | |
| **create_note_request** | [**\ChurchTools\Model\CreateNoteRequest**](../Model/CreateNoteRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CreateNote201Response**](../Model/CreateNote201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
