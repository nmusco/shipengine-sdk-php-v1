# Nmusco\ShipEngine\v1\CarriersApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFundsToCarrier**](CarriersApi.md#addFundsToCarrier) | **PUT** /v1/carriers/{carrier_id}/add_funds | Add Funds To Carrier
[**getCarrierById**](CarriersApi.md#getCarrierById) | **GET** /v1/carriers/{carrier_id} | Get Carrier By ID
[**getCarrierOptions**](CarriersApi.md#getCarrierOptions) | **GET** /v1/carriers/{carrier_id}/options | Get Carrier Options
[**listCarrierPackageTypes**](CarriersApi.md#listCarrierPackageTypes) | **GET** /v1/carriers/{carrier_id}/packages | List Carrier Package Types
[**listCarrierServices**](CarriersApi.md#listCarrierServices) | **GET** /v1/carriers/{carrier_id}/services | List Carrier Services
[**listCarriers**](CarriersApi.md#listCarriers) | **GET** /v1/carriers | List Carriers



## addFundsToCarrier

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddFundsToCarrierResponseBody addFundsToCarrier($carrier_id, $add_funds_to_carrier_request_body)

Add Funds To Carrier

Add Funds To A Carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = se-28529731; // string | Carrier ID
$add_funds_to_carrier_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddFundsToCarrierRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddFundsToCarrierRequestBody | 

try {
    $result = $apiInstance->addFundsToCarrier($carrier_id, $add_funds_to_carrier_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->addFundsToCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier ID |
 **add_funds_to_carrier_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddFundsToCarrierRequestBody**](../Model/AddFundsToCarrierRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddFundsToCarrierResponseBody**](../Model/AddFundsToCarrierResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCarrierById

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarrierByIdResponseBody getCarrierById($carrier_id)

Get Carrier By ID

Retrive carrier info by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->getCarrierById($carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarrierById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarrierByIdResponseBody**](../Model/GetCarrierByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCarrierOptions

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarrierOptionsResponseBody getCarrierOptions($carrier_id)

Get Carrier Options

Get a list of the options available for the carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->getCarrierOptions($carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarrierOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarrierOptionsResponseBody**](../Model/GetCarrierOptionsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCarrierPackageTypes

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListCarrierPackageTypesResponseBody listCarrierPackageTypes($carrier_id)

List Carrier Package Types

List the package types associated with the carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->listCarrierPackageTypes($carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->listCarrierPackageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListCarrierPackageTypesResponseBody**](../Model/ListCarrierPackageTypesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCarrierServices

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListCarrierServicesResponseBody listCarrierServices($carrier_id)

List Carrier Services

List the services associated with the carrier ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->listCarrierServices($carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->listCarrierServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**| Carrier ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListCarrierServicesResponseBody**](../Model/ListCarrierServicesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCarriers

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarriersResponseBody listCarriers()

List Carriers

List all carriers that have been added to this account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCarriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->listCarriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetCarriersResponseBody**](../Model/GetCarriersResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

