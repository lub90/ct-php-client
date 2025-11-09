# ChurchTools\TranslationApi

Translations

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTranslationKey()**](TranslationApi.md#deleteTranslationKey) | **DELETE** /translations/{keyId} | Delete translation key |
| [**deleteTranslationLanguage()**](TranslationApi.md#deleteTranslationLanguage) | **DELETE** /translations/{keyId}/languages/{languageId} | Delete translation language for key |
| [**getAllTranslations()**](TranslationApi.md#getAllTranslations) | **GET** /translations | Get all translations |
| [**updateTranslationKey()**](TranslationApi.md#updateTranslationKey) | **PUT** /translations/{keyId} | Delete translation key |


## `deleteTranslationKey()`

```php
deleteTranslationKey($key_id)
```

Delete translation key

Delete translation key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | The key id to delete

try {
    $apiInstance->deleteTranslationKey($key_id);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->deleteTranslationKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| The key id to delete | |

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

## `deleteTranslationLanguage()`

```php
deleteTranslationLanguage($key_id, $language_id)
```

Delete translation language for key

Delete language for translation key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | The key id to delete
$language_id = 56; // int | The language id to delete

try {
    $apiInstance->deleteTranslationLanguage($key_id, $language_id);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->deleteTranslationLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| The key id to delete | |
| **language_id** | **int**| The language id to delete | |

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

## `getAllTranslations()`

```php
getAllTranslations($updated_by_church, $needs_check): \ChurchTools\Model\GetAllTranslations200Response
```

Get all translations

The response is a list of the translations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_by_church = True; // bool | Filter if church has updated this translation by themselves.
$needs_check = True; // bool | Filter if translation has to be checked.

try {
    $result = $apiInstance->getAllTranslations($updated_by_church, $needs_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getAllTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_by_church** | **bool**| Filter if church has updated this translation by themselves. | [optional] |
| **needs_check** | **bool**| Filter if translation has to be checked. | [optional] |

### Return type

[**\ChurchTools\Model\GetAllTranslations200Response**](../Model/GetAllTranslations200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTranslationKey()`

```php
updateTranslationKey($key_id, $translation_key)
```

Delete translation key

Update translation key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | The key id to delete
$translation_key = new \ChurchTools\Model\TranslationKey(); // \ChurchTools\Model\TranslationKey

try {
    $apiInstance->updateTranslationKey($key_id, $translation_key);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->updateTranslationKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| The key id to delete | |
| **translation_key** | [**\ChurchTools\Model\TranslationKey**](../Model/TranslationKey.md)|  | |

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
