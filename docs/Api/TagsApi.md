# Nmusco\ShipEngine\v1\TagsApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagsApi.md#createTag) | **POST** /v1/tags/{tag_name} | Create a New Tag
[**deleteTag**](TagsApi.md#deleteTag) | **DELETE** /v1/tags/{tag_name} | Delete Tag
[**listTags**](TagsApi.md#listTags) | **GET** /v1/tags | Get Tags
[**renameTag**](TagsApi.md#renameTag) | **PUT** /v1/tags/{tag_name}/{new_tag_name} | Update Tag Name



## createTag

> \Nmusco\ShipEngine\v1\Model\CreateTagResponseBody createTag($tag_name)

Create a New Tag

Create a new Tag for customizing how you track your shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_name = 'tag_name_example'; // string | 

try {
    $result = $apiInstance->createTag($tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_name** | **string**|  |

### Return type

[**\Nmusco\ShipEngine\v1\Model\CreateTagResponseBody**](../Model/CreateTagResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTag

> string deleteTag($tag_name)

Delete Tag

Delete a tag that is no longer needed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_name = 'tag_name_example'; // string | 

try {
    $result = $apiInstance->deleteTag($tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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


## listTags

> \Nmusco\ShipEngine\v1\Model\ListTagsResponseBody listTags()

Get Tags

Get a list of all tags associated with an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nmusco\ShipEngine\v1\Model\ListTagsResponseBody**](../Model/ListTagsResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## renameTag

> string renameTag($tag_name, $new_tag_name)

Update Tag Name

Change a tag name while still keeping the relevant shipments attached to it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nmusco\ShipEngine\v1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new Nmusco\ShipEngine\v1\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_name = 'tag_name_example'; // string | 
$new_tag_name = 'new_tag_name_example'; // string | 

try {
    $result = $apiInstance->renameTag($tag_name, $new_tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->renameTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_name** | **string**|  |
 **new_tag_name** | **string**|  |

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

