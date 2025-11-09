# ChurchTools\PostApi

Endpoints for Posts

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePostHiddenDomaintypeDomainid()**](PostApi.md#deletePostHiddenDomaintypeDomainid) | **DELETE** /post/hidden/{domainType}/{domainId} |  |
| [**deletePostsPostId()**](PostApi.md#deletePostsPostId) | **DELETE** /posts/{postId} |  |
| [**deletePostsPostIdCommentsCommentId()**](PostApi.md#deletePostsPostIdCommentsCommentId) | **DELETE** /posts/{postId}/comments/{commentId} |  |
| [**deletePostsPostIdReactionsEmojiPersonsPersonId()**](PostApi.md#deletePostsPostIdReactionsEmojiPersonsPersonId) | **DELETE** /posts/{postId}/reactions/{emoji}/persons/{personId} |  |
| [**getExternalPost()**](PostApi.md#getExternalPost) | **GET** /externalposts/instances/{instanceGuid}/channels/{channelGuid}/posts/{postGuid} |  |
| [**getExternalPosts()**](PostApi.md#getExternalPosts) | **GET** /externalposts |  |
| [**getPostGroups()**](PostApi.md#getPostGroups) | **GET** /post/groups |  |
| [**getPostHidden()**](PostApi.md#getPostHidden) | **GET** /post/hidden |  |
| [**getPostLinkings()**](PostApi.md#getPostLinkings) | **GET** /post/linkings |  |
| [**getPostReports()**](PostApi.md#getPostReports) | **GET** /post/reports |  |
| [**getPosts()**](PostApi.md#getPosts) | **GET** /posts |  |
| [**getPostsPostId()**](PostApi.md#getPostsPostId) | **GET** /posts/{postId} |  |
| [**getPostsPostIdComments()**](PostApi.md#getPostsPostIdComments) | **GET** /posts/{postId}/comments |  |
| [**getPostsPostIdReactions()**](PostApi.md#getPostsPostIdReactions) | **GET** /posts/{postId}/reactions |  |
| [**patchPostsPostId()**](PostApi.md#patchPostsPostId) | **PATCH** /posts/{postId} |  |
| [**postPostReports()**](PostApi.md#postPostReports) | **POST** /post/reports |  |
| [**postPosts()**](PostApi.md#postPosts) | **POST** /posts |  |
| [**postPostsPostIdComments()**](PostApi.md#postPostsPostIdComments) | **POST** /posts/{postId}/comments |  |
| [**putPostReportsAnswer()**](PostApi.md#putPostReportsAnswer) | **PUT** /post/reports/answer |  |
| [**putPostsPostIdExpire()**](PostApi.md#putPostsPostIdExpire) | **PUT** /posts/{postId}/expire |  |
| [**putPostsPostIdHiddenDomainType()**](PostApi.md#putPostsPostIdHiddenDomainType) | **PUT** /posts/{postId}/hidden/{domainType} |  |
| [**putPostsPostIdReactionsEmojiPersonsPersonId()**](PostApi.md#putPostsPostIdReactionsEmojiPersonsPersonId) | **PUT** /posts/{postId}/reactions/{emoji}/persons/{personId} |  |
| [**searchPosts()**](PostApi.md#searchPosts) | **GET** /post/search |  |


## `deletePostHiddenDomaintypeDomainid()`

```php
deletePostHiddenDomaintypeDomainid($domain_type, $domain_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string
$domain_id = 56; // int

try {
    $apiInstance->deletePostHiddenDomaintypeDomainid($domain_type, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->deletePostHiddenDomaintypeDomainid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**|  | |
| **domain_id** | **int**|  | |

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

## `deletePostsPostId()`

```php
deletePostsPostId($dry_run, $post_id)
```



Delete a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dry_run = True; // bool | If set to true, the post will not be deleted but the response will contain the result of the deletion.
$post_id = 42; // int | ID of post

try {
    $apiInstance->deletePostsPostId($dry_run, $post_id);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->deletePostsPostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dry_run** | **bool**| If set to true, the post will not be deleted but the response will contain the result of the deletion. | |
| **post_id** | **int**| ID of post | |

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

## `deletePostsPostIdCommentsCommentId()`

```php
deletePostsPostIdCommentsCommentId($post_id, $comment_id)
```



Delete a comment of a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$comment_id = 56; // int

try {
    $apiInstance->deletePostsPostIdCommentsCommentId($post_id, $comment_id);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->deletePostsPostIdCommentsCommentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **comment_id** | **int**|  | |

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

## `deletePostsPostIdReactionsEmojiPersonsPersonId()`

```php
deletePostsPostIdReactionsEmojiPersonsPersonId($post_id, $emoji, $person_id)
```



Delete a reaction of a person for a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$emoji = 'emoji_example'; // string
$person_id = 'person_id_example'; // string

try {
    $apiInstance->deletePostsPostIdReactionsEmojiPersonsPersonId($post_id, $emoji, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->deletePostsPostIdReactionsEmojiPersonsPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **emoji** | **string**|  | |
| **person_id** | **string**|  | |

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

## `getExternalPost()`

```php
getExternalPost($instance_guid, $channel_guid, $post_guid): \ChurchTools\Model\GetExternalPost200Response
```



Get one external Post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_guid = 'instance_guid_example'; // string | the guid of the instance to which the post belongs
$channel_guid = 'channel_guid_example'; // string | the guid of the channel to which the post belongs
$post_guid = 'post_guid_example'; // string | the guid of the post

try {
    $result = $apiInstance->getExternalPost($instance_guid, $channel_guid, $post_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getExternalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_guid** | **string**| the guid of the instance to which the post belongs | |
| **channel_guid** | **string**| the guid of the channel to which the post belongs | |
| **post_guid** | **string**| the guid of the post | |

### Return type

[**\ChurchTools\Model\GetExternalPost200Response**](../Model/GetExternalPost200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalPosts()`

```php
getExternalPosts($before, $last_post_indentifier, $after, $external_group_guid, $external_instance_guid, $include, $limit): \ChurchTools\Model\GetExternalPosts200Response
```



Get a list of external posts. The posts are sorted by the `createdDate` field descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date).
$last_post_indentifier = 'last_post_indentifier_example'; // string | If set, posts created at the \"before\" date are included in the result, if the guids of the posts are lexically smaller than the last_post_indentifier. Will be ignored if \"before\" is not set.
$after = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date).
$external_group_guid = array('external_group_guid_example'); // string[] | If set posts of these groups are returned.
$external_instance_guid = array('external_instance_guid_example'); // string[] | If set posts of these instances are returned.
$include = array('include_example'); // string[] | If set, the response will include the specified data.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getExternalPosts($before, $last_post_indentifier, $after, $external_group_guid, $external_instance_guid, $include, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getExternalPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **before** | **\DateTime**| If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **last_post_indentifier** | **string**| If set, posts created at the \&quot;before\&quot; date are included in the result, if the guids of the posts are lexically smaller than the last_post_indentifier. Will be ignored if \&quot;before\&quot; is not set. | [optional] |
| **after** | **\DateTime**| If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **external_group_guid** | [**string[]**](../Model/string.md)| If set posts of these groups are returned. | [optional] |
| **external_instance_guid** | [**string[]**](../Model/string.md)| If set posts of these instances are returned. | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetExternalPosts200Response**](../Model/GetExternalPosts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostGroups()`

```php
getPostGroups(): \ChurchTools\Model\GetPostGroups200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPostGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetPostGroups200Response**](../Model/GetPostGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostHidden()`

```php
getPostHidden(): \ChurchTools\Model\GetPostHidden200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPostHidden();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostHidden: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetPostHidden200Response**](../Model/GetPostHidden200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostLinkings()`

```php
getPostLinkings($post_ids): \ChurchTools\Model\GetPostLinkings200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_ids = array(56); // int[] | Filters for which posts the linkings should be loaded.

try {
    $result = $apiInstance->getPostLinkings($post_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostLinkings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_ids** | [**int[]**](../Model/int.md)| Filters for which posts the linkings should be loaded. | [optional] |

### Return type

[**\ChurchTools\Model\GetPostLinkings200Response**](../Model/GetPostLinkings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostReports()`

```php
getPostReports($domain_type, $domain_id, $status): \ChurchTools\Model\GetPostReports200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = 'domain_type_example'; // string
$domain_id = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->getPostReports($domain_type, $domain_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**|  | [optional] |
| **domain_id** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetPostReports200Response**](../Model/GetPostReports200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPosts()`

```php
getPosts($before, $last_post_indentifier, $after, $campus_id, $campus_ids, $actor_ids, $group_visibility, $post_visibility, $group_ids, $include, $limit, $only_my_groups): \ChurchTools\Model\GetPosts200Response
```



Get a list of posts. The posts are sorted by the `createdDate` field descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date).
$last_post_indentifier = 'last_post_indentifier_example'; // string | If set, posts created at the \"before\" date are included in the result, if the guids of the posts are lexically smaller than the last_post_indentifier. Will be ignored if \"before\" is not set.
$after = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date).
$campus_id = 56; // int | If set, only posts of this campus are returned. If not set, posts of all campuses are returned.
$campus_ids = array(56); // int[] | If set, only posts of these campuses are returned. If not set, posts of all campuses are returned.
$actor_ids = array(56); // int[] | If set, only posts by these persons are returned. If not set, posts by all persons are returned.
$group_visibility = 'group_visibility_example'; // string | If set, only posts are returned that belong to groups with this visibility.
$post_visibility = 'post_visibility_example'; // string | If set, only posts with that visibility are returned.
$group_ids = array(56); // int[] | If set, only posts of these groups are returned. If not set, posts of all groups are returned.
$include = array('include_example'); // string[] | If set, the response will include the specified data.
$limit = 10; // int | Number of results per page.
$only_my_groups = True; // bool | If set to true, only posts of groups the user is member of are returned. If not set, posts of all groups are returned.

try {
    $result = $apiInstance->getPosts($before, $last_post_indentifier, $after, $campus_id, $campus_ids, $actor_ids, $group_visibility, $post_visibility, $group_ids, $include, $limit, $only_my_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **before** | **\DateTime**| If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **last_post_indentifier** | **string**| If set, posts created at the \&quot;before\&quot; date are included in the result, if the guids of the posts are lexically smaller than the last_post_indentifier. Will be ignored if \&quot;before\&quot; is not set. | [optional] |
| **after** | **\DateTime**| If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **campus_id** | **int**| If set, only posts of this campus are returned. If not set, posts of all campuses are returned. | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| If set, only posts of these campuses are returned. If not set, posts of all campuses are returned. | [optional] |
| **actor_ids** | [**int[]**](../Model/int.md)| If set, only posts by these persons are returned. If not set, posts by all persons are returned. | [optional] |
| **group_visibility** | **string**| If set, only posts are returned that belong to groups with this visibility. | [optional] |
| **post_visibility** | **string**| If set, only posts with that visibility are returned. | [optional] |
| **group_ids** | [**int[]**](../Model/int.md)| If set, only posts of these groups are returned. If not set, posts of all groups are returned. | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **only_my_groups** | **bool**| If set to true, only posts of groups the user is member of are returned. If not set, posts of all groups are returned. | [optional] |

### Return type

[**\ChurchTools\Model\GetPosts200Response**](../Model/GetPosts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostsPostId()`

```php
getPostsPostId($post_id, $include): \ChurchTools\Model\GetExternalPost200Response
```



Get a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getPostsPostId($post_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostsPostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\GetExternalPost200Response**](../Model/GetExternalPost200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostsPostIdComments()`

```php
getPostsPostIdComments($post_id): \ChurchTools\Model\GetPostsPostIdComments200Response
```



Get a list of comments for a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post

try {
    $result = $apiInstance->getPostsPostIdComments($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostsPostIdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |

### Return type

[**\ChurchTools\Model\GetPostsPostIdComments200Response**](../Model/GetPostsPostIdComments200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostsPostIdReactions()`

```php
getPostsPostIdReactions($post_id): \ChurchTools\Model\GetPostsPostIdReactions200Response
```



Get a list of reactions for a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post

try {
    $result = $apiInstance->getPostsPostIdReactions($post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPostsPostIdReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |

### Return type

[**\ChurchTools\Model\GetPostsPostIdReactions200Response**](../Model/GetPostsPostIdReactions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPostsPostId()`

```php
patchPostsPostId($post_id, $patch_posts_post_id_request): \ChurchTools\Model\GetExternalPost200Response
```



Update a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$patch_posts_post_id_request = new \ChurchTools\Model\PatchPostsPostIdRequest(); // \ChurchTools\Model\PatchPostsPostIdRequest

try {
    $result = $apiInstance->patchPostsPostId($post_id, $patch_posts_post_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->patchPostsPostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **patch_posts_post_id_request** | [**\ChurchTools\Model\PatchPostsPostIdRequest**](../Model/PatchPostsPostIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetExternalPost200Response**](../Model/GetExternalPost200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPostReports()`

```php
postPostReports($post_post_reports_request): \ChurchTools\Model\PostPostReports201Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_post_reports_request = new \ChurchTools\Model\PostPostReportsRequest(); // \ChurchTools\Model\PostPostReportsRequest

try {
    $result = $apiInstance->postPostReports($post_post_reports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->postPostReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_post_reports_request** | [**\ChurchTools\Model\PostPostReportsRequest**](../Model/PostPostReportsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostPostReports201Response**](../Model/PostPostReports201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPosts()`

```php
postPosts($post_posts_request): \ChurchTools\Model\GetExternalPost200Response
```



Create a new post. Images must be uploaded previously in a separate request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_posts_request = new \ChurchTools\Model\PostPostsRequest(); // \ChurchTools\Model\PostPostsRequest

try {
    $result = $apiInstance->postPosts($post_posts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->postPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_posts_request** | [**\ChurchTools\Model\PostPostsRequest**](../Model/PostPostsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetExternalPost200Response**](../Model/GetExternalPost200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPostsPostIdComments()`

```php
postPostsPostIdComments($post_id, $post_posts_post_id_comments_request): \ChurchTools\Model\PostPostsPostIdComments201Response
```



Create a new comment for a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$post_posts_post_id_comments_request = new \ChurchTools\Model\PostPostsPostIdCommentsRequest(); // \ChurchTools\Model\PostPostsPostIdCommentsRequest

try {
    $result = $apiInstance->postPostsPostIdComments($post_id, $post_posts_post_id_comments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->postPostsPostIdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **post_posts_post_id_comments_request** | [**\ChurchTools\Model\PostPostsPostIdCommentsRequest**](../Model/PostPostsPostIdCommentsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostPostsPostIdComments201Response**](../Model/PostPostsPostIdComments201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPostReportsAnswer()`

```php
putPostReportsAnswer($put_post_reports_answer_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_post_reports_answer_request = new \ChurchTools\Model\PutPostReportsAnswerRequest(); // \ChurchTools\Model\PutPostReportsAnswerRequest

try {
    $apiInstance->putPostReportsAnswer($put_post_reports_answer_request);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->putPostReportsAnswer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_post_reports_answer_request** | [**\ChurchTools\Model\PutPostReportsAnswerRequest**](../Model/PutPostReportsAnswerRequest.md)|  | [optional] |

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

## `putPostsPostIdExpire()`

```php
putPostsPostIdExpire($post_id)
```



Expire the referenced post immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post

try {
    $apiInstance->putPostsPostIdExpire($post_id);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->putPostsPostIdExpire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |

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

## `putPostsPostIdHiddenDomainType()`

```php
putPostsPostIdHiddenDomainType($post_id, $domain_type)
```



Hide a post. This endpoint is used to hide a post from the timeline of the user. The post is not deleted, but the user will not see it anymore. NB: If the supplied domain type is `group`, this will also deactivate post-related subscriptions for that group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$domain_type = 'domain_type_example'; // string | The type of the domain where the post is hidden. This can be `actor`, `post`, or `group`.

try {
    $apiInstance->putPostsPostIdHiddenDomainType($post_id, $domain_type);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->putPostsPostIdHiddenDomainType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **domain_type** | **string**| The type of the domain where the post is hidden. This can be &#x60;actor&#x60;, &#x60;post&#x60;, or &#x60;group&#x60;. | |

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

## `putPostsPostIdReactionsEmojiPersonsPersonId()`

```php
putPostsPostIdReactionsEmojiPersonsPersonId($post_id, $emoji, $person_id): \ChurchTools\Model\PutPostsPostIdReactionsEmojiPersonsPersonId201Response
```



Create a new reaction of a person for a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 42; // int | ID of post
$emoji = 'emoji_example'; // string
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->putPostsPostIdReactionsEmojiPersonsPersonId($post_id, $emoji, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->putPostsPostIdReactionsEmojiPersonsPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **int**| ID of post | |
| **emoji** | **string**|  | |
| **person_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\PutPostsPostIdReactionsEmojiPersonsPersonId201Response**](../Model/PutPostsPostIdReactionsEmojiPersonsPersonId201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPosts()`

```php
searchPosts($query, $order_by, $order_direction, $before, $after, $campus_ids, $actor_ids, $group_visibility, $post_visibility, $group_ids, $include, $only_my_groups): \ChurchTools\Model\SearchPosts200Response
```



Search posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The query string to search for in post title and content
$order_by = 'order_by_example'; // string | The order the posts are returned in.
$order_direction = 'order_direction_example'; // string | The order direction. Only works for order_by publishedDate.
$before = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date).
$after = 2022-10-19T12:00:00Z; // \DateTime | If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date).
$campus_ids = array(56); // int[] | If set, only posts of these campuses are returned. If not set, posts of all campuses are returned.
$actor_ids = array(56); // int[] | If set, only posts by these persons are returned. If not set, posts by all persons are returned.
$group_visibility = 'group_visibility_example'; // string | If set, only posts are returned that belong to groups with this visibility.
$post_visibility = 'post_visibility_example'; // string | If set, only posts with that visibility are returned.
$group_ids = array(56); // int[] | If set, only posts of these groups are returned. If not set, posts of all groups are returned.
$include = array('include_example'); // string[] | If set, the response will include the specified data.
$only_my_groups = True; // bool | If set to true, only posts of groups the user is member of are returned. If not set, posts of all groups are returned.

try {
    $result = $apiInstance->searchPosts($query, $order_by, $order_direction, $before, $after, $campus_ids, $actor_ids, $group_visibility, $post_visibility, $group_ids, $include, $only_my_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->searchPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The query string to search for in post title and content | [optional] |
| **order_by** | **string**| The order the posts are returned in. | [optional] |
| **order_direction** | **string**| The order direction. Only works for order_by publishedDate. | [optional] |
| **before** | **\DateTime**| If set, only posts created before this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **after** | **\DateTime**| If set, only posts created after this date are returned. The date must be in RFC3339 format (Zulu-Date). | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| If set, only posts of these campuses are returned. If not set, posts of all campuses are returned. | [optional] |
| **actor_ids** | [**int[]**](../Model/int.md)| If set, only posts by these persons are returned. If not set, posts by all persons are returned. | [optional] |
| **group_visibility** | **string**| If set, only posts are returned that belong to groups with this visibility. | [optional] |
| **post_visibility** | **string**| If set, only posts with that visibility are returned. | [optional] |
| **group_ids** | [**int[]**](../Model/int.md)| If set, only posts of these groups are returned. If not set, posts of all groups are returned. | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |
| **only_my_groups** | **bool**| If set to true, only posts of groups the user is member of are returned. If not set, posts of all groups are returned. | [optional] |

### Return type

[**\ChurchTools\Model\SearchPosts200Response**](../Model/SearchPosts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
