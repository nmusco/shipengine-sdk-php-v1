# Nmusco\ShipEngine\v1\BatchesApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addToBatch**](BatchesApi.md#addToBatch) | **POST** /v1/batches/{batch_id}/add | Add to a Batch
[**createBatch**](BatchesApi.md#createBatch) | **POST** /v1/batches | Create A Batch
[**deleteBatch**](BatchesApi.md#deleteBatch) | **DELETE** /v1/batches/{batch_id} | Delete Batch By Id
[**getBatchByExternalId**](BatchesApi.md#getBatchByExternalId) | **GET** /v1/batches/external_batch_id/{external_batch_id} | Get Batch By External ID
[**getBatchById**](BatchesApi.md#getBatchById) | **GET** /v1/batches/{batch_id} | Get Batch By ID
[**listBatchErrors**](BatchesApi.md#listBatchErrors) | **GET** /v1/batches/{batch_id}/errors | Get Batch Errors
[**listBatches**](BatchesApi.md#listBatches) | **GET** /v1/batches | List Batches
[**processBatch**](BatchesApi.md#processBatch) | **POST** /v1/batches/{batch_id}/process/labels | Process Batch ID Labels
[**removeFromBatch**](BatchesApi.md#removeFromBatch) | **POST** /v1/batches/{batch_id}/remove | Remove From Batch
[**updateBatch**](BatchesApi.md#updateBatch) | **PUT** /v1/batches/{batch_id} | Update Batch By Id



## addToBatch

> string addToBatch($batch_id, $add_to_batch_request_body)

Add to a Batch

Add a Shipment or Rate to a Batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID
$add_to_batch_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddToBatchRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddToBatchRequestBody | 

try {
    $result = $apiInstance->addToBatch($batch_id, $add_to_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->addToBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |
 **add_to_batch_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\AddToBatchRequestBody**](../Model/AddToBatchRequestBody.md)|  |

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


## createBatch

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateBatchResponseBody createBatch($create_batch_request_body)

Create A Batch

Create a Batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_batch_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateBatchRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateBatchRequestBody | 

try {
    $result = $apiInstance->createBatch($create_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->createBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_batch_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateBatchRequestBody**](../Model/CreateBatchRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateBatchResponseBody**](../Model/CreateBatchResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteBatch

> string deleteBatch($batch_id)

Delete Batch By Id

Delete Batch By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID

try {
    $result = $apiInstance->deleteBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->deleteBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |

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


## getBatchByExternalId

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetBatchByExternalIdResponseBody getBatchByExternalId($external_batch_id)

Get Batch By External ID

Get Batch By External ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_batch_id = 13553d7f-3c87-4771-bae1-c49bacef11cb; // string | 

try {
    $result = $apiInstance->getBatchByExternalId($external_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatchByExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_batch_id** | **string**|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetBatchByExternalIdResponseBody**](../Model/GetBatchByExternalIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBatchById

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetBatchByIdResponseBody getBatchById($batch_id)

Get Batch By ID

Get Batch By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID

try {
    $result = $apiInstance->getBatchById($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetBatchByIdResponseBody**](../Model/GetBatchByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listBatchErrors

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListBatchErrorsResponseBody listBatchErrors($batch_id, $page, $pagesize)

Get Batch Errors

Error handling in batches are handled differently than in a single synchronous request. You must retrieve the status of your batch by [getting a batch](https://www.shipengine.com/docs/reference/get-batch-by-id/) and getting an overview of the statuses or you can list errors directly here below to get detailed information about the errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$pagesize = 56; // int | 

try {
    $result = $apiInstance->listBatchErrors($batch_id, $page, $pagesize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->listBatchErrors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **pagesize** | **int**|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListBatchErrorsResponseBody**](../Model/ListBatchErrorsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listBatches

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListBatchesResponseBody listBatches($status, $page, $page_size, $sort_dir, $batch_number, $sort_by)

List Batches

List Batches associated with your Shipengine account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchStatus(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchStatus | 
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$page_size = 50; // int | The number of results to return per response.
$sort_dir = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\SortDir(); // SortDir | Controls the sort order of the query.
$batch_number = 'batch_number_example'; // string | Batch Number
$sort_by = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchesSortBy(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchesSortBy | 

try {
    $result = $apiInstance->listBatches($status, $page, $page_size, $sort_dir, $batch_number, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->listBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchStatus**](../Model/.md)|  | [optional]
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **page_size** | **int**| The number of results to return per response. | [optional] [default to 25]
 **sort_dir** | [**SortDir**](../Model/.md)| Controls the sort order of the query. | [optional]
 **batch_number** | **string**| Batch Number | [optional]
 **sort_by** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\BatchesSortBy**](../Model/.md)|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListBatchesResponseBody**](../Model/ListBatchesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## processBatch

> string processBatch($batch_id, $process_batch_request_body)

Process Batch ID Labels

Process Batch ID Labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID
$process_batch_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ProcessBatchRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ProcessBatchRequestBody | 

try {
    $result = $apiInstance->processBatch($batch_id, $process_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->processBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |
 **process_batch_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ProcessBatchRequestBody**](../Model/ProcessBatchRequestBody.md)|  |

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


## removeFromBatch

> string removeFromBatch($batch_id, $remove_from_batch_request_body)

Remove From Batch

Remove a shipment or rate from a batch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID
$remove_from_batch_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\RemoveFromBatchRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\RemoveFromBatchRequestBody | 

try {
    $result = $apiInstance->removeFromBatch($batch_id, $remove_from_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->removeFromBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |
 **remove_from_batch_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\RemoveFromBatchRequestBody**](../Model/RemoveFromBatchRequestBody.md)|  |

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


## updateBatch

> string updateBatch($batch_id)

Update Batch By Id

Update Batch By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Batch ID

try {
    $result = $apiInstance->updateBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->updateBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Batch ID |

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

