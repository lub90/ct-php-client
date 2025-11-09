# ChurchTools\FurtherLinkApi

CRUD methods for furtherlinks

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFurtherlinksFurtherLinkId()**](FurtherLinkApi.md#deleteFurtherlinksFurtherLinkId) | **DELETE** /furtherlinks/{furtherLinkId} |  |
| [**getFurtherlinks()**](FurtherLinkApi.md#getFurtherlinks) | **GET** /furtherlinks | Get further links |
| [**getFurtherlinksFurtherLinkId()**](FurtherLinkApi.md#getFurtherlinksFurtherLinkId) | **GET** /furtherlinks/{furtherLinkId} | Get further link. |
| [**postFurtherlinks()**](FurtherLinkApi.md#postFurtherlinks) | **POST** /furtherlinks | Create further link |
| [**putFurtherlinksFurtherLinkId()**](FurtherLinkApi.md#putFurtherlinksFurtherLinkId) | **PUT** /furtherlinks/{furtherLinkId} | Update further link |


## `deleteFurtherlinksFurtherLinkId()`

```php
deleteFurtherlinksFurtherLinkId($further_link_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FurtherLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$further_link_id = 3.4; // float

try {
    $apiInstance->deleteFurtherlinksFurtherLinkId($further_link_id);
} catch (Exception $e) {
    echo 'Exception when calling FurtherLinkApi->deleteFurtherlinksFurtherLinkId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **further_link_id** | **float**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFurtherlinks()`

```php
getFurtherlinks(): \ChurchTools\Model\GetFurtherlinks200Response
```

Get further links

Get all further links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FurtherLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFurtherlinks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FurtherLinkApi->getFurtherlinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetFurtherlinks200Response**](../Model/GetFurtherlinks200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFurtherlinksFurtherLinkId()`

```php
getFurtherlinksFurtherLinkId($further_link_id): \ChurchTools\Model\PostFurtherlinks201Response
```

Get further link.

Get the specified further link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FurtherLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$further_link_id = 3.4; // float

try {
    $result = $apiInstance->getFurtherlinksFurtherLinkId($further_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FurtherLinkApi->getFurtherlinksFurtherLinkId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **further_link_id** | **float**|  | |

### Return type

[**\ChurchTools\Model\PostFurtherlinks201Response**](../Model/PostFurtherlinks201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFurtherlinks()`

```php
postFurtherlinks($post_furtherlinks_request): \ChurchTools\Model\PostFurtherlinks201Response
```

Create further link

Create a new further link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FurtherLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_furtherlinks_request = new \ChurchTools\Model\PostFurtherlinksRequest(); // \ChurchTools\Model\PostFurtherlinksRequest

try {
    $result = $apiInstance->postFurtherlinks($post_furtherlinks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FurtherLinkApi->postFurtherlinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_furtherlinks_request** | [**\ChurchTools\Model\PostFurtherlinksRequest**](../Model/PostFurtherlinksRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostFurtherlinks201Response**](../Model/PostFurtherlinks201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFurtherlinksFurtherLinkId()`

```php
putFurtherlinksFurtherLinkId($further_link_id, $post_furtherlinks_request): \ChurchTools\Model\PostFurtherlinks201Response
```

Update further link

Update the specified further link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FurtherLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$further_link_id = 3.4; // float
$post_furtherlinks_request = new \ChurchTools\Model\PostFurtherlinksRequest(); // \ChurchTools\Model\PostFurtherlinksRequest

try {
    $result = $apiInstance->putFurtherlinksFurtherLinkId($further_link_id, $post_furtherlinks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FurtherLinkApi->putFurtherlinksFurtherLinkId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **further_link_id** | **float**|  | |
| **post_furtherlinks_request** | [**\ChurchTools\Model\PostFurtherlinksRequest**](../Model/PostFurtherlinksRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostFurtherlinks201Response**](../Model/PostFurtherlinks201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
