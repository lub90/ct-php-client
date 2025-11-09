# # GroupHomepage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_view** | **string** | Type how groups are listed on the page. | [optional]
**depth** | **int** | The depth of the group hierarchy that should be displayed on the group homepage. | [optional]
**filter** | **mixed** |  | [optional]
**filters** | [**\ChurchTools\Model\GroupHomepage1FiltersInner[]**](GroupHomepage1FiltersInner.md) | Specifies all filters that can be applied for this group homepage. |
**groups** | [**\ChurchTools\Model\PublicGroup3[]**](PublicGroup3.md) | Array of groups to be displayed on the group homepage. |
**id** | **int** | Group Homepage ID |
**is_enabled** | **bool** | Wheather the group homepage is enabled. Clients should not display the group homepage if it is not enabled. |
**meta** | **object** | Entity meta data |
**order_by** | **string** | Group field to sort groups by. | [optional]
**order_direction** | **string** | Direction if groups are sorted ascending or descending. | [optional]
**parent_group** | **int** | ID of the parent group of all groups that should be displayed in the group homepage |
**random_url** | **string** | The group homepage identifier (same as provided as hash request parameter). |
**show_filter** | **mixed** |  | [optional]
**show_filters** | **bool** | If true, selected filters are displayed. |
**show_group_images** | **bool** | If true, the group homepage is set to display group images. |
**show_leader** | **mixed** |  | [optional]
**show_leaders** | **bool** | If true, the group homepage is set to display the leaders of each group. |
**show_map** | **bool** | If true, the group homepage is set to display an overview map of all groups. |
**sort_by** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
