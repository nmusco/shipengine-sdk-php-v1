# Nmusco\ShipEngine\v1\WarehousesApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWarehouse**](WarehousesApi.md#createWarehouse) | **POST** /v1/warehouses | Create Warehouse
[**deleteWarehouse**](WarehousesApi.md#deleteWarehouse) | **DELETE** /v1/warehouses/{warehouse_id} | Delete Warehouse By ID
[**getWarehouseById**](WarehousesApi.md#getWarehouseById) | **GET** /v1/warehouses/{warehouse_id} | Get Warehouse By Id
[**listWarehouses**](WarehousesApi.md#listWarehouses) | **GET** /v1/warehouses | List Warehouses
[**updateWarehouse**](WarehousesApi.md#updateWarehouse) | **PUT** /v1/warehouses/{warehouse_id} | Update WareHouse By Id



## createWarehouse

> \Nmusco\ShipEngine\v1\Model\CreateWarehouseResponseBody createWarehouse($create_warehouse_request_body)

Create Warehouse

Create a warehouse location that you can use to create shipping items by simply passing in the generated warehouse id. If the return address is not supplied in the request body then it is assumed that the origin address is the return address as well

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_warehouse_request_body = new \Nmusco\ShipEngine\v1\Model\CreateWarehouseRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateWarehouseRequestBody | 

try {
    $result = $apiInstance->createWarehouse($create_warehouse_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->createWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_warehouse_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateWarehouseRequestBody**](../Model/CreateWarehouseRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateWarehouseResponseBody**](../Model/CreateWarehouseResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWarehouse

> string deleteWarehouse($warehouse_id)

Delete Warehouse By ID

Delete a warehouse by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 'warehouse_id_example'; // string | Warehouse ID

try {
    $result = $apiInstance->deleteWarehouse($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->deleteWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID |

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


## getWarehouseById

> \Nmusco\ShipEngine\v1\Model\GetWarehouseByIdResponseBody getWarehouseById($warehouse_id)

Get Warehouse By Id

Retrieve warehouse data based on the warehouse ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 'warehouse_id_example'; // string | Warehouse ID

try {
    $result = $apiInstance->getWarehouseById($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouseById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID |

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetWarehouseByIdResponseBody**](../Model/GetWarehouseByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWarehouses

> \Nmusco\ShipEngine\v1\Model\ListWarehousesResponseBody listWarehouses()

List Warehouses

Retrieve a list of warehouses associated with this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWarehouses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->listWarehouses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Model\ListWarehousesResponseBody**](../Model/ListWarehousesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWarehouse

> string updateWarehouse($warehouse_id, $update_warehouse_request_body)

Update WareHouse By Id

Update Warehouse object information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 'warehouse_id_example'; // string | Warehouse ID
$update_warehouse_request_body = new \Nmusco\ShipEngine\v1\Model\UpdateWarehouseRequestBody(); // \Nmusco\ShipEngine\v1\Model\UpdateWarehouseRequestBody | 

try {
    $result = $apiInstance->updateWarehouse($warehouse_id, $update_warehouse_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID |
 **update_warehouse_request_body** | [**\Nmusco\ShipEngine\v1\Model\UpdateWarehouseRequestBody**](../Model/UpdateWarehouseRequestBody.md)|  |

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

