# OpenAPI\Client\CashoutService

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cashOutOrangeMoneyCashoutOrangeMoneyPost()**](CashoutService.md#cashOutOrangeMoneyCashoutOrangeMoneyPost) | **POST** /cashout/orange-money | Cash Out Orange Money |
| [**cashOutWaveCashoutWavePost()**](CashoutService.md#cashOutWaveCashoutWavePost) | **POST** /cashout/wave | Cash Out Wave |


## `cashOutOrangeMoneyCashoutOrangeMoneyPost()`

```php
cashOutOrangeMoneyCashoutOrangeMoneyPost($cash_out_orange_request): \OpenAPI\Client\Model\CashOutResponse
```

Cash Out Orange Money

This endpoint enables a user to withdraw funds from their NabooPay account to their Orange Money account. Authentication is required, and users with the 'dev' role are not permitted to perform this operation. The amount to be withdrawn must be positive and within the user's available balance. The user's account must be active and registered in the system. After validation, the user's account balance is adjusted accordingly, and the transaction is logged for record-keeping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CashoutService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cash_out_orange_request = new \OpenAPI\Client\Model\CashOutOrangeRequest(); // \OpenAPI\Client\Model\CashOutOrangeRequest

try {
    $result = $apiInstance->cashOutOrangeMoneyCashoutOrangeMoneyPost($cash_out_orange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashoutService->cashOutOrangeMoneyCashoutOrangeMoneyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cash_out_orange_request** | [**\OpenAPI\Client\Model\CashOutOrangeRequest**](../Model/CashOutOrangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CashOutResponse**](../Model/CashOutResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cashOutWaveCashoutWavePost()`

```php
cashOutWaveCashoutWavePost($cash_out_wave_request): \OpenAPI\Client\Model\CashOutResponse
```

Cash Out Wave

This endpoint allows a user to withdraw funds from their NabooPay account to their Wave account. The user must be authenticated and not possess the 'dev' role. The withdrawal amount must be greater than 10 and not exceed the user's account balance. The user's account must exist and be active. Upon successful validation, the system updates the user's account balance and records the transaction for tracking purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CashoutService(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cash_out_wave_request = new \OpenAPI\Client\Model\CashOutWaveRequest(); // \OpenAPI\Client\Model\CashOutWaveRequest

try {
    $result = $apiInstance->cashOutWaveCashoutWavePost($cash_out_wave_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashoutService->cashOutWaveCashoutWavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cash_out_wave_request** | [**\OpenAPI\Client\Model\CashOutWaveRequest**](../Model/CashOutWaveRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CashOutResponse**](../Model/CashOutResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
