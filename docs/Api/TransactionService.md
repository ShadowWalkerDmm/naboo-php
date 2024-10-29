# OpenAPI\Client\TransactionService

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTransactionTransactionCreateTransactionPost()**](TransactionService.md#createTransactionTransactionCreateTransactionPost) | **PUT** /transaction/create-transaction | Create Transaction |
| [**deleteTransactionTransactionDeleteTransactionDelete()**](TransactionService.md#deleteTransactionTransactionDeleteTransactionDelete) | **DELETE** /transaction/delete-transaction | Delete Transaction |
| [**getOneTransactionTransactionGetOneTransactionGet()**](TransactionService.md#getOneTransactionTransactionGetOneTransactionGet) | **GET** /transaction/get-one-transaction | Get One Transaction |
| [**getTransactionsTransactionGetTransactionsGet()**](TransactionService.md#getTransactionsTransactionGetTransactionsGet) | **GET** /transaction/get-transactions | Get Transactions |


## `createTransactionTransactionCreateTransactionPost()`

```php
createTransactionTransactionCreateTransactionPost($transaction_request): \OpenAPI\Client\Model\TransactionResponse
```

Create Transaction

This endpoint allows authenticated users to create a transaction by submitting a request with the necessary details. The endpoint ensures that the user's access level permits transaction creation and enforces a rate limit of 30 requests. It checks that the number of products is within the allowed range (1-20) and calculates the total transaction amount, applying a 20% charge for escrow transactions. It also verifies that the total amount does not exceed a specific threshold (2,000,000). The user's IP address and browser information are logged, and the transaction details are saved with relevant metadata, including a unique order ID and the associated account state. If any conditions are not met, appropriate error messages are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransactionService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_request = new \OpenAPI\Client\Model\TransactionRequest(); // \OpenAPI\Client\Model\TransactionRequest

try {
    $result = $apiInstance->createTransactionTransactionCreateTransactionPost($transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionService->createTransactionTransactionCreateTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_request** | [**\OpenAPI\Client\Model\TransactionRequest**](../Model/TransactionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransactionTransactionDeleteTransactionDelete()`

```php
deleteTransactionTransactionDeleteTransactionDelete($delete_transaction_request): \OpenAPI\Client\Model\DeleteTransactionResponse
```

Delete Transaction

This endpoint allows authenticated users to delete a transaction by submitting a request with the necessary details. The endpoint checks the user's access level to ensure they have permission to delete transactions and enforces a rate limit of 30 requests. It verifies that the transaction belongs to the user and has not already been deleted or withdrawn. If the transaction is paid and has a payment reference, it processes refunds and updates the user's account balance accordingly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransactionService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_transaction_request = new \OpenAPI\Client\Model\DeleteTransactionRequest(); // \OpenAPI\Client\Model\DeleteTransactionRequest

try {
    $result = $apiInstance->deleteTransactionTransactionDeleteTransactionDelete($delete_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionService->deleteTransactionTransactionDeleteTransactionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_transaction_request** | [**\OpenAPI\Client\Model\DeleteTransactionRequest**](../Model/DeleteTransactionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DeleteTransactionResponse**](../Model/DeleteTransactionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOneTransactionTransactionGetOneTransactionGet()`

```php
getOneTransactionTransactionGetOneTransactionGet($order_id): \OpenAPI\Client\Model\GetOneTransaction
```

Get One Transaction

This endpoint allows authenticated users to retrieve the details of a specific transaction using the order ID. The endpoint ensures the user has read access and enforces a rate limit of 30 requests. It checks if the transaction exists in the database and if the user has the appropriate access rights,then provides a checkout URL for the transaction and others informations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransactionService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getOneTransactionTransactionGetOneTransactionGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionService->getOneTransactionTransactionGetOneTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetOneTransaction**](../Model/GetOneTransaction.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsTransactionGetTransactionsGet()`

```php
getTransactionsTransactionGetTransactionsGet(): \OpenAPI\Client\Model\GetAllTransaction
```

Get Transactions

This endpoint allows authenticated users to retrieve a list of their visible transactions, up to a maximum of 50. The endpoint enforces a rate limit of 30 requests and ensures the user has read access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransactionService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTransactionsTransactionGetTransactionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionService->getTransactionsTransactionGetTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetAllTransaction**](../Model/GetAllTransaction.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
