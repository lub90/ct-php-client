# ChurchTools\SongApi

Endpoints for Songs.

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSongsSongId()**](SongApi.md#deleteSongsSongId) | **DELETE** /songs/{songId} | Delete song |
| [**deleteSongsSongIdArrangementsArrangementId()**](SongApi.md#deleteSongsSongIdArrangementsArrangementId) | **DELETE** /songs/{songId}/arrangements/{arrangementId} | Delete arrangement |
| [**getSongs()**](SongApi.md#getSongs) | **GET** /songs | Get All Songs |
| [**getSongsOfAgenda()**](SongApi.md#getSongsOfAgenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda |
| [**getSongsSongId()**](SongApi.md#getSongsSongId) | **GET** /songs/{songId} | Get song |
| [**getSongsSongIdArrangements()**](SongApi.md#getSongsSongIdArrangements) | **GET** /songs/{songId}/arrangements | Get arrangements of song |
| [**getSongsSongIdArrangementsArrangementId()**](SongApi.md#getSongsSongIdArrangementsArrangementId) | **GET** /songs/{songId}/arrangements/{arrangementId} | Get arrangement of song |
| [**patchSongsSongIdArrangementsArrangementIdDefault()**](SongApi.md#patchSongsSongIdArrangementsArrangementIdDefault) | **PATCH** /songs/{songId}/arrangements/{arrangementId}/default | Make arrangement the default |
| [**postSongs()**](SongApi.md#postSongs) | **POST** /songs | Create a new song |
| [**postSongsSongIdArrangements()**](SongApi.md#postSongsSongIdArrangements) | **POST** /songs/{songId}/arrangements | Create new arrangement for song |
| [**putSongsSongId()**](SongApi.md#putSongsSongId) | **PUT** /songs/{songId} | Update song |
| [**putSongsSongIdArrangementsArrangementId()**](SongApi.md#putSongsSongIdArrangementsArrangementId) | **PUT** /songs/{songId}/arrangements/{arrangementId} | Update arrangement of song |


## `deleteSongsSongId()`

```php
deleteSongsSongId($song_id)
```

Delete song

Delete the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song

try {
    $apiInstance->deleteSongsSongId($song_id);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->deleteSongsSongId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |

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

## `deleteSongsSongIdArrangementsArrangementId()`

```php
deleteSongsSongIdArrangementsArrangementId($song_id, $arrangement_id)
```

Delete arrangement

Delete the specified arrangement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$arrangement_id = 42; // int | ID of arrangement

try {
    $apiInstance->deleteSongsSongIdArrangementsArrangementId($song_id, $arrangement_id);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->deleteSongsSongIdArrangementsArrangementId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **arrangement_id** | **int**| ID of arrangement | |

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

## `getSongs()`

```php
getSongs($song_category_ids, $ids, $practice, $key_of_arrangement, $name, $query, $include, $page, $limit): \ChurchTools\Model\GetSongs200Response
```

Get All Songs

Get all Songs. Only those songs are returned that the user has permission to view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_category_ids = array(56); // int[] | Filter response by category IDs.
$ids = array(56); // int[] | Filter by Song IDs.
$practice = True; // bool | Filter by field `shouldPractice`.
$key_of_arrangement = F; // string | Filter by arrangement key. (Song plus all its arrangements are returned, if one arrangement meets the filter criterion)
$name = 'name_example'; // string | Search by song title
$query = 'query_example'; // string | Search by song title or author
$include = array('include_example'); // string[] | Include additional information
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getSongs($song_category_ids, $ids, $practice, $key_of_arrangement, $name, $query, $include, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_category_ids** | [**int[]**](../Model/int.md)| Filter response by category IDs. | [optional] |
| **ids** | [**int[]**](../Model/int.md)| Filter by Song IDs. | [optional] |
| **practice** | **bool**| Filter by field &#x60;shouldPractice&#x60;. | [optional] |
| **key_of_arrangement** | **string**| Filter by arrangement key. (Song plus all its arrangements are returned, if one arrangement meets the filter criterion) | [optional] |
| **name** | **string**| Search by song title | [optional] |
| **query** | **string**| Search by song title or author | [optional] |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetSongs200Response**](../Model/GetSongs200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsOfAgenda()`

```php
getSongsOfAgenda($event_id): \ChurchTools\Model\GetSongsOfAgenda200Response
```

Get All Songs of Agenda

Get all songs of agenda for this event. Only those songs are returned, which the user may see. The user may see that the song is on the agenda, but s/he may not view all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getSongsOfAgenda($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongsOfAgenda: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\ChurchTools\Model\GetSongsOfAgenda200Response**](../Model/GetSongsOfAgenda200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsSongId()`

```php
getSongsSongId($song_id, $include): \ChurchTools\Model\PostSongs201Response
```

Get song

Get the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$include = array('include_example'); // string[] | Include additional information

try {
    $result = $apiInstance->getSongsSongId($song_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongsSongId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |

### Return type

[**\ChurchTools\Model\PostSongs201Response**](../Model/PostSongs201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsSongIdArrangements()`

```php
getSongsSongIdArrangements($song_id): \ChurchTools\Model\GetSongsSongIdArrangements200Response
```

Get arrangements of song

Get all arrangements for the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song

try {
    $result = $apiInstance->getSongsSongIdArrangements($song_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongsSongIdArrangements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |

### Return type

[**\ChurchTools\Model\GetSongsSongIdArrangements200Response**](../Model/GetSongsSongIdArrangements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsSongIdArrangementsArrangementId()`

```php
getSongsSongIdArrangementsArrangementId($song_id, $arrangement_id): \ChurchTools\Model\PostSongsSongIdArrangements201Response
```

Get arrangement of song

Get the specified arrangement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$arrangement_id = 42; // int | ID of arrangement

try {
    $result = $apiInstance->getSongsSongIdArrangementsArrangementId($song_id, $arrangement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongsSongIdArrangementsArrangementId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **arrangement_id** | **int**| ID of arrangement | |

### Return type

[**\ChurchTools\Model\PostSongsSongIdArrangements201Response**](../Model/PostSongsSongIdArrangements201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSongsSongIdArrangementsArrangementIdDefault()`

```php
patchSongsSongIdArrangementsArrangementIdDefault($song_id, $arrangement_id)
```

Make arrangement the default

Make the specified arrangement the default for the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$arrangement_id = 42; // int | ID of arrangement

try {
    $apiInstance->patchSongsSongIdArrangementsArrangementIdDefault($song_id, $arrangement_id);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->patchSongsSongIdArrangementsArrangementIdDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **arrangement_id** | **int**| ID of arrangement | |

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

## `postSongs()`

```php
postSongs($song2): \ChurchTools\Model\PostSongs201Response
```

Create a new song

Create a new song

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song2 = new \ChurchTools\Model\Song2(); // \ChurchTools\Model\Song2

try {
    $result = $apiInstance->postSongs($song2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->postSongs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song2** | [**\ChurchTools\Model\Song2**](../Model/Song2.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostSongs201Response**](../Model/PostSongs201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSongsSongIdArrangements()`

```php
postSongsSongIdArrangements($song_id, $post_songs_song_id_arrangements_request): \ChurchTools\Model\PostSongsSongIdArrangements201Response
```

Create new arrangement for song

Create a new arrangement for the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$post_songs_song_id_arrangements_request = new \ChurchTools\Model\PostSongsSongIdArrangementsRequest(); // \ChurchTools\Model\PostSongsSongIdArrangementsRequest

try {
    $result = $apiInstance->postSongsSongIdArrangements($song_id, $post_songs_song_id_arrangements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->postSongsSongIdArrangements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **post_songs_song_id_arrangements_request** | [**\ChurchTools\Model\PostSongsSongIdArrangementsRequest**](../Model/PostSongsSongIdArrangementsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostSongsSongIdArrangements201Response**](../Model/PostSongsSongIdArrangements201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSongsSongId()`

```php
putSongsSongId($song_id, $song3): \ChurchTools\Model\PostSongs201Response
```

Update song

Update the specified song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$song3 = new \ChurchTools\Model\Song3(); // \ChurchTools\Model\Song3

try {
    $result = $apiInstance->putSongsSongId($song_id, $song3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->putSongsSongId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **song3** | [**\ChurchTools\Model\Song3**](../Model/Song3.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostSongs201Response**](../Model/PostSongs201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSongsSongIdArrangementsArrangementId()`

```php
putSongsSongIdArrangementsArrangementId($song_id, $arrangement_id, $post_songs_song_id_arrangements_request): \ChurchTools\Model\PostSongsSongIdArrangements201Response
```

Update arrangement of song

Update the specified arrangement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 42; // int | ID of song
$arrangement_id = 42; // int | ID of arrangement
$post_songs_song_id_arrangements_request = new \ChurchTools\Model\PostSongsSongIdArrangementsRequest(); // \ChurchTools\Model\PostSongsSongIdArrangementsRequest

try {
    $result = $apiInstance->putSongsSongIdArrangementsArrangementId($song_id, $arrangement_id, $post_songs_song_id_arrangements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->putSongsSongIdArrangementsArrangementId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **song_id** | **int**| ID of song | |
| **arrangement_id** | **int**| ID of arrangement | |
| **post_songs_song_id_arrangements_request** | [**\ChurchTools\Model\PostSongsSongIdArrangementsRequest**](../Model/PostSongsSongIdArrangementsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostSongsSongIdArrangements201Response**](../Model/PostSongsSongIdArrangements201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
