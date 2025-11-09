# # CostCenter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period_id** | **int** |  |
**annotation** | **string** |  |
**budget** | **int** | Budget is in cent. |
**budget_balance** | **int** | Remaining amount. (Budget - Cost Center Expenses). Budget balance is in cent. |
**budget_balance_last_period** | **int** | Budget balance of matching cost center from last period in euro cent. |
**budget_last_period** | **int** | Budget for the cost center with the same number in the previous accounting period. |
**budget_spent** | **int** | Cost Center Expences. (Outcome - Income). In cent |
**group** | [**\ChurchTools\Model\ChangeImpact200ResponseDataGroup**](ChangeImpact200ResponseDataGroup.md) |  | [optional]
**id** | **int** |  |
**meta** | [**\ChurchTools\Model\GetBookings200ResponseDataInnerBookingBaseMeta**](GetBookings200ResponseDataInnerBookingBaseMeta.md) |  |
**name** | **string** |  |
**number** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
