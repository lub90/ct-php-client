# ChurchTools\AddressApi

Endpoints for address

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAddressesDomainTypeDomainIdentifierAddressId()**](AddressApi.md#deleteAddressesDomainTypeDomainIdentifierAddressId) | **DELETE** /addresses/{domainType}/{domainIdentifier}/{addressId} |  |
| [**getAddressesDomainTypeDomainIdentifier()**](AddressApi.md#getAddressesDomainTypeDomainIdentifier) | **GET** /addresses/{domainType}/{domainIdentifier} |  |
| [**getAddressesSearch()**](AddressApi.md#getAddressesSearch) | **GET** /addresses/search |  |
| [**postAddressesDomainTypeDomainIdentifier()**](AddressApi.md#postAddressesDomainTypeDomainIdentifier) | **POST** /addresses/{domainType}/{domainIdentifier} |  |
| [**putAddressesDomainTypeDomainIdentifierAddressId()**](AddressApi.md#putAddressesDomainTypeDomainIdentifierAddressId) | **PUT** /addresses/{domainType}/{domainIdentifier}/{addressId} |  |


## `deleteAddressesDomainTypeDomainIdentifierAddressId()`

```php
deleteAddressesDomainTypeDomainIdentifierAddressId($domain_type, $domain_identifier, $address_id)
```



Delete address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = NULL; // mixed
$domain_identifier = 'domain_identifier_example'; // string
$address_id = 56; // int

try {
    $apiInstance->deleteAddressesDomainTypeDomainIdentifierAddressId($domain_type, $domain_identifier, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->deleteAddressesDomainTypeDomainIdentifierAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | [**mixed**](../Model/.md)|  | |
| **domain_identifier** | **string**|  | |
| **address_id** | **int**|  | |

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

## `getAddressesDomainTypeDomainIdentifier()`

```php
getAddressesDomainTypeDomainIdentifier($domain_type, $domain_identifier): \ChurchTools\Model\GetAddressesDomainTypeDomainIdentifier200Response
```



Get addresses by domain type and domain identfier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string
$domain_identifier = 'domain_identifier_example'; // string

try {
    $result = $apiInstance->getAddressesDomainTypeDomainIdentifier($domain_type, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getAddressesDomainTypeDomainIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**|  | |
| **domain_identifier** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetAddressesDomainTypeDomainIdentifier200Response**](../Model/GetAddressesDomainTypeDomainIdentifier200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressesSearch()`

```php
getAddressesSearch($query): \ChurchTools\Model\GetAddressesSearch200Response
```



Search for addresses in persons and global nominatim-search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string

try {
    $result = $apiInstance->getAddressesSearch($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getAddressesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetAddressesSearch200Response**](../Model/GetAddressesSearch200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAddressesDomainTypeDomainIdentifier()`

```php
postAddressesDomainTypeDomainIdentifier($domain_type, $domain_identifier, $post_addresses_domain_type_domain_identifier_request): \ChurchTools\Model\PostAddressesDomainTypeDomainIdentifier200Response
```



Create addresses for domain type and domain identfier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string
$domain_identifier = 'domain_identifier_example'; // string
$post_addresses_domain_type_domain_identifier_request = new \ChurchTools\Model\PostAddressesDomainTypeDomainIdentifierRequest(); // \ChurchTools\Model\PostAddressesDomainTypeDomainIdentifierRequest

try {
    $result = $apiInstance->postAddressesDomainTypeDomainIdentifier($domain_type, $domain_identifier, $post_addresses_domain_type_domain_identifier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->postAddressesDomainTypeDomainIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**|  | |
| **domain_identifier** | **string**|  | |
| **post_addresses_domain_type_domain_identifier_request** | [**\ChurchTools\Model\PostAddressesDomainTypeDomainIdentifierRequest**](../Model/PostAddressesDomainTypeDomainIdentifierRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostAddressesDomainTypeDomainIdentifier200Response**](../Model/PostAddressesDomainTypeDomainIdentifier200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAddressesDomainTypeDomainIdentifierAddressId()`

```php
putAddressesDomainTypeDomainIdentifierAddressId($domain_type, $domain_identifier, $address_id, $put_addresses_domain_type_domain_identifier_address_id_request): \ChurchTools\Model\PostAddressesDomainTypeDomainIdentifier200Response
```



Update address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = NULL; // mixed
$domain_identifier = 'domain_identifier_example'; // string
$address_id = 56; // int
$put_addresses_domain_type_domain_identifier_address_id_request = new \ChurchTools\Model\PutAddressesDomainTypeDomainIdentifierAddressIdRequest(); // \ChurchTools\Model\PutAddressesDomainTypeDomainIdentifierAddressIdRequest

try {
    $result = $apiInstance->putAddressesDomainTypeDomainIdentifierAddressId($domain_type, $domain_identifier, $address_id, $put_addresses_domain_type_domain_identifier_address_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->putAddressesDomainTypeDomainIdentifierAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | [**mixed**](../Model/.md)|  | |
| **domain_identifier** | **string**|  | |
| **address_id** | **int**|  | |
| **put_addresses_domain_type_domain_identifier_address_id_request** | [**\ChurchTools\Model\PutAddressesDomainTypeDomainIdentifierAddressIdRequest**](../Model/PutAddressesDomainTypeDomainIdentifierAddressIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostAddressesDomainTypeDomainIdentifier200Response**](../Model/PostAddressesDomainTypeDomainIdentifier200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
