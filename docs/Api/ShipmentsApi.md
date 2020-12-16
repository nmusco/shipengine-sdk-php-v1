# Nmusco\ShipEngine\v1\ShipmentsApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipments**](ShipmentsApi.md#cancelShipments) | **PUT** /v1/shipments/{shipment_id}/cancel | Cancel a Shipment
[**createShipments**](ShipmentsApi.md#createShipments) | **POST** /v1/shipments | Create Shipments
[**getShipmentByExternalId**](ShipmentsApi.md#getShipmentByExternalId) | **GET** /v1/shipments/external_shipment_id/{external_shipment_id} | Get Shipment By External ID
[**getShipmentById**](ShipmentsApi.md#getShipmentById) | **GET** /v1/shipments/{shipment_id} | Get Shipment By ID
[**listShipmentErrors**](ShipmentsApi.md#listShipmentErrors) | **GET** /v1/shipments/{shipment_id}/errors | Get Shipment Errors
[**listShipmentRates**](ShipmentsApi.md#listShipmentRates) | **GET** /v1/shipments/{shipment_id}/rates | Get Shipment Rates
[**listShipments**](ShipmentsApi.md#listShipments) | **GET** /v1/shipments | List Shipments
[**parseShipment**](ShipmentsApi.md#parseShipment) | **PUT** /v1/shipments/recognize | Parse shipping info
[**tagShipment**](ShipmentsApi.md#tagShipment) | **POST** /v1/shipments/{shipment_id}/tags/{tag_name} | Add Tag to Shipment
[**untagShipment**](ShipmentsApi.md#untagShipment) | **DELETE** /v1/shipments/{shipment_id}/tags/{tag_name} | Remove Tag from Shipment
[**updateShipment**](ShipmentsApi.md#updateShipment) | **PUT** /v1/shipments/{shipment_id} | Update Shipment By ID



## cancelShipments

> string cancelShipments($shipment_id)

Cancel a Shipment

Mark a shipment cancelled, if it is no longer needed or being used by your organized. Any label associated with the shipment needs to be voided first An example use case would be if a batch label creation job is going to run at a set time and only queries `pending` shipments. Marking a shipment as cancelled would remove it from this process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID

try {
    $result = $apiInstance->cancelShipments($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->cancelShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |

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


## createShipments

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateShipmentsResponseBody createShipments($create_shipments_request_body)

Create Shipments

Create one or multiple shipments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_shipments_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateShipmentsRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateShipmentsRequestBody | 

try {
    $result = $apiInstance->createShipments($create_shipments_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_shipments_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateShipmentsRequestBody**](../Model/CreateShipmentsRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\CreateShipmentsResponseBody**](../Model/CreateShipmentsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentByExternalId

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetShipmentByExternalIdResponseBody getShipmentByExternalId($external_shipment_id)

Get Shipment By External ID

Query Shipments created using your own custom ID convention using this endpint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipment_id = 0bcb569d-1727-4ff9-ab49-b2fec0cee5ae; // string | 

try {
    $result = $apiInstance->getShipmentByExternalId($external_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipmentByExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipment_id** | **string**|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetShipmentByExternalIdResponseBody**](../Model/GetShipmentByExternalIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentById

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetShipmentByIdResponseBody getShipmentById($shipment_id)

Get Shipment By ID

Get an individual shipment based on its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID

try {
    $result = $apiInstance->getShipmentById($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\GetShipmentByIdResponseBody**](../Model/GetShipmentByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listShipmentErrors

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentErrorsResponseBody listShipmentErrors($shipment_id, $page, $pagesize)

Get Shipment Errors

If there are no errors associated with this shipment then the API will return a 404 Not Found response to indicate that no errors are associated with the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$pagesize = 56; // int | 

try {
    $result = $apiInstance->listShipmentErrors($shipment_id, $page, $pagesize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipmentErrors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **pagesize** | **int**|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentErrorsResponseBody**](../Model/ListShipmentErrorsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listShipmentRates

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentRatesResponseBody listShipmentRates($shipment_id, $created_at_start)

Get Shipment Rates

Get Rates for the shipment information associated with the shipment ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$created_at_start = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time)

try {
    $result = $apiInstance->listShipmentRates($shipment_id, $created_at_start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipmentRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **created_at_start** | **\DateTime**| Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time) | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentRatesResponseBody**](../Model/ListShipmentRatesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listShipments

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentsResponseBody listShipments($shipment_status, $batch_id, $tag, $created_at_start, $created_at_end, $modified_at_start, $modified_at_end, $page, $page_size, $sales_order_id, $sort_dir, $sort_by)

List Shipments

Get list of Shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_status = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ShipmentStatus(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ShipmentStatus | 
$batch_id = 'batch_id_example'; // string | Batch ID
$tag = Letters_to_santa; // string | Search for shipments based on the custom tag added to the shipment object
$created_at_start = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time)
$created_at_end = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was created, (ex. A shipment that was created before a certain time)
$modified_at_start = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was modified (ex. A shipment that was modified after a certain time)
$modified_at_end = 2019-03-12T19:24:13.657Z; // \DateTime | Used to create a filter for when a resource was modified (ex. A shipment that was modified before a certain time)
$page = 2; // int | Return a specific page of results. Defaults to the first page. If set to a number that's greater than the number of pages of results, an empty page is returned.
$page_size = 50; // int | The number of results to return per response.
$sales_order_id = 'sales_order_id_example'; // string | Sales Order ID
$sort_dir = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\SortDir(); // SortDir | Controls the sort order of the query.
$sort_by = modified_at; // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ShipmentsSortBy | 

try {
    $result = $apiInstance->listShipments($shipment_status, $batch_id, $tag, $created_at_start, $created_at_end, $modified_at_start, $modified_at_end, $page, $page_size, $sales_order_id, $sort_dir, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_status** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ShipmentStatus**](../Model/.md)|  | [optional]
 **batch_id** | **string**| Batch ID | [optional]
 **tag** | **string**| Search for shipments based on the custom tag added to the shipment object | [optional]
 **created_at_start** | **\DateTime**| Used to create a filter for when a resource was created (ex. A shipment that was created after a certain time) | [optional]
 **created_at_end** | **\DateTime**| Used to create a filter for when a resource was created, (ex. A shipment that was created before a certain time) | [optional]
 **modified_at_start** | **\DateTime**| Used to create a filter for when a resource was modified (ex. A shipment that was modified after a certain time) | [optional]
 **modified_at_end** | **\DateTime**| Used to create a filter for when a resource was modified (ex. A shipment that was modified before a certain time) | [optional]
 **page** | **int**| Return a specific page of results. Defaults to the first page. If set to a number that&#39;s greater than the number of pages of results, an empty page is returned. | [optional] [default to 1]
 **page_size** | **int**| The number of results to return per response. | [optional] [default to 25]
 **sales_order_id** | **string**| Sales Order ID | [optional]
 **sort_dir** | [**SortDir**](../Model/.md)| Controls the sort order of the query. | [optional]
 **sort_by** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ShipmentsSortBy**](../Model/.md)|  | [optional]

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ListShipmentsResponseBody**](../Model/ListShipmentsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## parseShipment

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ParseShipmentResponseBody parseShipment($parse_shipment_request_body)

Parse shipping info

The shipment-recognition API makes it easy for you to extract shipping data from unstructured text, including people's names, addresses, package weights and dimensions, insurance and delivery requirements, and more.  Data often enters your system as unstructured text (for example: emails, SMS messages, support tickets, or other documents). ShipEngine's shipment-recognition API helps you extract meaningful, structured data from this unstructured text. The parsed shipment data is returned in the same structure that's used for other ShipEngine APIs, so you can easily use the parsed data to create a shipping label.  > **Note:** Shipment recognition is currently supported for the United States, Canada, Australia, New Zealand, the United Kingdom, and Ireland.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parse_shipment_request_body = {"text":"I have a 4oz package that's 5x10x14in, and I need to ship it to Margie McMiller at 3800 North Lamar suite 200 in austin, tx 78652. Please send it via USPS first class and require an adult signature. It also needs to be insured for $400.\n"}; // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ParseShipmentRequestBody | The only required field is `text`, which is the text to be parsed. You can optionally also provide a `shipment` containing any already-known values. For example, you probably already know the `ship_from` address, and you may also already know what carrier and service you want to use.

try {
    $result = $apiInstance->parseShipment($parse_shipment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->parseShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parse_shipment_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ParseShipmentRequestBody**](../Model/ParseShipmentRequestBody.md)| The only required field is &#x60;text&#x60;, which is the text to be parsed. You can optionally also provide a &#x60;shipment&#x60; containing any already-known values. For example, you probably already know the &#x60;ship_from&#x60; address, and you may also already know what carrier and service you want to use. |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\ParseShipmentResponseBody**](../Model/ParseShipmentResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## tagShipment

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\TagShipmentResponseBody tagShipment($shipment_id, $tag_name)

Add Tag to Shipment

Add a tag to the shipment object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$tag_name = 'tag_name_example'; // string | 

try {
    $result = $apiInstance->tagShipment($shipment_id, $tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->tagShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **tag_name** | **string**|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\TagShipmentResponseBody**](../Model/TagShipmentResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## untagShipment

> string untagShipment($shipment_id, $tag_name)

Remove Tag from Shipment

Remove an existing tag from the Shipment object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$tag_name = 'tag_name_example'; // string | 

try {
    $result = $apiInstance->untagShipment($shipment_id, $tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->untagShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **tag_name** | **string**|  |

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


## updateShipment

> \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\UpdateShipmentResponseBody updateShipment($shipment_id, $update_shipment_request_body)

Update Shipment By ID

Update a shipment object based on its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | Shipment ID
$update_shipment_request_body = new \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\UpdateShipmentRequestBody(); // \Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\UpdateShipmentRequestBody | 

try {
    $result = $apiInstance->updateShipment($shipment_id, $update_shipment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->updateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Shipment ID |
 **update_shipment_request_body** | [**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\UpdateShipmentRequestBody**](../Model/UpdateShipmentRequestBody.md)|  |

### Return type

[**\Nmusco\ShipEngine\v1\Nmusco\ShipEngine\v1\Models\UpdateShipmentResponseBody**](../Model/UpdateShipmentResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

