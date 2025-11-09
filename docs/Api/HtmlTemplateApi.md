# ChurchTools\HtmlTemplateApi

Endpoints for HTML templates

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createHtmlTemplate()**](HtmlTemplateApi.md#createHtmlTemplate) | **POST** /htmltemplates | Create HTML template |
| [**deleteHtmlTemplate()**](HtmlTemplateApi.md#deleteHtmlTemplate) | **DELETE** /htmltemplates/{id} |  |
| [**exportHtmlTemplate()**](HtmlTemplateApi.md#exportHtmlTemplate) | **GET** /htmltemplates/{id}/export | Export specific HTML template |
| [**getAllHtmlTemplates()**](HtmlTemplateApi.md#getAllHtmlTemplates) | **GET** /htmltemplates | GET HTML templates of one template type |
| [**getGroupsGroupIdDocumenttemplates()**](HtmlTemplateApi.md#getGroupsGroupIdDocumenttemplates) | **GET** /groups/{groupId}/documenttemplates |  |
| [**getHtmlTemplate()**](HtmlTemplateApi.md#getHtmlTemplate) | **GET** /htmltemplates/{id} | GET specific HTML template |
| [**getHtmlTemplateHtmlContent()**](HtmlTemplateApi.md#getHtmlTemplateHtmlContent) | **GET** /htmltemplates/{id}/html | GET HTML content of a specific HTML template |
| [**getHtmlTemplateMjmlContent()**](HtmlTemplateApi.md#getHtmlTemplateMjmlContent) | **GET** /htmltemplates/{id}/mjml | GET MJML content of a specific HTML template |
| [**updateHtmlTemplate()**](HtmlTemplateApi.md#updateHtmlTemplate) | **PATCH** /htmltemplates/{id} | Update HTML template |


## `createHtmlTemplate()`

```php
createHtmlTemplate($create_html_template_request): \ChurchTools\Model\CreateHtmlTemplate201Response
```

Create HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_html_template_request = new \ChurchTools\Model\CreateHtmlTemplateRequest(); // \ChurchTools\Model\CreateHtmlTemplateRequest

try {
    $result = $apiInstance->createHtmlTemplate($create_html_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->createHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_html_template_request** | [**\ChurchTools\Model\CreateHtmlTemplateRequest**](../Model/CreateHtmlTemplateRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CreateHtmlTemplate201Response**](../Model/CreateHtmlTemplate201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHtmlTemplate()`

```php
deleteHtmlTemplate($id)
```



Delete an existing HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->deleteHtmlTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->deleteHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `exportHtmlTemplate()`

```php
exportHtmlTemplate($id): \ChurchTools\Model\GetCsrftoken200Response
```

Export specific HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->exportHtmlTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->exportHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetCsrftoken200Response**](../Model/GetCsrftoken200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllHtmlTemplates()`

```php
getAllHtmlTemplates($domain_type): \ChurchTools\Model\GetAllHtmlTemplates200Response
```

GET HTML templates of one template type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'email'; // string

try {
    $result = $apiInstance->getAllHtmlTemplates($domain_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->getAllHtmlTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**|  | [default to &#39;email&#39;] |

### Return type

[**\ChurchTools\Model\GetAllHtmlTemplates200Response**](../Model/GetAllHtmlTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdDocumenttemplates()`

```php
getGroupsGroupIdDocumenttemplates($group_id): \ChurchTools\Model\GetGroupsGroupIdDocumenttemplates200Response
```



Get id and name for group document templates of the doucmemnts available for the current user in the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdDocumenttemplates($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->getGroupsGroupIdDocumenttemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdDocumenttemplates200Response**](../Model/GetGroupsGroupIdDocumenttemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHtmlTemplate()`

```php
getHtmlTemplate($id): \ChurchTools\Model\GetHtmlTemplate200Response
```

GET specific HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getHtmlTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->getHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetHtmlTemplate200Response**](../Model/GetHtmlTemplate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHtmlTemplateHtmlContent()`

```php
getHtmlTemplateHtmlContent($id): \ChurchTools\Model\GetHtmlTemplateHtmlContent200Response
```

GET HTML content of a specific HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getHtmlTemplateHtmlContent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->getHtmlTemplateHtmlContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetHtmlTemplateHtmlContent200Response**](../Model/GetHtmlTemplateHtmlContent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHtmlTemplateMjmlContent()`

```php
getHtmlTemplateMjmlContent($id): \ChurchTools\Model\GetHtmlTemplateHtmlContent200Response
```

GET MJML content of a specific HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getHtmlTemplateMjmlContent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->getHtmlTemplateMjmlContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ChurchTools\Model\GetHtmlTemplateHtmlContent200Response**](../Model/GetHtmlTemplateHtmlContent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHtmlTemplate()`

```php
updateHtmlTemplate($id, $update_html_template_request): \ChurchTools\Model\GetAllHtmlTemplates200Response
```

Update HTML template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HtmlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_html_template_request = new \ChurchTools\Model\UpdateHtmlTemplateRequest(); // \ChurchTools\Model\UpdateHtmlTemplateRequest

try {
    $result = $apiInstance->updateHtmlTemplate($id, $update_html_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlTemplateApi->updateHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_html_template_request** | [**\ChurchTools\Model\UpdateHtmlTemplateRequest**](../Model/UpdateHtmlTemplateRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetAllHtmlTemplates200Response**](../Model/GetAllHtmlTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
