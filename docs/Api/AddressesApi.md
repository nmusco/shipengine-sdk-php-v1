# Nmusco\ShipEngine\v1\AddressesApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**parseAddress**](AddressesApi.md#parseAddress) | **PUT** /v1/addresses/recognize | Parse an address
[**validateAddress**](AddressesApi.md#validateAddress) | **POST** /v1/addresses/validate | Validate An Address



## parseAddress

> \Nmusco\ShipEngine\v1\Models\ParseAddressResponseBody parseAddress($parse_address_request_body)

Parse an address

The address-recognition API makes it easy for you to extract address data from unstructured text, including the recipient name, line 1, line 2, city, postal code, and more.  Data often enters your system as unstructured text (for example: emails, SMS messages, support tickets, or other documents). ShipEngine's address-recognition API helps you extract meaningful, structured data from this unstructured text. The parsed address data is returned in the same structure that's used for other ShipEngine APIs, such as address validation, rate quotes, and shipping labels.  > **Note:** Address recognition is currently supported for the United States, Canada, Australia, New Zealand, the United Kingdom, and Ireland.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parse_address_request_body = {"text":"Margie McMiller at 3800 North Lamar suite 200 in austin, tx.  The zip code there is 78652."}; // \Nmusco\ShipEngine\v1\Models\ParseAddressRequestBody | The only required field is `text`, which is the text to be parsed. You can optionally also provide an `address` containing already-known values. For example, you may already know the recipient's name, city, and country, and only want to parse the street address into separate lines.

try {
    $result = $apiInstance->parseAddress($parse_address_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->parseAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parse_address_request_body** | [**\Nmusco\ShipEngine\v1\Models\ParseAddressRequestBody**](../Model/ParseAddressRequestBody.md)| The only required field is &#x60;text&#x60;, which is the text to be parsed. You can optionally also provide an &#x60;address&#x60; containing already-known values. For example, you may already know the recipient&#39;s name, city, and country, and only want to parse the street address into separate lines. |

### Return type

[**\Nmusco\ShipEngine\v1\Models\ParseAddressResponseBody**](../Model/ParseAddressResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## validateAddress

> AddressValidationResult[] validateAddress($address_to_validate)

Validate An Address

Address validation ensures accurate addresses and can lead to reduced shipping costs by preventing address correction surcharges. ShipEngine cross references multiple databases to validate addresses and identify potential deliverability issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_to_validate = [{"name":"Mickey and Minnie Mouse","phone":"714-781-4565","company_name":"The Walt Disney Company","address_line1":"500 South Buena Vista Street","city_locality":"Burbank","state_province":"CA","postal_code":91521,"country_code":"US"}]; // AddressToValidate[] | 

try {
    $result = $apiInstance->validateAddress($address_to_validate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_to_validate** | [**AddressToValidate[]**](../Model/AddressToValidate.md)|  |

### Return type

[**AddressValidationResult[]**](../Model/AddressValidationResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

