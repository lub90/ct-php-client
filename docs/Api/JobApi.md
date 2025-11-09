# ChurchTools\JobApi

Endpoints for Jobs

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJobs()**](JobApi.md#getJobs) | **GET** /jobs | Your GET endpoint |


## `getJobs()`

```php
getJobs($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date): \ChurchTools\Model\GetJobs200Response
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = array('status_example'); // string[]
$identifier = 'identifier_example'; // string
$name = 'name_example'; // string
$domain_ids = array(56); // int[]
$created_start_date = 'created_start_date_example'; // string
$created_end_date = 'created_end_date_example'; // string
$modified_start_date = 'modified_start_date_example'; // string
$modified_end_date = 'modified_end_date_example'; // string

try {
    $result = $apiInstance->getJobs($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **identifier** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **domain_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **created_start_date** | **string**|  | [optional] |
| **created_end_date** | **string**|  | [optional] |
| **modified_start_date** | **string**|  | [optional] |
| **modified_end_date** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetJobs200Response**](../Model/GetJobs200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
