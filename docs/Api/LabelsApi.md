# Nmusco\ShipEngine\v1\LabelsApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLabel**](LabelsApi.md#createLabel) | **POST** /v1/labels | Purchase Label
[**createLabelFromRate**](LabelsApi.md#createLabelFromRate) | **POST** /v1/labels/rates/{rate_id} | Purchase Label with Rate ID
[**createLabelFromShipment**](LabelsApi.md#createLabelFromShipment) | **POST** /v1/labels/shipment/{shipment_id} | Purchase Label with Shipment ID
[**createReturnLabel**](LabelsApi.md#createReturnLabel) | **POST** /v1/labels/{label_id}/return | Create a return label
[**getLabelByExternalShipmentId**](LabelsApi.md#getLabelByExternalShipmentId) | **GET** /v1/labels/external_shipment_id/{external_shipment_id} | Get Label By External Shipment ID
[**getLabelById**](LabelsApi.md#getLabelById) | **GET** /v1/labels/{label_id} | Get Label By ID
[**getTrackingLogFromLabel**](LabelsApi.md#getTrackingLogFromLabel) | **GET** /v1/labels/{label_id}/track | Get Label Tracking Information
[**listLabels**](LabelsApi.md#listLabels) | **GET** /v1/labels | List labels
[**voidLabel**](LabelsApi.md#voidLabel) | **PUT** /v1/labels/{label_id}/void | Void a Label By ID



## createLabel

> \Nmusco\ShipEngine\v1\Model\CreateLabelResponseBody createLabel($create_label_request_body)

Purchase Label

Purchase and print a label for shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_label_request_body = new \Nmusco\ShipEngine\v1\Model\CreateLabelRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateLabelRequestBody | 

try {
    $result = $apiInstance->createLabel($create_label_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->createLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_label_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateLabelRequestBody**](../Model/CreateLabelRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateLabelResponseBody**](../Model/CreateLabelResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLabelFromRate

> \Nmusco\ShipEngine\v1\Model\CreateLabelFromRateResponseBody createLabelFromRate($rate_id, $create_label_from_rate_request_body)

Purchase Label with Rate ID

When retrieving rates for shipments using the `/rates` endpoint, the returned information contains a `rate_id` property that can be used to generate a label without having to refill in the shipment information repeatedly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_id = 'rate_id_example'; // string | Rate ID
$create_label_from_rate_request_body = new \Nmusco\ShipEngine\v1\Model\CreateLabelFromRateRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateLabelFromRateRequestBody | 

try {
    $result = $apiInstance->createLabelFromRate($rate_id, $create_label_from_rate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->createLabelFromRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_id** | **string**| Rate ID |
 **create_label_from_rate_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateLabelFromRateRequestBody**](../Model/CreateLabelFromRateRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateLabelFromRateResponseBody**](../Model/CreateLabelFromRateResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLabelFromShipment

> \Nmusco\ShipEngine\v1\Model\CreateLabelFromShipmentResponseBody createLabelFromShipment($shipment_id, $create_label_from_shipment_request_body)

Purchase Label with Shipment ID

Purchase a label using a shipment ID that has already been created with the desired address and package info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$create_label_from_shipment_request_body = new \Nmusco\ShipEngine\v1\Model\CreateLabelFromShipmentRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateLabelFromShipmentRequestBody | 

try {
    $result = $apiInstance->createLabelFromShipment($shipment_id, $create_label_from_shipment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->createLabelFromShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **create_label_from_shipment_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateLabelFromShipmentRequestBody**](../Model/CreateLabelFromShipmentRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateLabelFromShipmentResponseBody**](../Model/CreateLabelFromShipmentResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReturnLabel

> \Nmusco\ShipEngine\v1\Model\CreateReturnLabelResponseBody createReturnLabel($label_id, $create_return_label_request_body)

Create a return label

Create a return label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID
$create_return_label_request_body = new \Nmusco\ShipEngine\v1\Model\CreateReturnLabelRequestBody(); // \Nmusco\ShipEngine\v1\Model\CreateReturnLabelRequestBody | 

try {
    $result = $apiInstance->createReturnLabel($label_id, $create_return_label_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->createReturnLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_id** | **string**| Label ID |
 **create_return_label_request_body** | [**\Nmusco\ShipEngine\v1\Model\CreateReturnLabelRequestBody**](../Model/CreateReturnLabelRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateReturnLabelResponseBody**](../Model/CreateReturnLabelResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLabelByExternalShipmentId

> \Nmusco\ShipEngine\v1\Model\GetLabelByExternalShipmentIdResponseBody getLabelByExternalShipmentId($external_shipment_id, $label_download_type)

Get Label By External Shipment ID

Find a label by using the external shipment id that was used during label creation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipment_id = 0bcb569d-1727-4ff9-ab49-b2fec0cee5ae; // string | 
$label_download_type = url; // \Nmusco\ShipEngine\v1\Model\LabelDownloadType | 

try {
    $result = $apiInstance->getLabelByExternalShipmentId($external_shipment_id, $label_download_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getLabelByExternalShipmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipment_id** | **string**|  |
 **label_download_type** | [**\Nmusco\ShipEngine\v1\Model\LabelDownloadType**](../Model/.md)|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetLabelByExternalShipmentIdResponseBody**](../Model/GetLabelByExternalShipmentIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLabelById

> \Nmusco\ShipEngine\v1\Model\GetLabelByIdResponseBody getLabelById($label_id, $label_download_type)

Get Label By ID

Retrieve information for individual labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID
$label_download_type = url; // \Nmusco\ShipEngine\v1\Model\LabelDownloadType | 

try {
    $result = $apiInstance->getLabelById($label_id, $label_download_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getLabelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_id** | **string**| Label ID |
 **label_download_type** | [**\Nmusco\ShipEngine\v1\Model\LabelDownloadType**](../Model/.md)|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetLabelByIdResponseBody**](../Model/GetLabelByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingLogFromLabel

> \Nmusco\ShipEngine\v1\Model\GetTrackingLogFromLabelResponseBody getTrackingLogFromLabel($label_id)

Get Label Tracking Information

Retrieve the label's tracking information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID

try {
    $result = $apiInstance->getTrackingLogFromLabel($label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getTrackingLogFromLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_id** | **string**| Label ID |

### Return type

[**\Nmusco\ShipEngine\v1\Model\GetTrackingLogFromLabelResponseBody**](../Model/GetTrackingLogFromLabelResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLabels

> \Nmusco\ShipEngine\v1\Model\ListLabelsResponseBody listLabels($label_status, $service_code, $carrier_id, $tracking_number, $batch_id, $rate_id, $shipment_id, $warehouse_id, $created_at_start, $created_at_end, $page, $page_size, $sort_dir, $sort_by)

List labels

This endpoint returns a list of labels that you've [created](https://www.shipengine.com/docs/labels/create-a-label/). You can optionally filter the results as well as control their sort order and the number of results returned at a time.  By default, all labels are returned, 25 at a time, starting with the most recently created ones.  You can combine multiple filter options to narrow-down the results.  For example, if you only want to get your UPS labels for your east coast warehouse you could query by both `warehouse_id` and `carrier_id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_status = new \Nmusco\ShipEngine\v1\Model\\Nmusco\ShipEngine\v1\Model\LabelStatus(); // \Nmusco\ShipEngine\v1\Model\LabelStatus | Only return labels that are currently in the specified status
$service_code = usps_first_class_mail; // string | Only return labels for a specific [carrier service](https://www.shipengine.com/docs/shipping/use-a-carrier-service/)
$carrier_id = 'carrier_id_example'; // string | Only return labels for a specific [carrier account](https://www.shipengine.com/docs/carriers/setup/)
$tracking_number = 9.405511899223197E+21; // string | Only return labels with a specific tracking number
$batch_id = 'batch_id_example'; // string | Only return labels that were created in a specific [batch](https://www.shipengine.com/docs/labels/bulk/)
$rate_id = 'rate_id_example'; // string | Rate ID
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$warehouse_id = 'warehouse_id_example'; // string | Only return labels that originate from a specific [warehouse](https://www.shipengine.com/docs/shipping/ship-from-a-warehouse/)
$created_at_start = 2019-03-12T19:24:13.657Z; // \DateTime | Only return labels that were created on or after a specific date/time
$created_at_end = 2019-03-12T19:24:13.657Z; // \DateTime | Only return labels that were created on or before a specific date/time
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$page_size = 50; // int | The number of results to return per response.
$sort_dir = new \Nmusco\ShipEngine\v1\Model\SortDir(); // SortDir | Controls the sort order of the query.
$sort_by = 'created_at'; // string | Controls which field the query is sorted by.

try {
    $result = $apiInstance->listLabels($label_status, $service_code, $carrier_id, $tracking_number, $batch_id, $rate_id, $shipment_id, $warehouse_id, $created_at_start, $created_at_end, $page, $page_size, $sort_dir, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->listLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_status** | [**\Nmusco\ShipEngine\v1\Model\LabelStatus**](../Model/.md)| Only return labels that are currently in the specified status | [optional]
 **service_code** | **string**| Only return labels for a specific [carrier service](https://www.shipengine.com/docs/shipping/use-a-carrier-service/) | [optional]
 **carrier_id** | **string**| Only return labels for a specific [carrier account](https://www.shipengine.com/docs/carriers/setup/) | [optional]
 **tracking_number** | **string**| Only return labels with a specific tracking number | [optional]
 **batch_id** | **string**| Only return labels that were created in a specific [batch](https://www.shipengine.com/docs/labels/bulk/) | [optional]
 **rate_id** | **string**| Rate ID | [optional]
 **shipment_id** | **string**| Shipment ID | [optional]
 **warehouse_id** | **string**| Only return labels that originate from a specific [warehouse](https://www.shipengine.com/docs/shipping/ship-from-a-warehouse/) | [optional]
 **created_at_start** | **\DateTime**| Only return labels that were created on or after a specific date/time | [optional]
 **created_at_end** | **\DateTime**| Only return labels that were created on or before a specific date/time | [optional]
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **page_size** | **int**| The number of results to return per response. | [optional] [default to 25]
 **sort_dir** | [**SortDir**](../Model/.md)| Controls the sort order of the query. | [optional]
 **sort_by** | **string**| Controls which field the query is sorted by. | [optional] [default to &#39;created_at&#39;]

### Return type

[**\Nmusco\ShipEngine\v1\Model\ListLabelsResponseBody**](../Model/ListLabelsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## voidLabel

> \Nmusco\ShipEngine\v1\Model\VoidLabelResponseBody voidLabel($label_id)

Void a Label By ID

Void a label by ID to get a refund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID

try {
    $result = $apiInstance->voidLabel($label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->voidLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_id** | **string**| Label ID |

### Return type

[**\Nmusco\ShipEngine\v1\Model\VoidLabelResponseBody**](../Model/VoidLabelResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

