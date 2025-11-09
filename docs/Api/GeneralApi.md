# ChurchTools\GeneralApi

Endpoints of general purpose

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSimulate()**](GeneralApi.md#deleteSimulate) | **DELETE** /simulate |  |
| [**getApiInfo()**](GeneralApi.md#getApiInfo) | **GET** /info | Information about API |
| [**getCaptcha()**](GeneralApi.md#getCaptcha) | **GET** /captcha | Altcha Captcha Challenge |
| [**getConfig()**](GeneralApi.md#getConfig) | **GET** /config | Get the ChurchTools-Config |
| [**getCsrftoken()**](GeneralApi.md#getCsrftoken) | **GET** /csrftoken | CSRF token for the current user |
| [**getSearch()**](GeneralApi.md#getSearch) | **GET** /search | Global Search |
| [**getWhoami()**](GeneralApi.md#getWhoami) | **GET** /whoami | Currently logged in user. |
| [**postCaptcha()**](GeneralApi.md#postCaptcha) | **POST** /captcha | Altcha Captcha Verification |
| [**postLogin()**](GeneralApi.md#postLogin) | **POST** /login | Login with username |
| [**postLoginTotp()**](GeneralApi.md#postLoginTotp) | **POST** /login/totp | Verify Two Factor Code |
| [**postLogout()**](GeneralApi.md#postLogout) | **POST** /logout | Logout |
| [**postMarkdown()**](GeneralApi.md#postMarkdown) | **POST** /markdown/convert | Convert Markdown to HTML etc. |
| [**postMarkdownCheck()**](GeneralApi.md#postMarkdownCheck) | **POST** /markdown/check | Validate Markdown string |
| [**postResetPassword()**](GeneralApi.md#postResetPassword) | **POST** /reset-password | Request password reset |
| [**postSimulate()**](GeneralApi.md#postSimulate) | **POST** /simulate |  |
| [**putConfig()**](GeneralApi.md#putConfig) | **PUT** /config | Change the ChurchTools-Config |


## `deleteSimulate()`

```php
deleteSimulate(): \ChurchTools\Model\DeleteSimulate200Response
```



Stops the current simulation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteSimulate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\DeleteSimulate200Response**](../Model/DeleteSimulate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiInfo()`

```php
getApiInfo(): \ChurchTools\Model\GetApiInfo200Response
```

Information about API

The API envoles and dependes on the ChurchTools version. This endpoint provides the build version and CT version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getApiInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetApiInfo200Response**](../Model/GetApiInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCaptcha()`

```php
getCaptcha(): \ChurchTools\Model\GetCaptcha200Response
```

Altcha Captcha Challenge

Get a new challenge to solve. To be used with https://altcha.org/docs/website-integration/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCaptcha();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getCaptcha: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetCaptcha200Response**](../Model/GetCaptcha200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConfig()`

```php
getConfig($extended): \ChurchTools\Model\GetConfig200Response
```

Get the ChurchTools-Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extended = True; // bool | If `true` the response will contain the extended config.

try {
    $result = $apiInstance->getConfig($extended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extended** | **bool**| If &#x60;true&#x60; the response will contain the extended config. | [optional] |

### Return type

[**\ChurchTools\Model\GetConfig200Response**](../Model/GetConfig200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCsrftoken()`

```php
getCsrftoken(): \ChurchTools\Model\GetCsrftoken200Response
```

CSRF token for the current user

Returns the CSRF-Token for the current user in the current session. If the session does not exist, null is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCsrftoken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getCsrftoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetCsrftoken200Response**](../Model/GetCsrftoken200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearch()`

```php
getSearch($query, $domain_types): \ChurchTools\Model\GetSearch200Response
```

Global Search

Search globally for different or all domain types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = max; // string
$domain_types = array('domain_types_example'); // string[]

try {
    $result = $apiInstance->getSearch($query, $domain_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | |
| **domain_types** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetSearch200Response**](../Model/GetSearch200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhoami()`

```php
getWhoami($only_allow_authenticated): \ChurchTools\Model\GetWhoami200Response
```

Currently logged in user.

This endpoint returns the current user. If the request is unauthorized, the anonymous user (aka public user) is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$only_allow_authenticated = false; // bool | If set to `true` the route will return 401 Unauthorized if the user is not logged in.

try {
    $result = $apiInstance->getWhoami($only_allow_authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getWhoami: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_allow_authenticated** | **bool**| If set to &#x60;true&#x60; the route will return 401 Unauthorized if the user is not logged in. | [optional] |

### Return type

[**\ChurchTools\Model\GetWhoami200Response**](../Model/GetWhoami200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCaptcha()`

```php
postCaptcha($post_captcha_request): \ChurchTools\Model\PostCaptcha200Response
```

Altcha Captcha Verification

Verify a captcha solution. Only for testing purposes. Other endpoints that require a captcha take the solution directly. See https://altcha.org/docs/website-integration/ for more information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_captcha_request = new \ChurchTools\Model\PostCaptchaRequest(); // \ChurchTools\Model\PostCaptchaRequest

try {
    $result = $apiInstance->postCaptcha($post_captcha_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postCaptcha: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_captcha_request** | [**\ChurchTools\Model\PostCaptchaRequest**](../Model/PostCaptchaRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostCaptcha200Response**](../Model/PostCaptcha200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLogin()`

```php
postLogin($post_login_request): \ChurchTools\Model\PostLogin200Response
```

Login with username



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_login_request = new \ChurchTools\Model\PostLoginRequest(); // \ChurchTools\Model\PostLoginRequest

try {
    $result = $apiInstance->postLogin($post_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_login_request** | [**\ChurchTools\Model\PostLoginRequest**](../Model/PostLoginRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostLogin200Response**](../Model/PostLogin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLoginTotp()`

```php
postLoginTotp($post_login_totp_request): \ChurchTools\Model\PostLoginTotp200Response
```

Verify Two Factor Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_login_totp_request = new \ChurchTools\Model\PostLoginTotpRequest(); // \ChurchTools\Model\PostLoginTotpRequest

try {
    $result = $apiInstance->postLoginTotp($post_login_totp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postLoginTotp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_login_totp_request** | [**\ChurchTools\Model\PostLoginTotpRequest**](../Model/PostLoginTotpRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostLoginTotp200Response**](../Model/PostLoginTotp200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLogout()`

```php
postLogout()
```

Logout

Logs out the current user and destroys the associated session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postLogout();
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `postMarkdown()`

```php
postMarkdown($markdown_conversion_request): \ChurchTools\Model\GetConfig200Response
```

Convert Markdown to HTML etc.

convert a set of markdown strings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markdown_conversion_request = new \ChurchTools\Model\MarkdownConversionRequest(); // \ChurchTools\Model\MarkdownConversionRequest

try {
    $result = $apiInstance->postMarkdown($markdown_conversion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postMarkdown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **markdown_conversion_request** | [**\ChurchTools\Model\MarkdownConversionRequest**](../Model/MarkdownConversionRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetConfig200Response**](../Model/GetConfig200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMarkdownCheck()`

```php
postMarkdownCheck($post_markdown_check_request): \ChurchTools\Model\PostMarkdownCheck200Response
```

Validate Markdown string

Check if the provided Markdown content is valid for the specified scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_markdown_check_request = new \ChurchTools\Model\PostMarkdownCheckRequest(); // \ChurchTools\Model\PostMarkdownCheckRequest

try {
    $result = $apiInstance->postMarkdownCheck($post_markdown_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postMarkdownCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_markdown_check_request** | [**\ChurchTools\Model\PostMarkdownCheckRequest**](../Model/PostMarkdownCheckRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostMarkdownCheck200Response**](../Model/PostMarkdownCheck200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postResetPassword()`

```php
postResetPassword($post_reset_password_request): \ChurchTools\Model\PostResetPassword200Response
```

Request password reset

Api to request a password reset via email or username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_reset_password_request = new \ChurchTools\Model\PostResetPasswordRequest(); // \ChurchTools\Model\PostResetPasswordRequest

try {
    $result = $apiInstance->postResetPassword($post_reset_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_reset_password_request** | [**\ChurchTools\Model\PostResetPasswordRequest**](../Model/PostResetPasswordRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostResetPassword200Response**](../Model/PostResetPassword200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulate()`

```php
postSimulate($post_simulate_request)
```



Starts the simulation of another person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_simulate_request = new \ChurchTools\Model\PostSimulateRequest(); // \ChurchTools\Model\PostSimulateRequest

try {
    $apiInstance->postSimulate($post_simulate_request);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_simulate_request** | [**\ChurchTools\Model\PostSimulateRequest**](../Model/PostSimulateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putConfig()`

```php
putConfig(): \ChurchTools\Model\GetConfig200Response
```

Change the ChurchTools-Config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->putConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->putConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetConfig200Response**](../Model/GetConfig200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
