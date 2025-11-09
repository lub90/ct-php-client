# ChurchTools\DynamicGroupsApi

Endpoints dynamic groups

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRuleset()**](DynamicGroupsApi.md#deleteRuleset) | **DELETE** /dynamicgroups/{groupId}/ruleset |  |
| [**editRuleset()**](DynamicGroupsApi.md#editRuleset) | **PUT** /dynamicgroups/{groupId}/ruleset | Install a rule set for automatic membership |
| [**getDynamicgroups()**](DynamicGroupsApi.md#getDynamicgroups) | **GET** /dynamicgroups | get all dynamic groups |
| [**postDynamicgroups()**](DynamicGroupsApi.md#postDynamicgroups) | **POST** /dynamicgroups/refresh | refresh all dynamic groups |
| [**putDynamicgrouopStatus()**](DynamicGroupsApi.md#putDynamicgrouopStatus) | **PUT** /dynamicgroups/{groupId}/status | get status of dynamic Group |
| [**refreshDynamicgroups()**](DynamicGroupsApi.md#refreshDynamicgroups) | **POST** /dynamicgroups/{groupId}/refresh | refresh one dynamic Group |


## `deleteRuleset()`

```php
deleteRuleset($group_id)
```



**Caution**: This is an preliminary API, and is subject to be changed. Delete the ruleset of a dynamic Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $apiInstance->deleteRuleset($group_id);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->deleteRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

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

## `editRuleset()`

```php
editRuleset($group_id, $edit_ruleset_request): \ChurchTools\Model\EditRuleset200Response
```

Install a rule set for automatic membership

**Caution**: This is an preliminary API, and is subject to be changed. adds or updates the ruleset of a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group
$edit_ruleset_request = new \ChurchTools\Model\EditRulesetRequest(); // \ChurchTools\Model\EditRulesetRequest

try {
    $result = $apiInstance->editRuleset($group_id, $edit_ruleset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->editRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |
| **edit_ruleset_request** | [**\ChurchTools\Model\EditRulesetRequest**](../Model/EditRulesetRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\EditRuleset200Response**](../Model/EditRuleset200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDynamicgroups()`

```php
getDynamicgroups(): \ChurchTools\Model\GetDynamicgroups200Response
```

get all dynamic groups

**Caution**: This is an preliminary API, and is subject to be changed. Retuns the id of all dynamic groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDynamicgroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getDynamicgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetDynamicgroups200Response**](../Model/GetDynamicgroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDynamicgroups()`

```php
postDynamicgroups(): \ChurchTools\Model\PostDynamicgroups200Response
```

refresh all dynamic groups

**Caution**: This is an preliminary API, and is subject to be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postDynamicgroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->postDynamicgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\PostDynamicgroups200Response**](../Model/PostDynamicgroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDynamicgrouopStatus()`

```php
putDynamicgrouopStatus($group_id, $put_dynamicgrouop_status_request): \ChurchTools\Model\EditRuleset200Response
```

get status of dynamic Group

> **Caution**: This is an preliminary API, and is subject to be changed.  set the refresh status of a dynamic group  * `active` the group is atomatically refreshed on a regular baseis * `inactive` the group is not refrehes automatically - note that inactive groups cannot even be refreshed manually * `manual` the group is refreshed only manally * `none` the group is not a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group
$put_dynamicgrouop_status_request = new \ChurchTools\Model\PutDynamicgrouopStatusRequest(); // \ChurchTools\Model\PutDynamicgrouopStatusRequest

try {
    $result = $apiInstance->putDynamicgrouopStatus($group_id, $put_dynamicgrouop_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->putDynamicgrouopStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |
| **put_dynamicgrouop_status_request** | [**\ChurchTools\Model\PutDynamicgrouopStatusRequest**](../Model/PutDynamicgrouopStatusRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\EditRuleset200Response**](../Model/EditRuleset200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshDynamicgroups()`

```php
refreshDynamicgroups($group_id): \ChurchTools\Model\RefreshDynamicgroups200Response
```

refresh one dynamic Group

**Caution**: This is an preliminary API, and is subject to be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int

try {
    $result = $apiInstance->refreshDynamicgroups($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->refreshDynamicgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**|  | |

### Return type

[**\ChurchTools\Model\RefreshDynamicgroups200Response**](../Model/RefreshDynamicgroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
