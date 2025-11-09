# ChurchTools\ResourceApi

CRUD methods for Resources

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBookings()**](ResourceApi.md#deleteBookings) | **DELETE** /bookings/{bookingId} | Delete booking |
| [**getBookingBookingId()**](ResourceApi.md#getBookingBookingId) | **GET** /bookings/{bookingId} | Get booking |
| [**getBookings()**](ResourceApi.md#getBookings) | **GET** /bookings | Your GET endpoint |
| [**getResourceMasterdata()**](ResourceApi.md#getResourceMasterdata) | **GET** /resource/masterdata | Your GET endpoint |
| [**getResourcesResourceIdStatistics()**](ResourceApi.md#getResourcesResourceIdStatistics) | **GET** /resources/{resourceId}/statistics | Get resource |
| [**postBookings()**](ResourceApi.md#postBookings) | **POST** /bookings | Create new booking |
| [**putBookingsBookingIdAnswer()**](ResourceApi.md#putBookingsBookingIdAnswer) | **PUT** /bookings/{bookingId}/{answer} | Update status of booking |
| [**splitAndUpdateBooking()**](ResourceApi.md#splitAndUpdateBooking) | **POST** /bookings/{bookingId} | Splits a booking into two bookings. The original booking is splitted and a new booking is created with the data from the request. |
| [**updateBooking()**](ResourceApi.md#updateBooking) | **PUT** /bookings/{bookingId} | Update booking |


## `deleteBookings()`

```php
deleteBookings($booking_id)
```

Delete booking

Deletes the specified booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking

try {
    $apiInstance->deleteBookings($booking_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->deleteBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |

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

## `getBookingBookingId()`

```php
getBookingBookingId($booking_id): \ChurchTools\Model\GetBookingBookingId200Response
```

Get booking

Get the specified booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking

try {
    $result = $apiInstance->getBookingBookingId($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getBookingBookingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |

### Return type

[**\ChurchTools\Model\GetBookingBookingId200Response**](../Model/GetBookingBookingId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookings()`

```php
getBookings($resource_ids, $include, $query, $person_id, $status_ids, $from, $to): \ChurchTools\Model\GetBookings200Response
```

Your GET endpoint

Get all bookings matching the specified conditions. (NB: The `to` parameter is here still *inclusive*, but will be *exclusive* at a future point in time.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_ids = array(56); // int[]
$include = array('include_example'); // string[]
$query = 'query_example'; // string
$person_id = 56; // int | Filters all bookings created by this person or has this person set as onBehalfOfPid
$status_ids = array(56); // int[] | The status id can be one or more of the following values: 1 (pending), 2 (approved), 3 (canceled), 99 (deleted) -- default: 1, 2
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.

try {
    $result = $apiInstance->getBookings($resource_ids, $include, $query, $person_id, $status_ids, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_ids** | [**int[]**](../Model/int.md)|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |
| **query** | **string**|  | [optional] |
| **person_id** | **int**| Filters all bookings created by this person or has this person set as onBehalfOfPid | [optional] |
| **status_ids** | [**int[]**](../Model/int.md)| The status id can be one or more of the following values: 1 (pending), 2 (approved), 3 (canceled), 99 (deleted) -- default: 1, 2 | [optional] |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |

### Return type

[**\ChurchTools\Model\GetBookings200Response**](../Model/GetBookings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourceMasterdata()`

```php
getResourceMasterdata(): \ChurchTools\Model\GetResourceMasterdata200Response
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


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResourceMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResourceMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetResourceMasterdata200Response**](../Model/GetResourceMasterdata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourcesResourceIdStatistics()`

```php
getResourcesResourceIdStatistics($resource_id): \ChurchTools\Model\GetResourcesResourceIdStatistics200Response
```

Get resource

Get resource statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 7; // float

try {
    $result = $apiInstance->getResourcesResourceIdStatistics($resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResourcesResourceIdStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **float**|  | |

### Return type

[**\ChurchTools\Model\GetResourcesResourceIdStatistics200Response**](../Model/GetResourcesResourceIdStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBookings()`

```php
postBookings($post_bookings_request): \ChurchTools\Model\PostBookings201Response
```

Create new booking

Create a new booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_bookings_request = new \ChurchTools\Model\PostBookingsRequest(); // \ChurchTools\Model\PostBookingsRequest | booking data

try {
    $result = $apiInstance->postBookings($post_bookings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->postBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_bookings_request** | [**\ChurchTools\Model\PostBookingsRequest**](../Model/PostBookingsRequest.md)| booking data | [optional] |

### Return type

[**\ChurchTools\Model\PostBookings201Response**](../Model/PostBookings201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBookingsBookingIdAnswer()`

```php
putBookingsBookingIdAnswer($booking_id, $answer): \ChurchTools\Model\PostBookings201Response
```

Update status of booking

Update the status of the specified booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking
$answer = 'answer_example'; // string | Answer given to booking request

try {
    $result = $apiInstance->putBookingsBookingIdAnswer($booking_id, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->putBookingsBookingIdAnswer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |
| **answer** | **string**| Answer given to booking request | |

### Return type

[**\ChurchTools\Model\PostBookings201Response**](../Model/PostBookings201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `splitAndUpdateBooking()`

```php
splitAndUpdateBooking($booking_id, $split_and_update_booking_request)
```

Splits a booking into two bookings. The original booking is splitted and a new booking is created with the data from the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking
$split_and_update_booking_request = new \ChurchTools\Model\SplitAndUpdateBookingRequest(); // \ChurchTools\Model\SplitAndUpdateBookingRequest

try {
    $apiInstance->splitAndUpdateBooking($booking_id, $split_and_update_booking_request);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->splitAndUpdateBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |
| **split_and_update_booking_request** | [**\ChurchTools\Model\SplitAndUpdateBookingRequest**](../Model/SplitAndUpdateBookingRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBooking()`

```php
updateBooking($booking_id, $update_booking_request): \ChurchTools\Model\PostBookings201Response
```

Update booking

Update the specified booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking
$update_booking_request = new \ChurchTools\Model\UpdateBookingRequest(); // \ChurchTools\Model\UpdateBookingRequest

try {
    $result = $apiInstance->updateBooking($booking_id, $update_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->updateBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |
| **update_booking_request** | [**\ChurchTools\Model\UpdateBookingRequest**](../Model/UpdateBookingRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostBookings201Response**](../Model/PostBookings201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
