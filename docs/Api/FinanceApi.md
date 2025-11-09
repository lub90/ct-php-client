# ChurchTools\FinanceApi

Finance Endpoints

All URIs are relative to https://your.church.tools/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyFinanceTemplate()**](FinanceApi.md#applyFinanceTemplate) | **POST** /finance/templates/{id} | Apply finance template |
| [**batchTransaction()**](FinanceApi.md#batchTransaction) | **PATCH** /finance/transactions | Transaction Batch Processing |
| [**cancelSplitTransaction()**](FinanceApi.md#cancelSplitTransaction) | **PUT** /finance/splittransactions/{id}/storno | Cancel split transaction |
| [**cancelTransaction()**](FinanceApi.md#cancelTransaction) | **PUT** /finance/transactions/{id}/storno | Cancel transaction |
| [**createAllFinanceDonationReceipts()**](FinanceApi.md#createAllFinanceDonationReceipts) | **POST** /finance/donators/receipts | Create donation receipts |
| [**createCashDiscount()**](FinanceApi.md#createCashDiscount) | **POST** /finance/cashdiscounts | Create new cash discout |
| [**createCostCenter()**](FinanceApi.md#createCostCenter) | **POST** /finance/costcenters | Create new cost center |
| [**createNewAccount()**](FinanceApi.md#createNewAccount) | **POST** /finance/accounts | Create new account |
| [**createNewAccountClass()**](FinanceApi.md#createNewAccountClass) | **POST** /finance/accountclasses | Create new account class |
| [**createNewAccountGroup()**](FinanceApi.md#createNewAccountGroup) | **POST** /finance/accountgroups | Create new account group |
| [**createNewAccountType()**](FinanceApi.md#createNewAccountType) | **POST** /finance/accounttypes | Create new account type |
| [**createNewAccountingPeriod()**](FinanceApi.md#createNewAccountingPeriod) | **POST** /finance/accountingperiods | Create new accounting period |
| [**createNewBill()**](FinanceApi.md#createNewBill) | **POST** /finance/bills | Create new bill |
| [**createNewClient()**](FinanceApi.md#createNewClient) | **POST** /finance/clients | Create new client |
| [**createNewSplitTransaction()**](FinanceApi.md#createNewSplitTransaction) | **POST** /finance/splittransactions | Create new transaction |
| [**createNewTransaction()**](FinanceApi.md#createNewTransaction) | **POST** /finance/transactions | Create new transaction |
| [**createNewTransactionPurpose()**](FinanceApi.md#createNewTransactionPurpose) | **POST** /finance/transactionpurposes | Create new transaction purpose |
| [**createTaxRate()**](FinanceApi.md#createTaxRate) | **POST** /finance/taxrates | Create new tax rate |
| [**createTaxType()**](FinanceApi.md#createTaxType) | **POST** /finance/taxtypes | Create new tax type |
| [**deleteAccount()**](FinanceApi.md#deleteAccount) | **DELETE** /finance/accounts/{id} | Delete account |
| [**deleteAccountClass()**](FinanceApi.md#deleteAccountClass) | **DELETE** /finance/accountclasses/{id} | Delete account class |
| [**deleteAccountGroup()**](FinanceApi.md#deleteAccountGroup) | **DELETE** /finance/accountgroups/{id} | Delete account group |
| [**deleteAccountType()**](FinanceApi.md#deleteAccountType) | **DELETE** /finance/accounttypes/{id} | Delete account type |
| [**deleteAccountingPeriod()**](FinanceApi.md#deleteAccountingPeriod) | **DELETE** /finance/accountingperiods/{id} | Delete accounting period |
| [**deleteAccountsForAccountingPeriod()**](FinanceApi.md#deleteAccountsForAccountingPeriod) | **DELETE** /finance/accountingperiods/{id}/accounts | Delete accounts for accounting period |
| [**deleteBill()**](FinanceApi.md#deleteBill) | **DELETE** /finance/bills/{id} | Delete bill |
| [**deleteCashDiscount()**](FinanceApi.md#deleteCashDiscount) | **DELETE** /finance/cashdiscounts/{id} | Delete cash discount |
| [**deleteClient()**](FinanceApi.md#deleteClient) | **DELETE** /finance/clients/{id} | Delete client |
| [**deleteCostCenter()**](FinanceApi.md#deleteCostCenter) | **DELETE** /finance/costcenters/{id} | Delete cost center |
| [**deleteFinanceDonationReceipts()**](FinanceApi.md#deleteFinanceDonationReceipts) | **DELETE** /finance/donators/receipts | Delete all donation receipts |
| [**deleteFinanceDonatorsDonatorCoupleId()**](FinanceApi.md#deleteFinanceDonatorsDonatorCoupleId) | **DELETE** /finance/donators/{donatorCoupleId}/receipts | delete-donation-receipt |
| [**deleteSplitTransaction()**](FinanceApi.md#deleteSplitTransaction) | **DELETE** /finance/splittransactions/{id} | Delete split transaction |
| [**deleteStatement()**](FinanceApi.md#deleteStatement) | **DELETE** /finance/accountingperiods/{id}/statements/{statementId} |  |
| [**deleteTaxRate()**](FinanceApi.md#deleteTaxRate) | **DELETE** /finance/taxrates/{id} | Delete tax rate |
| [**deleteTaxType()**](FinanceApi.md#deleteTaxType) | **DELETE** /finance/taxtypes/{id} | Delete tax type |
| [**deleteTransaction()**](FinanceApi.md#deleteTransaction) | **DELETE** /finance/transactions/{id} | Delete transaction |
| [**deleteTransactionPurpose()**](FinanceApi.md#deleteTransactionPurpose) | **DELETE** /finance/transactionpurposes/{id} | Delete transaction purpose |
| [**exportFinanceTemplate()**](FinanceApi.md#exportFinanceTemplate) | **GET** /finance/templates/export | Epports a finance template based on the masterdata for a given accounting period |
| [**getAccountById()**](FinanceApi.md#getAccountById) | **GET** /finance/accounts/{id} | Get a account |
| [**getAccountClassById()**](FinanceApi.md#getAccountClassById) | **GET** /finance/accountclasses/{id} | Get a account class |
| [**getAccountGroupById()**](FinanceApi.md#getAccountGroupById) | **GET** /finance/accountgroups/{id} | Get a account group |
| [**getAccountMovements()**](FinanceApi.md#getAccountMovements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/movements |  |
| [**getAccountStatementMovements()**](FinanceApi.md#getAccountStatementMovements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements |  |
| [**getAccountStatements()**](FinanceApi.md#getAccountStatements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/statements |  |
| [**getAccountTypeById()**](FinanceApi.md#getAccountTypeById) | **GET** /finance/accounttypes/{id} | Get a account type |
| [**getAccountingPeriodById()**](FinanceApi.md#getAccountingPeriodById) | **GET** /finance/accountingperiods/{id} | Get a accounting period |
| [**getAccountsImportTemplate()**](FinanceApi.md#getAccountsImportTemplate) | **POST** /finance/accounts/exporttemplate | TODO 200 |
| [**getAccountsStatements()**](FinanceApi.md#getAccountsStatements) | **GET** /finance/accountingperiods/{id}/accounts/statements |  |
| [**getAllAccountClasses()**](FinanceApi.md#getAllAccountClasses) | **GET** /finance/accountclasses | Get all account classes ordered by id |
| [**getAllAccountGroups()**](FinanceApi.md#getAllAccountGroups) | **GET** /finance/accountgroups | Get all account groups ordered by id |
| [**getAllAccountTypes()**](FinanceApi.md#getAllAccountTypes) | **GET** /finance/accounttypes | Get all account types ordered by id |
| [**getAllAccountingPeriods()**](FinanceApi.md#getAllAccountingPeriods) | **GET** /finance/accountingperiods | Get all accounting periods |
| [**getAllAccounts()**](FinanceApi.md#getAllAccounts) | **GET** /finance/accounts | Get all accounts ordered by accounting period and number |
| [**getAllCashDiscounts()**](FinanceApi.md#getAllCashDiscounts) | **GET** /finance/cashdiscounts | Get all cash discounts ordered by id |
| [**getAllClients()**](FinanceApi.md#getAllClients) | **GET** /finance/clients | Get all clients |
| [**getAllCostCenters()**](FinanceApi.md#getAllCostCenters) | **GET** /finance/costcenters | Get all cost centers ordered by accounting period and number ascending |
| [**getAllDonationReceipts()**](FinanceApi.md#getAllDonationReceipts) | **GET** /finance/donators/receipts | Get all donators including their donation information (e.g. donation amount) |
| [**getAllDonators()**](FinanceApi.md#getAllDonators) | **GET** /finance/donators | Get all donators including their donation information (e.g. donation amount) |
| [**getAllFinanceTemplates()**](FinanceApi.md#getAllFinanceTemplates) | **GET** /finance/templates | Get all finance templates |
| [**getAllTaxRates()**](FinanceApi.md#getAllTaxRates) | **GET** /finance/taxrates | Get all tax rates ordered by id |
| [**getAllTaxTypes()**](FinanceApi.md#getAllTaxTypes) | **GET** /finance/taxtypes | Get all tax types |
| [**getAllTransactionPurposes()**](FinanceApi.md#getAllTransactionPurposes) | **GET** /finance/transactionpurposes | Get all transaction purposes |
| [**getAllTransactions()**](FinanceApi.md#getAllTransactions) | **GET** /finance/transactions | Get all transaction |
| [**getBillById()**](FinanceApi.md#getBillById) | **GET** /finance/bills/{id} | Get a bill |
| [**getBillsForAccountingPeriod()**](FinanceApi.md#getBillsForAccountingPeriod) | **GET** /finance/accountingperiods/{id}/bills | Get bills for accounting period |
| [**getCashDiscount()**](FinanceApi.md#getCashDiscount) | **GET** /finance/cashdiscounts/{id} | Get a cash discount |
| [**getClientById()**](FinanceApi.md#getClientById) | **GET** /finance/clients/{id} | Get a client |
| [**getCostCenter()**](FinanceApi.md#getCostCenter) | **GET** /finance/costcenters/{id} | Get a cost center |
| [**getFinanceAccountsCsv()**](FinanceApi.md#getFinanceAccountsCsv) | **GET** /finance/accounts/csv | Your GET endpoint |
| [**getFinanceDonatorsDonatorCoupleId()**](FinanceApi.md#getFinanceDonatorsDonatorCoupleId) | **GET** /finance/donators/{donatorCoupleId}/receipts | Get donation receipt PDFs (cover letter and attachment) |
| [**getSplitTransactionById()**](FinanceApi.md#getSplitTransactionById) | **GET** /finance/splittransactions/{id} | Get a split transaction |
| [**getTaxRate()**](FinanceApi.md#getTaxRate) | **GET** /finance/taxrates/{id} | Get a tax rate |
| [**getTaxType()**](FinanceApi.md#getTaxType) | **GET** /finance/taxtypes/{id} | Get a tax type |
| [**getTransactionById()**](FinanceApi.md#getTransactionById) | **GET** /finance/transactions/{id} | Get a transaction |
| [**getTransactionPurposeById()**](FinanceApi.md#getTransactionPurposeById) | **GET** /finance/transactionpurposes/{id} | Get a transaction purpose |
| [**getUserRules()**](FinanceApi.md#getUserRules) | **GET** /finance/accountingperiods/{id}/userrules |  |
| [**postAccountStatementMovement()**](FinanceApi.md#postAccountStatementMovement) | **POST** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements/{movementId} | TODO 200 |
| [**postFinanceCostcentersBulkcreate()**](FinanceApi.md#postFinanceCostcentersBulkcreate) | **POST** /finance/costcenters/bulkcreate | Import many cost centers |
| [**postFinanceTurnoverReport()**](FinanceApi.md#postFinanceTurnoverReport) | **POST** /finance/reports/turnover | Issue new Turnover Report |
| [**putStatement()**](FinanceApi.md#putStatement) | **PUT** /finance/accountingperiods/{id}/statements/{statementId} |  |
| [**updateAccount()**](FinanceApi.md#updateAccount) | **PUT** /finance/accounts/{id} | Update account |
| [**updateAccountClass()**](FinanceApi.md#updateAccountClass) | **PUT** /finance/accountclasses/{id} | Update account class |
| [**updateAccountGroup()**](FinanceApi.md#updateAccountGroup) | **PUT** /finance/accountgroups/{id} | Update account group |
| [**updateAccountType()**](FinanceApi.md#updateAccountType) | **PUT** /finance/accounttypes/{id} | Update account type |
| [**updateAccountingPeriod()**](FinanceApi.md#updateAccountingPeriod) | **PUT** /finance/accountingperiods/{id} | Update accounting period |
| [**updateBill()**](FinanceApi.md#updateBill) | **PUT** /finance/bills/{id} | Update bill |
| [**updateCashDiscount()**](FinanceApi.md#updateCashDiscount) | **PUT** /finance/cashdiscounts/{id} | Update cash discount |
| [**updateClient()**](FinanceApi.md#updateClient) | **PUT** /finance/clients/{id} | Update client |
| [**updateCostCenter()**](FinanceApi.md#updateCostCenter) | **PUT** /finance/costcenters/{id} | Update cost center |
| [**updateSplitTransaction()**](FinanceApi.md#updateSplitTransaction) | **PUT** /finance/splittransactions/{id} | Update split transaction, or convert to normal transaction, if only one split child is given, |
| [**updateTaxRate()**](FinanceApi.md#updateTaxRate) | **PUT** /finance/taxrates/{id} | Update tax rate |
| [**updateTaxType()**](FinanceApi.md#updateTaxType) | **PUT** /finance/taxtypes/{id} | Update tax type |
| [**updateTransaction()**](FinanceApi.md#updateTransaction) | **PUT** /finance/transactions/{id} | Update transaction |
| [**updateTransactionPurpose()**](FinanceApi.md#updateTransactionPurpose) | **PUT** /finance/transactionpurposes/{id} | Update transaction purpose |


## `applyFinanceTemplate()`

```php
applyFinanceTemplate($accounting_period_id, $id)
```

Apply finance template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$id = 1; // int | ID of Entity

try {
    $apiInstance->applyFinanceTemplate($accounting_period_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->applyFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
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

## `batchTransaction()`

```php
batchTransaction($batch_transaction_request): \ChurchTools\Model\BatchTransaction200Response
```

Transaction Batch Processing

Batch API for Transactions. The batch API needs two informations sets. Firstly the `changeset`, which holds the information for the batch command. Either a field that needs to be updated or a trigger keyword to start a command. Secondly, a set of `filters`. Filters are either transaction filters, which resolve to a list of transaction IDs, or you can explicitly state a list of IDs to include or exclude from the batch command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_transaction_request = new \ChurchTools\Model\BatchTransactionRequest(); // \ChurchTools\Model\BatchTransactionRequest | Batch information consists of changeset and filters.

try {
    $result = $apiInstance->batchTransaction($batch_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->batchTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_transaction_request** | [**\ChurchTools\Model\BatchTransactionRequest**](../Model/BatchTransactionRequest.md)| Batch information consists of changeset and filters. | [optional] |

### Return type

[**\ChurchTools\Model\BatchTransaction200Response**](../Model/BatchTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelSplitTransaction()`

```php
cancelSplitTransaction($id, $cancel_split_transaction_request): \ChurchTools\Model\CreateNewSplitTransaction201Response
```

Cancel split transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$cancel_split_transaction_request = new \ChurchTools\Model\CancelSplitTransactionRequest(); // \ChurchTools\Model\CancelSplitTransactionRequest | Storno data

try {
    $result = $apiInstance->cancelSplitTransaction($id, $cancel_split_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->cancelSplitTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **cancel_split_transaction_request** | [**\ChurchTools\Model\CancelSplitTransactionRequest**](../Model/CancelSplitTransactionRequest.md)| Storno data | |

### Return type

[**\ChurchTools\Model\CreateNewSplitTransaction201Response**](../Model/CreateNewSplitTransaction201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelTransaction()`

```php
cancelTransaction($id, $cancel_transaction_request): \ChurchTools\Model\CreateNewTransaction200Response
```

Cancel transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$cancel_transaction_request = new \ChurchTools\Model\CancelTransactionRequest(); // \ChurchTools\Model\CancelTransactionRequest | Storno data

try {
    $result = $apiInstance->cancelTransaction($id, $cancel_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **cancel_transaction_request** | [**\ChurchTools\Model\CancelTransactionRequest**](../Model/CancelTransactionRequest.md)| Storno data | |

### Return type

[**\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAllFinanceDonationReceipts()`

```php
createAllFinanceDonationReceipts($accounting_period_id)
```

Create donation receipts

Create all donation receipts for an accounting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->createAllFinanceDonationReceipts($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createAllFinanceDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

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

## `createCashDiscount()`

```php
createCashDiscount($create_cash_discount_request): \ChurchTools\Model\CreateCashDiscount200Response
```

Create new cash discout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_cash_discount_request = new \ChurchTools\Model\CreateCashDiscountRequest(); // \ChurchTools\Model\CreateCashDiscountRequest | Cash discount data

try {
    $result = $apiInstance->createCashDiscount($create_cash_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_cash_discount_request** | [**\ChurchTools\Model\CreateCashDiscountRequest**](../Model/CreateCashDiscountRequest.md)| Cash discount data | |

### Return type

[**\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCostCenter()`

```php
createCostCenter($create_cost_center_request): \ChurchTools\Model\CreateCostCenter200Response
```

Create new cost center

Create new cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_cost_center_request = new \ChurchTools\Model\CreateCostCenterRequest(); // \ChurchTools\Model\CreateCostCenterRequest | cost center data

try {
    $result = $apiInstance->createCostCenter($create_cost_center_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_cost_center_request** | [**\ChurchTools\Model\CreateCostCenterRequest**](../Model/CreateCostCenterRequest.md)| cost center data | |

### Return type

[**\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccount()`

```php
createNewAccount($create_new_account_request): \ChurchTools\Model\GetAllAccounts200Response
```

Create new account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_request = new \ChurchTools\Model\CreateNewAccountRequest(); // \ChurchTools\Model\CreateNewAccountRequest | Account data

try {
    $result = $apiInstance->createNewAccount($create_new_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_request** | [**\ChurchTools\Model\CreateNewAccountRequest**](../Model/CreateNewAccountRequest.md)| Account data | |

### Return type

[**\ChurchTools\Model\GetAllAccounts200Response**](../Model/GetAllAccounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountClass()`

```php
createNewAccountClass($create_new_account_class_request): \ChurchTools\Model\GetAllAccountClasses200Response
```

Create new account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_class_request = new \ChurchTools\Model\CreateNewAccountClassRequest(); // \ChurchTools\Model\CreateNewAccountClassRequest | Account classes sorted by sort key.

try {
    $result = $apiInstance->createNewAccountClass($create_new_account_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_class_request** | [**\ChurchTools\Model\CreateNewAccountClassRequest**](../Model/CreateNewAccountClassRequest.md)| Account classes sorted by sort key. | |

### Return type

[**\ChurchTools\Model\GetAllAccountClasses200Response**](../Model/GetAllAccountClasses200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountGroup()`

```php
createNewAccountGroup($create_new_account_group_request): \ChurchTools\Model\GetAllAccountGroups200Response
```

Create new account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_group_request = new \ChurchTools\Model\CreateNewAccountGroupRequest(); // \ChurchTools\Model\CreateNewAccountGroupRequest | Account groups sorted by sort key.

try {
    $result = $apiInstance->createNewAccountGroup($create_new_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_group_request** | [**\ChurchTools\Model\CreateNewAccountGroupRequest**](../Model/CreateNewAccountGroupRequest.md)| Account groups sorted by sort key. | |

### Return type

[**\ChurchTools\Model\GetAllAccountGroups200Response**](../Model/GetAllAccountGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountType()`

```php
createNewAccountType($create_new_account_type_request): \ChurchTools\Model\GetAllAccountTypes200Response
```

Create new account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_type_request = new \ChurchTools\Model\CreateNewAccountTypeRequest(); // \ChurchTools\Model\CreateNewAccountTypeRequest | Account Type data

try {
    $result = $apiInstance->createNewAccountType($create_new_account_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_type_request** | [**\ChurchTools\Model\CreateNewAccountTypeRequest**](../Model/CreateNewAccountTypeRequest.md)| Account Type data | |

### Return type

[**\ChurchTools\Model\GetAllAccountTypes200Response**](../Model/GetAllAccountTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountingPeriod()`

```php
createNewAccountingPeriod($create_new_accounting_period_request): \ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Create new accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_accounting_period_request = new \ChurchTools\Model\CreateNewAccountingPeriodRequest(); // \ChurchTools\Model\CreateNewAccountingPeriodRequest | Accounting period data

try {
    $result = $apiInstance->createNewAccountingPeriod($create_new_accounting_period_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_accounting_period_request** | [**\ChurchTools\Model\CreateNewAccountingPeriodRequest**](../Model/CreateNewAccountingPeriodRequest.md)| Accounting period data | |

### Return type

[**\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewBill()`

```php
createNewBill($create_new_bill_request): \ChurchTools\Model\CreateNewBill201Response
```

Create new bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_bill_request = new \ChurchTools\Model\CreateNewBillRequest(); // \ChurchTools\Model\CreateNewBillRequest | Bill data

try {
    $result = $apiInstance->createNewBill($create_new_bill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_bill_request** | [**\ChurchTools\Model\CreateNewBillRequest**](../Model/CreateNewBillRequest.md)| Bill data | |

### Return type

[**\ChurchTools\Model\CreateNewBill201Response**](../Model/CreateNewBill201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewClient()`

```php
createNewClient($create_new_client_request): \ChurchTools\Model\GetAllClients200Response
```

Create new client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_client_request = new \ChurchTools\Model\CreateNewClientRequest(); // \ChurchTools\Model\CreateNewClientRequest | Client data

try {
    $result = $apiInstance->createNewClient($create_new_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_client_request** | [**\ChurchTools\Model\CreateNewClientRequest**](../Model/CreateNewClientRequest.md)| Client data | |

### Return type

[**\ChurchTools\Model\GetAllClients200Response**](../Model/GetAllClients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewSplitTransaction()`

```php
createNewSplitTransaction($create_new_split_transaction_request): \ChurchTools\Model\CreateNewSplitTransaction201Response
```

Create new transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_split_transaction_request = new \ChurchTools\Model\CreateNewSplitTransactionRequest(); // \ChurchTools\Model\CreateNewSplitTransactionRequest | Transaction data

try {
    $result = $apiInstance->createNewSplitTransaction($create_new_split_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewSplitTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_split_transaction_request** | [**\ChurchTools\Model\CreateNewSplitTransactionRequest**](../Model/CreateNewSplitTransactionRequest.md)| Transaction data | |

### Return type

[**\ChurchTools\Model\CreateNewSplitTransaction201Response**](../Model/CreateNewSplitTransaction201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransaction()`

```php
createNewTransaction($create_new_transaction_request): \ChurchTools\Model\CreateNewTransaction200Response
```

Create new transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_transaction_request = new \ChurchTools\Model\CreateNewTransactionRequest(); // \ChurchTools\Model\CreateNewTransactionRequest | Transaction data

try {
    $result = $apiInstance->createNewTransaction($create_new_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_transaction_request** | [**\ChurchTools\Model\CreateNewTransactionRequest**](../Model/CreateNewTransactionRequest.md)| Transaction data | |

### Return type

[**\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransactionPurpose()`

```php
createNewTransactionPurpose($create_new_transaction_purpose_request): \ChurchTools\Model\GetAllTransactionPurposes200Response
```

Create new transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_transaction_purpose_request = new \ChurchTools\Model\CreateNewTransactionPurposeRequest(); // \ChurchTools\Model\CreateNewTransactionPurposeRequest | Transaction purpose data

try {
    $result = $apiInstance->createNewTransactionPurpose($create_new_transaction_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_transaction_purpose_request** | [**\ChurchTools\Model\CreateNewTransactionPurposeRequest**](../Model/CreateNewTransactionPurposeRequest.md)| Transaction purpose data | |

### Return type

[**\ChurchTools\Model\GetAllTransactionPurposes200Response**](../Model/GetAllTransactionPurposes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxRate()`

```php
createTaxRate($create_tax_rate_request): \ChurchTools\Model\CreateTaxRate200Response
```

Create new tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tax_rate_request = new \ChurchTools\Model\CreateTaxRateRequest(); // \ChurchTools\Model\CreateTaxRateRequest | Tax rate data

try {
    $result = $apiInstance->createTaxRate($create_tax_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tax_rate_request** | [**\ChurchTools\Model\CreateTaxRateRequest**](../Model/CreateTaxRateRequest.md)| Tax rate data | |

### Return type

[**\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxType()`

```php
createTaxType($create_tax_type_request): \ChurchTools\Model\CreateTaxType200Response
```

Create new tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tax_type_request = new \ChurchTools\Model\CreateTaxTypeRequest(); // \ChurchTools\Model\CreateTaxTypeRequest | tax type data

try {
    $result = $apiInstance->createTaxType($create_tax_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tax_type_request** | [**\ChurchTools\Model\CreateTaxTypeRequest**](../Model/CreateTaxTypeRequest.md)| tax type data | |

### Return type

[**\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($id, $dry_run)
```

Delete account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteAccountClass()`

```php
deleteAccountClass($id)
```

Delete account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountClass($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountClass: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountGroup()`

```php
deleteAccountGroup($id)
```

Delete account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountType()`

```php
deleteAccountType($id, $dry_run)
```

Delete account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteAccountingPeriod()`

```php
deleteAccountingPeriod($id, $dry_run)
```

Delete accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountingPeriod($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteAccountsForAccountingPeriod()`

```php
deleteAccountsForAccountingPeriod($id)
```

Delete accounts for accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountsForAccountingPeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountsForAccountingPeriod: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBill()`

```php
deleteBill($id, $dry_run)
```

Delete bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteBill($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteCashDiscount()`

```php
deleteCashDiscount($id, $dry_run)
```

Delete cash discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCashDiscount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteClient()`

```php
deleteClient($id, $dry_run)
```

Delete client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteClient($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteCostCenter()`

```php
deleteCostCenter($id, $dry_run)
```

Delete cost center

Delete cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCostCenter($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteFinanceDonationReceipts()`

```php
deleteFinanceDonationReceipts($accounting_period_id)
```

Delete all donation receipts

Delete all donation receipts such that you can regenerate the same.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->deleteFinanceDonationReceipts($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteFinanceDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

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

## `deleteFinanceDonatorsDonatorCoupleId()`

```php
deleteFinanceDonatorsDonatorCoupleId($accounting_period_id, $donator_couple_id)
```

delete-donation-receipt

Delete the donation receipts of a parcticular donator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$donator_couple_id = 42-43; // string | ID of Donator or Couple

try {
    $apiInstance->deleteFinanceDonatorsDonatorCoupleId($accounting_period_id, $donator_couple_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteFinanceDonatorsDonatorCoupleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **donator_couple_id** | **string**| ID of Donator or Couple | |

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

## `deleteSplitTransaction()`

```php
deleteSplitTransaction($id, $dry_run, $include)
```

Delete split transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $apiInstance->deleteSplitTransaction($id, $dry_run, $include);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteSplitTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

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

## `deleteStatement()`

```php
deleteStatement($id, $statement_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$statement_id = 'statement_id_example'; // string

try {
    $apiInstance->deleteStatement($id, $statement_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteStatement: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaxRate()`

```php
deleteTaxRate($id, $dry_run)
```

Delete tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxRate($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteTaxType()`

```php
deleteTaxType($id, $dry_run)
```

Delete tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `deleteTransaction()`

```php
deleteTransaction($id, $dry_run, $include)
```

Delete transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $apiInstance->deleteTransaction($id, $dry_run, $include);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

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

## `deleteTransactionPurpose()`

```php
deleteTransactionPurpose($id, $dry_run)
```

Delete transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransactionPurpose($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
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

## `exportFinanceTemplate()`

```php
exportFinanceTemplate($accounting_period_id)
```

Epports a finance template based on the masterdata for a given accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->exportFinanceTemplate($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->exportFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

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

## `getAccountById()`

```php
getAccountById($id): \ChurchTools\Model\GetAccountById200Response
```

Get a account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetAccountById200Response**](../Model/GetAccountById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountClassById()`

```php
getAccountClassById($id): \ChurchTools\Model\GetAccountClassById200Response
```

Get a account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountClassById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountClassById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetAccountClassById200Response**](../Model/GetAccountClassById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroupById()`

```php
getAccountGroupById($id): \ChurchTools\Model\GetAccountGroupById200Response
```

Get a account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountGroupById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountGroupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetAccountGroupById200Response**](../Model/GetAccountGroupById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountMovements()`

```php
getAccountMovements($id, $account_id, $page, $limit, $state, $query, $include): \ChurchTools\Model\GetAccountMovements200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$account_id = 'account_id_example'; // string
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$state = 'state_example'; // string
$query = 'query_example'; // string
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getAccountMovements($id, $account_id, $page, $limit, $state, $query, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountMovements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **account_id** | **string**|  | |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **state** | **string**|  | [optional] |
| **query** | **string**|  | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\GetAccountMovements200Response**](../Model/GetAccountMovements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountStatementMovements()`

```php
getAccountStatementMovements($id, $account_id, $statement_id, $state, $include): \ChurchTools\Model\GetAccountMovements200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$account_id = 'account_id_example'; // string
$statement_id = 'statement_id_example'; // string
$state = 'state_example'; // string
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getAccountStatementMovements($id, $account_id, $statement_id, $state, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountStatementMovements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **account_id** | **string**|  | |
| **statement_id** | **string**|  | |
| **state** | **string**|  | [optional] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\GetAccountMovements200Response**](../Model/GetAccountMovements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountStatements()`

```php
getAccountStatements($id, $account_id): \ChurchTools\Model\GetAccountStatements200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getAccountStatements($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **account_id** | **string**|  | |

### Return type

[**\ChurchTools\Model\GetAccountStatements200Response**](../Model/GetAccountStatements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTypeById()`

```php
getAccountTypeById($id): \ChurchTools\Model\GetAccountTypeById200Response
```

Get a account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountTypeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountTypeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetAccountTypeById200Response**](../Model/GetAccountTypeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingPeriodById()`

```php
getAccountingPeriodById($id): \ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Get a accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountingPeriodById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountingPeriodById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsImportTemplate()`

```php
getAccountsImportTemplate($get_accounts_import_template_request)
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


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_accounts_import_template_request = new \ChurchTools\Model\GetAccountsImportTemplateRequest(); // \ChurchTools\Model\GetAccountsImportTemplateRequest

try {
    $apiInstance->getAccountsImportTemplate($get_accounts_import_template_request);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountsImportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_accounts_import_template_request** | [**\ChurchTools\Model\GetAccountsImportTemplateRequest**](../Model/GetAccountsImportTemplateRequest.md)|  | |

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

## `getAccountsStatements()`

```php
getAccountsStatements($id): \ChurchTools\Model\GetAccountsStatements200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountsStatements($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountsStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetAccountsStatements200Response**](../Model/GetAccountsStatements200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountClasses()`

```php
getAllAccountClasses(): \ChurchTools\Model\GetAllAccountClasses200Response
```

Get all account classes ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllAccountClasses200Response**](../Model/GetAllAccountClasses200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountGroups()`

```php
getAllAccountGroups(): \ChurchTools\Model\GetAllAccountGroups200Response
```

Get all account groups ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllAccountGroups200Response**](../Model/GetAllAccountGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountTypes()`

```php
getAllAccountTypes(): \ChurchTools\Model\GetAllAccountTypes200Response
```

Get all account types ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllAccountTypes200Response**](../Model/GetAllAccountTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountingPeriods()`

```php
getAllAccountingPeriods(): \ChurchTools\Model\GetAllAccountingPeriods200Response
```

Get all accounting periods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountingPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllAccountingPeriods200Response**](../Model/GetAllAccountingPeriods200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccounts()`

```php
getAllAccounts($accounting_period_id, $calculate_balance): \ChurchTools\Model\GetAllAccounts200Response
```

Get all accounts ordered by accounting period and number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = array(56); // int[] | ID of one accounting period or several accounting periods
$calculate_balance = true; // bool | Calculate balance for accounts

try {
    $result = $apiInstance->getAllAccounts($accounting_period_id, $calculate_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | [**int[]**](../Model/int.md)| ID of one accounting period or several accounting periods | |
| **calculate_balance** | **bool**| Calculate balance for accounts | [optional] |

### Return type

[**\ChurchTools\Model\GetAllAccounts200Response**](../Model/GetAllAccounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCashDiscounts()`

```php
getAllCashDiscounts(): \ChurchTools\Model\GetAllCashDiscounts200Response
```

Get all cash discounts ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCashDiscounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCashDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllCashDiscounts200Response**](../Model/GetAllCashDiscounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllClients()`

```php
getAllClients(): \ChurchTools\Model\GetAllClients200Response
```

Get all clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllClients200Response**](../Model/GetAllClients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCostCenters()`

```php
getAllCostCenters($accounting_period_id): \ChurchTools\Model\GetAllCostCenters200Response
```

Get all cost centers ordered by accounting period and number ascending

Get all cost centers ordered by accounting period and number ascending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $result = $apiInstance->getAllCostCenters($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCostCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

[**\ChurchTools\Model\GetAllCostCenters200Response**](../Model/GetAllCostCenters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDonationReceipts()`

```php
getAllDonationReceipts($accounting_period_id, $mode, $cleardoublepage): \ChurchTools\Model\GetAllDonators200Response
```

Get all donators including their donation information (e.g. donation amount)

Download all donation receipts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$mode = 'twofiles'; // string | mode: seperate letter and attachtment in two files
$cleardoublepage = 'none'; // string | add empty pages to clear double page for  'all', 'letter', 'attachment'

try {
    $result = $apiInstance->getAllDonationReceipts($accounting_period_id, $mode, $cleardoublepage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **mode** | **string**| mode: seperate letter and attachtment in two files | [optional] [default to &#39;twofiles&#39;] |
| **cleardoublepage** | **string**| add empty pages to clear double page for  &#39;all&#39;, &#39;letter&#39;, &#39;attachment&#39; | [optional] [default to &#39;none&#39;] |

### Return type

[**\ChurchTools\Model\GetAllDonators200Response**](../Model/GetAllDonators200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDonators()`

```php
getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit, $query): \ChurchTools\Model\GetAllDonators200Response
```

Get all donators including their donation information (e.g. donation amount)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$order_by = 'order_by_example'; // string | Default is `name`.
$order_direction = 'order_direction_example'; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$query = 'query_example'; // string | String to be included in donator's first name or last name

try {
    $result = $apiInstance->getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllDonators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **order_by** | **string**| Default is &#x60;name&#x60;. | [optional] |
| **order_direction** | **string**| Way of direction: ascending or descending | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **query** | **string**| String to be included in donator&#39;s first name or last name | [optional] |

### Return type

[**\ChurchTools\Model\GetAllDonators200Response**](../Model/GetAllDonators200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFinanceTemplates()`

```php
getAllFinanceTemplates(): \ChurchTools\Model\GetAllFinanceTemplates200ResponseInner[]
```

Get all finance templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllFinanceTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllFinanceTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllFinanceTemplates200ResponseInner[]**](../Model/GetAllFinanceTemplates200ResponseInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxRates()`

```php
getAllTaxRates($accounting_period_id): \ChurchTools\Model\GetAllTaxRates200Response
```

Get all tax rates ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $result = $apiInstance->getAllTaxRates($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

[**\ChurchTools\Model\GetAllTaxRates200Response**](../Model/GetAllTaxRates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxTypes()`

```php
getAllTaxTypes(): \ChurchTools\Model\GetAllTaxTypes200Response
```

Get all tax types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTaxTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllTaxTypes200Response**](../Model/GetAllTaxTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactionPurposes()`

```php
getAllTransactionPurposes(): \ChurchTools\Model\GetAllTransactionPurposes200Response
```

Get all transaction purposes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTransactionPurposes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTransactionPurposes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChurchTools\Model\GetAllTransactionPurposes200Response**](../Model/GetAllTransactionPurposes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactions()`

```php
getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $include_ids, $exclude_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit, $include): \ChurchTools\Model\GetAllTransactions200Response
```

Get all transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$created_pid = 56; // int | Filter by person ID. Get all transactions the person has created. But only show those the user can see.
$cost_center_ids = array(56); // int[] | Filter by cost centers.
$donator_ids = array(56); // int[] | Filter by donator or donator spouse. Provide an array of person ids.
$include_ids = array(56); // int[] | Filter by ids to include.
$exclude_ids = array(56); // int[] | Filter by ids to exclude.
$account_ids = array(56); // int[] | Filter by account/contra account. All transactions match, where either account or contra account is in the list.
$is_donation = True; // bool | Filter by donations. `true` = Only donations, `false` = Other than donation.
$is_income = True; // bool | Filter transactions by income or outcome transactions. An account group has a flag `cash asset account` to indicate accounts for income/outcome.
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Show transactions after this date.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Show transactions before this date.
$is_immutable = True; // bool | Filter transactions, whether transaction is immutable.
$order_by = 'order_by_example'; // string | Default is `date`. Order transactions either by document date, amount, or modified date. For `date` and `amount` a second sorting happens by modified. The order direction for modified date is the same as for date and amount.
$order_direction = 'order_direction_example'; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagination. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $include_ids, $exclude_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **created_pid** | **int**| Filter by person ID. Get all transactions the person has created. But only show those the user can see. | [optional] |
| **cost_center_ids** | [**int[]**](../Model/int.md)| Filter by cost centers. | [optional] |
| **donator_ids** | [**int[]**](../Model/int.md)| Filter by donator or donator spouse. Provide an array of person ids. | [optional] |
| **include_ids** | [**int[]**](../Model/int.md)| Filter by ids to include. | [optional] |
| **exclude_ids** | [**int[]**](../Model/int.md)| Filter by ids to exclude. | [optional] |
| **account_ids** | [**int[]**](../Model/int.md)| Filter by account/contra account. All transactions match, where either account or contra account is in the list. | [optional] |
| **is_donation** | **bool**| Filter by donations. &#x60;true&#x60; &#x3D; Only donations, &#x60;false&#x60; &#x3D; Other than donation. | [optional] |
| **is_income** | **bool**| Filter transactions by income or outcome transactions. An account group has a flag &#x60;cash asset account&#x60; to indicate accounts for income/outcome. | [optional] |
| **start_date** | **\DateTime**| Show transactions after this date. | [optional] |
| **end_date** | **\DateTime**| Show transactions before this date. | [optional] |
| **is_immutable** | **bool**| Filter transactions, whether transaction is immutable. | [optional] |
| **order_by** | **string**| Default is &#x60;date&#x60;. Order transactions either by document date, amount, or modified date. For &#x60;date&#x60; and &#x60;amount&#x60; a second sorting happens by modified. The order direction for modified date is the same as for date and amount. | [optional] |
| **order_direction** | **string**| Way of direction: ascending or descending | [optional] |
| **page** | **int**| Page number to show page in pagination. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\GetAllTransactions200Response**](../Model/GetAllTransactions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillById()`

```php
getBillById($id): \ChurchTools\Model\CreateNewBill201Response
```

Get a bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getBillById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getBillById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateNewBill201Response**](../Model/CreateNewBill201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillsForAccountingPeriod()`

```php
getBillsForAccountingPeriod($id): \ChurchTools\Model\GetBillsForAccountingPeriod200Response
```

Get bills for accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getBillsForAccountingPeriod($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getBillsForAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetBillsForAccountingPeriod200Response**](../Model/GetBillsForAccountingPeriod200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCashDiscount()`

```php
getCashDiscount($id): \ChurchTools\Model\CreateCashDiscount200Response
```

Get a cash discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getCashDiscount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientById()`

```php
getClientById($id): \ChurchTools\Model\GetClientById200Response
```

Get a client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getClientById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getClientById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetClientById200Response**](../Model/GetClientById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCenter()`

```php
getCostCenter($id): \ChurchTools\Model\CreateCostCenter200Response
```

Get a cost center

Get a cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getCostCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceAccountsCsv()`

```php
getFinanceAccountsCsv($accounting_period_id)
```

Your GET endpoint

Exports all Accounts for the given acounting period as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | The accounting period to get the result set from

try {
    $apiInstance->getFinanceAccountsCsv($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getFinanceAccountsCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| The accounting period to get the result set from | [optional] |

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

## `getFinanceDonatorsDonatorCoupleId()`

```php
getFinanceDonatorsDonatorCoupleId($accounting_period_id, $donator_couple_id): \ChurchTools\Model\GetFinanceDonatorsDonatorCoupleId200Response
```

Get donation receipt PDFs (cover letter and attachment)

Get the donation receipts of a particular donator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$donator_couple_id = 42-43; // string | ID of Donator or Couple

try {
    $result = $apiInstance->getFinanceDonatorsDonatorCoupleId($accounting_period_id, $donator_couple_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getFinanceDonatorsDonatorCoupleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **donator_couple_id** | **string**| ID of Donator or Couple | |

### Return type

[**\ChurchTools\Model\GetFinanceDonatorsDonatorCoupleId200Response**](../Model/GetFinanceDonatorsDonatorCoupleId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSplitTransactionById()`

```php
getSplitTransactionById($id, $include): \ChurchTools\Model\CreateNewSplitTransaction201Response
```

Get a split transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getSplitTransactionById($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getSplitTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\CreateNewSplitTransaction201Response**](../Model/CreateNewSplitTransaction201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRate()`

```php
getTaxRate($id): \ChurchTools\Model\CreateTaxRate200Response
```

Get a tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxType()`

```php
getTaxType($id): \ChurchTools\Model\CreateTaxType200Response
```

Get a tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTaxType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionById()`

```php
getTransactionById($id, $include): \ChurchTools\Model\CreateNewTransaction200Response
```

Get a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->getTransactionById($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionPurposeById()`

```php
getTransactionPurposeById($id): \ChurchTools\Model\GetTransactionPurposeById200Response
```

Get a transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTransactionPurposeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionPurposeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetTransactionPurposeById200Response**](../Model/GetTransactionPurposeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRules()`

```php
getUserRules($id): \ChurchTools\Model\GetUserRules200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getUserRules($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getUserRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\ChurchTools\Model\GetUserRules200Response**](../Model/GetUserRules200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountStatementMovement()`

```php
postAccountStatementMovement($id, $account_id, $statement_id, $movement_id, $post_account_statement_movement_request): \ChurchTools\Model\PostAccountStatementMovement200Response
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


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$account_id = 'account_id_example'; // string
$statement_id = 'statement_id_example'; // string
$movement_id = 'movement_id_example'; // string
$post_account_statement_movement_request = new \ChurchTools\Model\PostAccountStatementMovementRequest(); // \ChurchTools\Model\PostAccountStatementMovementRequest | Account statement movement data

try {
    $result = $apiInstance->postAccountStatementMovement($id, $account_id, $statement_id, $movement_id, $post_account_statement_movement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postAccountStatementMovement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **account_id** | **string**|  | |
| **statement_id** | **string**|  | |
| **movement_id** | **string**|  | |
| **post_account_statement_movement_request** | [**\ChurchTools\Model\PostAccountStatementMovementRequest**](../Model/PostAccountStatementMovementRequest.md)| Account statement movement data | |

### Return type

[**\ChurchTools\Model\PostAccountStatementMovement200Response**](../Model/PostAccountStatementMovement200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceCostcentersBulkcreate()`

```php
postFinanceCostcentersBulkcreate($post_finance_costcenters_bulkcreate_request): \ChurchTools\Model\GetAllCostCenters200Response
```

Import many cost centers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_finance_costcenters_bulkcreate_request = new \ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest(); // \ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest

try {
    $result = $apiInstance->postFinanceCostcentersBulkcreate($post_finance_costcenters_bulkcreate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceCostcentersBulkcreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_finance_costcenters_bulkcreate_request** | [**\ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest**](../Model/PostFinanceCostcentersBulkcreateRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\GetAllCostCenters200Response**](../Model/GetAllCostCenters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceTurnoverReport()`

```php
postFinanceTurnoverReport($post_finance_turnover_report_request): \ChurchTools\Model\PostFinanceTurnoverReport200Response
```

Issue new Turnover Report

Issue new turnover report. _Monthly_ and _Quarterly_ reports are available. The result provides the URI to the generated PDF file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_finance_turnover_report_request = new \ChurchTools\Model\PostFinanceTurnoverReportRequest(); // \ChurchTools\Model\PostFinanceTurnoverReportRequest | 

try {
    $result = $apiInstance->postFinanceTurnoverReport($post_finance_turnover_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceTurnoverReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_finance_turnover_report_request** | [**\ChurchTools\Model\PostFinanceTurnoverReportRequest**](../Model/PostFinanceTurnoverReportRequest.md)|  | [optional] |

### Return type

[**\ChurchTools\Model\PostFinanceTurnoverReport200Response**](../Model/PostFinanceTurnoverReport200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putStatement()`

```php
putStatement($id, $statement_id, $put_statement_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$statement_id = 'statement_id_example'; // string
$put_statement_request = new \ChurchTools\Model\PutStatementRequest(); // \ChurchTools\Model\PutStatementRequest | Statement data

try {
    $apiInstance->putStatement($id, $statement_id, $put_statement_request);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->putStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **statement_id** | **string**|  | |
| **put_statement_request** | [**\ChurchTools\Model\PutStatementRequest**](../Model/PutStatementRequest.md)| Statement data | |

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

## `updateAccount()`

```php
updateAccount($id, $update_account_request): \ChurchTools\Model\GetAccountById200Response
```

Update account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_account_request = new \ChurchTools\Model\UpdateAccountRequest(); // \ChurchTools\Model\UpdateAccountRequest | Account data

try {
    $result = $apiInstance->updateAccount($id, $update_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_account_request** | [**\ChurchTools\Model\UpdateAccountRequest**](../Model/UpdateAccountRequest.md)| Account data | |

### Return type

[**\ChurchTools\Model\GetAccountById200Response**](../Model/GetAccountById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountClass()`

```php
updateAccountClass($id, $create_new_account_class_request): \ChurchTools\Model\GetAccountClassById200Response
```

Update account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_class_request = new \ChurchTools\Model\CreateNewAccountClassRequest(); // \ChurchTools\Model\CreateNewAccountClassRequest | Account Class data

try {
    $result = $apiInstance->updateAccountClass($id, $create_new_account_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_class_request** | [**\ChurchTools\Model\CreateNewAccountClassRequest**](../Model/CreateNewAccountClassRequest.md)| Account Class data | |

### Return type

[**\ChurchTools\Model\GetAccountClassById200Response**](../Model/GetAccountClassById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountGroup()`

```php
updateAccountGroup($id, $create_new_account_group_request): \ChurchTools\Model\GetAccountGroupById200Response
```

Update account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_group_request = new \ChurchTools\Model\CreateNewAccountGroupRequest(); // \ChurchTools\Model\CreateNewAccountGroupRequest | Account Group data

try {
    $result = $apiInstance->updateAccountGroup($id, $create_new_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_group_request** | [**\ChurchTools\Model\CreateNewAccountGroupRequest**](../Model/CreateNewAccountGroupRequest.md)| Account Group data | |

### Return type

[**\ChurchTools\Model\GetAccountGroupById200Response**](../Model/GetAccountGroupById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountType()`

```php
updateAccountType($id, $update_account_type_request): \ChurchTools\Model\GetAccountTypeById200Response
```

Update account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_account_type_request = new \ChurchTools\Model\UpdateAccountTypeRequest(); // \ChurchTools\Model\UpdateAccountTypeRequest | Account Type data

try {
    $result = $apiInstance->updateAccountType($id, $update_account_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_account_type_request** | [**\ChurchTools\Model\UpdateAccountTypeRequest**](../Model/UpdateAccountTypeRequest.md)| Account Type data | |

### Return type

[**\ChurchTools\Model\GetAccountTypeById200Response**](../Model/GetAccountTypeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountingPeriod()`

```php
updateAccountingPeriod($id, $update_accounting_period_request): \ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Update accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_accounting_period_request = new \ChurchTools\Model\UpdateAccountingPeriodRequest(); // \ChurchTools\Model\UpdateAccountingPeriodRequest | Accounting period data

try {
    $result = $apiInstance->updateAccountingPeriod($id, $update_accounting_period_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_accounting_period_request** | [**\ChurchTools\Model\UpdateAccountingPeriodRequest**](../Model/UpdateAccountingPeriodRequest.md)| Accounting period data | |

### Return type

[**\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBill()`

```php
updateBill($id, $update_bill_request): \ChurchTools\Model\CreateNewBill201Response
```

Update bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_bill_request = new \ChurchTools\Model\UpdateBillRequest(); // \ChurchTools\Model\UpdateBillRequest | Bill data

try {
    $result = $apiInstance->updateBill($id, $update_bill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_bill_request** | [**\ChurchTools\Model\UpdateBillRequest**](../Model/UpdateBillRequest.md)| Bill data | |

### Return type

[**\ChurchTools\Model\CreateNewBill201Response**](../Model/CreateNewBill201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCashDiscount()`

```php
updateCashDiscount($id, $create_cash_discount_request): \ChurchTools\Model\CreateCashDiscount200Response
```

Update cash discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_cash_discount_request = new \ChurchTools\Model\CreateCashDiscountRequest(); // \ChurchTools\Model\CreateCashDiscountRequest | cash discount data

try {
    $result = $apiInstance->updateCashDiscount($id, $create_cash_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_cash_discount_request** | [**\ChurchTools\Model\CreateCashDiscountRequest**](../Model/CreateCashDiscountRequest.md)| cash discount data | |

### Return type

[**\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClient()`

```php
updateClient($id, $update_client_request): \ChurchTools\Model\GetClientById200Response
```

Update client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_client_request = new \ChurchTools\Model\UpdateClientRequest(); // \ChurchTools\Model\UpdateClientRequest | Client data

try {
    $result = $apiInstance->updateClient($id, $update_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_client_request** | [**\ChurchTools\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)| Client data | |

### Return type

[**\ChurchTools\Model\GetClientById200Response**](../Model/GetClientById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCostCenter()`

```php
updateCostCenter($id, $update_cost_center_request): \ChurchTools\Model\CreateCostCenter200Response
```

Update cost center

Update cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_cost_center_request = new \ChurchTools\Model\UpdateCostCenterRequest(); // \ChurchTools\Model\UpdateCostCenterRequest | cost center data

try {
    $result = $apiInstance->updateCostCenter($id, $update_cost_center_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_cost_center_request** | [**\ChurchTools\Model\UpdateCostCenterRequest**](../Model/UpdateCostCenterRequest.md)| cost center data | |

### Return type

[**\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSplitTransaction()`

```php
updateSplitTransaction($id, $create_new_split_transaction_request, $include): \ChurchTools\Model\CreateNewSplitTransaction201Response
```

Update split transaction, or convert to normal transaction, if only one split child is given,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_split_transaction_request = new \ChurchTools\Model\CreateNewSplitTransactionRequest(); // \ChurchTools\Model\CreateNewSplitTransactionRequest | Split transaction data
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->updateSplitTransaction($id, $create_new_split_transaction_request, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateSplitTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_split_transaction_request** | [**\ChurchTools\Model\CreateNewSplitTransactionRequest**](../Model/CreateNewSplitTransactionRequest.md)| Split transaction data | |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\CreateNewSplitTransaction201Response**](../Model/CreateNewSplitTransaction201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($id, $update_tax_rate_request): \ChurchTools\Model\CreateTaxRate200Response
```

Update tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_tax_rate_request = new \ChurchTools\Model\UpdateTaxRateRequest(); // \ChurchTools\Model\UpdateTaxRateRequest | Tax rate data

try {
    $result = $apiInstance->updateTaxRate($id, $update_tax_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_tax_rate_request** | [**\ChurchTools\Model\UpdateTaxRateRequest**](../Model/UpdateTaxRateRequest.md)| Tax rate data | |

### Return type

[**\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxType()`

```php
updateTaxType($id, $update_tax_type_request): \ChurchTools\Model\CreateTaxType200Response
```

Update tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_tax_type_request = new \ChurchTools\Model\UpdateTaxTypeRequest(); // \ChurchTools\Model\UpdateTaxTypeRequest | tax type data

try {
    $result = $apiInstance->updateTaxType($id, $update_tax_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_tax_type_request** | [**\ChurchTools\Model\UpdateTaxTypeRequest**](../Model/UpdateTaxTypeRequest.md)| tax type data | |

### Return type

[**\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($id, $update_transaction_request, $include): \ChurchTools\Model\CreateNewTransaction200Response
```

Update transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_transaction_request = new \ChurchTools\Model\UpdateTransactionRequest(); // \ChurchTools\Model\UpdateTransactionRequest | Transaction data
$include = array('include_example'); // string[] | If set, the response will include the specified data.

try {
    $result = $apiInstance->updateTransaction($id, $update_transaction_request, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_transaction_request** | [**\ChurchTools\Model\UpdateTransactionRequest**](../Model/UpdateTransactionRequest.md)| Transaction data | |
| **include** | [**string[]**](../Model/string.md)| If set, the response will include the specified data. | [optional] |

### Return type

[**\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionPurpose()`

```php
updateTransactionPurpose($id, $create_new_transaction_purpose_request): \ChurchTools\Model\GetTransactionPurposeById200Response
```

Update transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_transaction_purpose_request = new \ChurchTools\Model\CreateNewTransactionPurposeRequest(); // \ChurchTools\Model\CreateNewTransactionPurposeRequest | transaction purpose data

try {
    $result = $apiInstance->updateTransactionPurpose($id, $create_new_transaction_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_transaction_purpose_request** | [**\ChurchTools\Model\CreateNewTransactionPurposeRequest**](../Model/CreateNewTransactionPurposeRequest.md)| transaction purpose data | |

### Return type

[**\ChurchTools\Model\GetTransactionPurposeById200Response**](../Model/GetTransactionPurposeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
