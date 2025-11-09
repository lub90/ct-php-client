# ChurchTools\GroupHomepageApi

Endpoints for public groups and registration forms

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteGroupsGroupIdGrouphomepage()**](GroupHomepageApi.md#deleteGroupsGroupIdGrouphomepage) | **DELETE** /groups/{groupId}/grouphomepage | Delete the group homepage information for the specified group |
| [**getGroupForHomepage()**](GroupHomepageApi.md#getGroupForHomepage) | **GET** /publicgroups/{groupId}/{hash} | Public information of group |
| [**getGroupHomepage()**](GroupHomepageApi.md#getGroupHomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings |
| [**getGroupHomepages()**](GroupHomepageApi.md#getGroupHomepages) | **GET** /grouphomepages | Get all Grouphomepages |
| [**getGroupsGroupIdGrouphomepage()**](GroupHomepageApi.md#getGroupsGroupIdGrouphomepage) | **GET** /groups/{groupId}/grouphomepage | Get the group homepage information for the specified group |
| [**getPublicGroupSignoutData()**](GroupHomepageApi.md#getPublicGroupSignoutData) | **GET** /publicgroups/{groupId}/signoutdata |  |
| [**getPublicgroup()**](GroupHomepageApi.md#getPublicgroup) | **GET** /publicgroups/{groupId} |  |
| [**getPublicgroupsGroupIdForm()**](GroupHomepageApi.md#getPublicgroupsGroupIdForm) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form |
| [**getPublicgroupsGroupIdPossiblerequesters()**](GroupHomepageApi.md#getPublicgroupsGroupIdPossiblerequesters) | **GET** /publicgroups/{groupId}/possiblerequesters | Your GET endpoint |
| [**issueSignUpToken()**](GroupHomepageApi.md#issueSignUpToken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token. |
| [**postPublicgroupsGroupIdMailToLeaders()**](GroupHomepageApi.md#postPublicgroupsGroupIdMailToLeaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders |
| [**postPublicgroupsGroupIdSignup()**](GroupHomepageApi.md#postPublicgroupsGroupIdSignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group |
| [**putGroupsGroupIdGrouphomepage()**](GroupHomepageApi.md#putGroupsGroupIdGrouphomepage) | **PUT** /groups/{groupId}/grouphomepage | Update the group homepage information for the specified group |


## `deleteGroupsGroupIdGrouphomepage()`

```php
deleteGroupsGroupIdGrouphomepage($group_id)
```

Delete the group homepage information for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $apiInstance->deleteGroupsGroupIdGrouphomepage($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->deleteGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

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

## `getGroupForHomepage()`

```php
getGroupForHomepage($hash, $group_id): \ChurchTools\Model\PublicGroup2
```

Public information of group

Request a group for a group homepage. Only necessary fields for a public group homepage are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Group Homepage Hash
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupForHomepage($hash, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Group Homepage Hash | |
| **group_id** | **string**| Group ID | |

### Return type

[**\ChurchTools\Model\PublicGroup2**](../Model/PublicGroup2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupHomepage()`

```php
getGroupHomepage($hash): \ChurchTools\Model\GetGroupHomepage200Response
```

Get information about public groups with settings

Get all information necessary to display public groups. The response will provide setting information and all public groups with information for the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = RNdjTK0tGp1N1afoblczGbFb8ikLfa9b; // string | Random hash for public groups

try {
    $result = $apiInstance->getGroupHomepage($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Random hash for public groups | |

### Return type

[**\ChurchTools\Model\GetGroupHomepage200Response**](../Model/GetGroupHomepage200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupHomepages()`

```php
getGroupHomepages(): \ChurchTools\Model\GetGroupHomepages200Response
```

Get all Grouphomepages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupHomepages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupHomepages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupHomepages200Response**](../Model/GetGroupHomepages200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdGrouphomepage()`

```php
getGroupsGroupIdGrouphomepage($group_id): \ChurchTools\Model\GetGroupsGroupIdGrouphomepage200Response
```

Get the group homepage information for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdGrouphomepage($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdGrouphomepage200Response**](../Model/GetGroupsGroupIdGrouphomepage200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicGroupSignoutData()`

```php
getPublicGroupSignoutData($group_id): \ChurchTools\Model\GetPublicGroupSignoutData200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getPublicGroupSignoutData($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getPublicGroupSignoutData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetPublicGroupSignoutData200Response**](../Model/GetPublicGroupSignoutData200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroup()`

```php
getPublicgroup($group_id): \ChurchTools\Model\GetPublicgroup200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getPublicgroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getPublicgroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetPublicgroup200Response**](../Model/GetPublicgroup200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroupsGroupIdForm()`

```php
getPublicgroupsGroupIdForm($group_id, $token, $person_id): \ChurchTools\Model\GetPublicgroupsGroupIdForm200Response
```

Get a Group Sign Up Form

When granted a sign up token, this endpoint returns all fields to display a sign up form for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$token = 'token_example'; // string | Sign Up Token
$person_id = 'person_id_example'; // string | The name for which the signup should be made

try {
    $result = $apiInstance->getPublicgroupsGroupIdForm($group_id, $token, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID of the public group | |
| **token** | **string**| Sign Up Token | |
| **person_id** | **string**| The name for which the signup should be made | |

### Return type

[**\ChurchTools\Model\GetPublicgroupsGroupIdForm200Response**](../Model/GetPublicgroupsGroupIdForm200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroupsGroupIdPossiblerequesters()`

```php
getPublicgroupsGroupIdPossiblerequesters($token, $group_id): \ChurchTools\Model\GetPublicgroupsGroupIdPossiblerequesters200Response
```

Your GET endpoint

Get a list of persons which could be the requester of the signup. More than one is possible because signup wirks with emails and they are not unique in ChurchTools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The signup token for the registration
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getPublicgroupsGroupIdPossiblerequesters($token, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getPublicgroupsGroupIdPossiblerequesters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The signup token for the registration | |
| **group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetPublicgroupsGroupIdPossiblerequesters200Response**](../Model/GetPublicgroupsGroupIdPossiblerequesters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueSignUpToken()`

```php
issueSignUpToken($group_id, $issue_sign_up_token_request): \ChurchTools\Model\IssueSignUpToken200Response
```

Issue new sign up token.

The sign up token is needed to sign up to a public or open group using the form. The token can be issued by person id or for an email. If the person id is given, the token and the form url is returned. If an eMail address is given, the system checks if a user exists with that eMail, if s/he is already in the group or if the eMail is new to the system, hence a new user account would be necessary. The mail is sent with detailed information and a link to the sign up form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Group id of public group
$issue_sign_up_token_request = new \ChurchTools\Model\IssueSignUpTokenRequest(); // \ChurchTools\Model\IssueSignUpTokenRequest | You MUST provide either `personId` OR `email`. Both fields cannot be present at the same time.

try {
    $result = $apiInstance->issueSignUpToken($group_id, $issue_sign_up_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Group id of public group | |
| **issue_sign_up_token_request** | [**\ChurchTools\Model\IssueSignUpTokenRequest**](../Model/IssueSignUpTokenRequest.md)| You MUST provide either &#x60;personId&#x60; OR &#x60;email&#x60;. Both fields cannot be present at the same time. | [optional] |

### Return type

[**\ChurchTools\Model\IssueSignUpToken200Response**](../Model/IssueSignUpToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPublicgroupsGroupIdMailToLeaders()`

```php
postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request)
```

Send a Mail to Public Group Leaders

Sends a mail to each group leader of the public group who has an email address set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_mail_to_leaders_request = new \ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest(); // \ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID of the public group | |
| **post_publicgroups_group_id_mail_to_leaders_request** | [**\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest**](../Model/PostPublicgroupsGroupIdMailToLeadersRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPublicgroupsGroupIdSignup()`

```php
postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request): \ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response
```

Send a Sign Up Form to Get Signed Up into a Public Group

To sign a user up into a group, the form data has to be send to this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_signup_request = new \ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest(); // \ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest

try {
    $result = $apiInstance->postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID of the public group | |
| **post_publicgroups_group_id_signup_request** | [**\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest**](../Model/PostPublicgroupsGroupIdSignupRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response**](../Model/PostPublicgroupsGroupIdSignup200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putGroupsGroupIdGrouphomepage()`

```php
putGroupsGroupIdGrouphomepage($group_id): \ChurchTools\Model\GetGroupsGroupIdGrouphomepage200Response
```

Update the group homepage information for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->putGroupsGroupIdGrouphomepage($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->putGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdGrouphomepage200Response**](../Model/GetGroupsGroupIdGrouphomepage200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
