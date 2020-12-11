# Nmusco\ShipEngine\v1\PackageTypesApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPackageType**](PackageTypesApi.md#createPackageType) | **POST** /v1/packages | Create Custom Package Type
[**deletePackageType**](PackageTypesApi.md#deletePackageType) | **DELETE** /v1/packages/{package_id} | Delete A Custom Package By ID
[**getPackageTypeById**](PackageTypesApi.md#getPackageTypeById) | **GET** /v1/packages/{package_id} | Get Custom Package Type By ID
[**listPackageTypes**](PackageTypesApi.md#listPackageTypes) | **GET** /v1/packages | List Custom Package Types
[**updatePackageType**](PackageTypesApi.md#updatePackageType) | **PUT** /v1/packages/{package_id} | Update Custom Package Type By ID



## createPackageType

> \Nmusco\ShipEngine\v1\Model\CreatePackageTypeResponseBody createPackageType($create_package_type_request_body)

Create Custom Package Type

Create a custom package type to better assist in getting accurate rate estimates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\PackageTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_package_type_request_body = new \Nmusco\ShipEngine\v1\Model\CreatePackageTypeRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreatePackageTypeRequestBody | 

try {
    $result = $apiInstance->createPackageType($create_package_type_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypesApi->createPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_package_type_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreatePackageTypeRequestBody**](../Model/CreatePackageTypeRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreatePackageTypeResponseBody**](../Model/CreatePackageTypeResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePackageType

> string deletePackageType($package_id)

Delete A Custom Package By ID

Delete a custom package using the ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\PackageTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Package ID

try {
    $result = $apiInstance->deletePackageType($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypesApi->deletePackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Package ID |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPackageTypeById

> \Nmusco\ShipEngine\v1\Model\GetPackageTypeByIdResponseBody getPackageTypeById($package_id)

Get Custom Package Type By ID

Get Custom Package Type by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\PackageTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Package ID

try {
    $result = $apiInstance->getPackageTypeById($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypesApi->getPackageTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Package ID |

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetPackageTypeByIdResponseBody**](../Model/GetPackageTypeByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPackageTypes

> \Nmusco\ShipEngine\v1\Model\ListPackageTypesResponseBody listPackageTypes()

List Custom Package Types

List the custom package types associated with the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\PackageTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPackageTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypesApi->listPackageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Model\ListPackageTypesResponseBody**](../Model/ListPackageTypesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePackageType

> string updatePackageType($package_id, $update_package_type_request_body)

Update Custom Package Type By ID

Update the custom package type object by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\PackageTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Package ID
$update_package_type_request_body = new \Nmusco\ShipEngine\v1\Model\UpdatePackageTypeRequestBody(); // \Nmusco\ShipEngine\v1\Model\UpdatePackageTypeRequestBody | 

try {
    $result = $apiInstance->updatePackageType($package_id, $update_package_type_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageTypesApi->updatePackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| Package ID |
 **update_package_type_request_body** | [**\Nmusco\ShipEngine\v1\Model\UpdatePackageTypeRequestBody**](../Model/UpdatePackageTypeRequestBody.md)|  |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

