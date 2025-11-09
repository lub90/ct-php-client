# ChurchTools\SubscriptionApi

Endpoints for Subscription

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubscriptionsPersonId()**](SubscriptionApi.md#getSubscriptionsPersonId) | **GET** /subscriptions/{personId} |  |
| [**getSubscriptionsPersonIdSubject()**](SubscriptionApi.md#getSubscriptionsPersonIdSubject) | **GET** /subscriptions/{personId}/{subject} |  |
| [**getSubscriptionsPersonIdSubjectSubjectIdentifier()**](SubscriptionApi.md#getSubscriptionsPersonIdSubjectSubjectIdentifier) | **GET** /subscriptions/{personId}/{subject}/{subjectIdentifier} |  |
| [**putSubscriptionsPersonIdSubjectSubjectIdentifier()**](SubscriptionApi.md#putSubscriptionsPersonIdSubjectSubjectIdentifier) | **PUT** /subscriptions/{personId}/{subject}/{subjectIdentifier} |  |


## `getSubscriptionsPersonId()`

```php
getSubscriptionsPersonId($person_id): \ChurchTools\Model\GetSubscriptionsPersonId200Response
```



Get all subscriptions of a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getSubscriptionsPersonId($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionsPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetSubscriptionsPersonId200Response**](../Model/GetSubscriptionsPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsPersonIdSubject()`

```php
getSubscriptionsPersonIdSubject($person_id, $subject): \ChurchTools\Model\GetSubscriptionsPersonId200Response
```



Get subscriptions for a specific subject

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$subject = group; // string

try {
    $result = $apiInstance->getSubscriptionsPersonIdSubject($person_id, $subject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionsPersonIdSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **subject** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetSubscriptionsPersonId200Response**](../Model/GetSubscriptionsPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsPersonIdSubjectSubjectIdentifier()`

```php
getSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier): \ChurchTools\Model\GetSubscriptionsPersonId200Response
```



Get a specific subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$subject = group; // string
$subject_identifier = 'subject_identifier_example'; // string

try {
    $result = $apiInstance->getSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionsPersonIdSubjectSubjectIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **subject** | **string**|  | |
| **subject_identifier** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetSubscriptionsPersonId200Response**](../Model/GetSubscriptionsPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSubscriptionsPersonIdSubjectSubjectIdentifier()`

```php
putSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier): \ChurchTools\Model\GetSubscriptionsPersonId200Response
```



Create a new subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$subject = group; // string
$subject_identifier = 'subject_identifier_example'; // string

try {
    $result = $apiInstance->putSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->putSubscriptionsPersonIdSubjectSubjectIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **subject** | **string**|  | |
| **subject_identifier** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetSubscriptionsPersonId200Response**](../Model/GetSubscriptionsPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
