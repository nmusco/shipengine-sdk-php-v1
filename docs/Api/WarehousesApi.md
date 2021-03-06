# Nmusco\ShipEngine\v1\WarehousesApi

All URIs are relative to https://api.shipengine.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWarehouse()**](WarehousesApi.md#createWarehouse) | **POST** /v1/warehouses | Create Warehouse
[**deleteWarehouse()**](WarehousesApi.md#deleteWarehouse) | **DELETE** /v1/warehouses/{warehouse_id} | Delete Warehouse By ID
[**getWarehouseById()**](WarehousesApi.md#getWarehouseById) | **GET** /v1/warehouses/{warehouse_id} | Get Warehouse By Id
[**listWarehouses()**](WarehousesApi.md#listWarehouses) | **GET** /v1/warehouses | List Warehouses
[**updateWarehouse()**](WarehousesApi.md#updateWarehouse) | **PUT** /v1/warehouses/{warehouse_id} | Update WareHouse By Id


## `createWarehouse()`

```php
createWarehouse($create_warehouse_request_body): \Nmusco\ShipEngine\v1\Models\CreateWarehouseResponseBody
```

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
$create_warehouse_request_body = new \Nmusco\ShipEngine\v1\Models\CreateWarehouseRequestBody(); // \Nmusco\ShipEngine\v1\Models\CreateWarehouseRequestBody

try {
    $result = $apiInstance->createWarehouse($create_warehouse_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->createWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_warehouse_request_body** | [**\Nmusco\ShipEngine\v1\Models\CreateWarehouseRequestBody**](../Model/CreateWarehouseRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Models\CreateWarehouseResponseBody**](../Model/CreateWarehouseResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWarehouse()`

```php
deleteWarehouse($warehouse_id): string
```

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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseById()`

```php
getWarehouseById($warehouse_id): \Nmusco\ShipEngine\v1\Models\GetWarehouseByIdResponseBody
```

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
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID |

### Return type

[**\Nmusco\ShipEngine\v1\Models\GetWarehouseByIdResponseBody**](../Model/GetWarehouseByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWarehouses()`

```php
listWarehouses(): \Nmusco\ShipEngine\v1\Models\ListWarehousesResponseBody
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Models\ListWarehousesResponseBody**](../Model/ListWarehousesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarehouse()`

```php
updateWarehouse($warehouse_id, $update_warehouse_request_body): string
```

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
$update_warehouse_request_body = new \Nmusco\ShipEngine\v1\Models\UpdateWarehouseRequestBody(); // \Nmusco\ShipEngine\v1\Models\UpdateWarehouseRequestBody

try {
    $result = $apiInstance->updateWarehouse($warehouse_id, $update_warehouse_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID |
 **update_warehouse_request_body** | [**\Nmusco\ShipEngine\v1\Models\UpdateWarehouseRequestBody**](../Model/UpdateWarehouseRequestBody.md)|  |

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
