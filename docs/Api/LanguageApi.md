# ChurchTools\LanguageApi

Endpoints for Languages

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLanguages()**](LanguageApi.md#getLanguages) | **GET** /languages | Get all languages |


## `getLanguages()`

```php
getLanguages($only_active): \ChurchTools\Model\GetLanguages200Response
```

Get all languages

The response is a list of all languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\LanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$only_active = True; // bool | Set to true if only active languages should be returned

try {
    $result = $apiInstance->getLanguages($only_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_active** | **bool**| Set to true if only active languages should be returned | [optional] |

### Return type

[**\ChurchTools\Model\GetLanguages200Response**](../Model/GetLanguages200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
