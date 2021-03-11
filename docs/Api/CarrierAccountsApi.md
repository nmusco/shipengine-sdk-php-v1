# Nmusco\ShipEngine\v1\CarrierAccountsApi

All URIs are relative to https://api.shipengine.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectCarrier()**](CarrierAccountsApi.md#connectCarrier) | **POST** /v1/connections/carriers/{carrier_name} | Connect a carrier account
[**disconnectCarrier()**](CarrierAccountsApi.md#disconnectCarrier) | **DELETE** /v1/connections/carriers/{carrier_name}/{carrier_id} | Disconnect a carrier
[**getCarrierSettings()**](CarrierAccountsApi.md#getCarrierSettings) | **GET** /v1/connections/carriers/{carrier_name}/{carrier_id}/settings | Get carrier settings
[**updateCarrierSettings()**](CarrierAccountsApi.md#updateCarrierSettings) | **PUT** /v1/connections/carriers/{carrier_name}/{carrier_id}/settings | Update carrier settings


## `connectCarrier()`

```php
connectCarrier($carrier_name, $connect_carrier_request_body): \Nmusco\ShipEngine\v1\Models\ConnectCarrierResponseBody
```

Connect a carrier account

Connect a carrier account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_name = dhl_express; // \Nmusco\ShipEngine\v1\Models\CarrierName | The carrier name, such as `stamps_com`, `ups`, `fedex`, or `dhl_express`.
$connect_carrier_request_body = new \Nmusco\ShipEngine\v1\Models\ConnectCarrierRequestBody(); // \Nmusco\ShipEngine\v1\Models\ConnectCarrierRequestBody

try {
    $result = $apiInstance->connectCarrier($carrier_name, $connect_carrier_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->connectCarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | [**\Nmusco\ShipEngine\v1\Models\CarrierName**](../Model/.md)| The carrier name, such as &#x60;stamps_com&#x60;, &#x60;ups&#x60;, &#x60;fedex&#x60;, or &#x60;dhl_express&#x60;. |
 **connect_carrier_request_body** | [**\Nmusco\ShipEngine\v1\Models\ConnectCarrierRequestBody**](../Model/ConnectCarrierRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Models\ConnectCarrierResponseBody**](../Model/ConnectCarrierResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectCarrier()`

```php
disconnectCarrier($carrier_name, $carrier_id): string
```

Disconnect a carrier

Disconnect a carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_name = dhl_express; // \Nmusco\ShipEngine\v1\Models\CarrierName | The carrier name, such as `stamps_com`, `ups`, `fedex`, or `dhl_express`.
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->disconnectCarrier($carrier_name, $carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->disconnectCarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | [**\Nmusco\ShipEngine\v1\Models\CarrierName**](../Model/.md)| The carrier name, such as &#x60;stamps_com&#x60;, &#x60;ups&#x60;, &#x60;fedex&#x60;, or &#x60;dhl_express&#x60;. |
 **carrier_id** | **string**| Carrier ID |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCarrierSettings()`

```php
getCarrierSettings($carrier_name, $carrier_id): \Nmusco\ShipEngine\v1\Models\GetCarrierSettingsResponseBody
```

Get carrier settings

Get carrier settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_name = dhl_express; // \Nmusco\ShipEngine\v1\Models\CarrierNameWithSettings | The carrier name, such as `stamps_com`, `ups`, `fedex`, or `dhl_express`.
$carrier_id = se-28529731; // string | Carrier ID

try {
    $result = $apiInstance->getCarrierSettings($carrier_name, $carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->getCarrierSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | [**\Nmusco\ShipEngine\v1\Models\CarrierNameWithSettings**](../Model/.md)| The carrier name, such as &#x60;stamps_com&#x60;, &#x60;ups&#x60;, &#x60;fedex&#x60;, or &#x60;dhl_express&#x60;. |
 **carrier_id** | **string**| Carrier ID |

### Return type

[**\Nmusco\ShipEngine\v1\Models\GetCarrierSettingsResponseBody**](../Model/GetCarrierSettingsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCarrierSettings()`

```php
updateCarrierSettings($carrier_name, $carrier_id, $update_carrier_settings_request_body): string
```

Update carrier settings

Update carrier settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\CarrierAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_name = dhl_express; // \Nmusco\ShipEngine\v1\Models\CarrierNameWithSettings | The carrier name, such as `stamps_com`, `ups`, `fedex`, or `dhl_express`.
$carrier_id = se-28529731; // string | Carrier ID
$update_carrier_settings_request_body = new \Nmusco\ShipEngine\v1\Models\UpdateCarrierSettingsRequestBody(); // \Nmusco\ShipEngine\v1\Models\UpdateCarrierSettingsRequestBody

try {
    $result = $apiInstance->updateCarrierSettings($carrier_name, $carrier_id, $update_carrier_settings_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierAccountsApi->updateCarrierSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | [**\Nmusco\ShipEngine\v1\Models\CarrierNameWithSettings**](../Model/.md)| The carrier name, such as &#x60;stamps_com&#x60;, &#x60;ups&#x60;, &#x60;fedex&#x60;, or &#x60;dhl_express&#x60;. |
 **carrier_id** | **string**| Carrier ID |
 **update_carrier_settings_request_body** | [**\Nmusco\ShipEngine\v1\Models\UpdateCarrierSettingsRequestBody**](../Model/UpdateCarrierSettingsRequestBody.md)|  |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
