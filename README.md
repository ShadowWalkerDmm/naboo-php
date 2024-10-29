# naboo

Here you have the first version of the naboo api to create checkout automatically


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/naboopay/naboo-php.git"
    }
  ],
  "require": {
    "naboopay/naboo-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/naboo/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountInformationAccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountService->getAccountInformationAccountGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountService* | [**getAccountInformationAccountGet**](docs/Api/AccountService.md#getaccountinformationaccountget) | **GET** /account/ | Get Account Information
*CashoutService* | [**cashOutOrangeMoneyCashoutOrangeMoneyPost**](docs/Api/CashoutService.md#cashoutorangemoneycashoutorangemoneypost) | **POST** /cashout/orange-money | Cash Out Orange Money
*CashoutService* | [**cashOutWaveCashoutWavePost**](docs/Api/CashoutService.md#cashoutwavecashoutwavepost) | **POST** /cashout/wave | Cash Out Wave
*TransactionService* | [**createTransactionTransactionCreateTransactionPost**](docs/Api/TransactionService.md#createtransactiontransactioncreatetransactionpost) | **PUT** /transaction/create-transaction | Create Transaction
*TransactionService* | [**deleteTransactionTransactionDeleteTransactionDelete**](docs/Api/TransactionService.md#deletetransactiontransactiondeletetransactiondelete) | **DELETE** /transaction/delete-transaction | Delete Transaction
*TransactionService* | [**getOneTransactionTransactionGetOneTransactionGet**](docs/Api/TransactionService.md#getonetransactiontransactiongetonetransactionget) | **GET** /transaction/get-one-transaction | Get One Transaction
*TransactionService* | [**getTransactionsTransactionGetTransactionsGet**](docs/Api/TransactionService.md#gettransactionstransactiongettransactionsget) | **GET** /transaction/get-transactions | Get Transactions

## Models

- [CashOutOrangeRequest](docs/Model/CashOutOrangeRequest.md)
- [CashOutResponse](docs/Model/CashOutResponse.md)
- [CashOutWaveRequest](docs/Model/CashOutWaveRequest.md)
- [DeleteTransactionRequest](docs/Model/DeleteTransactionRequest.md)
- [DeleteTransactionResponse](docs/Model/DeleteTransactionResponse.md)
- [GetAccountResponse](docs/Model/GetAccountResponse.md)
- [GetAllTransaction](docs/Model/GetAllTransaction.md)
- [GetOneTransaction](docs/Model/GetOneTransaction.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [ProductModel](docs/Model/ProductModel.md)
- [TransactionRequest](docs/Model/TransactionRequest.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionStatusEnum](docs/Model/TransactionStatusEnum.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)
- [Wallet](docs/Model/Wallet.md)

## Authorization

Authentication schemes defined for the API:
### HTTPBearer

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```
