# ChurchTools\BulkApi

Endpoints for bulk operations

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postBulkjobs()**](BulkApi.md#postBulkjobs) | **POST** /bulkjobs/{domainType}/{jobKey}/enqueue | Enqueue bulk job |
| [**postBulkjobsInfos()**](BulkApi.md#postBulkjobsInfos) | **POST** /bulkjobs/{domainType}/{jobKey}/infos | Calculate infos about bulk job |


## `postBulkjobs()`

```php
postBulkjobs($domain_type, $job_key, $post_bulkjobs_request): \ChurchTools\Model\PostBulkjobs201Response
```

Enqueue bulk job

Enqueues a bulk job to be processed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string | type of job
$job_key = 'job_key_example'; // string | key of job
$post_bulkjobs_request = new \ChurchTools\Model\PostBulkjobsRequest(); // \ChurchTools\Model\PostBulkjobsRequest

try {
    $result = $apiInstance->postBulkjobs($domain_type, $job_key, $post_bulkjobs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->postBulkjobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| type of job | |
| **job_key** | **string**| key of job | |
| **post_bulkjobs_request** | [**\ChurchTools\Model\PostBulkjobsRequest**](../Model/PostBulkjobsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostBulkjobs201Response**](../Model/PostBulkjobs201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkjobsInfos()`

```php
postBulkjobsInfos($domain_type, $job_key, $post_bulkjobs_infos_request): \ChurchTools\Model\PostBulkjobsInfos200Response
```

Calculate infos about bulk job

Calculate infos about bulk job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string | type of job
$job_key = 'job_key_example'; // string | key of job
$post_bulkjobs_infos_request = new \ChurchTools\Model\PostBulkjobsInfosRequest(); // \ChurchTools\Model\PostBulkjobsInfosRequest

try {
    $result = $apiInstance->postBulkjobsInfos($domain_type, $job_key, $post_bulkjobs_infos_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->postBulkjobsInfos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| type of job | |
| **job_key** | **string**| key of job | |
| **post_bulkjobs_infos_request** | [**\ChurchTools\Model\PostBulkjobsInfosRequest**](../Model/PostBulkjobsInfosRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostBulkjobsInfos200Response**](../Model/PostBulkjobsInfos200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
