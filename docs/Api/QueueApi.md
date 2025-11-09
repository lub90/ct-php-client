# ChurchTools\QueueApi

Endpoints for Fetching Queue Information and Triggering Workers

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getQueueJobGroupsStatus()**](QueueApi.md#getQueueJobGroupsStatus) | **GET** /queues/{queue}/jobgroups/{jobGroup} | Status Information About Job Groups in Queue |
| [**startQueueWorker()**](QueueApi.md#startQueueWorker) | **POST** /queues/{queue} | Start Worker For Queue |


## `getQueueJobGroupsStatus()`

```php
getQueueJobGroupsStatus($job_group, $queue): \ChurchTools\Model\GetQueueJobGroupsStatus200Response
```

Status Information About Job Groups in Queue

Job in a queue can belong to a job group to categorize a job. This endpoint counts jobs in queue and groups them by they status.  Use this endpoint to check if all jobs are processed or if still jobs are pending and wait to be processed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_group = 'job_group_example'; // string | Limit result to this job group.
$queue = 'queue_example'; // string

try {
    $result = $apiInstance->getQueueJobGroupsStatus($job_group, $queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->getQueueJobGroupsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_group** | **string**| Limit result to this job group. | |
| **queue** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetQueueJobGroupsStatus200Response**](../Model/GetQueueJobGroupsStatus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startQueueWorker()`

```php
startQueueWorker($queue): \ChurchTools\Model\StartQueueWorker200Response
```

Start Worker For Queue

ChurchTools utilizes a queueing system to offload time-intensive or processing-intensive work. Calling this endpoint will start a worker, which grabs pending jobs and processing them. If the queue has still jobs pending the worker starts a new worker to continue the work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue = 'queue_example'; // string

try {
    $result = $apiInstance->startQueueWorker($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->startQueueWorker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queue** | **string**|  | |

### Return type

[**\ChurchTools\Model\StartQueueWorker200Response**](../Model/StartQueueWorker200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
