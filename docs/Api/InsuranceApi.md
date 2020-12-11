# Nmusco\ShipEngine\v1\InsuranceApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFundsToInsurance**](InsuranceApi.md#addFundsToInsurance) | **PATCH** /v1/insurance/shipsurance/add_funds | Add Funds To Insurance
[**connectInsurer**](InsuranceApi.md#connectInsurer) | **POST** /v1/connections/insurance/shipsurance | Connect a Shipsurance Account
[**disconnectInsurer**](InsuranceApi.md#disconnectInsurer) | **DELETE** /v1/connections/insurance/shipsurance | Disconnect a Shipsurance Account
[**getInsuranceBalance**](InsuranceApi.md#getInsuranceBalance) | **GET** /v1/insurance/shipsurance/balance | Get Insurance Funds Balance



## addFundsToInsurance

> \Nmusco\ShipEngine\v1\Model\AddFundsToInsuranceResponseBody addFundsToInsurance($add_funds_to_insurance_request_body)

Add Funds To Insurance

You may need to auto fund your account from time to time. For example, if you don't normally ship items over $100, and may want to add funds to insurance rather than keeping the account funded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\InsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_funds_to_insurance_request_body = new \Nmusco\ShipEngine\v1\Model\AddFundsToInsuranceRequestBody(); // \Nmusco\ShipEngine\v1\Model\AddFundsToInsuranceRequestBody | 

try {
    $result = $apiInstance->addFundsToInsurance($add_funds_to_insurance_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->addFundsToInsurance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_funds_to_insurance_request_body** | [**\Nmusco\ShipEngine\v1\Model\AddFundsToInsuranceRequestBody**](../Model/AddFundsToInsuranceRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\AddFundsToInsuranceResponseBody**](../Model/AddFundsToInsuranceResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## connectInsurer

> object connectInsurer($connect_insurer_request_body)

Connect a Shipsurance Account

Connect a Shipsurance Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\InsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_insurer_request_body = new \Nmusco\ShipEngine\v1\Model\ConnectInsurerRequestBody(); // \Nmusco\ShipEngine\v1\Model\ConnectInsurerRequestBody | 

try {
    $result = $apiInstance->connectInsurer($connect_insurer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->connectInsurer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connect_insurer_request_body** | [**\Nmusco\ShipEngine\v1\Model\ConnectInsurerRequestBody**](../Model/ConnectInsurerRequestBody.md)|  |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## disconnectInsurer

> object disconnectInsurer()

Disconnect a Shipsurance Account

Disconnect a Shipsurance Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\InsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->disconnectInsurer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->disconnectInsurer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInsuranceBalance

> \Nmusco\ShipEngine\v1\Model\GetInsuranceBalanceResponseBody getInsuranceBalance()

Get Insurance Funds Balance

Retrieve the balance of your Shipsurance account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\InsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInsuranceBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsuranceApi->getInsuranceBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetInsuranceBalanceResponseBody**](../Model/GetInsuranceBalanceResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

