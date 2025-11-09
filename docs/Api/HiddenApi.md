# ChurchTools\HiddenApi

Endpoints hidden in the production system

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateBookingConflicts()**](HiddenApi.md#calculateBookingConflicts) | **POST** /bookings/conflicts | Determine booking conflicts |
| [**calculateUpdatedBookingConflicts()**](HiddenApi.md#calculateUpdatedBookingConflicts) | **POST** /bookings/{bookingId}/conflicts | Determine booking conflicts |
| [**deleteCalendarsCalendarId()**](HiddenApi.md#deleteCalendarsCalendarId) | **DELETE** /calendars/{calendarId} | Delete a calendar |
| [**deleteExternalloginsExternalloginid()**](HiddenApi.md#deleteExternalloginsExternalloginid) | **DELETE** /externallogins/{externalLoginId} | Delete external login |
| [**deleteFollowupsFollowUpId()**](HiddenApi.md#deleteFollowupsFollowUpId) | **DELETE** /followups/{followUpId} | Delete follow-up |
| [**deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId()**](HiddenApi.md#deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId) | **DELETE** /groups/{groupId}/memberfields/group/{groupMemberFieldId} | TODO 200 |
| [**deleteGroupsGroupIdMemberfieldsPersonPersonFieldId()**](HiddenApi.md#deleteGroupsGroupIdMemberfieldsPersonPersonFieldId) | **DELETE** /groups/{groupId}/memberfields/person/{personFieldId} | TODO 200 |
| [**deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus()**](HiddenApi.md#deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus) | **DELETE** /groups/{groupId}/members/routines/{roleId}/{groupMemberStatus} | Delete membership routine |
| [**deleteOauthclientsIdentifier()**](HiddenApi.md#deleteOauthclientsIdentifier) | **DELETE** /oauthclients/{identifier} |  |
| [**deletePersonTwofactor()**](HiddenApi.md#deletePersonTwofactor) | **DELETE** /persons/{personId}/settings/twofactor | TODO |
| [**deleteRegistrationsGuid()**](HiddenApi.md#deleteRegistrationsGuid) | **DELETE** /registrations/{guid} |  |
| [**deleteResourcesResourceId()**](HiddenApi.md#deleteResourcesResourceId) | **DELETE** /resources/{resourceId} | Delete resource |
| [**deleteResourcetypesResourceTypeId()**](HiddenApi.md#deleteResourcetypesResourceTypeId) | **DELETE** /resourcetypes/{resourceTypeId} |  |
| [**deleteRoutinesRoutineId()**](HiddenApi.md#deleteRoutinesRoutineId) | **DELETE** /routines/{routineId} |  |
| [**deleteSubscriptionsPersonIdSubjectSubjectIdentifier()**](HiddenApi.md#deleteSubscriptionsPersonIdSubjectSubjectIdentifier) | **DELETE** /subscriptions/{personId}/{subject}/{subjectIdentifier} |  |
| [**deleteWebsiteData()**](HiddenApi.md#deleteWebsiteData) | **DELETE** /website/data/{id} |  |
| [**fetchLicense()**](HiddenApi.md#fetchLicense) | **GET** /license/fetch | TODO 200 |
| [**generateSuggestions()**](HiddenApi.md#generateSuggestions) | **POST** /finance/accountingperiods/{id}/statements/{statementId}/suggestions | TODO |
| [**getAccountsExport()**](HiddenApi.md#getAccountsExport) | **GET** /finance/accounts/export | TODO 200 |
| [**getCalendarsCalendarId()**](HiddenApi.md#getCalendarsCalendarId) | **GET** /calendars/{calendarId} | Get a calendar |
| [**getChurchqueryMasterdata()**](HiddenApi.md#getChurchqueryMasterdata) | **GET** /churchquery/metadata | Get masterdata for ChurchQuery |
| [**getExternalloginExternalLoginId()**](HiddenApi.md#getExternalloginExternalLoginId) | **GET** /externallogins/{externalLoginId} | Get resource |
| [**getExternallogins()**](HiddenApi.md#getExternallogins) | **GET** /externallogins | Get all resources |
| [**getFinanceTransactionsDatevexport()**](HiddenApi.md#getFinanceTransactionsDatevexport) | **GET** /finance/transactions/datevexport | TODO 200 |
| [**getFollowups()**](HiddenApi.md#getFollowups) | **GET** /followups | Get all followups |
| [**getFollowupsFollowUpId()**](HiddenApi.md#getFollowupsFollowUpId) | **GET** /followups/{followUpId} | Get follow-up |
| [**getGroupsGroupIdFollowups()**](HiddenApi.md#getGroupsGroupIdFollowups) | **GET** /groups/{groupId}/followups | Get follow-ups for group |
| [**getGroupsGroupIdFollowupsStatistics()**](HiddenApi.md#getGroupsGroupIdFollowupsStatistics) | **GET** /groups/{groupId}/followups/statistics | Get follow-ups statistics for group |
| [**getGroupsGroupIdMemberpreview()**](HiddenApi.md#getGroupsGroupIdMemberpreview) | **GET** /groups/{groupId}/memberpreview | TODO 200 |
| [**getGroupsGroupIdMembersPersonIdFollowups()**](HiddenApi.md#getGroupsGroupIdMembersPersonIdFollowups) | **GET** /groups/{groupId}/members/{personId}/followups | Get follow-ups for group member |
| [**getGroupsGroupIdMembersPersonIdFollowupsStatistics()**](HiddenApi.md#getGroupsGroupIdMembersPersonIdFollowupsStatistics) | **GET** /groups/{groupId}/members/{personId}/followups/statistics | Get follow-ups statistics for group member |
| [**getGroupsGroupIdMembersRoutines()**](HiddenApi.md#getGroupsGroupIdMembersRoutines) | **GET** /groups/{groupId}/members/routines | All membership routines for group |
| [**getGroupsGroupIdTags()**](HiddenApi.md#getGroupsGroupIdTags) | **GET** /groups/{groupId}/tags | Fetch group tags |
| [**getKeysByText()**](HiddenApi.md#getKeysByText) | **GET** /translations/keysbytext | Get all translation keys, which match a translation |
| [**getLabelsTotal()**](HiddenApi.md#getLabelsTotal) | **POST** /labels/totals | TODO |
| [**getNextDocumentNumber()**](HiddenApi.md#getNextDocumentNumber) | **GET** /finance/transactions/nextdocumentnumber | TODO 200 - Get suggestion for next document number |
| [**getOauthclients()**](HiddenApi.md#getOauthclients) | **GET** /oauthclients |  |
| [**getPersonTags()**](HiddenApi.md#getPersonTags) | **GET** /persons/{personId}/tags | Get all tags attached to a person |
| [**getPersonTwofactor()**](HiddenApi.md#getPersonTwofactor) | **GET** /persons/{personId}/settings/twofactor | TODO 200 |
| [**getPersonTwofactorForce()**](HiddenApi.md#getPersonTwofactorForce) | **GET** /persons/{personId}/settings/twofactor/force | TODO 200 |
| [**getPersonsEventServices()**](HiddenApi.md#getPersonsEventServices) | **GET** /persons/{personId}/events/{eventId}/services | TODO 200 |
| [**getPersonsExport()**](HiddenApi.md#getPersonsExport) | **POST** /persons/export | TODO 200 |
| [**getPersonsPersonIdFollowups()**](HiddenApi.md#getPersonsPersonIdFollowups) | **GET** /persons/{personId}/followups | Get a person&#39;s follow-ups |
| [**getPersonsPersonIdFollowupsStatistics()**](HiddenApi.md#getPersonsPersonIdFollowupsStatistics) | **GET** /persons/{personId}/followups/statistics | Get follow-ups statistics for person |
| [**getPersonsPersonIdPoststatistics()**](HiddenApi.md#getPersonsPersonIdPoststatistics) | **GET** /persons/{personId}/poststatistics | Returns the post statistics for a person |
| [**getPersonsSearchOld()**](HiddenApi.md#getPersonsSearchOld) | **GET** /persons/search_old | TODO 200 |
| [**getRegistrationconfigId()**](HiddenApi.md#getRegistrationconfigId) | **GET** /registrationconfig/{id} |  |
| [**getResources()**](HiddenApi.md#getResources) | **GET** /resources | Get all resources |
| [**getResourcesResourceId()**](HiddenApi.md#getResourcesResourceId) | **GET** /resources/{resourceId} | Get resource |
| [**getResourcetypes()**](HiddenApi.md#getResourcetypes) | **GET** /resourcetypes | Get resource types |
| [**getResourcetypesResourceTypeId()**](HiddenApi.md#getResourcetypesResourceTypeId) | **GET** /resourcetypes/{resourceTypeId} | Get Group Category |
| [**getRoutines()**](HiddenApi.md#getRoutines) | **GET** /routines |  |
| [**getRoutinesRoutineId()**](HiddenApi.md#getRoutinesRoutineId) | **GET** /routines/{routineId} |  |
| [**getRoutinesRoutineIdRuns()**](HiddenApi.md#getRoutinesRoutineIdRuns) | **GET** /routines/{routineId}/runs |  |
| [**getRoutinesRoutineIdRunsRunIdRunAction()**](HiddenApi.md#getRoutinesRoutineIdRunsRunIdRunAction) | **POST** /routines/{routineId}/runs/{runId}/{runAction} |  |
| [**getSamlLogin()**](HiddenApi.md#getSamlLogin) | **GET** /saml/login | TODO 200 |
| [**getSamlMetadata()**](HiddenApi.md#getSamlMetadata) | **GET** /saml/metadata | TODO 200 |
| [**getSlugcheck()**](HiddenApi.md#getSlugcheck) | **GET** /profiles/slugcheck/{slug} | Check if a finder slug is free |
| [**getSsoLogins()**](HiddenApi.md#getSsoLogins) | **GET** /sso-logins | Get all sso logins |
| [**getTransactionsCSV()**](HiddenApi.md#getTransactionsCSV) | **GET** /finance/transactions/csv | TODO deprecated |
| [**getTransactionsExport()**](HiddenApi.md#getTransactionsExport) | **GET** /finance/transactions/export | TODO 200 |
| [**getTransactionsSummary()**](HiddenApi.md#getTransactionsSummary) | **GET** /finance/transactions/summary | TODO 200 |
| [**getWebsiteData()**](HiddenApi.md#getWebsiteData) | **GET** /website/data |  |
| [**getWebsiteStarttest()**](HiddenApi.md#getWebsiteStarttest) | **GET** /website/starttest | TODO |
| [**patchAccountStatementMovementSuggestion()**](HiddenApi.md#patchAccountStatementMovementSuggestion) | **PATCH** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements/{movementId}/suggestions | TODO 200 |
| [**patchFileWithDomainType()**](HiddenApi.md#patchFileWithDomainType) | **PATCH** /files/{domainType}/{domainIdentifier} | TODO |
| [**patchRegistrationconfigId()**](HiddenApi.md#patchRegistrationconfigId) | **PATCH** /registrationconfig/{id} |  |
| [**patchRoutinesRoutineId()**](HiddenApi.md#patchRoutinesRoutineId) | **PATCH** /routines/{routineId} |  |
| [**postActions()**](HiddenApi.md#postActions) | **POST** /actions | Get filtered actions |
| [**postBulkAccounts()**](HiddenApi.md#postBulkAccounts) | **POST** /finance/accounts/bulkcreate | TODO 200 |
| [**postBulkTransactions()**](HiddenApi.md#postBulkTransactions) | **POST** /finance/transactions/bulkcreate | TODO 200 |
| [**postCalendars()**](HiddenApi.md#postCalendars) | **POST** /calendars | Create new calendar |
| [**postChurchqueryDebugExport()**](HiddenApi.md#postChurchqueryDebugExport) | **POST** /churchquery/debug/export | Export result of ChurchQuery |
| [**postCostCenterExport()**](HiddenApi.md#postCostCenterExport) | **GET** /finance/costcenters/export | TODO 200 |
| [**postExternalsystem()**](HiddenApi.md#postExternalsystem) | **POST** /externallogins | Create new resource |
| [**postFeatureUsage()**](HiddenApi.md#postFeatureUsage) | **POST** /featureusage |  |
| [**postFollowupsFollowUpIdComplete()**](HiddenApi.md#postFollowupsFollowUpIdComplete) | **POST** /followups/{followUpId}/complete | Complete follow-up |
| [**postFollowupsFollowUpIdNotes()**](HiddenApi.md#postFollowupsFollowUpIdNotes) | **POST** /followups/{followUpId}/notes | Add Note to follow-up |
| [**postFollowupsFollowUpIdPostpone()**](HiddenApi.md#postFollowupsFollowUpIdPostpone) | **POST** /followups/{followUpId}/postpone | Postpone follow-up |
| [**postFollowupsFollowUpIdReset()**](HiddenApi.md#postFollowupsFollowUpIdReset) | **POST** /followups/{followUpId}/reset | Reset follow-up |
| [**postGroupsGroupIdMemberfieldsGroup()**](HiddenApi.md#postGroupsGroupIdMemberfieldsGroup) | **POST** /groups/{groupId}/memberfields/group | TODO 200 |
| [**postJobLogs()**](HiddenApi.md#postJobLogs) | **POST** /jobs/{id}/logs | TODO 200 |
| [**postLabels()**](HiddenApi.md#postLabels) | **POST** /labels | TODO 200 |
| [**postOauthclients()**](HiddenApi.md#postOauthclients) | **POST** /oauthclients |  |
| [**postPersonTwofactor()**](HiddenApi.md#postPersonTwofactor) | **POST** /persons/{personId}/settings/twofactor | TODO 200 |
| [**postPersonsPersonIdFollowups()**](HiddenApi.md#postPersonsPersonIdFollowups) | **POST** /persons/{personId}/followups | Create follow-up |
| [**postRegistrations()**](HiddenApi.md#postRegistrations) | **POST** /registrations |  |
| [**postRegistrationsGuidConfirmToken()**](HiddenApi.md#postRegistrationsGuidConfirmToken) | **POST** /registrations/{guid}/confirm |  |
| [**postRegistrationsGuidConvert()**](HiddenApi.md#postRegistrationsGuidConvert) | **POST** /registrations/{guid}/convert |  |
| [**postRegistrationsGuidResend()**](HiddenApi.md#postRegistrationsGuidResend) | **POST** /registrations/{guid}/resend |  |
| [**postResources()**](HiddenApi.md#postResources) | **POST** /resources | Create new resource |
| [**postResourcetypes()**](HiddenApi.md#postResourcetypes) | **POST** /resourcetypes | Create resource type |
| [**postRoutines()**](HiddenApi.md#postRoutines) | **POST** /routines |  |
| [**postRoutinesExecute()**](HiddenApi.md#postRoutinesExecute) | **POST** /routines/execute |  |
| [**postRoutinesRoutineIdStepsValidate()**](HiddenApi.md#postRoutinesRoutineIdStepsValidate) | **POST** /routines/{routineId}/steps/validate |  |
| [**postSamlAcs()**](HiddenApi.md#postSamlAcs) | **POST** /saml/acs | TODO 200 |
| [**postStatements()**](HiddenApi.md#postStatements) | **POST** /finance/accountingperiods/{id}/statements | TODO 200 |
| [**postTwofactorTotp()**](HiddenApi.md#postTwofactorTotp) | **POST** /twofactor/totp | TODO 200 |
| [**postWebsiteData()**](HiddenApi.md#postWebsiteData) | **POST** /website/data |  |
| [**putCalendarsCalendarId()**](HiddenApi.md#putCalendarsCalendarId) | **PUT** /calendars/{calendarId} | Update a calendar |
| [**putExternalloginExternalLoginId()**](HiddenApi.md#putExternalloginExternalLoginId) | **PUT** /externallogins/{externalLoginId} | Update external login |
| [**putFollowupsFollowUpId()**](HiddenApi.md#putFollowupsFollowUpId) | **PUT** /followups/{followUpId} | Update follow-up |
| [**putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId()**](HiddenApi.md#putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId) | **PUT** /groups/{groupId}/memberfields/group/{groupMemberFieldId} | TODO 200 |
| [**putGroupsGroupIdMemberfieldsPersonPersonFieldId()**](HiddenApi.md#putGroupsGroupIdMemberfieldsPersonPersonFieldId) | **PUT** /groups/{groupId}/memberfields/person/{personFieldId} | TODO 200 |
| [**putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus()**](HiddenApi.md#putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus) | **PUT** /groups/{groupId}/members/routines/{roleId}/{groupMemberStatus} | Update membership routine |
| [**putJobStatus()**](HiddenApi.md#putJobStatus) | **PUT** /jobs/{id}/status | TODO 200 |
| [**putOauthclientsIdentifier()**](HiddenApi.md#putOauthclientsIdentifier) | **PUT** /oauthclients/{identifier} |  |
| [**putPersonPassword()**](HiddenApi.md#putPersonPassword) | **PUT** /persons/{personId}/password | TODO 200 |
| [**putPersonPrivacyPolicy()**](HiddenApi.md#putPersonPrivacyPolicy) | **PUT** /persons/{personId}/privacypolicy | TODO 200 |
| [**putPersonTwofactor()**](HiddenApi.md#putPersonTwofactor) | **PUT** /persons/{personId}/settings/twofactor | TODO 200 |
| [**putPersonTwofactorForce()**](HiddenApi.md#putPersonTwofactorForce) | **PUT** /persons/{personId}/settings/twofactor/force | TODO 200 |
| [**putResourcesResourceId()**](HiddenApi.md#putResourcesResourceId) | **PUT** /resources/{resourceId} | Update resource |
| [**putResourcetypesResourceTypeId()**](HiddenApi.md#putResourcetypesResourceTypeId) | **PUT** /resourcetypes/{resourceTypeId} | Update resource |
| [**putUserRules()**](HiddenApi.md#putUserRules) | **PUT** /finance/accountingperiods/{id}/userrules | TODO 200 |


## `calculateBookingConflicts()`

```php
calculateBookingConflicts($calculate_booking_conflicts_request): \ChurchTools\Model\CalculateBookingConflicts200Response
```

Determine booking conflicts

Determine potential conflicts with booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calculate_booking_conflicts_request = new \ChurchTools\Model\CalculateBookingConflictsRequest(); // \ChurchTools\Model\CalculateBookingConflictsRequest

try {
    $result = $apiInstance->calculateBookingConflicts($calculate_booking_conflicts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->calculateBookingConflicts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calculate_booking_conflicts_request** | [**\ChurchTools\Model\CalculateBookingConflictsRequest**](../Model/CalculateBookingConflictsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CalculateBookingConflicts200Response**](../Model/CalculateBookingConflicts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateUpdatedBookingConflicts()`

```php
calculateUpdatedBookingConflicts($booking_id, $calculate_updated_booking_conflicts_request): \ChurchTools\Model\CalculateBookingConflicts200Response
```

Determine booking conflicts

Determine potential conflicts with updated booking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = 8; // int | ID of booking
$calculate_updated_booking_conflicts_request = new \ChurchTools\Model\CalculateUpdatedBookingConflictsRequest(); // \ChurchTools\Model\CalculateUpdatedBookingConflictsRequest

try {
    $result = $apiInstance->calculateUpdatedBookingConflicts($booking_id, $calculate_updated_booking_conflicts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->calculateUpdatedBookingConflicts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**| ID of booking | |
| **calculate_updated_booking_conflicts_request** | [**\ChurchTools\Model\CalculateUpdatedBookingConflictsRequest**](../Model/CalculateUpdatedBookingConflictsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\CalculateBookingConflicts200Response**](../Model/CalculateBookingConflicts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCalendarsCalendarId()`

```php
deleteCalendarsCalendarId($calendar_id): \ChurchTools\Model\PostCalendars201Response
```

Delete a calendar

Delete the specified calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar

try {
    $result = $apiInstance->deleteCalendarsCalendarId($calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteCalendarsCalendarId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |

### Return type

[**\ChurchTools\Model\PostCalendars201Response**](../Model/PostCalendars201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExternalloginsExternalloginid()`

```php
deleteExternalloginsExternalloginid($external_login_id)
```

Delete external login

Delete specified external login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_login_id = 7; // float

try {
    $apiInstance->deleteExternalloginsExternalloginid($external_login_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteExternalloginsExternalloginid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_login_id** | **float**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFollowupsFollowUpId()`

```php
deleteFollowupsFollowUpId($follow_up_id)
```

Delete follow-up

Deletes the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up

try {
    $apiInstance->deleteFollowupsFollowUpId($follow_up_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteFollowupsFollowUpId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |

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

## `deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId()`

```php
deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId($group_id, $group_member_field_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$group_member_field_id = 'group_member_field_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId($group_id, $group_member_field_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteGroupsGroupIdMemberfieldsGroupGroupMemberFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **group_member_field_id** | **string**|  | |

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

## `deleteGroupsGroupIdMemberfieldsPersonPersonFieldId()`

```php
deleteGroupsGroupIdMemberfieldsPersonPersonFieldId($group_id, $person_field_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_field_id = 'person_field_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdMemberfieldsPersonPersonFieldId($group_id, $person_field_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteGroupsGroupIdMemberfieldsPersonPersonFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_field_id** | **string**|  | |

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

## `deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus()`

```php
deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus($group_id, $group_member_status, $role_id)
```

Delete membership routine

Delete the membership routine for the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$group_member_status = active; // string | Status of a group membership
$role_id = 1; // int | ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group.

try {
    $apiInstance->deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus($group_id, $group_member_status, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **group_member_status** | **string**| Status of a group membership | |
| **role_id** | **int**| ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group. | |

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

## `deleteOauthclientsIdentifier()`

```php
deleteOauthclientsIdentifier($identifier)
```



Delete an existing client entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string

try {
    $apiInstance->deleteOauthclientsIdentifier($identifier);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteOauthclientsIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**|  | |

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

## `deletePersonTwofactor()`

```php
deletePersonTwofactor($person_id)
```

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->deletePersonTwofactor($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deletePersonTwofactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `deleteRegistrationsGuid()`

```php
deleteRegistrationsGuid($guid)
```



Deletes the specified self-registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | GUID for Entity

try {
    $apiInstance->deleteRegistrationsGuid($guid);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteRegistrationsGuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guid** | **string**| GUID for Entity | |

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

## `deleteResourcesResourceId()`

```php
deleteResourcesResourceId($resource_id)
```

Delete resource

Delete specified resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 7; // float

try {
    $apiInstance->deleteResourcesResourceId($resource_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteResourcesResourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **float**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResourcetypesResourceTypeId()`

```php
deleteResourcetypesResourceTypeId($resource_type_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_type_id = 3.4; // float

try {
    $apiInstance->deleteResourcetypesResourceTypeId($resource_type_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteResourcetypesResourceTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_type_id** | **float**|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoutinesRoutineId()`

```php
deleteRoutinesRoutineId($routine_id)
```



Delete the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 9; // int | ID of a routine

try {
    $apiInstance->deleteRoutinesRoutineId($routine_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteRoutinesRoutineId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**| ID of a routine | |

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

## `deleteSubscriptionsPersonIdSubjectSubjectIdentifier()`

```php
deleteSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier)
```



Delete a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$subject = group; // string
$subject_identifier = 'subject_identifier_example'; // string

try {
    $apiInstance->deleteSubscriptionsPersonIdSubjectSubjectIdentifier($person_id, $subject, $subject_identifier);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSubscriptionsPersonIdSubjectSubjectIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **subject** | **string**|  | |
| **subject_identifier** | **string**|  | |

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

## `deleteWebsiteData()`

```php
deleteWebsiteData($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4; // int | ID of a WebsiteData item

try {
    $apiInstance->deleteWebsiteData($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteWebsiteData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of a WebsiteData item | |

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

## `fetchLicense()`

```php
fetchLicense()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->fetchLicense();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->fetchLicense: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSuggestions()`

```php
generateSuggestions($id, $statement_id)
```

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$statement_id = 'statement_id_example'; // string

try {
    $apiInstance->generateSuggestions($id, $statement_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->generateSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **statement_id** | **string**|  | |

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

## `getAccountsExport()`

```php
getAccountsExport()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAccountsExport();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getAccountsExport: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarId()`

```php
getCalendarsCalendarId($calendar_id): \ChurchTools\Model\PostCalendars201Response
```

Get a calendar

Get the specified calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar

try {
    $result = $apiInstance->getCalendarsCalendarId($calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getCalendarsCalendarId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |

### Return type

[**\ChurchTools\Model\PostCalendars201Response**](../Model/PostCalendars201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChurchqueryMasterdata()`

```php
getChurchqueryMasterdata()
```

Get masterdata for ChurchQuery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getChurchqueryMasterdata();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getChurchqueryMasterdata: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalloginExternalLoginId()`

```php
getExternalloginExternalLoginId($external_login_id): \ChurchTools\Model\GetExternalloginExternalLoginId200Response
```

Get resource

Get the specified external login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_login_id = 7; // float

try {
    $result = $apiInstance->getExternalloginExternalLoginId($external_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getExternalloginExternalLoginId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_login_id** | **float**|  | |

### Return type

[**\ChurchTools\Model\GetExternalloginExternalLoginId200Response**](../Model/GetExternalloginExternalLoginId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternallogins()`

```php
getExternallogins(): \ChurchTools\Model\GetExternallogins200Response
```

Get all resources

Get all external logins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getExternallogins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getExternallogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetExternallogins200Response**](../Model/GetExternallogins200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceTransactionsDatevexport()`

```php
getFinanceTransactionsDatevexport()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getFinanceTransactionsDatevexport();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getFinanceTransactionsDatevexport: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFollowups()`

```php
getFollowups($filter, $page, $limit): \ChurchTools\Model\GetFollowups200Response
```

Get all followups

Get all follow-ups that the current user is responsible for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = array('filter_example'); // string[] | Filter for follow-ups.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getFollowups($filter, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getFollowups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | [**string[]**](../Model/string.md)| Filter for follow-ups. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetFollowups200Response**](../Model/GetFollowups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFollowupsFollowUpId()`

```php
getFollowupsFollowUpId($follow_up_id): \ChurchTools\Model\GetFollowupsFollowUpId200Response
```

Get follow-up

Get the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up

try {
    $result = $apiInstance->getFollowupsFollowUpId($follow_up_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getFollowupsFollowUpId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |

### Return type

[**\ChurchTools\Model\GetFollowupsFollowUpId200Response**](../Model/GetFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdFollowups()`

```php
getGroupsGroupIdFollowups($group_id, $filter, $page, $limit): \ChurchTools\Model\GetGroupsGroupIdFollowups200Response
```

Get follow-ups for group

Get all follow-ups for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$filter = array('filter_example'); // string[] | Filter for follow-ups.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getGroupsGroupIdFollowups($group_id, $filter, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdFollowups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **filter** | [**string[]**](../Model/string.md)| Filter for follow-ups. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdFollowups200Response**](../Model/GetGroupsGroupIdFollowups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdFollowupsStatistics()`

```php
getGroupsGroupIdFollowupsStatistics($group_id): \ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response
```

Get follow-ups statistics for group

Get statistics on follow-ups for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdFollowupsStatistics($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdFollowupsStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response**](../Model/GetGroupsGroupIdFollowupsStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMemberpreview()`

```php
getGroupsGroupIdMemberpreview($group_id): \ChurchTools\Model\GetGroupsGroupIdMemberpreview200Response
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdMemberpreview($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdMemberpreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMemberpreview200Response**](../Model/GetGroupsGroupIdMemberpreview200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersPersonIdFollowups()`

```php
getGroupsGroupIdMembersPersonIdFollowups($group_id, $person_id, $filter, $page, $limit): \ChurchTools\Model\GetGroupsGroupIdMembersPersonIdFollowups200Response
```

Get follow-ups for group member

Get follow-ups for the specified group member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$filter = array('filter_example'); // string[] | Filter for follow-ups.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getGroupsGroupIdMembersPersonIdFollowups($group_id, $person_id, $filter, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdMembersPersonIdFollowups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |
| **filter** | [**string[]**](../Model/string.md)| Filter for follow-ups. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersPersonIdFollowups200Response**](../Model/GetGroupsGroupIdMembersPersonIdFollowups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersPersonIdFollowupsStatistics()`

```php
getGroupsGroupIdMembersPersonIdFollowupsStatistics($group_id, $person_id): \ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response
```

Get follow-ups statistics for group member

Get statistics on follow-ups for the specified group member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getGroupsGroupIdMembersPersonIdFollowupsStatistics($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdMembersPersonIdFollowupsStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response**](../Model/GetGroupsGroupIdFollowupsStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersRoutines()`

```php
getGroupsGroupIdMembersRoutines($group_id): \ChurchTools\Model\GetGroupsGroupIdMembersRoutines200Response
```

All membership routines for group

Get all membership routines for the specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdMembersRoutines($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdMembersRoutines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersRoutines200Response**](../Model/GetGroupsGroupIdMembersRoutines200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdTags()`

```php
getGroupsGroupIdTags($group_id): \ChurchTools\Model\GetGroupsGroupIdTags200Response
```

Fetch group tags

Use `/tags/group/{groupId}` instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdTags($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdTags200Response**](../Model/GetGroupsGroupIdTags200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeysByText()`

```php
getKeysByText($query): \ChurchTools\Model\GetKeysByText200Response
```

Get all translation keys, which match a translation

The response is a list of the translation keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Translated text string

try {
    $result = $apiInstance->getKeysByText($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getKeysByText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Translated text string | [optional] |

### Return type

[**\ChurchTools\Model\GetKeysByText200Response**](../Model/GetKeysByText200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabelsTotal()`

```php
getLabelsTotal(): \ChurchTools\Model\GetLabelsTotal200Response
```

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLabelsTotal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getLabelsTotal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetLabelsTotal200Response**](../Model/GetLabelsTotal200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextDocumentNumber()`

```php
getNextDocumentNumber($accounting_period_id)
```

TODO 200 - Get suggestion for next document number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 'accounting_period_id_example'; // string

try {
    $apiInstance->getNextDocumentNumber($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getNextDocumentNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **string**|  | [optional] |

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

## `getOauthclients()`

```php
getOauthclients(): \ChurchTools\Model\GetOauthclients200Response
```



Get all OAuth client entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOauthclients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getOauthclients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetOauthclients200Response**](../Model/GetOauthclients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonTags()`

```php
getPersonTags($person_id): \ChurchTools\Model\GetPersonTags200Response
```

Get all tags attached to a person

Use `/tags/person/{personId}` instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonTags($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetPersonTags200Response**](../Model/GetPersonTags200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonTwofactor()`

```php
getPersonTwofactor($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->getPersonTwofactor($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonTwofactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `getPersonTwofactorForce()`

```php
getPersonTwofactorForce($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->getPersonTwofactorForce($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonTwofactorForce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `getPersonsEventServices()`

```php
getPersonsEventServices($person_id, $event_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event

try {
    $apiInstance->getPersonsEventServices($person_id, $event_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsEventServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |

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

## `getPersonsExport()`

```php
getPersonsExport()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getPersonsExport();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsExport: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsPersonIdFollowups()`

```php
getPersonsPersonIdFollowups($person_id, $filter, $page, $limit): \ChurchTools\Model\GetPersonsPersonIdFollowups200Response
```

Get a person's follow-ups

Returns all follow-ups pertaining to the specified person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$filter = array('filter_example'); // string[] | Filter for follow-ups.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getPersonsPersonIdFollowups($person_id, $filter, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsPersonIdFollowups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **filter** | [**string[]**](../Model/string.md)| Filter for follow-ups. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetPersonsPersonIdFollowups200Response**](../Model/GetPersonsPersonIdFollowups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsPersonIdFollowupsStatistics()`

```php
getPersonsPersonIdFollowupsStatistics($person_id): \ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response
```

Get follow-ups statistics for person

Get statistics on follow-ups for the specified person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonsPersonIdFollowupsStatistics($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsPersonIdFollowupsStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdFollowupsStatistics200Response**](../Model/GetGroupsGroupIdFollowupsStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsPersonIdPoststatistics()`

```php
getPersonsPersonIdPoststatistics($person_id): \ChurchTools\Model\GetPersonsPersonIdPoststatistics200Response
```

Returns the post statistics for a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->getPersonsPersonIdPoststatistics($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsPersonIdPoststatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetPersonsPersonIdPoststatistics200Response**](../Model/GetPersonsPersonIdPoststatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsSearchOld()`

```php
getPersonsSearchOld()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getPersonsSearchOld();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getPersonsSearchOld: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegistrationconfigId()`

```php
getRegistrationconfigId($id): \ChurchTools\Model\GetRegistrationconfigId200Response
```



Returns the specified registration configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getRegistrationconfigId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getRegistrationconfigId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetRegistrationconfigId200Response**](../Model/GetRegistrationconfigId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResources()`

```php
getResources(): \ChurchTools\Model\GetResources200Response
```

Get all resources

Get all resources that the user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetResources200Response**](../Model/GetResources200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourcesResourceId()`

```php
getResourcesResourceId($resource_id): \ChurchTools\Model\PostExternalsystem201Response
```

Get resource

Get the specified resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 7; // float

try {
    $result = $apiInstance->getResourcesResourceId($resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getResourcesResourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **float**|  | |

### Return type

[**\ChurchTools\Model\PostExternalsystem201Response**](../Model/PostExternalsystem201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourcetypes()`

```php
getResourcetypes(): \ChurchTools\Model\GetResourcetypes200Response
```

Get resource types

Get all resource types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResourcetypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getResourcetypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetResourcetypes200Response**](../Model/GetResourcetypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourcetypesResourceTypeId()`

```php
getResourcetypesResourceTypeId($resource_type_id): \ChurchTools\Model\PostResourcetypes201Response
```

Get Group Category

Get the specified resource type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_type_id = 3.4; // float

try {
    $result = $apiInstance->getResourcetypesResourceTypeId($resource_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getResourcetypesResourceTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_type_id** | **float**|  | |

### Return type

[**\ChurchTools\Model\PostResourcetypes201Response**](../Model/PostResourcetypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoutines()`

```php
getRoutines(): \ChurchTools\Model\GetRoutines200Response
```



Get all routines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoutines();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getRoutines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetRoutines200Response**](../Model/GetRoutines200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoutinesRoutineId()`

```php
getRoutinesRoutineId($routine_id): \ChurchTools\Model\PostRoutines201Response
```



Get the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 9; // int | ID of a routine

try {
    $result = $apiInstance->getRoutinesRoutineId($routine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getRoutinesRoutineId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**| ID of a routine | |

### Return type

[**\ChurchTools\Model\PostRoutines201Response**](../Model/PostRoutines201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoutinesRoutineIdRuns()`

```php
getRoutinesRoutineIdRuns($routine_id, $include, $with_potential_domain_objects): \ChurchTools\Model\GetRoutinesRoutineIdRuns200Response
```



Get all available runs for the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 9; // int | ID of a routine
$include = array('include_example'); // string[] | Include additional information
$with_potential_domain_objects = True; // bool

try {
    $result = $apiInstance->getRoutinesRoutineIdRuns($routine_id, $include, $with_potential_domain_objects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getRoutinesRoutineIdRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**| ID of a routine | |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |
| **with_potential_domain_objects** | **bool**|  | [optional] |

### Return type

[**\ChurchTools\Model\GetRoutinesRoutineIdRuns200Response**](../Model/GetRoutinesRoutineIdRuns200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoutinesRoutineIdRunsRunIdRunAction()`

```php
getRoutinesRoutineIdRunsRunIdRunAction($routine_id, $run_id, $run_action): \ChurchTools\Model\GetRoutinesRoutineIdRunsRunIdRunAction201Response
```



Get all available runs for the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 9; // int | ID of a routine
$run_id = 16; // int | ID of a routine run
$run_action = 'run_action_example'; // string

try {
    $result = $apiInstance->getRoutinesRoutineIdRunsRunIdRunAction($routine_id, $run_id, $run_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getRoutinesRoutineIdRunsRunIdRunAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**| ID of a routine | |
| **run_id** | **int**| ID of a routine run | |
| **run_action** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetRoutinesRoutineIdRunsRunIdRunAction201Response**](../Model/GetRoutinesRoutineIdRunsRunIdRunAction201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSamlLogin()`

```php
getSamlLogin()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSamlLogin();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSamlLogin: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSamlMetadata()`

```php
getSamlMetadata()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSamlMetadata();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSamlMetadata: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSlugcheck()`

```php
getSlugcheck($slug)
```

Check if a finder slug is free

Published profiles are visibale in ChurchTools Finder. Each profile has an unique slug (URI). This endpoint can be used to check if a slug is free.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | Slug to check

try {
    $apiInstance->getSlugcheck($slug);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSlugcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| Slug to check | |

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

## `getSsoLogins()`

```php
getSsoLogins(): \ChurchTools\Model\GetSsoLogins200Response
```

Get all sso logins

Get all Single Sign-On Logins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSsoLogins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSsoLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetSsoLogins200Response**](../Model/GetSsoLogins200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsCSV()`

```php
getTransactionsCSV($limit, $order_by, $direction, $accounting_period_id, $target, $page)
```

TODO deprecated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of results per page.
$order_by = 'order_by_example'; // string
$direction = 'direction_example'; // string
$accounting_period_id = 'accounting_period_id_example'; // string
$target = 'target_example'; // string | select special Columns for particular target
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.

try {
    $apiInstance->getTransactionsCSV($limit, $order_by, $direction, $accounting_period_id, $target, $page);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getTransactionsCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **order_by** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **accounting_period_id** | **string**|  | [optional] |
| **target** | **string**| select special Columns for particular target | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |

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

## `getTransactionsExport()`

```php
getTransactionsExport($limit, $order_by, $direction, $accounting_period_id, $target, $page)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of results per page.
$order_by = 'order_by_example'; // string
$direction = 'direction_example'; // string
$accounting_period_id = 'accounting_period_id_example'; // string
$target = 'target_example'; // string | select special Columns for particular target
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.

try {
    $apiInstance->getTransactionsExport($limit, $order_by, $direction, $accounting_period_id, $target, $page);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getTransactionsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **order_by** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **accounting_period_id** | **string**|  | [optional] |
| **target** | **string**| select special Columns for particular target | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |

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

## `getTransactionsSummary()`

```php
getTransactionsSummary(): \ChurchTools\Model\GetTransactionsSummary200Response
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTransactionsSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getTransactionsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetTransactionsSummary200Response**](../Model/GetTransactionsSummary200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteData()`

```php
getWebsiteData($include): \ChurchTools\Model\GetWebsiteData200Response
```



Get the data that is shared with the CT website

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | Include additional information

try {
    $result = $apiInstance->getWebsiteData($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getWebsiteData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |

### Return type

[**\ChurchTools\Model\GetWebsiteData200Response**](../Model/GetWebsiteData200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteStarttest()`

```php
getWebsiteStarttest()
```

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getWebsiteStarttest();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getWebsiteStarttest: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAccountStatementMovementSuggestion()`

```php
patchAccountStatementMovementSuggestion($id, $account_id, $statement_id, $movement_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$account_id = 'account_id_example'; // string
$statement_id = 'statement_id_example'; // string
$movement_id = 'movement_id_example'; // string

try {
    $apiInstance->patchAccountStatementMovementSuggestion($id, $account_id, $statement_id, $movement_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->patchAccountStatementMovementSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **account_id** | **string**|  | |
| **statement_id** | **string**|  | |
| **movement_id** | **string**|  | |

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

## `patchFileWithDomainType()`

```php
patchFileWithDomainType($domain_type, $domain_identifier)
```

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'appointment_image', 'logo', 'attachments', 'bulkletter_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'post', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier

try {
    $apiInstance->patchFileWithDomainType($domain_type, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->patchFileWithDomainType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;appointment_image&#39;, &#39;logo&#39;, &#39;attachments&#39;, &#39;bulkletter_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;post&#39;, &#39;wiki_.?&#39;. | |
| **domain_identifier** | **string**| the domain identifier | |

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

## `patchRegistrationconfigId()`

```php
patchRegistrationconfigId($id): \ChurchTools\Model\PatchRegistrationconfigId200Response
```



Updates the specified registration configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->patchRegistrationconfigId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->patchRegistrationconfigId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\PatchRegistrationconfigId200Response**](../Model/PatchRegistrationconfigId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRoutinesRoutineId()`

```php
patchRoutinesRoutineId($routine_id, $patch_routines_routine_id_request, $dry_run): \ChurchTools\Model\PostRoutines201Response
```



Update the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 9; // int | ID of a routine
$patch_routines_routine_id_request = new \ChurchTools\Model\PatchRoutinesRoutineIdRequest(); // \ChurchTools\Model\PatchRoutinesRoutineIdRequest
$dry_run = True; // bool

try {
    $result = $apiInstance->patchRoutinesRoutineId($routine_id, $patch_routines_routine_id_request, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->patchRoutinesRoutineId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**| ID of a routine | |
| **patch_routines_routine_id_request** | [**\ChurchTools\Model\PatchRoutinesRoutineIdRequest**](../Model/PatchRoutinesRoutineIdRequest.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\ChurchTools\Model\PostRoutines201Response**](../Model/PostRoutines201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postActions()`

```php
postActions($domain_type, $post_actions_request): \ChurchTools\Model\PostActions200Response
```

Get filtered actions

Get filtered actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = array('domain_type_example'); // string[] | Types of domain objects to retrieve
$post_actions_request = new \ChurchTools\Model\PostActionsRequest(); // \ChurchTools\Model\PostActionsRequest

try {
    $result = $apiInstance->postActions($domain_type, $post_actions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_type** | [**string[]**](../Model/string.md)| Types of domain objects to retrieve | |
| **post_actions_request** | [**\ChurchTools\Model\PostActionsRequest**](../Model/PostActionsRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostActions200Response**](../Model/PostActions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkAccounts()`

```php
postBulkAccounts()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postBulkAccounts();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postBulkAccounts: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkTransactions()`

```php
postBulkTransactions()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postBulkTransactions();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postBulkTransactions: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCalendars()`

```php
postCalendars($post_calendars_request): \ChurchTools\Model\PostCalendars201Response
```

Create new calendar

Create a new calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_calendars_request = new \ChurchTools\Model\PostCalendarsRequest(); // \ChurchTools\Model\PostCalendarsRequest

try {
    $result = $apiInstance->postCalendars($post_calendars_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_calendars_request** | [**\ChurchTools\Model\PostCalendarsRequest**](../Model/PostCalendarsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostCalendars201Response**](../Model/PostCalendars201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChurchqueryDebugExport()`

```php
postChurchqueryDebugExport($type, $body)
```

Export result of ChurchQuery

**Caution**: This is an preliminary API, and is subject to be changed. It provides a downloadfile with the result of a given query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | type of export
$body = 'body_example'; // string | 

try {
    $apiInstance->postChurchqueryDebugExport($type, $body);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postChurchqueryDebugExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| type of export | [optional] |
| **body** | **string**|  | [optional] |

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

## `postCostCenterExport()`

```php
postCostCenterExport()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postCostCenterExport();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postCostCenterExport: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postExternalsystem()`

```php
postExternalsystem($post_externalsystem_request): \ChurchTools\Model\PostExternalsystem201Response
```

Create new resource

Create a new external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_externalsystem_request = new \ChurchTools\Model\PostExternalsystemRequest(); // \ChurchTools\Model\PostExternalsystemRequest

try {
    $result = $apiInstance->postExternalsystem($post_externalsystem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postExternalsystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_externalsystem_request** | [**\ChurchTools\Model\PostExternalsystemRequest**](../Model/PostExternalsystemRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostExternalsystem201Response**](../Model/PostExternalsystem201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFeatureUsage()`

```php
postFeatureUsage($post_feature_usage_request)
```



Send feature usage statistics in bulk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_feature_usage_request = new \ChurchTools\Model\PostFeatureUsageRequest(); // \ChurchTools\Model\PostFeatureUsageRequest | 

try {
    $apiInstance->postFeatureUsage($post_feature_usage_request);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postFeatureUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_feature_usage_request** | [**\ChurchTools\Model\PostFeatureUsageRequest**](../Model/PostFeatureUsageRequest.md)|  | [optional] |

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

## `postFollowupsFollowUpIdComplete()`

```php
postFollowupsFollowUpIdComplete($follow_up_id, $post_followups_follow_up_id_complete_request): \ChurchTools\Model\PutFollowupsFollowUpId200Response
```

Complete follow-up

Completes the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up
$post_followups_follow_up_id_complete_request = new \ChurchTools\Model\PostFollowupsFollowUpIdCompleteRequest(); // \ChurchTools\Model\PostFollowupsFollowUpIdCompleteRequest

try {
    $result = $apiInstance->postFollowupsFollowUpIdComplete($follow_up_id, $post_followups_follow_up_id_complete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postFollowupsFollowUpIdComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |
| **post_followups_follow_up_id_complete_request** | [**\ChurchTools\Model\PostFollowupsFollowUpIdCompleteRequest**](../Model/PostFollowupsFollowUpIdCompleteRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutFollowupsFollowUpId200Response**](../Model/PutFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFollowupsFollowUpIdNotes()`

```php
postFollowupsFollowUpIdNotes($follow_up_id, $also_apply_to_person, $post_followups_follow_up_id_notes_request)
```

Add Note to follow-up

Add note to follow up

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up
$also_apply_to_person = true; // bool
$post_followups_follow_up_id_notes_request = new \ChurchTools\Model\PostFollowupsFollowUpIdNotesRequest(); // \ChurchTools\Model\PostFollowupsFollowUpIdNotesRequest

try {
    $apiInstance->postFollowupsFollowUpIdNotes($follow_up_id, $also_apply_to_person, $post_followups_follow_up_id_notes_request);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postFollowupsFollowUpIdNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |
| **also_apply_to_person** | **bool**|  | [optional] |
| **post_followups_follow_up_id_notes_request** | [**\ChurchTools\Model\PostFollowupsFollowUpIdNotesRequest**](../Model/PostFollowupsFollowUpIdNotesRequest.md)|  | [optional] |

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

## `postFollowupsFollowUpIdPostpone()`

```php
postFollowupsFollowUpIdPostpone($follow_up_id, $post_followups_follow_up_id_postpone_request): \ChurchTools\Model\PutFollowupsFollowUpId200Response
```

Postpone follow-up

Postpones the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up
$post_followups_follow_up_id_postpone_request = new \ChurchTools\Model\PostFollowupsFollowUpIdPostponeRequest(); // \ChurchTools\Model\PostFollowupsFollowUpIdPostponeRequest

try {
    $result = $apiInstance->postFollowupsFollowUpIdPostpone($follow_up_id, $post_followups_follow_up_id_postpone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postFollowupsFollowUpIdPostpone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |
| **post_followups_follow_up_id_postpone_request** | [**\ChurchTools\Model\PostFollowupsFollowUpIdPostponeRequest**](../Model/PostFollowupsFollowUpIdPostponeRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PutFollowupsFollowUpId200Response**](../Model/PutFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFollowupsFollowUpIdReset()`

```php
postFollowupsFollowUpIdReset($follow_up_id, $post_followups_follow_up_id_reset_request): \ChurchTools\Model\PutFollowupsFollowUpId200Response
```

Reset follow-up

Resets the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up
$post_followups_follow_up_id_reset_request = new \ChurchTools\Model\PostFollowupsFollowUpIdResetRequest(); // \ChurchTools\Model\PostFollowupsFollowUpIdResetRequest

try {
    $result = $apiInstance->postFollowupsFollowUpIdReset($follow_up_id, $post_followups_follow_up_id_reset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postFollowupsFollowUpIdReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |
| **post_followups_follow_up_id_reset_request** | [**\ChurchTools\Model\PostFollowupsFollowUpIdResetRequest**](../Model/PostFollowupsFollowUpIdResetRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutFollowupsFollowUpId200Response**](../Model/PutFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsGroupIdMemberfieldsGroup()`

```php
postGroupsGroupIdMemberfieldsGroup($group_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $apiInstance->postGroupsGroupIdMemberfieldsGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postGroupsGroupIdMemberfieldsGroup: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJobLogs()`

```php
postJobLogs($id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->postJobLogs($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postJobLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

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

## `postLabels()`

```php
postLabels()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postLabels();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postLabels: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOauthclients()`

```php
postOauthclients($post_oauthclients_request): \ChurchTools\Model\PostOauthclients200Response
```



Create a new OAuth client entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_oauthclients_request = new \ChurchTools\Model\PostOauthclientsRequest(); // \ChurchTools\Model\PostOauthclientsRequest | 

try {
    $result = $apiInstance->postOauthclients($post_oauthclients_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postOauthclients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_oauthclients_request** | [**\ChurchTools\Model\PostOauthclientsRequest**](../Model/PostOauthclientsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostOauthclients200Response**](../Model/PostOauthclients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPersonTwofactor()`

```php
postPersonTwofactor($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->postPersonTwofactor($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postPersonTwofactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `postPersonsPersonIdFollowups()`

```php
postPersonsPersonIdFollowups($person_id, $put_followups_follow_up_id_request): \ChurchTools\Model\PutFollowupsFollowUpId200Response
```

Create follow-up

Create a follow-up for the specified person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$put_followups_follow_up_id_request = new \ChurchTools\Model\PutFollowupsFollowUpIdRequest(); // \ChurchTools\Model\PutFollowupsFollowUpIdRequest

try {
    $result = $apiInstance->postPersonsPersonIdFollowups($person_id, $put_followups_follow_up_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postPersonsPersonIdFollowups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **put_followups_follow_up_id_request** | [**\ChurchTools\Model\PutFollowupsFollowUpIdRequest**](../Model/PutFollowupsFollowUpIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutFollowupsFollowUpId200Response**](../Model/PutFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRegistrations()`

```php
postRegistrations(): \ChurchTools\Model\PostRegistrations201Response
```



Registers a new self-registration and sends an e-mail to the given e-mail address, asking the user to confirm the registration. If the account already exists or is blocked, another e-mail will be sent and the response is a '204 No Content'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postRegistrations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRegistrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\PostRegistrations201Response**](../Model/PostRegistrations201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRegistrationsGuidConfirmToken()`

```php
postRegistrationsGuidConfirmToken($guid, $token): \ChurchTools\Model\PostRegistrationsGuidConfirmToken200Response
```



Confirm the specified self-registration, using the token from the e-mail that was sent in response to the self-registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | GUID for Entity
$token = 'token_example'; // string

try {
    $result = $apiInstance->postRegistrationsGuidConfirmToken($guid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRegistrationsGuidConfirmToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guid** | **string**| GUID for Entity | |
| **token** | **string**|  | |

### Return type

[**\ChurchTools\Model\PostRegistrationsGuidConfirmToken200Response**](../Model/PostRegistrationsGuidConfirmToken200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRegistrationsGuidConvert()`

```php
postRegistrationsGuidConvert($guid, $token, $post_registrations_guid_convert_request)
```



Convert the specified self-registration to a new user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | GUID for Entity
$token = 'token_example'; // string
$post_registrations_guid_convert_request = new \ChurchTools\Model\PostRegistrationsGuidConvertRequest(); // \ChurchTools\Model\PostRegistrationsGuidConvertRequest

try {
    $apiInstance->postRegistrationsGuidConvert($guid, $token, $post_registrations_guid_convert_request);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRegistrationsGuidConvert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guid** | **string**| GUID for Entity | |
| **token** | **string**|  | |
| **post_registrations_guid_convert_request** | [**\ChurchTools\Model\PostRegistrationsGuidConvertRequest**](../Model/PostRegistrationsGuidConvertRequest.md)|  | [optional] |

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

## `postRegistrationsGuidResend()`

```php
postRegistrationsGuidResend($guid)
```



Resend the e-mail to confirm the specified self-registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | GUID for Entity

try {
    $apiInstance->postRegistrationsGuidResend($guid);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRegistrationsGuidResend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guid** | **string**| GUID for Entity | |

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

## `postResources()`

```php
postResources($post_resources_request): \ChurchTools\Model\PostExternalsystem201Response
```

Create new resource

Create a new resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_resources_request = new \ChurchTools\Model\PostResourcesRequest(); // \ChurchTools\Model\PostResourcesRequest

try {
    $result = $apiInstance->postResources($post_resources_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_resources_request** | [**\ChurchTools\Model\PostResourcesRequest**](../Model/PostResourcesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostExternalsystem201Response**](../Model/PostExternalsystem201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postResourcetypes()`

```php
postResourcetypes($post_resourcetypes_request): \ChurchTools\Model\PostResourcetypes201Response
```

Create resource type

Create a new resource type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_resourcetypes_request = new \ChurchTools\Model\PostResourcetypesRequest(); // \ChurchTools\Model\PostResourcetypesRequest

try {
    $result = $apiInstance->postResourcetypes($post_resourcetypes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postResourcetypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_resourcetypes_request** | [**\ChurchTools\Model\PostResourcetypesRequest**](../Model/PostResourcetypesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostResourcetypes201Response**](../Model/PostResourcetypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRoutines()`

```php
postRoutines($post_routines_request): \ChurchTools\Model\PostRoutines201Response
```



Create a routine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_routines_request = new \ChurchTools\Model\PostRoutinesRequest(); // \ChurchTools\Model\PostRoutinesRequest

try {
    $result = $apiInstance->postRoutines($post_routines_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRoutines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_routines_request** | [**\ChurchTools\Model\PostRoutinesRequest**](../Model/PostRoutinesRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostRoutines201Response**](../Model/PostRoutines201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRoutinesExecute()`

```php
postRoutinesExecute()
```



Start routine processing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postRoutinesExecute();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRoutinesExecute: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRoutinesRoutineIdStepsValidate()`

```php
postRoutinesRoutineIdStepsValidate($routine_id, $post_routines_routine_id_steps_validate_request)
```



Validates a new step for the specified routine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routine_id = 56; // int
$post_routines_routine_id_steps_validate_request = new \ChurchTools\Model\PostRoutinesRoutineIdStepsValidateRequest(); // \ChurchTools\Model\PostRoutinesRoutineIdStepsValidateRequest

try {
    $apiInstance->postRoutinesRoutineIdStepsValidate($routine_id, $post_routines_routine_id_steps_validate_request);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postRoutinesRoutineIdStepsValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routine_id** | **int**|  | |
| **post_routines_routine_id_steps_validate_request** | [**\ChurchTools\Model\PostRoutinesRoutineIdStepsValidateRequest**](../Model/PostRoutinesRoutineIdStepsValidateRequest.md)|  | |

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

## `postSamlAcs()`

```php
postSamlAcs()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postSamlAcs();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSamlAcs: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStatements()`

```php
postStatements($id): \ChurchTools\Model\PostStatements200Response
```

TODO 200

Upload a new statement-csv or the equivalent for the accounting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->postStatements($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\PostStatements200Response**](../Model/PostStatements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTwofactorTotp()`

```php
postTwofactorTotp()
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postTwofactorTotp();
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postTwofactorTotp: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebsiteData()`

```php
postWebsiteData($post_website_data_request): \ChurchTools\Model\PostWebsiteData200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_website_data_request = new \ChurchTools\Model\PostWebsiteDataRequest(); // \ChurchTools\Model\PostWebsiteDataRequest

try {
    $result = $apiInstance->postWebsiteData($post_website_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postWebsiteData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_website_data_request** | [**\ChurchTools\Model\PostWebsiteDataRequest**](../Model/PostWebsiteDataRequest.md)|  | |

### Return type

[**\ChurchTools\Model\PostWebsiteData200Response**](../Model/PostWebsiteData200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCalendarsCalendarId()`

```php
putCalendarsCalendarId($calendar_id, $put_calendars_calendar_id_request): \ChurchTools\Model\PostCalendars201Response
```

Update a calendar

Update the specified calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$put_calendars_calendar_id_request = new \ChurchTools\Model\PutCalendarsCalendarIdRequest(); // \ChurchTools\Model\PutCalendarsCalendarIdRequest

try {
    $result = $apiInstance->putCalendarsCalendarId($calendar_id, $put_calendars_calendar_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putCalendarsCalendarId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_id** | **int**| ID of Calendar | |
| **put_calendars_calendar_id_request** | [**\ChurchTools\Model\PutCalendarsCalendarIdRequest**](../Model/PutCalendarsCalendarIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostCalendars201Response**](../Model/PostCalendars201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putExternalloginExternalLoginId()`

```php
putExternalloginExternalLoginId($external_login_id, $get_externallogin_external_login_id200_response_data): \ChurchTools\Model\GetExternalloginExternalLoginId200Response
```

Update external login

Update the specified external login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_login_id = 7; // float
$get_externallogin_external_login_id200_response_data = new \ChurchTools\Model\GetExternalloginExternalLoginId200ResponseData(); // \ChurchTools\Model\GetExternalloginExternalLoginId200ResponseData

try {
    $result = $apiInstance->putExternalloginExternalLoginId($external_login_id, $get_externallogin_external_login_id200_response_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putExternalloginExternalLoginId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_login_id** | **float**|  | |
| **get_externallogin_external_login_id200_response_data** | [**\ChurchTools\Model\GetExternalloginExternalLoginId200ResponseData**](../Model/GetExternalloginExternalLoginId200ResponseData.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetExternalloginExternalLoginId200Response**](../Model/GetExternalloginExternalLoginId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFollowupsFollowUpId()`

```php
putFollowupsFollowUpId($follow_up_id, $put_followups_follow_up_id_request): \ChurchTools\Model\PutFollowupsFollowUpId200Response
```

Update follow-up

Update the specified follow-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_up_id = 2; // int | ID of Follow-up
$put_followups_follow_up_id_request = new \ChurchTools\Model\PutFollowupsFollowUpIdRequest(); // \ChurchTools\Model\PutFollowupsFollowUpIdRequest

try {
    $result = $apiInstance->putFollowupsFollowUpId($follow_up_id, $put_followups_follow_up_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putFollowupsFollowUpId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_up_id** | **int**| ID of Follow-up | |
| **put_followups_follow_up_id_request** | [**\ChurchTools\Model\PutFollowupsFollowUpIdRequest**](../Model/PutFollowupsFollowUpIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutFollowupsFollowUpId200Response**](../Model/PutFollowupsFollowUpId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId()`

```php
putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId($group_id, $group_member_field_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$group_member_field_id = 'group_member_field_id_example'; // string

try {
    $apiInstance->putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId($group_id, $group_member_field_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putGroupsGroupIdMemberfieldsGroupGroupMemberFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **group_member_field_id** | **string**|  | |

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

## `putGroupsGroupIdMemberfieldsPersonPersonFieldId()`

```php
putGroupsGroupIdMemberfieldsPersonPersonFieldId($group_id, $person_field_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_field_id = 'person_field_id_example'; // string

try {
    $apiInstance->putGroupsGroupIdMemberfieldsPersonPersonFieldId($group_id, $person_field_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putGroupsGroupIdMemberfieldsPersonPersonFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_field_id** | **string**|  | |

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

## `putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus()`

```php
putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus($group_id, $group_member_status, $role_id, $put_groups_group_id_members_routines_role_id_group_member_status_request): \ChurchTools\Model\PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus200Response
```

Update membership routine

Update the membership routine for the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$group_member_status = active; // string | Status of a group membership
$role_id = 1; // int | ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group.
$put_groups_group_id_members_routines_role_id_group_member_status_request = new \ChurchTools\Model\PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatusRequest(); // \ChurchTools\Model\PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatusRequest

try {
    $result = $apiInstance->putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus($group_id, $group_member_status, $role_id, $put_groups_group_id_members_routines_role_id_group_member_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **group_member_status** | **string**| Status of a group membership | |
| **role_id** | **int**| ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group. | |
| **put_groups_group_id_members_routines_role_id_group_member_status_request** | [**\ChurchTools\Model\PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatusRequest**](../Model/PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatusRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus200Response**](../Model/PutGroupsGroupIdMembersRoutinesRoleIdGroupMemberStatus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putJobStatus()`

```php
putJobStatus($id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->putJobStatus($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putJobStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

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

## `putOauthclientsIdentifier()`

```php
putOauthclientsIdentifier($identifier, $put_oauthclients_identifier_request): \ChurchTools\Model\PutOauthclientsIdentifier200Response
```



Update an existing client entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string
$put_oauthclients_identifier_request = new \ChurchTools\Model\PutOauthclientsIdentifierRequest(); // \ChurchTools\Model\PutOauthclientsIdentifierRequest

try {
    $result = $apiInstance->putOauthclientsIdentifier($identifier, $put_oauthclients_identifier_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putOauthclientsIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**|  | |
| **put_oauthclients_identifier_request** | [**\ChurchTools\Model\PutOauthclientsIdentifierRequest**](../Model/PutOauthclientsIdentifierRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PutOauthclientsIdentifier200Response**](../Model/PutOauthclientsIdentifier200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPersonPassword()`

```php
putPersonPassword($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->putPersonPassword($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putPersonPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `putPersonPrivacyPolicy()`

```php
putPersonPrivacyPolicy($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->putPersonPrivacyPolicy($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putPersonPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `putPersonTwofactor()`

```php
putPersonTwofactor($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->putPersonTwofactor($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putPersonTwofactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `putPersonTwofactorForce()`

```php
putPersonTwofactorForce($person_id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->putPersonTwofactorForce($person_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putPersonTwofactorForce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `putResourcesResourceId()`

```php
putResourcesResourceId($resource_id, $post_resources_request): \ChurchTools\Model\PostExternalsystem201Response
```

Update resource

Update the specified resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 7; // float
$post_resources_request = new \ChurchTools\Model\PostResourcesRequest(); // \ChurchTools\Model\PostResourcesRequest

try {
    $result = $apiInstance->putResourcesResourceId($resource_id, $post_resources_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putResourcesResourceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **float**|  | |
| **post_resources_request** | [**\ChurchTools\Model\PostResourcesRequest**](../Model/PostResourcesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostExternalsystem201Response**](../Model/PostExternalsystem201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putResourcetypesResourceTypeId()`

```php
putResourcetypesResourceTypeId($resource_type_id, $post_resourcetypes_request): \ChurchTools\Model\PostResourcetypes201Response
```

Update resource

Update the specified resource type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_type_id = 3.4; // float
$post_resourcetypes_request = new \ChurchTools\Model\PostResourcetypesRequest(); // \ChurchTools\Model\PostResourcetypesRequest

try {
    $result = $apiInstance->putResourcetypesResourceTypeId($resource_type_id, $post_resourcetypes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putResourcetypesResourceTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_type_id** | **float**|  | |
| **post_resourcetypes_request** | [**\ChurchTools\Model\PostResourcetypesRequest**](../Model/PostResourcetypesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostResourcetypes201Response**](../Model/PostResourcetypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserRules()`

```php
putUserRules($id)
```

TODO 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->putUserRules($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putUserRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

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
