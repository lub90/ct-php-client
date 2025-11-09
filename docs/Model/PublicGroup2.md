# # PublicGroup2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_waitinglist** | **bool** | If true, group sign is allowed even if group is full. |
**auto_accept** | **bool** | If true, group sign up requests will be accepted automatically. |
**can_sign_up** | **bool** | Indicates if the current user (either logged in or not) can sign up. This summarizes the information in signUpConditions. |
**children** | **int[]** | Lists all (direct) child group IDs for the current group. | [optional]
**current_member_count** | **int** | Current number of members in the group. |
**id** | **int** | The public group ID. |
**information** | [**\ChurchTools\Model\PublicGroup2Information**](PublicGroup2Information.md) |  |
**max_member_count** | **int** | Maximum number of members until the group is considered as full. |
**name** | **string** | Name of the group, e.g. to be displayed as title. |
**requested_places_count** | **int** | Number of member requests |
**requested_waitinglist_places_count** | **int** | Number of member requests with waiting list position |
**settings** | [**\ChurchTools\Model\PublicGroup1Settings**](PublicGroup1Settings.md) |  |
**show_public_cannot_view_group** | **bool** |  | [optional]
**sign_up_conditions** | [**\ChurchTools\Model\PublicGroup1SignUpConditions**](PublicGroup1SignUpConditions.md) |  |
**sign_up_headline** | **string** | Text which can be displayed as a headline for the sign up section | [optional]
**sign_up_persons** | [**\ChurchTools\Model\PublicGroup2SignUpPersonsInner[]**](PublicGroup2SignUpPersonsInner.md) | Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address. | [optional]
**waitinglist_max_persons** | **int** | Maximum number of persons on the waiting list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
