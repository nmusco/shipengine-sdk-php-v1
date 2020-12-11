# Nmusco\ShipEngine\v1\ManifestsApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createManifest**](ManifestsApi.md#createManifest) | **POST** /v1/manifests | Create Manifest
[**getManifestById**](ManifestsApi.md#getManifestById) | **GET** /v1/manifests/{manifest_id} | Get Manifest By Id
[**listManifests**](ManifestsApi.md#listManifests) | **GET** /v1/manifests | List Manifests



## createManifest

> \Nmusco\ShipEngine\v1\Model\CreateManifestResponseBody createManifest($create_manifest_request_body)

Create Manifest

Each ShipEngine manifest is created for a specific warehouse, so you'll need to provide the warehouse_id rather than the ship_from address. You can create a warehouse for each location that you want to create manifests for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_manifest_request_body = new \Nmusco\ShipEngine\v1\Model\CreateManifestRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateManifestRequestBody | 

try {
    $result = $apiInstance->createManifest($create_manifest_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->createManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_manifest_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateManifestRequestBody**](../Model/CreateManifestRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateManifestResponseBody**](../Model/CreateManifestResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManifestById

> \Nmusco\ShipEngine\v1\Model\GetManifestByIdResponseBody getManifestById($manifest_id)

Get Manifest By Id

Get Manifest By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = 'manifest_id_example'; // string | The Manifest Id

try {
    $result = $apiInstance->getManifestById($manifest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->getManifestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| The Manifest Id |

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetManifestByIdResponseBody**](../Model/GetManifestByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listManifests

> \Nmusco\ShipEngine\v1\Model\ListManifestsResponseBody listManifests($warehouse_id, $ship_date_start, $ship_date_end, $created_at_start, $created_at_end, $carrier_id, $page, $page_size, $label_ids)

List Manifests

Similar to querying shipments, we allow you to query manifests since there will likely be a large number over a long period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 'warehouse_id_example'; // string | Warehouse ID
$ship_date_start = 2018-09-23T15:00:00.000Z; // \DateTime | ship date start range
$ship_date_end = 2018-09-23T15:00:00.000Z; // \DateTime | ship date end range
$created_at_start = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time)
$created_at_end = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was created, (ex. A shipment that was created before a certain time)
$carrier_id = 'carrier_id_example'; // string | Carrier ID
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$page_size = 50; // int | The number of results to return per response.
$label_ids = array('label_ids_example'); // string[] | 

try {
    $result = $apiInstance->listManifests($warehouse_id, $ship_date_start, $ship_date_end, $created_at_start, $created_at_end, $carrier_id, $page, $page_size, $label_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->listManifests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **string**| Warehouse ID | [optional]
 **ship_date_start** | **\DateTime**| ship date start range | [optional]
 **ship_date_end** | **\DateTime**| ship date end range | [optional]
 **created_at_start** | **\DateTime**| Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time) | [optional]
 **created_at_end** | **\DateTime**| Used to create a filter for when a resource was created, (ex. A shipment that was created before a certain time) | [optional]
 **carrier_id** | **string**| Carrier ID | [optional]
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **page_size** | **int**| The number of results to return per response. | [optional] [default to 25]
 **label_ids** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Model\ListManifestsResponseBody**](../Model/ListManifestsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

