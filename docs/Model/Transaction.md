# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** |  |
**amount** | **int** | Value is in cent. |
**cash_discount_amount** | **int** | Value is in cent. | [optional]
**cash_discount_id** | **int** |  | [optional]
**contra_account_id** | **int** |  |
**cost_center_id** | **int** |  | [optional]
**document_date** | **\DateTime** |  |
**document_number** | **string** |  |
**donator** | [**\ChurchTools\Model\PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy**](PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy.md) |  | [optional]
**donator_spouse** | [**\ChurchTools\Model\PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy**](PostBookings201ResponseDataInvolvedPersonsDomainObjectsCreatedBy.md) |  | [optional]
**id** | **int** |  |
**is_immutable** | **bool** | If a transaction is immutable, no field can be change or deleted. |
**is_synced** | **bool** | True, if the transaction has been created through a sync. |
**is_waiver_of_reimbursement_of_expenses** | **bool** |  |
**meta** | [**\ChurchTools\Model\PostActions200ResponseMeta**](PostActions200ResponseMeta.md) |  | [optional]
**note** | **string** |  |
**permissions** | [**\ChurchTools\Model\CreateNewSplitTransactionRequestSplitChildrenInnerPermissions**](CreateNewSplitTransactionRequestSplitChildrenInnerPermissions.md) |  | [optional]
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **int** | If a tax rate is set for the transaction, the corresponding tax transaction is returned in the field taxTransactionId. | [optional]
**tax_transaction_id** | **int** | Reference to the transaction which is a split booking for taxes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
