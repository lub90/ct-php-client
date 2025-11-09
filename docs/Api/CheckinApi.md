# ChurchTools\CheckinApi

Endpoints for Checkin

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkin()**](CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group |
| [**getAllPrinters()**](CheckinApi.md#getAllPrinters) | **GET** /printers | Get all printers |
| [**getQRCodeCheckin()**](CheckinApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF |
| [**postCheckinPersons()**](CheckinApi.md#postCheckinPersons) | **POST** /checkin/persons | Create new person and add to group |
| [**postGroupsGroupIdQrcodecheckinPersonIdSend()**](CheckinApi.md#postGroupsGroupIdQrcodecheckinPersonIdSend) | **POST** /groups/{groupId}/qrcodecheckin/{personId}/send | Send QR-Code for CheckIn via email |
| [**putCheckinPersons()**](CheckinApi.md#putCheckinPersons) | **PUT** /checkin/persons | Put existing person into group |


## `checkin()`

```php
checkin($group_id, $person_id, $checkin_request): \ChurchTools\Model\Checkin200Response
```

Checkin a person to a group

Checkin a person to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$checkin_request = new \ChurchTools\Model\CheckinRequest(); // \ChurchTools\Model\CheckinRequest

try {
    $result = $apiInstance->checkin($group_id, $person_id, $checkin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->checkin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |
| **checkin_request** | [**\ChurchTools\Model\CheckinRequest**](../Model/CheckinRequest.md)|  | |

### Return type

[**\ChurchTools\Model\Checkin200Response**](../Model/Checkin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPrinters()`

```php
getAllPrinters(): \ChurchTools\Model\GetAllPrinters200Response
```

Get all printers

All printers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPrinters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->getAllPrinters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllPrinters200Response**](../Model/GetAllPrinters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQRCodeCheckin()`

```php
getQRCodeCheckin($group_id, $person_id): \ChurchTools\Model\GetQRCodeCheckin200Response
```

Get link to QR-Code for CheckIn PDF

Get link to QR-Code for CheckIn PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getQRCodeCheckin($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetQRCodeCheckin200Response**](../Model/GetQRCodeCheckin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCheckinPersons()`

```php
postCheckinPersons($post_checkin_persons_request): \ChurchTools\Model\PostCheckinPersons201Response
```

Create new person and add to group



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_checkin_persons_request = new \ChurchTools\Model\PostCheckinPersonsRequest(); // \ChurchTools\Model\PostCheckinPersonsRequest | 

try {
    $result = $apiInstance->postCheckinPersons($post_checkin_persons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->postCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_checkin_persons_request** | [**\ChurchTools\Model\PostCheckinPersonsRequest**](../Model/PostCheckinPersonsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostCheckinPersons201Response**](../Model/PostCheckinPersons201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsGroupIdQrcodecheckinPersonIdSend()`

```php
postGroupsGroupIdQrcodecheckinPersonIdSend($group_id, $person_id): \ChurchTools\Model\GetGroupQRCodeCheckinPerson200Response
```

Send QR-Code for CheckIn via email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->postGroupsGroupIdQrcodecheckinPersonIdSend($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->postGroupsGroupIdQrcodecheckinPersonIdSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupQRCodeCheckinPerson200Response**](../Model/GetGroupQRCodeCheckinPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCheckinPersons()`

```php
putCheckinPersons($put_checkin_persons_request): \ChurchTools\Model\PutCheckinPersons200Response
```

Put existing person into group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_checkin_persons_request = new \ChurchTools\Model\PutCheckinPersonsRequest(); // \ChurchTools\Model\PutCheckinPersonsRequest | 

try {
    $result = $apiInstance->putCheckinPersons($put_checkin_persons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->putCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_checkin_persons_request** | [**\ChurchTools\Model\PutCheckinPersonsRequest**](../Model/PutCheckinPersonsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
