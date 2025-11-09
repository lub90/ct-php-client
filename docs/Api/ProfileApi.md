# ChurchTools\ProfileApi

Endpoints for Campus-Profiles

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiProfiles()**](ProfileApi.md#getApiProfiles) | **GET** /profiles | Get all profiles |
| [**getProfilesChurch()**](ProfileApi.md#getProfilesChurch) | **GET** /profiles/church | Get a profile |
| [**putProfilesChurch()**](ProfileApi.md#putProfilesChurch) | **PUT** /profiles/church |  |


## `getApiProfiles()`

```php
getApiProfiles(): \ChurchTools\Model\GetApiProfiles200Response
```

Get all profiles

This endpoint returns all profiles for logged in users with permissions. All others (incl. public access) will only get published profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getApiProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetApiProfiles200Response**](../Model/GetApiProfiles200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesChurch()`

```php
getProfilesChurch(): \ChurchTools\Model\GetProfilesChurch200Response
```

Get a profile

Get church profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProfilesChurch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfilesChurch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetProfilesChurch200Response**](../Model/GetProfilesChurch200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesChurch()`

```php
putProfilesChurch($update_campus_request): \ChurchTools\Model\GetCampus200Response
```



Update church information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_campus_request = new \ChurchTools\Model\UpdateCampusRequest(); // \ChurchTools\Model\UpdateCampusRequest

try {
    $result = $apiInstance->putProfilesChurch($update_campus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->putProfilesChurch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_campus_request** | [**\ChurchTools\Model\UpdateCampusRequest**](../Model/UpdateCampusRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetCampus200Response**](../Model/GetCampus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
