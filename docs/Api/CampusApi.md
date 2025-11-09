# ChurchTools\CampusApi

CRUD methods for campus field

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewCampus()**](CampusApi.md#createNewCampus) | **POST** /campuses | Create new campus |
| [**deleteCampus()**](CampusApi.md#deleteCampus) | **DELETE** /campuses/{id} | Delete a campus |
| [**getAllCampuses()**](CampusApi.md#getAllCampuses) | **GET** /campuses | Get all campuses |
| [**getCampus()**](CampusApi.md#getCampus) | **GET** /campuses/{id} | Get a campus |
| [**updateCampus()**](CampusApi.md#updateCampus) | **PUT** /campuses/{id} | Update campus |


## `createNewCampus()`

```php
createNewCampus($create_new_campus_request): \ChurchTools\Model\CreateNewCampus201Response
```

Create new campus

Save new campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_campus_request = new \ChurchTools\Model\CreateNewCampusRequest(); // \ChurchTools\Model\CreateNewCampusRequest

try {
    $result = $apiInstance->createNewCampus($create_new_campus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->createNewCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_campus_request** | [**\ChurchTools\Model\CreateNewCampusRequest**](../Model/CreateNewCampusRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CreateNewCampus201Response**](../Model/CreateNewCampus201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampus()`

```php
deleteCampus($id)
```

Delete a campus

Delete a campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteCampus($id);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->deleteCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

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

## `getAllCampuses()`

```php
getAllCampuses(): \ChurchTools\Model\GetAllCampuses200Response
```

Get all campuses

Returns an array of all campuses defined in ChurchTools. Campuses are sorted by its `sortKey` by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCampuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->getAllCampuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllCampuses200Response**](../Model/GetAllCampuses200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampus()`

```php
getCampus($id): \ChurchTools\Model\GetCampus200Response
```

Get a campus

Get a specific campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getCampus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->getCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetCampus200Response**](../Model/GetCampus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampus()`

```php
updateCampus($id, $update_campus_request): \ChurchTools\Model\GetCampus200Response
```

Update campus

Update campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_campus_request = new \ChurchTools\Model\UpdateCampusRequest(); // \ChurchTools\Model\UpdateCampusRequest | New values for campus

try {
    $result = $apiInstance->updateCampus($id, $update_campus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->updateCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_campus_request** | [**\ChurchTools\Model\UpdateCampusRequest**](../Model/UpdateCampusRequest.md)| New values for campus | |

### Return type

[**\ChurchTools\Model\GetCampus200Response**](../Model/GetCampus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
