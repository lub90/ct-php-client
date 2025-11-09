# ChurchTools\DBFieldsApi



All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDbfieldsFieldId()**](DBFieldsApi.md#deleteDbfieldsFieldId) | **DELETE** /dbfields/{fieldId} | Delete db field |
| [**deleteDbfieldsFieldIdOptionsOptionId()**](DBFieldsApi.md#deleteDbfieldsFieldIdOptionsOptionId) | **DELETE** /dbfields/{fieldId}/options/{optionId} | Delete db field option |
| [**getDbfields()**](DBFieldsApi.md#getDbfields) | **GET** /dbfields | GET DB Fields |
| [**getDbfieldsFieldId()**](DBFieldsApi.md#getDbfieldsFieldId) | **GET** /dbfields/{fieldId} | GET DB Field |
| [**getDbfieldsFieldIdOptions()**](DBFieldsApi.md#getDbfieldsFieldIdOptions) | **GET** /dbfields/{fieldId}/options | Get options for a db field |
| [**getDbfieldsFieldIdOptionsMetadata()**](DBFieldsApi.md#getDbfieldsFieldIdOptionsMetadata) | **GET** /dbfields/{fieldId}/options/metadata | Get metadata for field options |
| [**getDbfieldtypes()**](DBFieldsApi.md#getDbfieldtypes) | **GET** /dbfieldtypes | Get available field types |
| [**postDbfields()**](DBFieldsApi.md#postDbfields) | **POST** /dbfields | Create DB Field |
| [**postDbfieldsFieldIdOptions()**](DBFieldsApi.md#postDbfieldsFieldIdOptions) | **POST** /dbfields/{fieldId}/options | Create db field option |
| [**putDbfieldsFieldId()**](DBFieldsApi.md#putDbfieldsFieldId) | **PUT** /dbfields/{fieldId} | Update db field |
| [**putDbfieldsFieldIdOptionsOptionId()**](DBFieldsApi.md#putDbfieldsFieldIdOptionsOptionId) | **PUT** /dbfields/{fieldId}/options/{optionId} | Update db field option |


## `deleteDbfieldsFieldId()`

```php
deleteDbfieldsFieldId($field_id)
```

Delete db field



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $apiInstance->deleteDbfieldsFieldId($field_id);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->deleteDbfieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

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

## `deleteDbfieldsFieldIdOptionsOptionId()`

```php
deleteDbfieldsFieldIdOptionsOptionId($field_id, $option_id)
```

Delete db field option



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string
$option_id = 'option_id_example'; // string

try {
    $apiInstance->deleteDbfieldsFieldIdOptionsOptionId($field_id, $option_id);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->deleteDbfieldsFieldIdOptionsOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |
| **option_id** | **string**|  | |

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

## `getDbfields()`

```php
getDbfields($include): \ChurchTools\Model\GetDbfields200Response
```

GET DB Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | Includes additional data in the response

try {
    $result = $apiInstance->getDbfields($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->getDbfields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| Includes additional data in the response | [optional] |

### Return type

[**\ChurchTools\Model\GetDbfields200Response**](../Model/GetDbfields200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDbfieldsFieldId()`

```php
getDbfieldsFieldId($field_id): \ChurchTools\Model\PostDbfields201Response
```

GET DB Field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $result = $apiInstance->getDbfieldsFieldId($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->getDbfieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\PostDbfields201Response**](../Model/PostDbfields201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDbfieldsFieldIdOptions()`

```php
getDbfieldsFieldIdOptions($field_id): \ChurchTools\Model\GetDbfieldsFieldIdOptions200Response
```

Get options for a db field

The response varies depending on the field id. See /dbfields/{fieldId}/options/metadata for details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $result = $apiInstance->getDbfieldsFieldIdOptions($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->getDbfieldsFieldIdOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetDbfieldsFieldIdOptions200Response**](../Model/GetDbfieldsFieldIdOptions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDbfieldsFieldIdOptionsMetadata()`

```php
getDbfieldsFieldIdOptionsMetadata($field_id): \ChurchTools\Model\GetDbfieldsFieldIdOptionsMetadata200Response
```

Get metadata for field options

This endpoint describes the structure of the options for the specified field. This should be used to know which fields to use for update and creating options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $result = $apiInstance->getDbfieldsFieldIdOptionsMetadata($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->getDbfieldsFieldIdOptionsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetDbfieldsFieldIdOptionsMetadata200Response**](../Model/GetDbfieldsFieldIdOptionsMetadata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDbfieldtypes()`

```php
getDbfieldtypes(): \ChurchTools\Model\GetDbfieldtypes200Response
```

Get available field types

Returns the available field types for use in custom db fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDbfieldtypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->getDbfieldtypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetDbfieldtypes200Response**](../Model/GetDbfieldtypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDbfields()`

```php
postDbfields($post_dbfields_request): \ChurchTools\Model\PostDbfields201Response
```

Create DB Field



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_dbfields_request = new \ChurchTools\Model\PostDbfieldsRequest(); // \ChurchTools\Model\PostDbfieldsRequest

try {
    $result = $apiInstance->postDbfields($post_dbfields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->postDbfields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_dbfields_request** | [**\ChurchTools\Model\PostDbfieldsRequest**](../Model/PostDbfieldsRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostDbfields201Response**](../Model/PostDbfields201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDbfieldsFieldIdOptions()`

```php
postDbfieldsFieldIdOptions($field_id, $post_dbfields_field_id_options_request): \ChurchTools\Model\PostDbfieldsFieldIdOptions200Response
```

Create db field option

The request body and response body vary depending on the field id. See /dbfields/{fieldId}/options/metadata for details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string
$post_dbfields_field_id_options_request = new \ChurchTools\Model\PostDbfieldsFieldIdOptionsRequest(); // \ChurchTools\Model\PostDbfieldsFieldIdOptionsRequest

try {
    $result = $apiInstance->postDbfieldsFieldIdOptions($field_id, $post_dbfields_field_id_options_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->postDbfieldsFieldIdOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |
| **post_dbfields_field_id_options_request** | [**\ChurchTools\Model\PostDbfieldsFieldIdOptionsRequest**](../Model/PostDbfieldsFieldIdOptionsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostDbfieldsFieldIdOptions200Response**](../Model/PostDbfieldsFieldIdOptions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDbfieldsFieldId()`

```php
putDbfieldsFieldId($field_id, $put_dbfields_field_id_request): \ChurchTools\Model\PostDbfields201Response
```

Update db field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string
$put_dbfields_field_id_request = new \ChurchTools\Model\PutDbfieldsFieldIdRequest(); // \ChurchTools\Model\PutDbfieldsFieldIdRequest

try {
    $result = $apiInstance->putDbfieldsFieldId($field_id, $put_dbfields_field_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->putDbfieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |
| **put_dbfields_field_id_request** | [**\ChurchTools\Model\PutDbfieldsFieldIdRequest**](../Model/PutDbfieldsFieldIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostDbfields201Response**](../Model/PostDbfields201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDbfieldsFieldIdOptionsOptionId()`

```php
putDbfieldsFieldIdOptionsOptionId($field_id, $option_id, $post_dbfields201_response_data_all_of_options_inner): \ChurchTools\Model\PostDbfieldsFieldIdOptions200Response
```

Update db field option

The request body and response body vary depending on the field id. See /dbfields/{fieldId}/options/metadata for details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DBFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string
$option_id = 'option_id_example'; // string
$post_dbfields201_response_data_all_of_options_inner = new \ChurchTools\Model\PostDbfields201ResponseDataAllOfOptionsInner(); // \ChurchTools\Model\PostDbfields201ResponseDataAllOfOptionsInner

try {
    $result = $apiInstance->putDbfieldsFieldIdOptionsOptionId($field_id, $option_id, $post_dbfields201_response_data_all_of_options_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DBFieldsApi->putDbfieldsFieldIdOptionsOptionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |
| **option_id** | **string**|  | |
| **post_dbfields201_response_data_all_of_options_inner** | [**\ChurchTools\Model\PostDbfields201ResponseDataAllOfOptionsInner**](../Model/PostDbfields201ResponseDataAllOfOptionsInner.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostDbfieldsFieldIdOptions200Response**](../Model/PostDbfieldsFieldIdOptions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
