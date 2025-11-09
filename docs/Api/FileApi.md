# ChurchTools\FileApi

CRUD methods for files

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFiles()**](FileApi.md#deleteFiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier |
| [**deleteFilesId()**](FileApi.md#deleteFilesId) | **DELETE** /files/{id} |  |
| [**getFilesDomainTypeDomainIdentifier()**](FileApi.md#getFilesDomainTypeDomainIdentifier) | **GET** /files/{domainType}/{domainIdentifier} | Get all files for a specific domain object |
| [**getFilesId()**](FileApi.md#getFilesId) | **GET** /files/{fileId}/meta | Get a file by id |
| [**getFilesMetadata()**](FileApi.md#getFilesMetadata) | **GET** /files/{fileId}/metadata | Get Metadata for file |
| [**patchFilesId()**](FileApi.md#patchFilesId) | **PATCH** /files/{id} |  |
| [**postFilesDomainTypeDomainIdentifierLink()**](FileApi.md#postFilesDomainTypeDomainIdentifierLink) | **POST** /files/{domainType}/{domainIdentifier}/link | Add link |
| [**putImageOptions()**](FileApi.md#putImageOptions) | **PUT** /images/{id}/options | set image-options |
| [**uploadFiles()**](FileApi.md#uploadFiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files |


## `deleteFiles()`

```php
deleteFiles($domain_type, $domain_identifier)
```

Delete files that are matching the domainType and domainIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'appointment_image', 'logo', 'attachments', 'bulkletter_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'post', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier

try {
    $apiInstance->deleteFiles($domain_type, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;appointment_image&#39;, &#39;logo&#39;, &#39;attachments&#39;, &#39;bulkletter_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;post&#39;, &#39;wiki_.?&#39;. | |
| **domain_identifier** | **string**| the domain identifier | |

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

## `deleteFilesId()`

```php
deleteFilesId($id)
```



delete file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteFilesId($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFilesId: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesDomainTypeDomainIdentifier()`

```php
getFilesDomainTypeDomainIdentifier($domain_type, $domain_identifier): \ChurchTools\Model\GetFilesDomainTypeDomainIdentifier200Response
```

Get all files for a specific domain object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'appointment_image', 'logo', 'attachments', 'bulkletter_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'post', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier

try {
    $result = $apiInstance->getFilesDomainTypeDomainIdentifier($domain_type, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFilesDomainTypeDomainIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;appointment_image&#39;, &#39;logo&#39;, &#39;attachments&#39;, &#39;bulkletter_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;post&#39;, &#39;wiki_.?&#39;. | |
| **domain_identifier** | **string**| the domain identifier | |

### Return type

[**\ChurchTools\Model\GetFilesDomainTypeDomainIdentifier200Response**](../Model/GetFilesDomainTypeDomainIdentifier200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesId()`

```php
getFilesId($file_id): \ChurchTools\Model\GetFilesId200Response
```

Get a file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getFilesId($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetFilesId200Response**](../Model/GetFilesId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesMetadata()`

```php
getFilesMetadata($file_id): \ChurchTools\Model\GetFilesMetadata200Response
```

Get Metadata for file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->getFilesMetadata($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFilesMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetFilesMetadata200Response**](../Model/GetFilesMetadata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFilesId()`

```php
patchFilesId($id): \ChurchTools\Model\PatchFilesId204Response
```



rename name of a file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->patchFilesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->patchFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\PatchFilesId204Response**](../Model/PatchFilesId204Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFilesDomainTypeDomainIdentifierLink()`

```php
postFilesDomainTypeDomainIdentifierLink($domain_type, $domain_identifier, $post_files_domain_type_domain_identifier_link_request): \ChurchTools\Model\PostFilesDomainTypeDomainIdentifierLink201Response
```

Add link

Add the given link to the specified domain object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'appointment_image', 'logo', 'attachments', 'bulkletter_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'post', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier
$post_files_domain_type_domain_identifier_link_request = new \ChurchTools\Model\PostFilesDomainTypeDomainIdentifierLinkRequest(); // \ChurchTools\Model\PostFilesDomainTypeDomainIdentifierLinkRequest | Accounting period data

try {
    $result = $apiInstance->postFilesDomainTypeDomainIdentifierLink($domain_type, $domain_identifier, $post_files_domain_type_domain_identifier_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFilesDomainTypeDomainIdentifierLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;appointment_image&#39;, &#39;logo&#39;, &#39;attachments&#39;, &#39;bulkletter_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;post&#39;, &#39;wiki_.?&#39;. | |
| **domain_identifier** | **string**| the domain identifier | |
| **post_files_domain_type_domain_identifier_link_request** | [**\ChurchTools\Model\PostFilesDomainTypeDomainIdentifierLinkRequest**](../Model/PostFilesDomainTypeDomainIdentifierLinkRequest.md)| Accounting period data | |

### Return type

[**\ChurchTools\Model\PostFilesDomainTypeDomainIdentifierLink201Response**](../Model/PostFilesDomainTypeDomainIdentifierLink201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putImageOptions()`

```php
putImageOptions($id, $put_image_options_request): \ChurchTools\Model\PutImageOptions200Response
```

set image-options

Sets options as JSON like cropping and focus point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$put_image_options_request = new \ChurchTools\Model\PutImageOptionsRequest(); // \ChurchTools\Model\PutImageOptionsRequest

try {
    $result = $apiInstance->putImageOptions($id, $put_image_options_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->putImageOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **put_image_options_request** | [**\ChurchTools\Model\PutImageOptionsRequest**](../Model/PutImageOptionsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutImageOptions200Response**](../Model/PutImageOptions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFiles()`

```php
uploadFiles($domain_type, $domain_identifier, $files, $image_options, $max_height, $max_width): \ChurchTools\Model\UploadFiles200Response
```

Upload files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'appointment_image', 'logo', 'attachments', 'bulkletter_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'post', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier
$files = array('/path/to/file.txt'); // \SplFileObject[]
$image_options = array('key' => new \stdClass); // object
$max_height = 'max_height_example'; // string
$max_width = 'max_width_example'; // string

try {
    $result = $apiInstance->uploadFiles($domain_type, $domain_identifier, $files, $image_options, $max_height, $max_width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;appointment_image&#39;, &#39;logo&#39;, &#39;attachments&#39;, &#39;bulkletter_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;post&#39;, &#39;wiki_.?&#39;. | |
| **domain_identifier** | **string**| the domain identifier | |
| **files** | **\SplFileObject[]**|  | [optional] |
| **image_options** | [**object**](../Model/object.md)|  | [optional] |
| **max_height** | **string**|  | [optional] |
| **max_width** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\UploadFiles200Response**](../Model/UploadFiles200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
