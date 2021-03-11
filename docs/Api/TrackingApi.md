# Nmusco\ShipEngine\v1\TrackingApi

All URIs are relative to https://api.shipengine.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrackingLog()**](TrackingApi.md#getTrackingLog) | **GET** /v1/tracking | Get Tracking Information
[**startTracking()**](TrackingApi.md#startTracking) | **POST** /v1/tracking/start | Start Tracking a Package
[**stopTracking()**](TrackingApi.md#stopTracking) | **POST** /v1/tracking/stop | Stop Tracking a Package


## `getTrackingLog()`

```php
getTrackingLog($carrier_code, $tracking_number): \Nmusco\ShipEngine\v1\Models\GetTrackingLogResponseBody
```

Get Tracking Information

Retrieve package tracking information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = stamps_com; // string | Carrier code used to retrieve tracking information
$tracking_number = 9.405511899223197E+21; // string | The tracking number associated with a shipment

try {
    $result = $apiInstance->getTrackingLog($carrier_code, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getTrackingLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier code used to retrieve tracking information | [optional]
 **tracking_number** | **string**| The tracking number associated with a shipment | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Models\GetTrackingLogResponseBody**](../Model/GetTrackingLogResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startTracking()`

```php
startTracking($carrier_code, $tracking_number): string
```

Start Tracking a Package

Allows you to subscribe to tracking updates for a package. You specify the carrier_code and tracking_number of the package, and receive notifications via webhooks whenever the shipping status changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = stamps_com; // string | Carrier code used to retrieve tracking information
$tracking_number = 9.405511899223197E+21; // string | The tracking number associated with a shipment

try {
    $result = $apiInstance->startTracking($carrier_code, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->startTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier code used to retrieve tracking information | [optional]
 **tracking_number** | **string**| The tracking number associated with a shipment | [optional]

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

## `stopTracking()`

```php
stopTracking($carrier_code, $tracking_number): string
```

Stop Tracking a Package

Unsubscribe from tracking updates for a package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = stamps_com; // string | Carrier code used to retrieve tracking information
$tracking_number = 9.405511899223197E+21; // string | The tracking number associated with a shipment

try {
    $result = $apiInstance->stopTracking($carrier_code, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->stopTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| Carrier code used to retrieve tracking information | [optional]
 **tracking_number** | **string**| The tracking number associated with a shipment | [optional]

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
