# ChurchTools\GroupApi

Groups we love

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkin()**](GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group |
| [**createMeeting()**](GroupApi.md#createMeeting) | **POST** /groups/{groupId}/meetings | Create a group meeting |
| [**deleteAutomaticEmail()**](GroupApi.md#deleteAutomaticEmail) | **DELETE** /groups/{groupId}/emails/{emailId} | Delete automatic email |
| [**deleteGroupAgegroupsAgeGroupId()**](GroupApi.md#deleteGroupAgegroupsAgeGroupId) | **DELETE** /group/agegroups/{ageGroupId} | Delete agegroup |
| [**deleteGroupGroupcategoriesGroupCategoryId()**](GroupApi.md#deleteGroupGroupcategoriesGroupCategoryId) | **DELETE** /group/groupcategories/{groupCategoryId} |  |
| [**deleteGroupGrouptypesGroupTypeId()**](GroupApi.md#deleteGroupGrouptypesGroupTypeId) | **DELETE** /group/grouptypes/{groupTypeId} | Delete grouptype |
| [**deleteGroupMeetingtemplatesMeetingTemplateId()**](GroupApi.md#deleteGroupMeetingtemplatesMeetingTemplateId) | **DELETE** /group/meetingtemplates/{meetingTemplateId} | Delete group meeting template |
| [**deleteGroupRolesRoleId()**](GroupApi.md#deleteGroupRolesRoleId) | **DELETE** /group/roles/{roleId} | Delete role |
| [**deleteGroupTargetgroupsTargetGroupId()**](GroupApi.md#deleteGroupTargetgroupsTargetGroupId) | **DELETE** /group/targetgroups/{targetGroupId} | delete target group |
| [**deleteGroupsGroupId()**](GroupApi.md#deleteGroupsGroupId) | **DELETE** /groups/{groupId} | Delete a group |
| [**deleteGroupsGroupIdGrouphomepage()**](GroupApi.md#deleteGroupsGroupIdGrouphomepage) | **DELETE** /groups/{groupId}/grouphomepage | Delete the group homepage information for the specified group |
| [**deleteGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingId) | **DELETE** /groups/{groupId}/meetings/{meetingId} |  |
| [**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin |
| [**deleteGroupsGroupIdMembersPersonId()**](GroupApi.md#deleteGroupsGroupIdMembersPersonId) | **DELETE** /groups/{groupId}/members/{personId} | Delete group member |
| [**deleteGroupsGroupIdMembersPersonIdFollowup()**](GroupApi.md#deleteGroupsGroupIdMembersPersonIdFollowup) | **DELETE** /groups/{groupId}/members/{personId}/followup | Delete follow-up |
| [**deleteGroupsGroupIdParentsParentGroupId()**](GroupApi.md#deleteGroupsGroupIdParentsParentGroupId) | **DELETE** /groups/{groupId}/parents/{parentGroupId} | Delete Parent Group connection |
| [**deleteGroupsGroupIdPlacesPlaceId()**](GroupApi.md#deleteGroupsGroupIdPlacesPlaceId) | **DELETE** /groups/{groupId}/places/{placeId} |  |
| [**duplicateGroup()**](GroupApi.md#duplicateGroup) | **POST** /groups/{groupId}/duplicate |  |
| [**getAllGroupMembers()**](GroupApi.md#getAllGroupMembers) | **GET** /groups/{groupId}/members | Get all group members |
| [**getAllGroupsForPerson()**](GroupApi.md#getAllGroupsForPerson) | **GET** /persons/{personId}/groups | Get all groups a member is in |
| [**getAllMeetings()**](GroupApi.md#getAllMeetings) | **GET** /groups/{groupId}/meetings | Get all group meetings for a specific group |
| [**getAutomaticEmail()**](GroupApi.md#getAutomaticEmail) | **GET** /groups/{groupId}/emails/{emailId} | Get one automatic email |
| [**getAutomaticEmails()**](GroupApi.md#getAutomaticEmails) | **GET** /groups/{groupId}/emails | Get all automatic emails of a group |
| [**getDynamicgroupRuleset()**](GroupApi.md#getDynamicgroupRuleset) | **GET** /dynamicgroups/{groupId}/ruleset | get ruleset |
| [**getDynamicgroupStatus()**](GroupApi.md#getDynamicgroupStatus) | **GET** /dynamicgroups/{groupId}/status | status of dynamic group |
| [**getGroupAgegroups()**](GroupApi.md#getGroupAgegroups) | **GET** /group/agegroups | Get agegroups |
| [**getGroupAgegroupsAgeGroupId()**](GroupApi.md#getGroupAgegroupsAgeGroupId) | **GET** /group/agegroups/{ageGroupId} | Get agegroup |
| [**getGroupForHomepage()**](GroupApi.md#getGroupForHomepage) | **GET** /publicgroups/{groupId}/{hash} | Public information of group |
| [**getGroupGroupcategories()**](GroupApi.md#getGroupGroupcategories) | **GET** /group/groupcategories | GET Group Categories |
| [**getGroupGroupcategoriesGroupCategoryId()**](GroupApi.md#getGroupGroupcategoriesGroupCategoryId) | **GET** /group/groupcategories/{groupCategoryId} | Get Group Category |
| [**getGroupGrouptypes()**](GroupApi.md#getGroupGrouptypes) | **GET** /group/grouptypes | Get all group types |
| [**getGroupGrouptypesGroupTypeId()**](GroupApi.md#getGroupGrouptypesGroupTypeId) | **GET** /group/grouptypes/{groupTypeId} | Get grouptype |
| [**getGroupHomepage()**](GroupApi.md#getGroupHomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings |
| [**getGroupMeetingtemplates()**](GroupApi.md#getGroupMeetingtemplates) | **GET** /group/meetingtemplates | Get group meeting templates |
| [**getGroupMeetingtemplatesMeetingTemplateId()**](GroupApi.md#getGroupMeetingtemplatesMeetingTemplateId) | **GET** /group/meetingtemplates/{meetingTemplateId} | Get meeting template by id |
| [**getGroupMemberstatus()**](GroupApi.md#getGroupMemberstatus) | **GET** /group/memberstatus |  |
| [**getGroupQRCodeCheckin()**](GroupApi.md#getGroupQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin |  |
| [**getGroupQRCodeCheckinPerson()**](GroupApi.md#getGroupQRCodeCheckinPerson) | **GET** /groups/{groupId}/qrcodecheckin/{personId} |  |
| [**getGroupRoles()**](GroupApi.md#getGroupRoles) | **GET** /group/roles | Get roles |
| [**getGroupRolesRoleId()**](GroupApi.md#getGroupRolesRoleId) | **GET** /group/roles/{roleId} | Get role |
| [**getGroupStatistics()**](GroupApi.md#getGroupStatistics) | **GET** /groups/{groupId}/statistics | Fetch facts about group |
| [**getGroupTargetgroups()**](GroupApi.md#getGroupTargetgroups) | **GET** /group/targetgroups | Get target groups |
| [**getGroupTargetgroupsTargetGroupId()**](GroupApi.md#getGroupTargetgroupsTargetGroupId) | **GET** /group/targetgroups/{targetGroupId} | Get target group |
| [**getGroups()**](GroupApi.md#getGroups) | **GET** /groups | Get all groups |
| [**getGroupsGroupId()**](GroupApi.md#getGroupsGroupId) | **GET** /groups/{groupId} | Get a group |
| [**getGroupsGroupIdChildren()**](GroupApi.md#getGroupsGroupIdChildren) | **GET** /groups/{groupId}/children | Get child groups |
| [**getGroupsGroupIdDocumentDocumentId()**](GroupApi.md#getGroupsGroupIdDocumentDocumentId) | **GET** /groups/{groupId}/members/{memberId}/documents/{htmlTemplateId} |  |
| [**getGroupsGroupIdDocumentsDocumentId()**](GroupApi.md#getGroupsGroupIdDocumentsDocumentId) | **GET** /groups/{groupId}/documents/{documentId} |  |
| [**getGroupsGroupIdDocumenttemplates()**](GroupApi.md#getGroupsGroupIdDocumenttemplates) | **GET** /groups/{groupId}/documenttemplates |  |
| [**getGroupsGroupIdGrouphomepage()**](GroupApi.md#getGroupsGroupIdGrouphomepage) | **GET** /groups/{groupId}/grouphomepage | Get the group homepage information for the specified group |
| [**getGroupsGroupIdMeetingsExport()**](GroupApi.md#getGroupsGroupIdMeetingsExport) | **GET** /groups/{groupId}/meetings/export |  |
| [**getGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#getGroupsGroupIdMeetingsMeetingId) | **GET** /groups/{groupId}/meetings/{meetingId} | Get group meeting |
| [**getGroupsGroupIdMeetingsMeetingIdMembers()**](GroupApi.md#getGroupsGroupIdMeetingsMeetingIdMembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members |
| [**getGroupsGroupIdMemberfields()**](GroupApi.md#getGroupsGroupIdMemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields |
| [**getGroupsGroupIdMembersExport()**](GroupApi.md#getGroupsGroupIdMembersExport) | **GET** /groups/{groupId}/members/export | TODO 200 - Export Groupmebers |
| [**getGroupsGroupIdMembersExportConfig()**](GroupApi.md#getGroupsGroupIdMembersExportConfig) | **POST** /groups/{groupId}/members/export | TODO 200 - Export Groupmebers with configuration |
| [**getGroupsGroupIdMembersHistory()**](GroupApi.md#getGroupsGroupIdMembersHistory) | **GET** /groups/{groupId}/members/history | Export Groupmebers |
| [**getGroupsGroupIdMembersPersonId()**](GroupApi.md#getGroupsGroupIdMembersPersonId) | **GET** /groups/{groupId}/members/{personId} | Get group member |
| [**getGroupsGroupIdMembersStatistics()**](GroupApi.md#getGroupsGroupIdMembersStatistics) | **GET** /groups/{groupId}/members/statistics | Get statistics for group members |
| [**getGroupsGroupIdParents()**](GroupApi.md#getGroupsGroupIdParents) | **GET** /groups/{groupId}/parents | Get child groups |
| [**getGroupsGroupIdPoststatistics()**](GroupApi.md#getGroupsGroupIdPoststatistics) | **GET** /groups/{groupId}/poststatistics | Your GET endpoint |
| [**getGroupsGrouped()**](GroupApi.md#getGroupsGrouped) | **GET** /groups/grouped |  |
| [**getGroupsHierarchies()**](GroupApi.md#getGroupsHierarchies) | **GET** /groups/hierarchies | Get all group hierarchies |
| [**getGroupsIds()**](GroupApi.md#getGroupsIds) | **GET** /groups/ids | Get all group ids |
| [**getGroupsMembers()**](GroupApi.md#getGroupsMembers) | **GET** /groups/members | Get all group members |
| [**getGrupsIdPlaces()**](GroupApi.md#getGrupsIdPlaces) | **GET** /groups/{groupId}/places | Get all places of a group |
| [**getPersonMasterdata()**](GroupApi.md#getPersonMasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata |
| [**getPublicgroupsGroupIdForm()**](GroupApi.md#getPublicgroupsGroupIdForm) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form |
| [**getQRCodeCheckin()**](GroupApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF |
| [**getRolesOfGroup()**](GroupApi.md#getRolesOfGroup) | **GET** /groups/{groupId}/roles | Get all roles for this group |
| [**issueSignUpToken()**](GroupApi.md#issueSignUpToken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token. |
| [**optIns()**](GroupApi.md#optIns) | **GET** /groups/{groupId}/optins | Get Opt In status of group members |
| [**patchGroup()**](GroupApi.md#patchGroup) | **PATCH** /groups/{groupId} | Update Group |
| [**patchGroupsGroupIdMembersPersonId()**](GroupApi.md#patchGroupsGroupIdMembersPersonId) | **PATCH** /groups/{groupId}/members/{personId} | Update a group member. For creating a member use PUT. |
| [**patchGroupsGroupIdRolesRoleId()**](GroupApi.md#patchGroupsGroupIdRolesRoleId) | **PATCH** /groups/{groupId}/roles/{roleId} | save role |
| [**postAutomaticEmail()**](GroupApi.md#postAutomaticEmail) | **POST** /groups/{groupId}/emails | Save new automatic email for a group role |
| [**postGroupAgegroups()**](GroupApi.md#postGroupAgegroups) | **POST** /group/agegroups | Create agegroup |
| [**postGroupGroupcategories()**](GroupApi.md#postGroupGroupcategories) | **POST** /group/groupcategories | Create Group Category |
| [**postGroupGrouptypes()**](GroupApi.md#postGroupGrouptypes) | **POST** /group/grouptypes | Create group type |
| [**postGroupMeetingtemplates()**](GroupApi.md#postGroupMeetingtemplates) | **POST** /group/meetingtemplates | Create a group meeting template |
| [**postGroupRoles()**](GroupApi.md#postGroupRoles) | **POST** /group/roles | Create Role |
| [**postGroupTargetgroups()**](GroupApi.md#postGroupTargetgroups) | **POST** /group/targetgroups |  |
| [**postGroups()**](GroupApi.md#postGroups) | **POST** /groups | Create Group |
| [**postGroupsExport()**](GroupApi.md#postGroupsExport) | **POST** /groups/export |  |
| [**postGroupsGroupIdGroupstatus()**](GroupApi.md#postGroupsGroupIdGroupstatus) | **POST** /groups/{groupId}/grouptype |  |
| [**postGroupsGroupIdMeetingsMeetingIdMembersMissing()**](GroupApi.md#postGroupsGroupIdMeetingsMeetingIdMembersMissing) | **POST** /groups/{groupId}/meetings/{meetingId}/members/missing |  |
| [**postGroupsGroupIdMeetingsMeetingIdMembersReset()**](GroupApi.md#postGroupsGroupIdMeetingsMeetingIdMembersReset) | **POST** /groups/{groupId}/meetings/{meetingId}/members/reset | Reset group meeting status for members |
| [**postGroupsGroupIdMembersPersonIdFollowup()**](GroupApi.md#postGroupsGroupIdMembersPersonIdFollowup) | **POST** /groups/{groupId}/members/{personId}/followup | Execute follow-up |
| [**postGroupsGroupIdPlaces()**](GroupApi.md#postGroupsGroupIdPlaces) | **POST** /groups/{groupId}/places |  |
| [**postGroupsGroupIdQrcodecheckinPersonIdSend()**](GroupApi.md#postGroupsGroupIdQrcodecheckinPersonIdSend) | **POST** /groups/{groupId}/qrcodecheckin/{personId}/send | Send QR-Code for CheckIn via email |
| [**postPublicgroupsGroupIdMailToLeaders()**](GroupApi.md#postPublicgroupsGroupIdMailToLeaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders |
| [**postPublicgroupsGroupIdSignup()**](GroupApi.md#postPublicgroupsGroupIdSignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group |
| [**putAutomaticEmail()**](GroupApi.md#putAutomaticEmail) | **PUT** /groups/{groupId}/emails/{emailId} | Update automatic email |
| [**putGroupAgegroupsAgeGroupId()**](GroupApi.md#putGroupAgegroupsAgeGroupId) | **PUT** /group/agegroups/{ageGroupId} | Update agegroup |
| [**putGroupGroupcategoriesGroupCategoryId()**](GroupApi.md#putGroupGroupcategoriesGroupCategoryId) | **PUT** /group/groupcategories/{groupCategoryId} | Update Group Category |
| [**putGroupGrouptypesGroupTypeId()**](GroupApi.md#putGroupGrouptypesGroupTypeId) | **PUT** /group/grouptypes/{groupTypeId} | Update GroupType |
| [**putGroupMeetingtemplatesMeetingTemplateId()**](GroupApi.md#putGroupMeetingtemplatesMeetingTemplateId) | **PUT** /group/meetingtemplates/{meetingTemplateId} | Update group meeting template |
| [**putGroupRolesRoleId()**](GroupApi.md#putGroupRolesRoleId) | **PUT** /group/roles/{roleId} | Update Role |
| [**putGroupTargetgroupsTargetGroupId()**](GroupApi.md#putGroupTargetgroupsTargetGroupId) | **PUT** /group/targetgroups/{targetGroupId} | Update target group |
| [**putGroupsGroupIdGrouphomepage()**](GroupApi.md#putGroupsGroupIdGrouphomepage) | **PUT** /groups/{groupId}/grouphomepage | Update the group homepage information for the specified group |
| [**putGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#putGroupsGroupIdMeetingsMeetingId) | **PUT** /groups/{groupId}/meetings/{meetingId} |  |
| [**putGroupsGroupIdMembersPersonId()**](GroupApi.md#putGroupsGroupIdMembersPersonId) | **PUT** /groups/{groupId}/members/{personId} | Create a group member. For updating a member use PATCH. |
| [**putGroupsGroupIdParentsParentGroupId()**](GroupApi.md#putGroupsGroupIdParentsParentGroupId) | **PUT** /groups/{groupId}/parents/{parentGroupId} | Add Parent Group |
| [**putGroupsGroupIdPlacesPlaceId()**](GroupApi.md#putGroupsGroupIdPlacesPlaceId) | **PUT** /groups/{groupId}/places/{placeId} |  |
| [**startStopGroupChat()**](GroupApi.md#startStopGroupChat) | **POST** /groups/{groupId}/chat | Start or stop an event chat |


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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->checkin: ', $e->getMessage(), PHP_EOL;
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

## `createMeeting()`

```php
createMeeting($group_id, $create_meeting_request): \ChurchTools\Model\CreateMeeting201Response
```

Create a group meeting

Create a group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$create_meeting_request = new \ChurchTools\Model\CreateMeetingRequest(); // \ChurchTools\Model\CreateMeetingRequest

try {
    $result = $apiInstance->createMeeting($group_id, $create_meeting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **create_meeting_request** | [**\ChurchTools\Model\CreateMeetingRequest**](../Model/CreateMeetingRequest.md)|  | |

### Return type

[**\ChurchTools\Model\CreateMeeting201Response**](../Model/CreateMeeting201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomaticEmail()`

```php
deleteAutomaticEmail($group_id, $email_id)
```

Delete automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID or chat GUID of group
$email_id = 'email_id_example'; // string

try {
    $apiInstance->deleteAutomaticEmail($group_id, $email_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID or chat GUID of group | |
| **email_id** | **string**|  | |

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

## `deleteGroupAgegroupsAgeGroupId()`

```php
deleteGroupAgegroupsAgeGroupId($age_group_id, $dry_run)
```

Delete agegroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$age_group_id = 'age_group_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupAgegroupsAgeGroupId($age_group_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupAgegroupsAgeGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **age_group_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupGroupcategoriesGroupCategoryId()`

```php
deleteGroupGroupcategoriesGroupCategoryId($group_category_id, $dry_run)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_category_id = 'group_category_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupGroupcategoriesGroupCategoryId($group_category_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupGroupcategoriesGroupCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_category_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupGrouptypesGroupTypeId()`

```php
deleteGroupGrouptypesGroupTypeId($group_type_id, $dry_run)
```

Delete grouptype

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_type_id = 'group_type_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupGrouptypesGroupTypeId($group_type_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupGrouptypesGroupTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_type_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupMeetingtemplatesMeetingTemplateId()`

```php
deleteGroupMeetingtemplatesMeetingTemplateId($meeting_template_id, $dry_run)
```

Delete group meeting template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_template_id = 'meeting_template_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupMeetingtemplatesMeetingTemplateId($meeting_template_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupMeetingtemplatesMeetingTemplateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_template_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupRolesRoleId()`

```php
deleteGroupRolesRoleId($role_id, $dry_run)
```

Delete role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupRolesRoleId($role_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupTargetgroupsTargetGroupId()`

```php
deleteGroupTargetgroupsTargetGroupId($target_group_id, $dry_run)
```

delete target group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_group_id = 'target_group_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteGroupTargetgroupsTargetGroupId($target_group_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupTargetgroupsTargetGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_group_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteGroupsGroupId()`

```php
deleteGroupsGroupId($group_id, $dry_run)
```

Delete a group

Delete a group. This will remove all people from this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteGroupsGroupId($group_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

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


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $apiInstance->deleteGroupsGroupIdGrouphomepage($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
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

## `deleteGroupsGroupIdMeetingsMeetingId()`

```php
deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id)
```



delete group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |

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

## `deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()`

```php
deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id, $delete_groups_group_id_meetings_meeting_id_members_member_id_request)
```

Revoke checkin

Revoke the checkin for a previously checked-in group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 56; // int
$member_id = 56; // int
$delete_groups_group_id_meetings_meeting_id_members_member_id_request = new \ChurchTools\Model\DeleteGroupsGroupIdMeetingsMeetingIdMembersMemberIdRequest(); // \ChurchTools\Model\DeleteGroupsGroupIdMeetingsMeetingIdMembersMemberIdRequest

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id, $delete_groups_group_id_meetings_meeting_id_members_member_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **int**|  | |
| **member_id** | **int**|  | |
| **delete_groups_group_id_meetings_meeting_id_members_member_id_request** | [**\ChurchTools\Model\DeleteGroupsGroupIdMeetingsMeetingIdMembersMemberIdRequest**](../Model/DeleteGroupsGroupIdMeetingsMeetingIdMembersMemberIdRequest.md)|  | [optional] |

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

## `deleteGroupsGroupIdMembersPersonId()`

```php
deleteGroupsGroupIdMembersPersonId($group_id, $person_id)
```

Delete group member

Remove the specified group member from the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $apiInstance->deleteGroupsGroupIdMembersPersonId($group_id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMembersPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
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

## `deleteGroupsGroupIdMembersPersonIdFollowup()`

```php
deleteGroupsGroupIdMembersPersonIdFollowup($comment, $group_id, $person_id)
```

Delete follow-up

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment = 'comment_example'; // string | Comment
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $apiInstance->deleteGroupsGroupIdMembersPersonIdFollowup($comment, $group_id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMembersPersonIdFollowup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment** | **string**| Comment | |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |

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

## `deleteGroupsGroupIdParentsParentGroupId()`

```php
deleteGroupsGroupIdParentsParentGroupId($group_id, $parent_group_id)
```

Delete Parent Group connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$parent_group_id = 'parent_group_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdParentsParentGroupId($group_id, $parent_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdParentsParentGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **parent_group_id** | **string**|  | |

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

## `deleteGroupsGroupIdPlacesPlaceId()`

```php
deleteGroupsGroupIdPlacesPlaceId($group_id, $place_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$place_id = 56; // int

try {
    $apiInstance->deleteGroupsGroupIdPlacesPlaceId($group_id, $place_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdPlacesPlaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **place_id** | **int**|  | |

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

## `duplicateGroup()`

```php
duplicateGroup($new_name, $group_id, $copy_members, $copy_permissions, $copy_automatic_emails): \ChurchTools\Model\PostGroups201Response
```



Duplicate a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_name = 'new_name_example'; // string
$group_id = 42; // int | ID of group
$copy_members = True; // bool
$copy_permissions = True; // bool
$copy_automatic_emails = True; // bool

try {
    $result = $apiInstance->duplicateGroup($new_name, $group_id, $copy_members, $copy_permissions, $copy_automatic_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->duplicateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_name** | **string**|  | |
| **group_id** | **int**| ID of group | |
| **copy_members** | **bool**|  | [optional] |
| **copy_permissions** | **bool**|  | [optional] |
| **copy_automatic_emails** | **bool**|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllGroupMembers()`

```php
getAllGroupMembers($group_id, $page, $limit, $role_ids, $person_id, $group_member_statuses, $allowed_chat_users_only, $allowed_chat_writers_only, $query, $comment, $member_start_date_after, $member_start_date_before, $order_fields, $order_directions, $person_fields, $include): \ChurchTools\Model\GetAllGroupMembers200Response
```

Get all group members

This endpoint returns an array with all group members of one group. In addition to the documented query parameters, members can be filtered by group member fields (`<fieldName>=fieldValue`) and/or person fields (`person_<fieldName>=fieldValue`) as query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$role_ids = array(56); // int[] | Array of roles to filter the members
$person_id = array(56); // int[] | Array of person ids to filter the members
$group_member_statuses = array('group_member_statuses_example'); // string[] | Array of group member statuses to filter the members
$allowed_chat_users_only = false; // bool | If true, return only group members, that are allowed to chat in this group
$allowed_chat_writers_only = false; // bool | If true, return only group members that are allowed to write in the chat.
$query = Peter Maier; // string | searches in first and second name of group member
$comment = Member; // string | Filter by comment
$member_start_date_after = 2022-10-19; // \DateTime | Filter by whether the membership began after the given date.
$member_start_date_before = 2022-10-19; // \DateTime | Filter by whether the membership began before the given date.
$order_fields = array('order_fields_example'); // string[] | The fields to order by. Person fields look like this: person_firstName. Group member fields look like this: member_groupTypeRoleId.
$order_directions = array('order_directions_example'); // string[] | The order directions for the fields. Must be the same length as orderFields. Default is ASC. Possible values are ASC and DESC.
$person_fields = array('person_fields_example'); // string[] | Additional person fields that should be returned by this endpoint. A person field is defined by its key. For example: firstName
$include = array('include_example'); // string[] | Include additional information

try {
    $result = $apiInstance->getAllGroupMembers($group_id, $page, $limit, $role_ids, $person_id, $group_member_statuses, $allowed_chat_users_only, $allowed_chat_writers_only, $query, $comment, $member_start_date_after, $member_start_date_before, $order_fields, $order_directions, $person_fields, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**|  | |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **role_ids** | [**int[]**](../Model/int.md)| Array of roles to filter the members | [optional] |
| **person_id** | [**int[]**](../Model/int.md)| Array of person ids to filter the members | [optional] |
| **group_member_statuses** | [**string[]**](../Model/string.md)| Array of group member statuses to filter the members | [optional] |
| **allowed_chat_users_only** | **bool**| If true, return only group members, that are allowed to chat in this group | [optional] |
| **allowed_chat_writers_only** | **bool**| If true, return only group members that are allowed to write in the chat. | [optional] |
| **query** | **string**| searches in first and second name of group member | [optional] |
| **comment** | **string**| Filter by comment | [optional] |
| **member_start_date_after** | **\DateTime**| Filter by whether the membership began after the given date. | [optional] |
| **member_start_date_before** | **\DateTime**| Filter by whether the membership began before the given date. | [optional] |
| **order_fields** | [**string[]**](../Model/string.md)| The fields to order by. Person fields look like this: person_firstName. Group member fields look like this: member_groupTypeRoleId. | [optional] |
| **order_directions** | [**string[]**](../Model/string.md)| The order directions for the fields. Must be the same length as orderFields. Default is ASC. Possible values are ASC and DESC. | [optional] |
| **person_fields** | [**string[]**](../Model/string.md)| Additional person fields that should be returned by this endpoint. A person field is defined by its key. For example: firstName | [optional] |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |

### Return type

[**\ChurchTools\Model\GetAllGroupMembers200Response**](../Model/GetAllGroupMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllGroupsForPerson()`

```php
getAllGroupsForPerson($person_id, $show_overdue_groups, $show_inactive_groups, $show_to_delete_memberships, $show_requested_or_waiting_memberships): \ChurchTools\Model\GetAllGroupsForPerson200Response
```

Get all groups a member is in

This endpoint returns an array with all groups the user is in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$show_overdue_groups = true; // bool | If set groups that reached their enddate +x days configured in the admin settings, are also shown.
$show_inactive_groups = true; // bool | If set groups that have the status 'archived' are shown
$show_to_delete_memberships = true; // bool | If set groups were the user has the group member status 'to_deleted' are shown.
$show_requested_or_waiting_memberships = true; // bool | If set groups were the user has the group member status 'requested' or 'waiting' are shown.

try {
    $result = $apiInstance->getAllGroupsForPerson($person_id, $show_overdue_groups, $show_inactive_groups, $show_to_delete_memberships, $show_requested_or_waiting_memberships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **show_overdue_groups** | **bool**| If set groups that reached their enddate +x days configured in the admin settings, are also shown. | [optional] [default to false] |
| **show_inactive_groups** | **bool**| If set groups that have the status &#39;archived&#39; are shown | [optional] [default to false] |
| **show_to_delete_memberships** | **bool**| If set groups were the user has the group member status &#39;to_deleted&#39; are shown. | [optional] [default to false] |
| **show_requested_or_waiting_memberships** | **bool**| If set groups were the user has the group member status &#39;requested&#39; or &#39;waiting&#39; are shown. | [optional] [default to false] |

### Return type

[**\ChurchTools\Model\GetAllGroupsForPerson200Response**](../Model/GetAllGroupsForPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMeetings()`

```php
getAllMeetings($group_id, $is_canceled, $is_completed, $direction, $from, $to, $page, $limit, $include): \ChurchTools\Model\GetAllMeetings200Response
```

Get all group meetings for a specific group

Get all group meetings for a specific group matching the specified condition(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$is_canceled = True; // bool | Whether to show canceled group meetings
$is_completed = True; // bool | Whether to show done group meetings
$direction = 'direction_example'; // string
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$include = array('include_example'); // string[] | Include additional information

try {
    $result = $apiInstance->getAllMeetings($group_id, $is_canceled, $is_completed, $direction, $from, $to, $page, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **is_canceled** | **bool**| Whether to show canceled group meetings | [optional] |
| **is_completed** | **bool**| Whether to show done group meetings | [optional] |
| **direction** | **string**|  | [optional] |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **include** | [**string[]**](../Model/string.md)| Include additional information | [optional] |

### Return type

[**\ChurchTools\Model\GetAllMeetings200Response**](../Model/GetAllMeetings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmail()`

```php
getAutomaticEmail($group_id, $email_id): \ChurchTools\Model\GetAutomaticEmail200Response
```

Get one automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$email_id = 'email_id_example'; // string

try {
    $result = $apiInstance->getAutomaticEmail($group_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **email_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetAutomaticEmail200Response**](../Model/GetAutomaticEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmails()`

```php
getAutomaticEmails($group_id): \ChurchTools\Model\GetAutomaticEmails200Response
```

Get all automatic emails of a group



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getAutomaticEmails($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAutomaticEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetAutomaticEmails200Response**](../Model/GetAutomaticEmails200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDynamicgroupRuleset()`

```php
getDynamicgroupRuleset($group_id): \ChurchTools\Model\GetDynamicgroupRuleset200Response
```

get ruleset

**Caution**: This is an preliminary API, and is subject to be changed. returns the ruleset for a dynamyic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $result = $apiInstance->getDynamicgroupRuleset($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getDynamicgroupRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

### Return type

[**\ChurchTools\Model\GetDynamicgroupRuleset200Response**](../Model/GetDynamicgroupRuleset200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDynamicgroupStatus()`

```php
getDynamicgroupStatus($group_id): \ChurchTools\Model\GetDynamicgroupStatus200Response
```

status of dynamic group

> **Caution**: This is an preliminary API, and is subject to be changed.  gets the refresh status of a dynamic group  * `active` the group is atomatically refreshed on a regular baseis * `inactive` the group is not refrehes automatically - note that inactive groups cannot even be refreshed manually * `manual` the group is refreshed only manally * `none` the group is not a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $result = $apiInstance->getDynamicgroupStatus($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getDynamicgroupStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

### Return type

[**\ChurchTools\Model\GetDynamicgroupStatus200Response**](../Model/GetDynamicgroupStatus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupAgegroups()`

```php
getGroupAgegroups(): \ChurchTools\Model\GetGroupAgegroups200Response
```

Get agegroups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupAgegroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupAgegroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupAgegroups200Response**](../Model/GetGroupAgegroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupAgegroupsAgeGroupId()`

```php
getGroupAgegroupsAgeGroupId($age_group_id): \ChurchTools\Model\GetGroupAgegroupsAgeGroupId200Response
```

Get agegroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$age_group_id = 'age_group_id_example'; // string

try {
    $result = $apiInstance->getGroupAgegroupsAgeGroupId($age_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupAgegroupsAgeGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **age_group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupAgegroupsAgeGroupId200Response**](../Model/GetGroupAgegroupsAgeGroupId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

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



$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
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

## `getGroupGroupcategories()`

```php
getGroupGroupcategories(): \ChurchTools\Model\GetGroupGroupcategories200Response
```

GET Group Categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupGroupcategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupGroupcategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupGroupcategories200Response**](../Model/GetGroupGroupcategories200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupGroupcategoriesGroupCategoryId()`

```php
getGroupGroupcategoriesGroupCategoryId($group_category_id): \ChurchTools\Model\GetGroupGroupcategoriesGroupCategoryId200Response
```

Get Group Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_category_id = 'group_category_id_example'; // string

try {
    $result = $apiInstance->getGroupGroupcategoriesGroupCategoryId($group_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupGroupcategoriesGroupCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_category_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupGroupcategoriesGroupCategoryId200Response**](../Model/GetGroupGroupcategoriesGroupCategoryId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupGrouptypes()`

```php
getGroupGrouptypes(): \ChurchTools\Model\GetGroupGrouptypes200Response
```

Get all group types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupGrouptypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupGrouptypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupGrouptypes200Response**](../Model/GetGroupGrouptypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupGrouptypesGroupTypeId()`

```php
getGroupGrouptypesGroupTypeId($group_type_id): \ChurchTools\Model\PostGroupGrouptypes201Response
```

Get grouptype

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_type_id = 'group_type_id_example'; // string

try {
    $result = $apiInstance->getGroupGrouptypesGroupTypeId($group_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupGrouptypesGroupTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_type_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\PostGroupGrouptypes201Response**](../Model/PostGroupGrouptypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
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

## `getGroupMeetingtemplates()`

```php
getGroupMeetingtemplates(): \ChurchTools\Model\GetGroupMeetingtemplates200Response
```

Get group meeting templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupMeetingtemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupMeetingtemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupMeetingtemplates200Response**](../Model/GetGroupMeetingtemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMeetingtemplatesMeetingTemplateId()`

```php
getGroupMeetingtemplatesMeetingTemplateId($meeting_template_id): \ChurchTools\Model\PostGroupMeetingtemplates201ResponseData
```

Get meeting template by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_template_id = 'meeting_template_id_example'; // string

try {
    $result = $apiInstance->getGroupMeetingtemplatesMeetingTemplateId($meeting_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupMeetingtemplatesMeetingTemplateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_template_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\PostGroupMeetingtemplates201ResponseData**](../Model/PostGroupMeetingtemplates201ResponseData.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMemberstatus()`

```php
getGroupMemberstatus(): \ChurchTools\Model\GetGroupMemberstatus200Response
```



Get all member status. The member status are used to define the membership status of a person in a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupMemberstatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupMemberstatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupMemberstatus200Response**](../Model/GetGroupMemberstatus200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupQRCodeCheckin()`

```php
getGroupQRCodeCheckin($group_id): \ChurchTools\Model\GetGroupQRCodeCheckin200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupQRCodeCheckin($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupQRCodeCheckin200Response**](../Model/GetGroupQRCodeCheckin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupQRCodeCheckinPerson()`

```php
getGroupQRCodeCheckinPerson($group_id, $person_id): \ChurchTools\Model\GetGroupQRCodeCheckinPerson200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->getGroupQRCodeCheckinPerson($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupQRCodeCheckinPerson: ', $e->getMessage(), PHP_EOL;
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

## `getGroupRoles()`

```php
getGroupRoles($response_format): \ChurchTools\Model\GetGroupRoles200Response
```

Get roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$response_format = 'response_format_example'; // string | The format of the response. Default is `standard`.

try {
    $result = $apiInstance->getGroupRoles($response_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **response_format** | **string**| The format of the response. Default is &#x60;standard&#x60;. | [optional] |

### Return type

[**\ChurchTools\Model\GetGroupRoles200Response**](../Model/GetGroupRoles200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupRolesRoleId()`

```php
getGroupRolesRoleId($role_id): \ChurchTools\Model\GetGroupRoles200ResponseDataInner
```

Get role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->getGroupRolesRoleId($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupRoles200ResponseDataInner**](../Model/GetGroupRoles200ResponseDataInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupStatistics()`

```php
getGroupStatistics($group_id): \ChurchTools\Model\GetGroupStatistics200Response
```

Fetch facts about group

Fetch calculated facts about group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupStatistics($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupStatistics200Response**](../Model/GetGroupStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupTargetgroups()`

```php
getGroupTargetgroups(): \ChurchTools\Model\GetGroupTargetgroups200Response
```

Get target groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGroupTargetgroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupTargetgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetGroupTargetgroups200Response**](../Model/GetGroupTargetgroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupTargetgroupsTargetGroupId()`

```php
getGroupTargetgroupsTargetGroupId($target_group_id): \ChurchTools\Model\PostGroupTargetgroups201Response
```

Get target group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_group_id = 'target_group_id_example'; // string

try {
    $result = $apiInstance->getGroupTargetgroupsTargetGroupId($target_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupTargetgroupsTargetGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\PostGroupTargetgroups201Response**](../Model/PostGroupTargetgroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility, $order_fields, $order_directions, $include): \ChurchTools\Model\GetGroups200Response
```

Get all groups

This endpoint returns an array with all groups the user can see. This includes groups the user     is a member of as well as subordinate groups the user is allowed to see. In addition to the documented query parameters, groups can be filtered by all group fields (`<fieldName>=fieldValue`) as query parameters. For group fields with options (e.g. select fields), the format would be `<fieldName>[]=optionId` and can be repeated for serveral ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$tag_ids = array(56); // int[] | Array of group tag ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$without_my_groups = false; // bool | Determines if groups should be omitted where I am in
$only_my_groups = false; // bool | Determines if only groups where I am in should be returned
$has_meeting_place = true; // bool | Only show groups with meeting place
$allow_posts = true; // bool | Only show groups where posting is allowed
$has_posts = true; // bool | Only show groups which has posts
$query = 'query_example'; // string
$visibility = restricted; // string | Group visibility
$order_fields = array('order_fields_example'); // string[] | The fields to order by
$order_directions = array('order_directions_example'); // string[] | The order direction ASC or DESC for the order_fields
$include = array('include_example'); // string[] | Include additional information (currently, 'roles' are included by default but this behaviour is now deprecated)

try {
    $result = $apiInstance->getGroups($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility, $order_fields, $order_directions, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional] |
| **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional] |
| **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional] |
| **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional] |
| **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional] |
| **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional] |
| **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional] |
| **tag_ids** | [**int[]**](../Model/int.md)| Array of group tag ids to filter the groups | [optional] |
| **is_open_for_members** | **bool**| Filters groups by its open status | [optional] |
| **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional] |
| **only_my_groups** | **bool**| Determines if only groups where I am in should be returned | [optional] |
| **has_meeting_place** | **bool**| Only show groups with meeting place | [optional] |
| **allow_posts** | **bool**| Only show groups where posting is allowed | [optional] |
| **has_posts** | **bool**| Only show groups which has posts | [optional] |
| **query** | **string**|  | [optional] |
| **visibility** | **string**| Group visibility | [optional] [default to &#39;restricted&#39;] |
| **order_fields** | [**string[]**](../Model/string.md)| The fields to order by | [optional] |
| **order_directions** | [**string[]**](../Model/string.md)| The order direction ASC or DESC for the order_fields | [optional] |
| **include** | [**string[]**](../Model/string.md)| Include additional information (currently, &#39;roles&#39; are included by default but this behaviour is now deprecated) | [optional] |

### Return type

[**\ChurchTools\Model\GetGroups200Response**](../Model/GetGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupId()`

```php
getGroupsGroupId($group_id, $include): \ChurchTools\Model\PostGroups201Response
```

Get a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$include = array('include_example'); // string[] | Include additional information (currently, 'roles' are included by default but this behaviour is now deprecated)

try {
    $result = $apiInstance->getGroupsGroupId($group_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **include** | [**string[]**](../Model/string.md)| Include additional information (currently, &#39;roles&#39; are included by default but this behaviour is now deprecated) | [optional] |

### Return type

[**\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdChildren()`

```php
getGroupsGroupIdChildren($group_id, $limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility): \ChurchTools\Model\GetGroupsGroupIdChildren200Response
```

Get child groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$tag_ids = array(56); // int[] | Array of group tag ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$without_my_groups = false; // bool | Determines if groups should be omitted where I am in
$only_my_groups = false; // bool | Determines if only groups where I am in should be returned
$has_meeting_place = true; // bool | Only show groups with meeting place
$allow_posts = true; // bool | Only show groups where posting is allowed
$has_posts = true; // bool | Only show groups which has posts
$query = 'query_example'; // string
$visibility = restricted; // string | Group visibility

try {
    $result = $apiInstance->getGroupsGroupIdChildren($group_id, $limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional] |
| **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional] |
| **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional] |
| **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional] |
| **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional] |
| **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional] |
| **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional] |
| **tag_ids** | [**int[]**](../Model/int.md)| Array of group tag ids to filter the groups | [optional] |
| **is_open_for_members** | **bool**| Filters groups by its open status | [optional] |
| **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional] |
| **only_my_groups** | **bool**| Determines if only groups where I am in should be returned | [optional] |
| **has_meeting_place** | **bool**| Only show groups with meeting place | [optional] |
| **allow_posts** | **bool**| Only show groups where posting is allowed | [optional] |
| **has_posts** | **bool**| Only show groups which has posts | [optional] |
| **query** | **string**|  | [optional] |
| **visibility** | **string**| Group visibility | [optional] [default to &#39;restricted&#39;] |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdChildren200Response**](../Model/GetGroupsGroupIdChildren200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdDocumentDocumentId()`

```php
getGroupsGroupIdDocumentDocumentId($group_id, $html_template_id, $member_id)
```



Get a document for a group member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$html_template_id = 2; // int | ID of an HTML template
$member_id = 56; // int

try {
    $apiInstance->getGroupsGroupIdDocumentDocumentId($group_id, $html_template_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdDocumentDocumentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **html_template_id** | **int**| ID of an HTML template | |
| **member_id** | **int**|  | |

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

## `getGroupsGroupIdDocumentsDocumentId()`

```php
getGroupsGroupIdDocumentsDocumentId($group_id, $document_id)
```



Get a group document for the currrent logged in User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$document_id = 'document_id_example'; // string

try {
    $apiInstance->getGroupsGroupIdDocumentsDocumentId($group_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdDocumentsDocumentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **document_id** | **string**|  | |

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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getGroupsGroupIdDocumenttemplates: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
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

## `getGroupsGroupIdMeetingsExport()`

```php
getGroupsGroupIdMeetingsExport($group_id, $format, $type, $is_canceled, $is_completed, $from, $to, $direction, $limit, $page): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$format = 'format_example'; // string
$type = 'type_example'; // string
$is_canceled = True; // bool | Whether to include canceled group meetings
$is_completed = True; // bool | Whether to include completed group meetings
$from = 2022-10-19; // \DateTime | Return entities starting from this date.
$to = 2022-10-19; // \DateTime | Return entities up to (but not including) this date.
$direction = forward; // string | The direction of the result set
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.

try {
    $result = $apiInstance->getGroupsGroupIdMeetingsExport($group_id, $format, $type, $is_canceled, $is_completed, $from, $to, $direction, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMeetingsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **format** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **is_canceled** | **bool**| Whether to include canceled group meetings | [optional] |
| **is_completed** | **bool**| Whether to include completed group meetings | [optional] |
| **from** | **\DateTime**| Return entities starting from this date. | [optional] |
| **to** | **\DateTime**| Return entities up to (but not including) this date. | [optional] |
| **direction** | **string**| The direction of the result set | [optional] [default to &#39;forward&#39;] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |

### Return type

**string**

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/csv`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMeetingsMeetingId()`

```php
getGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id): \ChurchTools\Model\CreateMeeting201Response
```

Get group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\CreateMeeting201Response**](../Model/CreateMeeting201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMeetingsMeetingIdMembers()`

```php
getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id): \ChurchTools\Model\GetGroupsGroupIdMeetingsMeetingIdMembers200Response
```

Get Group Meeting Members

Get all group members that the current user can see and is able to check in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMeetingsMeetingIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMeetingsMeetingIdMembers200Response**](../Model/GetGroupsGroupIdMeetingsMeetingIdMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMemberfields()`

```php
getGroupsGroupIdMemberfields($group_id): \ChurchTools\Model\GetGroupsGroupIdMemberfields200Response
```

Get Group member fields

Returns the configured group member fields for the given group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdMemberfields($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMemberfields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMemberfields200Response**](../Model/GetGroupsGroupIdMemberfields200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersExport()`

```php
getGroupsGroupIdMembersExport($group_id, $type)
```

TODO 200 - Export Groupmebers

Export the members of a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$type = 'type_example'; // string | Type of export file

try {
    $apiInstance->getGroupsGroupIdMembersExport($group_id, $type);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **type** | **string**| Type of export file | [optional] |

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

## `getGroupsGroupIdMembersExportConfig()`

```php
getGroupsGroupIdMembersExportConfig($group_id, $type, $get_groups_group_id_members_export_config_request)
```

TODO 200 - Export Groupmebers with configuration

Export the members of a group, you can submit a configuration in the request body. The request body must use version number 10.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$type = 'type_example'; // string | Type of export file
$get_groups_group_id_members_export_config_request = new \ChurchTools\Model\GetGroupsGroupIdMembersExportConfigRequest(); // \ChurchTools\Model\GetGroupsGroupIdMembersExportConfigRequest

try {
    $apiInstance->getGroupsGroupIdMembersExportConfig($group_id, $type, $get_groups_group_id_members_export_config_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersExportConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **type** | **string**| Type of export file | [optional] |
| **get_groups_group_id_members_export_config_request** | [**\ChurchTools\Model\GetGroupsGroupIdMembersExportConfigRequest**](../Model/GetGroupsGroupIdMembersExportConfigRequest.md)|  | [optional] |

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

## `getGroupsGroupIdMembersHistory()`

```php
getGroupsGroupIdMembersHistory($group_id): \ChurchTools\Model\GetGroupsGroupIdMembersHistory200Response
```

Export Groupmebers

get group member history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdMembersHistory($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersHistory200Response**](../Model/GetGroupsGroupIdMembersHistory200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersPersonId()`

```php
getGroupsGroupIdMembersPersonId($group_id, $person_id): \ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response
```

Get group member

Return the specified group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getGroupsGroupIdMembersPersonId($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response**](../Model/GetGroupsGroupIdMembersPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersStatistics()`

```php
getGroupsGroupIdMembersStatistics($group_type_role_ids, $group_id, $person_fields, $group_member_fields): \ChurchTools\Model\GetGroupsGroupIdMembersStatistics200Response
```

Get statistics for group members

Gets statistics for the group members. The statistics are generated for the fields that are provided via query param personFields[] or groupMemberFields[].

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_type_role_ids = array(56); // int[] | 
$group_id = 42; // int | ID of group
$person_fields = array('person_fields_example'); // string[] | person field keys
$group_member_fields = array(56); // int[] | group member field ids

try {
    $result = $apiInstance->getGroupsGroupIdMembersStatistics($group_type_role_ids, $group_id, $person_fields, $group_member_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_type_role_ids** | [**int[]**](../Model/int.md)|  | |
| **group_id** | **int**| ID of group | |
| **person_fields** | [**string[]**](../Model/string.md)| person field keys | [optional] |
| **group_member_fields** | [**int[]**](../Model/int.md)| group member field ids | [optional] |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersStatistics200Response**](../Model/GetGroupsGroupIdMembersStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdParents()`

```php
getGroupsGroupIdParents($group_id, $limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility): \ChurchTools\Model\GetGroupsGroupIdChildren200Response
```

Get child groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$tag_ids = array(56); // int[] | Array of group tag ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$without_my_groups = false; // bool | Determines if groups should be omitted where I am in
$only_my_groups = false; // bool | Determines if only groups where I am in should be returned
$has_meeting_place = true; // bool | Only show groups with meeting place
$allow_posts = true; // bool | Only show groups where posting is allowed
$has_posts = true; // bool | Only show groups which has posts
$query = 'query_example'; // string
$visibility = restricted; // string | Group visibility

try {
    $result = $apiInstance->getGroupsGroupIdParents($group_id, $limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdParents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional] |
| **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional] |
| **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional] |
| **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional] |
| **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional] |
| **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional] |
| **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional] |
| **tag_ids** | [**int[]**](../Model/int.md)| Array of group tag ids to filter the groups | [optional] |
| **is_open_for_members** | **bool**| Filters groups by its open status | [optional] |
| **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional] |
| **only_my_groups** | **bool**| Determines if only groups where I am in should be returned | [optional] |
| **has_meeting_place** | **bool**| Only show groups with meeting place | [optional] |
| **allow_posts** | **bool**| Only show groups where posting is allowed | [optional] |
| **has_posts** | **bool**| Only show groups which has posts | [optional] |
| **query** | **string**|  | [optional] |
| **visibility** | **string**| Group visibility | [optional] [default to &#39;restricted&#39;] |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdChildren200Response**](../Model/GetGroupsGroupIdChildren200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdPoststatistics()`

```php
getGroupsGroupIdPoststatistics($group_id): \ChurchTools\Model\GetGroupsGroupIdPoststatistics200Response
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


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdPoststatistics($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdPoststatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdPoststatistics200Response**](../Model/GetGroupsGroupIdPoststatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGrouped()`

```php
getGroupsGrouped($group_by, $limit): \ChurchTools\Model\GetGroupsGrouped200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_by = 'group_by_example'; // string
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getGroupsGrouped($group_by, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGrouped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_by** | **string**|  | [optional] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\ChurchTools\Model\GetGroupsGrouped200Response**](../Model/GetGroupsGrouped200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsHierarchies()`

```php
getGroupsHierarchies($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility): \ChurchTools\Model\GetGroupsHierarchies200Response
```

Get all group hierarchies

Returns all group hierarchies. The groups not visible for the user only show ids. Note: You have to pass at least 2 group IDs for the filter to work. If you only want to see the children of a specific group use `GET /groups/{groupId}/children`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$tag_ids = array(56); // int[] | Array of group tag ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$without_my_groups = false; // bool | Determines if groups should be omitted where I am in
$only_my_groups = false; // bool | Determines if only groups where I am in should be returned
$has_meeting_place = true; // bool | Only show groups with meeting place
$allow_posts = true; // bool | Only show groups where posting is allowed
$has_posts = true; // bool | Only show groups which has posts
$query = 'query_example'; // string
$visibility = restricted; // string | Group visibility

try {
    $result = $apiInstance->getGroupsHierarchies($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsHierarchies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional] |
| **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional] |
| **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional] |
| **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional] |
| **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional] |
| **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional] |
| **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional] |
| **tag_ids** | [**int[]**](../Model/int.md)| Array of group tag ids to filter the groups | [optional] |
| **is_open_for_members** | **bool**| Filters groups by its open status | [optional] |
| **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional] |
| **only_my_groups** | **bool**| Determines if only groups where I am in should be returned | [optional] |
| **has_meeting_place** | **bool**| Only show groups with meeting place | [optional] |
| **allow_posts** | **bool**| Only show groups where posting is allowed | [optional] |
| **has_posts** | **bool**| Only show groups which has posts | [optional] |
| **query** | **string**|  | [optional] |
| **visibility** | **string**| Group visibility | [optional] [default to &#39;restricted&#39;] |

### Return type

[**\ChurchTools\Model\GetGroupsHierarchies200Response**](../Model/GetGroupsHierarchies200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsIds()`

```php
getGroupsIds($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility): \ChurchTools\Model\GetGroupsIds200Response
```

Get all group ids

Returns all group ids the user can see. This includes groups the user is a member of as well as subordinate groups the user is allowed to see. Same as `GET /groups` but only returns ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of results per page.
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$tag_ids = array(56); // int[] | Array of group tag ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$without_my_groups = false; // bool | Determines if groups should be omitted where I am in
$only_my_groups = false; // bool | Determines if only groups where I am in should be returned
$has_meeting_place = true; // bool | Only show groups with meeting place
$allow_posts = true; // bool | Only show groups where posting is allowed
$has_posts = true; // bool | Only show groups which has posts
$query = 'query_example'; // string
$visibility = restricted; // string | Group visibility

try {
    $result = $apiInstance->getGroupsIds($limit, $page, $ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $tag_ids, $is_open_for_members, $without_my_groups, $only_my_groups, $has_meeting_place, $allow_posts, $has_posts, $query, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional] |
| **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional] |
| **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional] |
| **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional] |
| **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional] |
| **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional] |
| **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional] |
| **tag_ids** | [**int[]**](../Model/int.md)| Array of group tag ids to filter the groups | [optional] |
| **is_open_for_members** | **bool**| Filters groups by its open status | [optional] |
| **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional] |
| **only_my_groups** | **bool**| Determines if only groups where I am in should be returned | [optional] |
| **has_meeting_place** | **bool**| Only show groups with meeting place | [optional] |
| **allow_posts** | **bool**| Only show groups where posting is allowed | [optional] |
| **has_posts** | **bool**| Only show groups which has posts | [optional] |
| **query** | **string**|  | [optional] |
| **visibility** | **string**| Group visibility | [optional] [default to &#39;restricted&#39;] |

### Return type

[**\ChurchTools\Model\GetGroupsIds200Response**](../Model/GetGroupsIds200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembers()`

```php
getGroupsMembers($ids, $with_deleted): \ChurchTools\Model\GetGroupsMembers200Response
```

Get all group members

Returns all group members. Only accessible for users with right \"administer persons\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Array of group ids
$with_deleted = false; // bool | If true, return also deleted group members

try {
    $result = $apiInstance->getGroupsMembers($ids, $with_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional] |
| **with_deleted** | **bool**| If true, return also deleted group members | [optional] |

### Return type

[**\ChurchTools\Model\GetGroupsMembers200Response**](../Model/GetGroupsMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrupsIdPlaces()`

```php
getGrupsIdPlaces($group_id): \ChurchTools\Model\GetGrupsIdPlaces200Response
```

Get all places of a group

Returns an array of places

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGrupsIdPlaces($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGrupsIdPlaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetGrupsIdPlaces200Response**](../Model/GetGrupsIdPlaces200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonMasterdata()`

```php
getPersonMasterdata(): \ChurchTools\Model\GetPersonMasterdata200Response
```

Get person & groups masterdata

Endpoint for getting all relevant masterdata for persons and groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPersonMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getPersonMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetPersonMasterdata200Response**](../Model/GetPersonMasterdata200Response.md)

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



$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
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

## `getRolesOfGroup()`

```php
getRolesOfGroup($group_id): \ChurchTools\Model\GetRolesOfGroup200Response
```

Get all roles for this group

Get all the roles with definitions for the given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getRolesOfGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getRolesOfGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\GetRolesOfGroup200Response**](../Model/GetRolesOfGroup200Response.md)

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



$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
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

## `optIns()`

```php
optIns($group_id): \ChurchTools\Model\OptIns200Response
```

Get Opt In status of group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->optIns($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->optIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |

### Return type

[**\ChurchTools\Model\OptIns200Response**](../Model/OptIns200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGroup()`

```php
patchGroup($group_id, $skip_my_posts_reducing_visibility, $patch_group_request): \ChurchTools\Model\PostGroups201Response
```

Update Group

Update a group by id. All group fields can be updated here. Use the fields api to get all fields that can be updated here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$skip_my_posts_reducing_visibility = false; // bool | Decides in case of changing the visibility of posts in the group whether the current users posts should be skipped. Default: false
$patch_group_request = new \ChurchTools\Model\PatchGroupRequest(); // \ChurchTools\Model\PatchGroupRequest

try {
    $result = $apiInstance->patchGroup($group_id, $skip_my_posts_reducing_visibility, $patch_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->patchGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **skip_my_posts_reducing_visibility** | **bool**| Decides in case of changing the visibility of posts in the group whether the current users posts should be skipped. Default: false | [optional] |
| **patch_group_request** | [**\ChurchTools\Model\PatchGroupRequest**](../Model/PatchGroupRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGroupsGroupIdMembersPersonId()`

```php
patchGroupsGroupIdMembersPersonId($group_id, $person_id, $patch_groups_group_id_members_person_id_request): \ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response
```

Update a group member. For creating a member use PUT.

Update the specified group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$patch_groups_group_id_members_person_id_request = new \ChurchTools\Model\PatchGroupsGroupIdMembersPersonIdRequest(); // \ChurchTools\Model\PatchGroupsGroupIdMembersPersonIdRequest | All fields are optional. Only updates properties provided.

try {
    $result = $apiInstance->patchGroupsGroupIdMembersPersonId($group_id, $person_id, $patch_groups_group_id_members_person_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->patchGroupsGroupIdMembersPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |
| **patch_groups_group_id_members_person_id_request** | [**\ChurchTools\Model\PatchGroupsGroupIdMembersPersonIdRequest**](../Model/PatchGroupsGroupIdMembersPersonIdRequest.md)| All fields are optional. Only updates properties provided. | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response**](../Model/GetGroupsGroupIdMembersPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGroupsGroupIdRolesRoleId()`

```php
patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request)
```

save role

Save role specific settings for this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$role_id = 1; // int | ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group.
$patch_groups_group_id_roles_role_id_request = new \ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest(); // \ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest

try {
    $apiInstance->patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->patchGroupsGroupIdRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **role_id** | **int**| ID of group role. This is not the group type role. The group role has a reference to the group type role and sets specific settings for the role in this group. | |
| **patch_groups_group_id_roles_role_id_request** | [**\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest**](../Model/PatchGroupsGroupIdRolesRoleIdRequest.md)|  | [optional] |

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

## `postAutomaticEmail()`

```php
postAutomaticEmail($group_id, $post_automatic_email_request): \ChurchTools\Model\PostAutomaticEmail201Response
```

Save new automatic email for a group role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$post_automatic_email_request = new \ChurchTools\Model\PostAutomaticEmailRequest(); // \ChurchTools\Model\PostAutomaticEmailRequest

try {
    $result = $apiInstance->postAutomaticEmail($group_id, $post_automatic_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **post_automatic_email_request** | [**\ChurchTools\Model\PostAutomaticEmailRequest**](../Model/PostAutomaticEmailRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostAutomaticEmail201Response**](../Model/PostAutomaticEmail201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupAgegroups()`

```php
postGroupAgegroups($post_group_agegroups_request): \ChurchTools\Model\PostGroupAgegroups201Response
```

Create agegroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_agegroups_request = new \ChurchTools\Model\PostGroupAgegroupsRequest(); // \ChurchTools\Model\PostGroupAgegroupsRequest

try {
    $result = $apiInstance->postGroupAgegroups($post_group_agegroups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupAgegroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_agegroups_request** | [**\ChurchTools\Model\PostGroupAgegroupsRequest**](../Model/PostGroupAgegroupsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupAgegroups201Response**](../Model/PostGroupAgegroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupGroupcategories()`

```php
postGroupGroupcategories($post_group_groupcategories_request): \ChurchTools\Model\PostGroupAgegroups201Response
```

Create Group Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_groupcategories_request = new \ChurchTools\Model\PostGroupGroupcategoriesRequest(); // \ChurchTools\Model\PostGroupGroupcategoriesRequest

try {
    $result = $apiInstance->postGroupGroupcategories($post_group_groupcategories_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupGroupcategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_groupcategories_request** | [**\ChurchTools\Model\PostGroupGroupcategoriesRequest**](../Model/PostGroupGroupcategoriesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupAgegroups201Response**](../Model/PostGroupAgegroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupGrouptypes()`

```php
postGroupGrouptypes($post_group_grouptypes_request): \ChurchTools\Model\PostGroupGrouptypes201Response
```

Create group type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_grouptypes_request = new \ChurchTools\Model\PostGroupGrouptypesRequest(); // \ChurchTools\Model\PostGroupGrouptypesRequest

try {
    $result = $apiInstance->postGroupGrouptypes($post_group_grouptypes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupGrouptypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_grouptypes_request** | [**\ChurchTools\Model\PostGroupGrouptypesRequest**](../Model/PostGroupGrouptypesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupGrouptypes201Response**](../Model/PostGroupGrouptypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupMeetingtemplates()`

```php
postGroupMeetingtemplates($post_group_meetingtemplates_request): \ChurchTools\Model\PostGroupMeetingtemplates201Response
```

Create a group meeting template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_meetingtemplates_request = new \ChurchTools\Model\PostGroupMeetingtemplatesRequest(); // \ChurchTools\Model\PostGroupMeetingtemplatesRequest

try {
    $result = $apiInstance->postGroupMeetingtemplates($post_group_meetingtemplates_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupMeetingtemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_meetingtemplates_request** | [**\ChurchTools\Model\PostGroupMeetingtemplatesRequest**](../Model/PostGroupMeetingtemplatesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupMeetingtemplates201Response**](../Model/PostGroupMeetingtemplates201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupRoles()`

```php
postGroupRoles($post_group_roles_request): \ChurchTools\Model\PostGroupRoles201Response
```

Create Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_roles_request = new \ChurchTools\Model\PostGroupRolesRequest(); // \ChurchTools\Model\PostGroupRolesRequest

try {
    $result = $apiInstance->postGroupRoles($post_group_roles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_roles_request** | [**\ChurchTools\Model\PostGroupRolesRequest**](../Model/PostGroupRolesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupRoles201Response**](../Model/PostGroupRoles201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupTargetgroups()`

```php
postGroupTargetgroups($post_group_targetgroups_request): \ChurchTools\Model\PostGroupTargetgroups201Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_group_targetgroups_request = new \ChurchTools\Model\PostGroupTargetgroupsRequest(); // \ChurchTools\Model\PostGroupTargetgroupsRequest

try {
    $result = $apiInstance->postGroupTargetgroups($post_group_targetgroups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupTargetgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_group_targetgroups_request** | [**\ChurchTools\Model\PostGroupTargetgroupsRequest**](../Model/PostGroupTargetgroupsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupTargetgroups201Response**](../Model/PostGroupTargetgroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroups()`

```php
postGroups($post_groups_request): \ChurchTools\Model\PostGroups201Response
```

Create Group

Create new group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_groups_request = new \ChurchTools\Model\PostGroupsRequest(); // \ChurchTools\Model\PostGroupsRequest

try {
    $result = $apiInstance->postGroups($post_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_groups_request** | [**\ChurchTools\Model\PostGroupsRequest**](../Model/PostGroupsRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsExport()`

```php
postGroupsExport($type, $post_groups_export_request_inner): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$post_groups_export_request_inner = array(new \ChurchTools\Model\PostGroupsExportRequestInner()); // \ChurchTools\Model\PostGroupsExportRequestInner[]

try {
    $result = $apiInstance->postGroupsExport($type, $post_groups_export_request_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | [optional] |
| **post_groups_export_request_inner** | [**\ChurchTools\Model\PostGroupsExportRequestInner[]**](../Model/PostGroupsExportRequestInner.md)|  | [optional] |

### Return type

**string**

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/csv`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsGroupIdGroupstatus()`

```php
postGroupsGroupIdGroupstatus($group_id, $post_groups_group_id_groupstatus_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$post_groups_group_id_groupstatus_request = new \ChurchTools\Model\PostGroupsGroupIdGroupstatusRequest(); // \ChurchTools\Model\PostGroupsGroupIdGroupstatusRequest

try {
    $apiInstance->postGroupsGroupIdGroupstatus($group_id, $post_groups_group_id_groupstatus_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdGroupstatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **post_groups_group_id_groupstatus_request** | [**\ChurchTools\Model\PostGroupsGroupIdGroupstatusRequest**](../Model/PostGroupsGroupIdGroupstatusRequest.md)|  | [optional] |

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

## `postGroupsGroupIdMeetingsMeetingIdMembersMissing()`

```php
postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $post_groups_group_id_meetings_meeting_id_members_missing_request)
```



Set group meeting status for unsure members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string
$post_groups_group_id_meetings_meeting_id_members_missing_request = new \ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest(); // \ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest

try {
    $apiInstance->postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $post_groups_group_id_meetings_meeting_id_members_missing_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdMeetingsMeetingIdMembersMissing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |
| **post_groups_group_id_meetings_meeting_id_members_missing_request** | [**\ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest**](../Model/PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest.md)|  | [optional] |

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

## `postGroupsGroupIdMeetingsMeetingIdMembersReset()`

```php
postGroupsGroupIdMeetingsMeetingIdMembersReset($group_id, $meeting_id)
```

Reset group meeting status for members

Reset group meeting status for members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $apiInstance->postGroupsGroupIdMeetingsMeetingIdMembersReset($group_id, $meeting_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdMeetingsMeetingIdMembersReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |

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

## `postGroupsGroupIdMembersPersonIdFollowup()`

```php
postGroupsGroupIdMembersPersonIdFollowup($group_id, $person_id, $post_groups_group_id_members_person_id_followup_request)
```

Execute follow-up

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$post_groups_group_id_members_person_id_followup_request = new \ChurchTools\Model\PostGroupsGroupIdMembersPersonIdFollowupRequest(); // \ChurchTools\Model\PostGroupsGroupIdMembersPersonIdFollowupRequest

try {
    $apiInstance->postGroupsGroupIdMembersPersonIdFollowup($group_id, $person_id, $post_groups_group_id_members_person_id_followup_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdMembersPersonIdFollowup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |
| **post_groups_group_id_members_person_id_followup_request** | [**\ChurchTools\Model\PostGroupsGroupIdMembersPersonIdFollowupRequest**](../Model/PostGroupsGroupIdMembersPersonIdFollowupRequest.md)|  | [optional] |

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

## `postGroupsGroupIdPlaces()`

```php
postGroupsGroupIdPlaces($group_id, $post_groups_group_id_places_request): \ChurchTools\Model\PostGroupsGroupIdPlaces201Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$post_groups_group_id_places_request = new \ChurchTools\Model\PostGroupsGroupIdPlacesRequest(); // \ChurchTools\Model\PostGroupsGroupIdPlacesRequest

try {
    $result = $apiInstance->postGroupsGroupIdPlaces($group_id, $post_groups_group_id_places_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdPlaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **post_groups_group_id_places_request** | [**\ChurchTools\Model\PostGroupsGroupIdPlacesRequest**](../Model/PostGroupsGroupIdPlacesRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupsGroupIdPlaces201Response**](../Model/PostGroupsGroupIdPlaces201Response.md)

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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->postGroupsGroupIdQrcodecheckinPersonIdSend: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_mail_to_leaders_request = new \ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest(); // \ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
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

## `putAutomaticEmail()`

```php
putAutomaticEmail($group_id, $email_id, $put_automatic_email_request)
```

Update automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$email_id = 'email_id_example'; // string
$put_automatic_email_request = new \ChurchTools\Model\PutAutomaticEmailRequest(); // \ChurchTools\Model\PutAutomaticEmailRequest

try {
    $apiInstance->putAutomaticEmail($group_id, $email_id, $put_automatic_email_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **email_id** | **string**|  | |
| **put_automatic_email_request** | [**\ChurchTools\Model\PutAutomaticEmailRequest**](../Model/PutAutomaticEmailRequest.md)|  | [optional] |

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

## `putGroupAgegroupsAgeGroupId()`

```php
putGroupAgegroupsAgeGroupId($age_group_id, $put_group_agegroups_age_group_id_request)
```

Update agegroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$age_group_id = 'age_group_id_example'; // string
$put_group_agegroups_age_group_id_request = new \ChurchTools\Model\PutGroupAgegroupsAgeGroupIdRequest(); // \ChurchTools\Model\PutGroupAgegroupsAgeGroupIdRequest

try {
    $apiInstance->putGroupAgegroupsAgeGroupId($age_group_id, $put_group_agegroups_age_group_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupAgegroupsAgeGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **age_group_id** | **string**|  | |
| **put_group_agegroups_age_group_id_request** | [**\ChurchTools\Model\PutGroupAgegroupsAgeGroupIdRequest**](../Model/PutGroupAgegroupsAgeGroupIdRequest.md)|  | [optional] |

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

## `putGroupGroupcategoriesGroupCategoryId()`

```php
putGroupGroupcategoriesGroupCategoryId($group_category_id, $put_group_groupcategories_group_category_id_request)
```

Update Group Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_category_id = 'group_category_id_example'; // string
$put_group_groupcategories_group_category_id_request = new \ChurchTools\Model\PutGroupGroupcategoriesGroupCategoryIdRequest(); // \ChurchTools\Model\PutGroupGroupcategoriesGroupCategoryIdRequest

try {
    $apiInstance->putGroupGroupcategoriesGroupCategoryId($group_category_id, $put_group_groupcategories_group_category_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupGroupcategoriesGroupCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_category_id** | **string**|  | |
| **put_group_groupcategories_group_category_id_request** | [**\ChurchTools\Model\PutGroupGroupcategoriesGroupCategoryIdRequest**](../Model/PutGroupGroupcategoriesGroupCategoryIdRequest.md)|  | [optional] |

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

## `putGroupGrouptypesGroupTypeId()`

```php
putGroupGrouptypesGroupTypeId($group_type_id, $put_group_grouptypes_group_type_id_request): \ChurchTools\Model\PostGroupGrouptypes201Response
```

Update GroupType

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_type_id = 'group_type_id_example'; // string
$put_group_grouptypes_group_type_id_request = new \ChurchTools\Model\PutGroupGrouptypesGroupTypeIdRequest(); // \ChurchTools\Model\PutGroupGrouptypesGroupTypeIdRequest

try {
    $result = $apiInstance->putGroupGrouptypesGroupTypeId($group_type_id, $put_group_grouptypes_group_type_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupGrouptypesGroupTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_type_id** | **string**|  | |
| **put_group_grouptypes_group_type_id_request** | [**\ChurchTools\Model\PutGroupGrouptypesGroupTypeIdRequest**](../Model/PutGroupGrouptypesGroupTypeIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupGrouptypes201Response**](../Model/PostGroupGrouptypes201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putGroupMeetingtemplatesMeetingTemplateId()`

```php
putGroupMeetingtemplatesMeetingTemplateId($meeting_template_id, $put_group_meetingtemplates_meeting_template_id_request)
```

Update group meeting template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_template_id = 'meeting_template_id_example'; // string
$put_group_meetingtemplates_meeting_template_id_request = new \ChurchTools\Model\PutGroupMeetingtemplatesMeetingTemplateIdRequest(); // \ChurchTools\Model\PutGroupMeetingtemplatesMeetingTemplateIdRequest

try {
    $apiInstance->putGroupMeetingtemplatesMeetingTemplateId($meeting_template_id, $put_group_meetingtemplates_meeting_template_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupMeetingtemplatesMeetingTemplateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_template_id** | **string**|  | |
| **put_group_meetingtemplates_meeting_template_id_request** | [**\ChurchTools\Model\PutGroupMeetingtemplatesMeetingTemplateIdRequest**](../Model/PutGroupMeetingtemplatesMeetingTemplateIdRequest.md)|  | [optional] |

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

## `putGroupRolesRoleId()`

```php
putGroupRolesRoleId($role_id, $put_group_roles_role_id_request)
```

Update Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string
$put_group_roles_role_id_request = new \ChurchTools\Model\PutGroupRolesRoleIdRequest(); // \ChurchTools\Model\PutGroupRolesRoleIdRequest

try {
    $apiInstance->putGroupRolesRoleId($role_id, $put_group_roles_role_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |
| **put_group_roles_role_id_request** | [**\ChurchTools\Model\PutGroupRolesRoleIdRequest**](../Model/PutGroupRolesRoleIdRequest.md)|  | [optional] |

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

## `putGroupTargetgroupsTargetGroupId()`

```php
putGroupTargetgroupsTargetGroupId($target_group_id)
```

Update target group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_group_id = 'target_group_id_example'; // string

try {
    $apiInstance->putGroupTargetgroupsTargetGroupId($target_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupTargetgroupsTargetGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_group_id** | **string**|  | |

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


$apiInstance = new ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->putGroupsGroupIdGrouphomepage: ', $e->getMessage(), PHP_EOL;
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

## `putGroupsGroupIdMeetingsMeetingId()`

```php
putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $put_groups_group_id_meetings_meeting_id_request)
```



Update group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string
$put_groups_group_id_meetings_meeting_id_request = new \ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest(); // \ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest

try {
    $apiInstance->putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $put_groups_group_id_meetings_meeting_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **meeting_id** | **string**|  | |
| **put_groups_group_id_meetings_meeting_id_request** | [**\ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest**](../Model/PutGroupsGroupIdMeetingsMeetingIdRequest.md)|  | [optional] |

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

## `putGroupsGroupIdMembersPersonId()`

```php
putGroupsGroupIdMembersPersonId($group_id, $person_id, $put_groups_group_id_members_person_id_request): \ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response
```

Create a group member. For updating a member use PATCH.

Add a group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$put_groups_group_id_members_person_id_request = new \ChurchTools\Model\PutGroupsGroupIdMembersPersonIdRequest(); // \ChurchTools\Model\PutGroupsGroupIdMembersPersonIdRequest | All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group's grouptype, groupMemberStatus to the active status, comment and member start/end dates default to null.

try {
    $result = $apiInstance->putGroupsGroupIdMembersPersonId($group_id, $person_id, $put_groups_group_id_members_person_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdMembersPersonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |
| **put_groups_group_id_members_person_id_request** | [**\ChurchTools\Model\PutGroupsGroupIdMembersPersonIdRequest**](../Model/PutGroupsGroupIdMembersPersonIdRequest.md)| All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group&#39;s grouptype, groupMemberStatus to the active status, comment and member start/end dates default to null. | |

### Return type

[**\ChurchTools\Model\GetGroupsGroupIdMembersPersonId200Response**](../Model/GetGroupsGroupIdMembersPersonId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putGroupsGroupIdParentsParentGroupId()`

```php
putGroupsGroupIdParentsParentGroupId($group_id, $parent_group_id)
```

Add Parent Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$parent_group_id = 'parent_group_id_example'; // string

try {
    $apiInstance->putGroupsGroupIdParentsParentGroupId($group_id, $parent_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdParentsParentGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **parent_group_id** | **string**|  | |

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

## `putGroupsGroupIdPlacesPlaceId()`

```php
putGroupsGroupIdPlacesPlaceId($group_id, $place_id, $put_groups_group_id_places_place_id_request): \ChurchTools\Model\PostGroupsGroupIdPlaces201Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$place_id = 56; // int
$put_groups_group_id_places_place_id_request = new \ChurchTools\Model\PutGroupsGroupIdPlacesPlaceIdRequest(); // \ChurchTools\Model\PutGroupsGroupIdPlacesPlaceIdRequest

try {
    $result = $apiInstance->putGroupsGroupIdPlacesPlaceId($group_id, $place_id, $put_groups_group_id_places_place_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdPlacesPlaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **place_id** | **int**|  | |
| **put_groups_group_id_places_place_id_request** | [**\ChurchTools\Model\PutGroupsGroupIdPlacesPlaceIdRequest**](../Model/PutGroupsGroupIdPlacesPlaceIdRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostGroupsGroupIdPlaces201Response**](../Model/PostGroupsGroupIdPlaces201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startStopGroupChat()`

```php
startStopGroupChat($group_id, $start_stop_event_chat_request)
```

Start or stop an event chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$start_stop_event_chat_request = new \ChurchTools\Model\StartStopEventChatRequest(); // \ChurchTools\Model\StartStopEventChatRequest

try {
    $apiInstance->startStopGroupChat($group_id, $start_stop_event_chat_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->startStopGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **start_stop_event_chat_request** | [**\ChurchTools\Model\StartStopEventChatRequest**](../Model/StartStopEventChatRequest.md)|  | |

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
