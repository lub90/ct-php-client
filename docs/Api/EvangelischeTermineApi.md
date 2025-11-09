# ChurchTools\EvangelischeTermineApi

Endpoints for sync to Evangelische Termine

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAllEvangelischetermineAppointments()**](EvangelischeTermineApi.md#deleteAllEvangelischetermineAppointments) | **DELETE** /evangelischetermine | Delete all synced appointments from Evangelische Termine. |
| [**getAllEvangelischetermineEventtypes()**](EvangelischeTermineApi.md#getAllEvangelischetermineEventtypes) | **GET** /evangelischetermine/eventtypes | Get all event types from Evangelische Termine. |
| [**postEvangelischetermineValidatesettings()**](EvangelischeTermineApi.md#postEvangelischetermineValidatesettings) | **POST** /evangelischetermine/validatesettings | Validate the settings for the sync to Evangelische Termine. |


## `deleteAllEvangelischetermineAppointments()`

```php
deleteAllEvangelischetermineAppointments()
```

Delete all synced appointments from Evangelische Termine.

Delete all synced appointments from Evangelische Termine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EvangelischeTermineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllEvangelischetermineAppointments();
} catch (Exception $e) {
    echo 'Exception when calling EvangelischeTermineApi->deleteAllEvangelischetermineAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getAllEvangelischetermineEventtypes()`

```php
getAllEvangelischetermineEventtypes(): \ChurchTools\Model\GetAllEvangelischetermineEventtypes200Response
```

Get all event types from Evangelische Termine.

Get all event types from Evangelische Termine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EvangelischeTermineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllEvangelischetermineEventtypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvangelischeTermineApi->getAllEvangelischetermineEventtypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllEvangelischetermineEventtypes200Response**](../Model/GetAllEvangelischetermineEventtypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEvangelischetermineValidatesettings()`

```php
postEvangelischetermineValidatesettings($post_evangelischetermine_validatesettings_request)
```

Validate the settings for the sync to Evangelische Termine.

Validate the settings for the sync to Evangelische Termine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\EvangelischeTermineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_evangelischetermine_validatesettings_request = new \ChurchTools\Model\PostEvangelischetermineValidatesettingsRequest(); // \ChurchTools\Model\PostEvangelischetermineValidatesettingsRequest

try {
    $apiInstance->postEvangelischetermineValidatesettings($post_evangelischetermine_validatesettings_request);
} catch (Exception $e) {
    echo 'Exception when calling EvangelischeTermineApi->postEvangelischetermineValidatesettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_evangelischetermine_validatesettings_request** | [**\ChurchTools\Model\PostEvangelischetermineValidatesettingsRequest**](../Model/PostEvangelischetermineValidatesettingsRequest.md)|  | [optional] |

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
