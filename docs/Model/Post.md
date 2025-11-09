# # Post

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** |  |
**expiration_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**publication_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**title** | **string** |  |
**visibility** | **string** |  |
**actor** | [**\ChurchTools\Model\PostAllOfActor**](PostAllOfActor.md) |  |
**comments** | [**\ChurchTools\Model\PostAllOfComments[]**](PostAllOfComments.md) |  | [optional]
**comments_active** | **bool** |  |
**group** | [**\ChurchTools\Model\PostAllOfGroup**](PostAllOfGroup.md) |  |
**group_visibility** | **string** | The visibility of a group. |
**guid** | **string** |  |
**id** | **int** |  |
**images** | **string[]** |  |
**instance** | [**\ChurchTools\Model\GetExternalPost200ResponseDataAllOfInstance**](GetExternalPost200ResponseDataAllOfInstance.md) |  | [optional]
**is_banned** | **bool** |  | [optional]
**last_edited_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**linkings** | [**\ChurchTools\Model\PostAllOfLinkings[]**](PostAllOfLinkings.md) |  | [optional]
**meta** | [**\ChurchTools\Model\AccountingPeriodAllOfMeta**](AccountingPeriodAllOfMeta.md) |  |
**published_date** | **\DateTime** | A timestamp in Zulu time format, e.g. &#39;2022-10-19T12:00:00Z&#39; | [optional]
**reactions** | [**\ChurchTools\Model\PostAllOfReactions[]**](PostAllOfReactions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
