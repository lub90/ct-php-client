# ChurchTools\TagApi

Endpoints for tags in different domain types

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTagsDomainTypeDomainIdTagId()**](TagApi.md#deleteTagsDomainTypeDomainIdTagId) | **DELETE** /tags/{domainType}/{domainId}/{tagId} | Remove tag from domain object |
| [**deleteTagsTagId()**](TagApi.md#deleteTagsTagId) | **DELETE** /tags/{tagId} | Delete tag |
| [**getTagsDomainType()**](TagApi.md#getTagsDomainType) | **GET** /tags/{domainType} | Get tags for domain type |
| [**getTagsDomainTypeDomainId()**](TagApi.md#getTagsDomainTypeDomainId) | **GET** /tags/{domainType}/{domainId} | Get tags for domain object |
| [**getTagsTagId()**](TagApi.md#getTagsTagId) | **GET** /tags/{tagId} | Get tag |
| [**postTagsDomainType()**](TagApi.md#postTagsDomainType) | **POST** /tags/{domainType} | Create new tag |
| [**postTagsDomainTypeDomainId()**](TagApi.md#postTagsDomainTypeDomainId) | **POST** /tags/{domainType}/{domainId} | Add tag to domain object |
| [**putTagsDomainTypeDomainIdTagId()**](TagApi.md#putTagsDomainTypeDomainIdTagId) | **PUT** /tags/{domainType}/{domainId}/{tagId} | Add tag to domain object |
| [**putTagsTagId()**](TagApi.md#putTagsTagId) | **PUT** /tags/{tagId} | Get tag |


## `deleteTagsDomainTypeDomainIdTagId()`

```php
deleteTagsDomainTypeDomainIdTagId($domain_type, $domain_id, $tag_id)
```

Remove tag from domain object

Remove the specified tag from the specified domain object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with
$domain_id = 35; // int | the domain id
$tag_id = 42; // int | ID of tag

try {
    $apiInstance->deleteTagsDomainTypeDomainIdTagId($domain_type, $domain_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTagsDomainTypeDomainIdTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |
| **domain_id** | **int**| the domain id | |
| **tag_id** | **int**| ID of tag | |

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

## `deleteTagsTagId()`

```php
deleteTagsTagId($tag_id)
```

Delete tag

Delete the specific tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 56; // int

try {
    $apiInstance->deleteTagsTagId($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTagsTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **int**|  | |

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

## `getTagsDomainType()`

```php
getTagsDomainType($domain_type): \ChurchTools\Model\GetTagsDomainType200Response
```

Get tags for domain type

Get available tags for the specified domain type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with

try {
    $result = $apiInstance->getTagsDomainType($domain_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagsDomainType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |

### Return type

[**\ChurchTools\Model\GetTagsDomainType200Response**](../Model/GetTagsDomainType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsDomainTypeDomainId()`

```php
getTagsDomainTypeDomainId($domain_type, $domain_id): \ChurchTools\Model\GetTagsDomainTypeDomainId200Response
```

Get tags for domain object

Get available tags for the specified domain object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with
$domain_id = 35; // int | the domain id

try {
    $result = $apiInstance->getTagsDomainTypeDomainId($domain_type, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagsDomainTypeDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |
| **domain_id** | **int**| the domain id | |

### Return type

[**\ChurchTools\Model\GetTagsDomainTypeDomainId200Response**](../Model/GetTagsDomainTypeDomainId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsTagId()`

```php
getTagsTagId($tag_id): \ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner
```

Get tag

Get the specified tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 56; // int

try {
    $result = $apiInstance->getTagsTagId($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagsTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **int**|  | |

### Return type

[**\ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner**](../Model/PostCheckinPersons201ResponseDataTagsInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTagsDomainType()`

```php
postTagsDomainType($domain_type, $post_tags_domain_type_request): \ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner
```

Create new tag

Create new tag for the specified domain type. Please note that this tag may disappear later if it is not immediately added to any particular domain object (does not apply to group tags).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with
$post_tags_domain_type_request = new \ChurchTools\Model\PostTagsDomainTypeRequest(); // \ChurchTools\Model\PostTagsDomainTypeRequest

try {
    $result = $apiInstance->postTagsDomainType($domain_type, $post_tags_domain_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->postTagsDomainType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |
| **post_tags_domain_type_request** | [**\ChurchTools\Model\PostTagsDomainTypeRequest**](../Model/PostTagsDomainTypeRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner**](../Model/PostCheckinPersons201ResponseDataTagsInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTagsDomainTypeDomainId()`

```php
postTagsDomainTypeDomainId($domain_type, $domain_id, $post_tags_domain_type_domain_id_request): \ChurchTools\Model\PostTagsDomainTypeDomainId201Response
```

Add tag to domain object

Add tag with the given name to the specified domain object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with
$domain_id = 35; // int | the domain id
$post_tags_domain_type_domain_id_request = new \ChurchTools\Model\PostTagsDomainTypeDomainIdRequest(); // \ChurchTools\Model\PostTagsDomainTypeDomainIdRequest

try {
    $result = $apiInstance->postTagsDomainTypeDomainId($domain_type, $domain_id, $post_tags_domain_type_domain_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->postTagsDomainTypeDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |
| **domain_id** | **int**| the domain id | |
| **post_tags_domain_type_domain_id_request** | [**\ChurchTools\Model\PostTagsDomainTypeDomainIdRequest**](../Model/PostTagsDomainTypeDomainIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostTagsDomainTypeDomainId201Response**](../Model/PostTagsDomainTypeDomainId201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTagsDomainTypeDomainIdTagId()`

```php
putTagsDomainTypeDomainIdTagId($domain_type, $domain_id, $tag_id): \ChurchTools\Model\PostTagsDomainTypeDomainId201Response
```

Add tag to domain object

Add the specified tag to the specified domain object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = person; // string | Domain types that tags can be used with
$domain_id = 35; // int | the domain id
$tag_id = 42; // int | ID of tag

try {
    $result = $apiInstance->putTagsDomainTypeDomainIdTagId($domain_type, $domain_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->putTagsDomainTypeDomainIdTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| Domain types that tags can be used with | |
| **domain_id** | **int**| the domain id | |
| **tag_id** | **int**| ID of tag | |

### Return type

[**\ChurchTools\Model\PostTagsDomainTypeDomainId201Response**](../Model/PostTagsDomainTypeDomainId201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTagsTagId()`

```php
putTagsTagId($tag_id, $put_tags_tag_id_request): \ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner
```

Get tag

Update the specified tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 56; // int
$put_tags_tag_id_request = new \ChurchTools\Model\PutTagsTagIdRequest(); // \ChurchTools\Model\PutTagsTagIdRequest

try {
    $result = $apiInstance->putTagsTagId($tag_id, $put_tags_tag_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->putTagsTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **int**|  | |
| **put_tags_tag_id_request** | [**\ChurchTools\Model\PutTagsTagIdRequest**](../Model/PutTagsTagIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostCheckinPersons201ResponseDataTagsInner**](../Model/PostCheckinPersons201ResponseDataTagsInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
