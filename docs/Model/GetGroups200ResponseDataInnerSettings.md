# # GetGroups200ResponseDataInnerSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_child_registration** | **bool** | Own children are listed as option during group sign up. |
**allow_other_registration** | **bool** | It is allowed to sign up other people uring group sign up. |
**allow_same_email_registration** | **bool** | People with same eMail address are listed as option during group sign up. |
**allow_spouse_registration** | **bool** | Spouse is listed as option during group sign up. |
**allow_waitinglist** | **bool** | Waiting list is in-/active for this group. |
**appointment_id** | **int** | If set (together with appointmentStartDate), the group is a signup group for the specified appointment |
**appointment_start_date** | **\DateTime** | If set (together with appointmentId), the group is a signup group for the specified appointment |
**auto_accept** | **bool** | Indicator if applications are accepted automatically. |
**automatic_move_up** | **bool** | In combination with waiting list: People automatically move up in waiting list. |
**default_post_comments_active** | **bool** | Default value for whether posts can be commented on. |
**default_post_notification_scope** | **string** | Default value for post notification scope. |
**default_post_placeholder_text** | **string** | Default placeholder text for entering post content. |
**default_post_visibility** | **string** |  |
**dynamic_group_rule_set** | [**\ChurchTools\Model\EditRulesetRequestDynamicGroupRuleSet[]**](EditRulesetRequestDynamicGroupRuleSet.md) | Rule set for dynamic group update. |
**dynamic_group_status** | **string** | Status of dynamic group update. |
**dynamic_group_update_finished** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**dynamic_group_update_started** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**external_post_subscriptions_enabled** | **bool** | Indicator if posts of this groups are featured to subscribe |
**group_meeting** | [**\ChurchTools\Model\GetGroups200ResponseDataInnerSettingsGroupMeeting**](GetGroups200ResponseDataInnerSettingsGroupMeeting.md) |  |
**in_statistic** | **bool** |  |
**inform_leader** | **bool** | Inform leader via e-mail about changes. |
**is_hidden** | **bool** |  |
**is_open_for_members** | **bool** | Indicator if people can sign up for group membership. |
**is_public** | **bool** |  |
**max_members** | **int** | The maximum number of group members in counted roles. |
**new_member** | [**\ChurchTools\Model\GetGroups200ResponseDataInnerSettingsNewMember**](GetGroups200ResponseDataInnerSettingsNewMember.md) |  |
**posts_enabled** | **bool** |  |
**qr_code_checkin** | **bool** | QR Codes are sent to participants, which can be used during check-in |
**qr_code_checkin_automatic_email** | **bool** | QR Codes are not automatically sent via email |
**show_street** | **bool** |  |
**sign_up_closing_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**sign_up_headline** | **string** | Headline for group sign up. |
**sign_up_notification_sent_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**sign_up_opening_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; |
**visibility** | **string** | The visibility of a group. |
**waitinglist_max_persons** | **int** | Maximum number of persons on waiting list. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
