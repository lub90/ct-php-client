# ChurchTools\AbsenceApi

Endpoints for absences of persons.

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePersonsAbsence()**](AbsenceApi.md#deletePersonsAbsence) | **DELETE** /persons/{personId}/absences/{id} | Delete absence |
| [**getGroupsAbsences()**](AbsenceApi.md#getGroupsAbsences) | **GET** /groups/{groupId}/absences | Fetch all absences for persons in a group |
| [**getPersonsAbsence()**](AbsenceApi.md#getPersonsAbsence) | **GET** /persons/{personId}/absences/{id} | Fetch one absence |
| [**getPersonsAbsences()**](AbsenceApi.md#getPersonsAbsences) | **GET** /persons/{personId}/absences | Fetch all absences for a person |
| [**postPersonsAbsences()**](AbsenceApi.md#postPersonsAbsences) | **POST** /persons/{personId}/absences | Create new absence for person |
| [**putPersonsAbsence()**](AbsenceApi.md#putPersonsAbsence) | **PUT** /persons/{personId}/absences/{id} | Update absence |


## `deletePersonsAbsence()`

```php
deletePersonsAbsence($person_id, $id)
```

Delete absence

Delete absence for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$id = 1; // int | ID of Entity

try {
    $apiInstance->deletePersonsAbsence($person_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->deletePersonsAbsence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
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

## `getGroupsAbsences()`

```php
getGroupsAbsences($group_id, $from, $to, $order_direction): \ChurchTools\Model\GetGroupsAbsences200Response
```

Fetch all absences for persons in a group

This endpoint returns absences for persons in a group. Absences are sorted by startDate that means, the newest absence is first.  The endpoint uses a time window. If no query parameter are present only absences between two weeks ago and two weeks in the future are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$order_direction = DESC; // string

try {
    $result = $apiInstance->getGroupsAbsences($group_id, $from, $to, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getGroupsAbsences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **order_direction** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetGroupsAbsences200Response**](../Model/GetGroupsAbsences200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsAbsence()`

```php
getPersonsAbsence($person_id, $id): \ChurchTools\Model\PostPersonsAbsences201Response
```

Fetch one absence

Fetch one absence for person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getPersonsAbsence($person_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getPersonsAbsence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\PostPersonsAbsences201Response**](../Model/PostPersonsAbsences201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsAbsences()`

```php
getPersonsAbsences($person_id, $from, $to, $order_direction): \ChurchTools\Model\GetGroupsAbsences200Response
```

Fetch all absences for a person

This endpoint returns absences for a person. Absences are sorted by startDate that means, the newest absence is first.  The endpoint uses a time window. If no query parameter are present only absences between two weeks ago and two weeks in the future are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$order_direction = DESC; // string

try {
    $result = $apiInstance->getPersonsAbsences($person_id, $from, $to, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->getPersonsAbsences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **order_direction** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetGroupsAbsences200Response**](../Model/GetGroupsAbsences200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPersonsAbsences()`

```php
postPersonsAbsences($person_id, $post_persons_absences_request): \ChurchTools\Model\PostPersonsAbsences201Response
```

Create new absence for person

Save new absence for this person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$post_persons_absences_request = new \ChurchTools\Model\PostPersonsAbsencesRequest(); // \ChurchTools\Model\PostPersonsAbsencesRequest | Absences can be all-day or with a specific time. Either `startDate`, `endDate`  or `startTime`, `endTime` MUST be present. If `*Time` is given, the `*Date` value will be ignored.

try {
    $result = $apiInstance->postPersonsAbsences($person_id, $post_persons_absences_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->postPersonsAbsences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **post_persons_absences_request** | [**\ChurchTools\Model\PostPersonsAbsencesRequest**](../Model/PostPersonsAbsencesRequest.md)| Absences can be all-day or with a specific time. Either &#x60;startDate&#x60;, &#x60;endDate&#x60;  or &#x60;startTime&#x60;, &#x60;endTime&#x60; MUST be present. If &#x60;*Time&#x60; is given, the &#x60;*Date&#x60; value will be ignored. | [optional] |

### Return type

[**\ChurchTools\Model\PostPersonsAbsences201Response**](../Model/PostPersonsAbsences201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPersonsAbsence()`

```php
putPersonsAbsence($person_id, $id, $put_persons_absence_request): \ChurchTools\Model\PostPersonsAbsences201Response
```

Update absence

Update absence for person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$id = 1; // int | ID of Entity
$put_persons_absence_request = new \ChurchTools\Model\PutPersonsAbsenceRequest(); // \ChurchTools\Model\PutPersonsAbsenceRequest | Absences can be all-day or with a specific time. Either `startDate`, `endDate`  or `startTime`, `endTime` MUST be present. If `*Time` is given, the `*Date` value will be ignored.

try {
    $result = $apiInstance->putPersonsAbsence($person_id, $id, $put_persons_absence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->putPersonsAbsence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **id** | **int**| ID of Entity | |
| **put_persons_absence_request** | [**\ChurchTools\Model\PutPersonsAbsenceRequest**](../Model/PutPersonsAbsenceRequest.md)| Absences can be all-day or with a specific time. Either &#x60;startDate&#x60;, &#x60;endDate&#x60;  or &#x60;startTime&#x60;, &#x60;endTime&#x60; MUST be present. If &#x60;*Time&#x60; is given, the &#x60;*Date&#x60; value will be ignored. | [optional] |

### Return type

[**\ChurchTools\Model\PostPersonsAbsences201Response**](../Model/PostPersonsAbsences201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
