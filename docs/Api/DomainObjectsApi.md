# ChurchTools\DomainObjectsApi

Retrieve domain objects by type and identifier

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDomainobjects()**](DomainObjectsApi.md#getDomainobjects) | **GET** /domainobjects |  |
| [**postDomainobjects()**](DomainObjectsApi.md#postDomainobjects) | **POST** /domainobjects |  |


## `getDomainobjects()`

```php
getDomainobjects($domain_types, $domain_identifiers): \ChurchTools\Model\GetDomainobjects200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DomainObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_types = array('domain_types_example'); // string[] | Types of domain objects to retrieve
$domain_identifiers = array('domain_identifiers_example'); // string[] | Identifiers of domain objects to retrieve

try {
    $result = $apiInstance->getDomainobjects($domain_types, $domain_identifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainObjectsApi->getDomainobjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_types** | [**string[]**](../Model/string.md)| Types of domain objects to retrieve | |
| **domain_identifiers** | [**string[]**](../Model/string.md)| Identifiers of domain objects to retrieve | |

### Return type

[**\ChurchTools\Model\GetDomainobjects200Response**](../Model/GetDomainobjects200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDomainobjects()`

```php
postDomainobjects($post_domainobjects_request): \ChurchTools\Model\GetDomainobjects200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DomainObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_domainobjects_request = new \ChurchTools\Model\PostDomainobjectsRequest(); // \ChurchTools\Model\PostDomainobjectsRequest

try {
    $result = $apiInstance->postDomainobjects($post_domainobjects_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainObjectsApi->postDomainobjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_domainobjects_request** | [**\ChurchTools\Model\PostDomainobjectsRequest**](../Model/PostDomainobjectsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetDomainobjects200Response**](../Model/GetDomainobjects200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
