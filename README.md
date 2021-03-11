# ShipEngineClient

ShipEngine's easy-to-use REST API lets you manage all of your shipping needs without worrying about the complexities of different carrier APIs and protocols. We handle all the heavy lifting so you can focus on providing a first-class shipping experience for your customers at the best possible prices.

Each of ShipEngine's features can be used by itself or in conjunction with each other to build powerful shipping functionality into your application or service.

## Getting Started
If you're new to REST APIs then be sure to read our [introduction to REST](https://www.shipengine.com/docs/rest/) to understand the basics.  Learn how to [authenticate yourself to ShipEngine](https://www.shipengine.com/docs/auth/), and then use our [sandbox environment](https://www.shipengine.com/docs/sandbox/) to kick the tires and get familiar with our API. If you run into any problems, then be sure to check the [error handling guide](https://www.shipengine.com/docs/errors/) for tips.

Here are some step-by-step **tutorials** to get you started:

  - [Learn how to create your first shipping label](https://www.shipengine.com/docs/labels/create-a-label/)
  - [Calculate shipping costs and compare rates across carriers](https://www.shipengine.com/docs/rates/)
  - [Track packages on-demand or in real time](https://www.shipengine.com/docs/tracking/)
  - [Validate mailing addresses anywhere on Earth](https://www.shipengine.com/docs/addresses/validation/)


## Shipping Labels for Every Major Carrier
ShipEngine makes it easy to [create shipping labels for any carrier](https://www.shipengine.com/docs/labels/create-a-label/) and [download them](https://www.shipengine.com/docs/labels/downloading/) in a [variety of file formats](https://www.shipengine.com/docs/labels/formats/). You can even customize labels with your own [messages](https://www.shipengine.com/docs/labels/messages/) and [images](https://www.shipengine.com/docs/labels/branding/).


## Real-Time Package Tracking
With ShipEngine you can [get the current status of a package](https://www.shipengine.com/docs/tracking/) or [subscribe to real-time tracking updates](https://www.shipengine.com/docs/tracking/webhooks/) via webhooks. You can also create [custimized tracking pages](https://www.shipengine.com/docs/tracking/branded-tracking-page/) with your own branding so your customers will always know where their package is.


## Compare Shipping Costs Across Carriers
Make sure you ship as cost-effectively as possible by [comparing rates across carriers](https://www.shipengine.com/docs/rates/get-shipment-rates/) using the ShipEngine Rates API. Or if you don't know the full shipment details yet, then you can [get rate estimates](https://www.shipengine.com/docs/rates/estimate/) with limited address info.


## Worldwide Address Validation
ShipEngine supports [address validation](https://www.shipengine.com/docs/addresses/validation/) for virtually [every country on Earth](https://www.shipengine.com/docs/addresses/validation/countries/), including the United States, Canada, Great Britain, Australia, Germany, France, Norway, Spain, Sweden, Israel, Italy, and over 160 others.


For more information, please visit [https://www.shipengine.com/contact/](https://www.shipengine.com/contact/).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nmusco/shipengine-sdk-php-v1.git"
    }
  ],
  "require": {
    "nmusco/shipengine-sdk-php-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ShipEngineClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

```

## API Endpoints

All URIs are relative to *https://api.shipengine.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**parseAddress**](docs/Api/AddressesApi.md#parseaddress) | **PUT** /v1/addresses/recognize | Parse an address
*AddressesApi* | [**validateAddress**](docs/Api/AddressesApi.md#validateaddress) | **POST** /v1/addresses/validate | Validate An Address
*BatchesApi* | [**addToBatch**](docs/Api/BatchesApi.md#addtobatch) | **POST** /v1/batches/{batch_id}/add | Add to a Batch
*BatchesApi* | [**createBatch**](docs/Api/BatchesApi.md#createbatch) | **POST** /v1/batches | Create A Batch
*BatchesApi* | [**deleteBatch**](docs/Api/BatchesApi.md#deletebatch) | **DELETE** /v1/batches/{batch_id} | Delete Batch By Id
*BatchesApi* | [**getBatchByExternalId**](docs/Api/BatchesApi.md#getbatchbyexternalid) | **GET** /v1/batches/external_batch_id/{external_batch_id} | Get Batch By External ID
*BatchesApi* | [**getBatchById**](docs/Api/BatchesApi.md#getbatchbyid) | **GET** /v1/batches/{batch_id} | Get Batch By ID
*BatchesApi* | [**listBatchErrors**](docs/Api/BatchesApi.md#listbatcherrors) | **GET** /v1/batches/{batch_id}/errors | Get Batch Errors
*BatchesApi* | [**listBatches**](docs/Api/BatchesApi.md#listbatches) | **GET** /v1/batches | List Batches
*BatchesApi* | [**processBatch**](docs/Api/BatchesApi.md#processbatch) | **POST** /v1/batches/{batch_id}/process/labels | Process Batch ID Labels
*BatchesApi* | [**removeFromBatch**](docs/Api/BatchesApi.md#removefrombatch) | **POST** /v1/batches/{batch_id}/remove | Remove From Batch
*BatchesApi* | [**updateBatch**](docs/Api/BatchesApi.md#updatebatch) | **PUT** /v1/batches/{batch_id} | Update Batch By Id
*CarrierAccountsApi* | [**connectCarrier**](docs/Api/CarrierAccountsApi.md#connectcarrier) | **POST** /v1/connections/carriers/{carrier_name} | Connect a carrier account
*CarrierAccountsApi* | [**disconnectCarrier**](docs/Api/CarrierAccountsApi.md#disconnectcarrier) | **DELETE** /v1/connections/carriers/{carrier_name}/{carrier_id} | Disconnect a carrier
*CarrierAccountsApi* | [**getCarrierSettings**](docs/Api/CarrierAccountsApi.md#getcarriersettings) | **GET** /v1/connections/carriers/{carrier_name}/{carrier_id}/settings | Get carrier settings
*CarrierAccountsApi* | [**updateCarrierSettings**](docs/Api/CarrierAccountsApi.md#updatecarriersettings) | **PUT** /v1/connections/carriers/{carrier_name}/{carrier_id}/settings | Update carrier settings
*CarriersApi* | [**addFundsToCarrier**](docs/Api/CarriersApi.md#addfundstocarrier) | **PUT** /v1/carriers/{carrier_id}/add_funds | Add Funds To Carrier
*CarriersApi* | [**getCarrierById**](docs/Api/CarriersApi.md#getcarrierbyid) | **GET** /v1/carriers/{carrier_id} | Get Carrier By ID
*CarriersApi* | [**getCarrierOptions**](docs/Api/CarriersApi.md#getcarrieroptions) | **GET** /v1/carriers/{carrier_id}/options | Get Carrier Options
*CarriersApi* | [**listCarrierPackageTypes**](docs/Api/CarriersApi.md#listcarrierpackagetypes) | **GET** /v1/carriers/{carrier_id}/packages | List Carrier Package Types
*CarriersApi* | [**listCarrierServices**](docs/Api/CarriersApi.md#listcarrierservices) | **GET** /v1/carriers/{carrier_id}/services | List Carrier Services
*CarriersApi* | [**listCarriers**](docs/Api/CarriersApi.md#listcarriers) | **GET** /v1/carriers | List Carriers
*DownloadsApi* | [**downloadFile**](docs/Api/DownloadsApi.md#downloadfile) | **GET** /v1/downloads/{dir}/{subdir}/{filename} | Download File
*InsuranceApi* | [**addFundsToInsurance**](docs/Api/InsuranceApi.md#addfundstoinsurance) | **PATCH** /v1/insurance/shipsurance/add_funds | Add Funds To Insurance
*InsuranceApi* | [**connectInsurer**](docs/Api/InsuranceApi.md#connectinsurer) | **POST** /v1/connections/insurance/shipsurance | Connect a Shipsurance Account
*InsuranceApi* | [**disconnectInsurer**](docs/Api/InsuranceApi.md#disconnectinsurer) | **DELETE** /v1/connections/insurance/shipsurance | Disconnect a Shipsurance Account
*InsuranceApi* | [**getInsuranceBalance**](docs/Api/InsuranceApi.md#getinsurancebalance) | **GET** /v1/insurance/shipsurance/balance | Get Insurance Funds Balance
*LabelsApi* | [**createLabel**](docs/Api/LabelsApi.md#createlabel) | **POST** /v1/labels | Purchase Label
*LabelsApi* | [**createLabelFromRate**](docs/Api/LabelsApi.md#createlabelfromrate) | **POST** /v1/labels/rates/{rate_id} | Purchase Label with Rate ID
*LabelsApi* | [**createLabelFromShipment**](docs/Api/LabelsApi.md#createlabelfromshipment) | **POST** /v1/labels/shipment/{shipment_id} | Purchase Label with Shipment ID
*LabelsApi* | [**createReturnLabel**](docs/Api/LabelsApi.md#createreturnlabel) | **POST** /v1/labels/{label_id}/return | Create a return label
*LabelsApi* | [**getLabelByExternalShipmentId**](docs/Api/LabelsApi.md#getlabelbyexternalshipmentid) | **GET** /v1/labels/external_shipment_id/{external_shipment_id} | Get Label By External Shipment ID
*LabelsApi* | [**getLabelById**](docs/Api/LabelsApi.md#getlabelbyid) | **GET** /v1/labels/{label_id} | Get Label By ID
*LabelsApi* | [**getTrackingLogFromLabel**](docs/Api/LabelsApi.md#gettrackinglogfromlabel) | **GET** /v1/labels/{label_id}/track | Get Label Tracking Information
*LabelsApi* | [**listLabels**](docs/Api/LabelsApi.md#listlabels) | **GET** /v1/labels | List labels
*LabelsApi* | [**voidLabel**](docs/Api/LabelsApi.md#voidlabel) | **PUT** /v1/labels/{label_id}/void | Void a Label By ID
*ManifestsApi* | [**createManifest**](docs/Api/ManifestsApi.md#createmanifest) | **POST** /v1/manifests | Create Manifest
*ManifestsApi* | [**getManifestById**](docs/Api/ManifestsApi.md#getmanifestbyid) | **GET** /v1/manifests/{manifest_id} | Get Manifest By Id
*ManifestsApi* | [**listManifests**](docs/Api/ManifestsApi.md#listmanifests) | **GET** /v1/manifests | List Manifests
*PackageTypesApi* | [**createPackageType**](docs/Api/PackageTypesApi.md#createpackagetype) | **POST** /v1/packages | Create Custom Package Type
*PackageTypesApi* | [**deletePackageType**](docs/Api/PackageTypesApi.md#deletepackagetype) | **DELETE** /v1/packages/{package_id} | Delete A Custom Package By ID
*PackageTypesApi* | [**getPackageTypeById**](docs/Api/PackageTypesApi.md#getpackagetypebyid) | **GET** /v1/packages/{package_id} | Get Custom Package Type By ID
*PackageTypesApi* | [**listPackageTypes**](docs/Api/PackageTypesApi.md#listpackagetypes) | **GET** /v1/packages | List Custom Package Types
*PackageTypesApi* | [**updatePackageType**](docs/Api/PackageTypesApi.md#updatepackagetype) | **PUT** /v1/packages/{package_id} | Update Custom Package Type By ID
*RatesApi* | [**calculateRates**](docs/Api/RatesApi.md#calculaterates) | **POST** /v1/rates | Get Shipping Rates
*RatesApi* | [**compareBulkRates**](docs/Api/RatesApi.md#comparebulkrates) | **POST** /v1/rates/bulk | Get Bulk Rates
*RatesApi* | [**estimateRates**](docs/Api/RatesApi.md#estimaterates) | **POST** /v1/rates/estimate | Estimate Rates
*RatesApi* | [**getRateById**](docs/Api/RatesApi.md#getratebyid) | **GET** /v1/rates/{rate_id} | Get Rate By ID
*ShipmentsApi* | [**cancelShipments**](docs/Api/ShipmentsApi.md#cancelshipments) | **PUT** /v1/shipments/{shipment_id}/cancel | Cancel a Shipment
*ShipmentsApi* | [**createShipments**](docs/Api/ShipmentsApi.md#createshipments) | **POST** /v1/shipments | Create Shipments
*ShipmentsApi* | [**getShipmentByExternalId**](docs/Api/ShipmentsApi.md#getshipmentbyexternalid) | **GET** /v1/shipments/external_shipment_id/{external_shipment_id} | Get Shipment By External ID
*ShipmentsApi* | [**getShipmentById**](docs/Api/ShipmentsApi.md#getshipmentbyid) | **GET** /v1/shipments/{shipment_id} | Get Shipment By ID
*ShipmentsApi* | [**listShipmentErrors**](docs/Api/ShipmentsApi.md#listshipmenterrors) | **GET** /v1/shipments/{shipment_id}/errors | Get Shipment Errors
*ShipmentsApi* | [**listShipmentRates**](docs/Api/ShipmentsApi.md#listshipmentrates) | **GET** /v1/shipments/{shipment_id}/rates | Get Shipment Rates
*ShipmentsApi* | [**listShipments**](docs/Api/ShipmentsApi.md#listshipments) | **GET** /v1/shipments | List Shipments
*ShipmentsApi* | [**parseShipment**](docs/Api/ShipmentsApi.md#parseshipment) | **PUT** /v1/shipments/recognize | Parse shipping info
*ShipmentsApi* | [**tagShipment**](docs/Api/ShipmentsApi.md#tagshipment) | **POST** /v1/shipments/{shipment_id}/tags/{tag_name} | Add Tag to Shipment
*ShipmentsApi* | [**untagShipment**](docs/Api/ShipmentsApi.md#untagshipment) | **DELETE** /v1/shipments/{shipment_id}/tags/{tag_name} | Remove Tag from Shipment
*ShipmentsApi* | [**updateShipment**](docs/Api/ShipmentsApi.md#updateshipment) | **PUT** /v1/shipments/{shipment_id} | Update Shipment By ID
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /v1/tags/{tag_name} | Create a New Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /v1/tags/{tag_name} | Delete Tag
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /v1/tags | Get Tags
*TagsApi* | [**renameTag**](docs/Api/TagsApi.md#renametag) | **PUT** /v1/tags/{tag_name}/{new_tag_name} | Update Tag Name
*TrackingApi* | [**getTrackingLog**](docs/Api/TrackingApi.md#gettrackinglog) | **GET** /v1/tracking | Get Tracking Information
*TrackingApi* | [**startTracking**](docs/Api/TrackingApi.md#starttracking) | **POST** /v1/tracking/start | Start Tracking a Package
*TrackingApi* | [**stopTracking**](docs/Api/TrackingApi.md#stoptracking) | **POST** /v1/tracking/stop | Stop Tracking a Package
*WarehousesApi* | [**createWarehouse**](docs/Api/WarehousesApi.md#createwarehouse) | **POST** /v1/warehouses | Create Warehouse
*WarehousesApi* | [**deleteWarehouse**](docs/Api/WarehousesApi.md#deletewarehouse) | **DELETE** /v1/warehouses/{warehouse_id} | Delete Warehouse By ID
*WarehousesApi* | [**getWarehouseById**](docs/Api/WarehousesApi.md#getwarehousebyid) | **GET** /v1/warehouses/{warehouse_id} | Get Warehouse By Id
*WarehousesApi* | [**listWarehouses**](docs/Api/WarehousesApi.md#listwarehouses) | **GET** /v1/warehouses | List Warehouses
*WarehousesApi* | [**updateWarehouse**](docs/Api/WarehousesApi.md#updatewarehouse) | **PUT** /v1/warehouses/{warehouse_id} | Update WareHouse By Id
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /v1/environment/webhooks | Create a Webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /v1/environment/webhooks/{webhook_id} | Delete Webhook By ID
*WebhooksApi* | [**getWebhookById**](docs/Api/WebhooksApi.md#getwebhookbyid) | **GET** /v1/environment/webhooks/{webhook_id} | Get Webhook By ID
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /v1/environment/webhooks | List Webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /v1/environment/webhooks/{webhook_id} | Update a Webhook

## Models

- [AddFundsToCarrierRequestBody](docs/Model/AddFundsToCarrierRequestBody.md)
- [AddFundsToCarrierResponseBody](docs/Model/AddFundsToCarrierResponseBody.md)
- [AddFundsToInsuranceRequestBody](docs/Model/AddFundsToInsuranceRequestBody.md)
- [AddFundsToInsuranceResponseBody](docs/Model/AddFundsToInsuranceResponseBody.md)
- [AddToBatchRequestBody](docs/Model/AddToBatchRequestBody.md)
- [Address](docs/Model/Address.md)
- [AddressResidentialIndicator](docs/Model/AddressResidentialIndicator.md)
- [AddressToValidate](docs/Model/AddressToValidate.md)
- [AddressValidatingShipment](docs/Model/AddressValidatingShipment.md)
- [AddressValidationCode](docs/Model/AddressValidationCode.md)
- [AddressValidationDetailCode](docs/Model/AddressValidationDetailCode.md)
- [AddressValidationMessageType](docs/Model/AddressValidationMessageType.md)
- [AddressValidationResult](docs/Model/AddressValidationResult.md)
- [AddressValidationStatus](docs/Model/AddressValidationStatus.md)
- [AdvancedShipmentOptions](docs/Model/AdvancedShipmentOptions.md)
- [AncillaryServiceEndorsement](docs/Model/AncillaryServiceEndorsement.md)
- [Batch](docs/Model/Batch.md)
- [BatchResponseError](docs/Model/BatchResponseError.md)
- [BatchStatus](docs/Model/BatchStatus.md)
- [BatchesSortBy](docs/Model/BatchesSortBy.md)
- [BillToParty](docs/Model/BillToParty.md)
- [BulkRate](docs/Model/BulkRate.md)
- [CalculateRatesRequestBody](docs/Model/CalculateRatesRequestBody.md)
- [CalculateRatesResponseBody](docs/Model/CalculateRatesResponseBody.md)
- [Carrier](docs/Model/Carrier.md)
- [CarrierAdvancedOption](docs/Model/CarrierAdvancedOption.md)
- [CarrierName](docs/Model/CarrierName.md)
- [CarrierNameWithSettings](docs/Model/CarrierNameWithSettings.md)
- [CollectOnDelivery](docs/Model/CollectOnDelivery.md)
- [CollectOnDeliveryPaymentType](docs/Model/CollectOnDeliveryPaymentType.md)
- [CompareBulkRatesRequestBody](docs/Model/CompareBulkRatesRequestBody.md)
- [ConnectAccessWorldwideRequestBody](docs/Model/ConnectAccessWorldwideRequestBody.md)
- [ConnectAmazonBuyShippingRequestBody](docs/Model/ConnectAmazonBuyShippingRequestBody.md)
- [ConnectAmazonShippingUk](docs/Model/ConnectAmazonShippingUk.md)
- [ConnectApcRequestBody](docs/Model/ConnectApcRequestBody.md)
- [ConnectAsendiaRequestBody](docs/Model/ConnectAsendiaRequestBody.md)
- [ConnectAustraliaPostRequestBody](docs/Model/ConnectAustraliaPostRequestBody.md)
- [ConnectCanadaPostRequestBody](docs/Model/ConnectCanadaPostRequestBody.md)
- [ConnectCarrierRequestBody](docs/Model/ConnectCarrierRequestBody.md)
- [ConnectCarrierResponseBody](docs/Model/ConnectCarrierResponseBody.md)
- [ConnectDhlEcommerceRequestBody](docs/Model/ConnectDhlEcommerceRequestBody.md)
- [ConnectDhlExpressAuRequestBody](docs/Model/ConnectDhlExpressAuRequestBody.md)
- [ConnectDhlExpressCaRequestBody](docs/Model/ConnectDhlExpressCaRequestBody.md)
- [ConnectDhlExpressRequestBody](docs/Model/ConnectDhlExpressRequestBody.md)
- [ConnectDhlExpressUkRequestBody](docs/Model/ConnectDhlExpressUkRequestBody.md)
- [ConnectDpdRequestBody](docs/Model/ConnectDpdRequestBody.md)
- [ConnectEndiciaRequestBody](docs/Model/ConnectEndiciaRequestBody.md)
- [ConnectFedexRequestBody](docs/Model/ConnectFedexRequestBody.md)
- [ConnectFedexUkRequestBody](docs/Model/ConnectFedexUkRequestBody.md)
- [ConnectFirstmileRequestBody](docs/Model/ConnectFirstmileRequestBody.md)
- [ConnectGlobegisticsRequestBody](docs/Model/ConnectGlobegisticsRequestBody.md)
- [ConnectImexRequestBody](docs/Model/ConnectImexRequestBody.md)
- [ConnectInsurerRequestBody](docs/Model/ConnectInsurerRequestBody.md)
- [ConnectNewgisticsRequestBody](docs/Model/ConnectNewgisticsRequestBody.md)
- [ConnectOntracRequestBody](docs/Model/ConnectOntracRequestBody.md)
- [ConnectPurolatorRequestBody](docs/Model/ConnectPurolatorRequestBody.md)
- [ConnectRoyalMailRequestBody](docs/Model/ConnectRoyalMailRequestBody.md)
- [ConnectRrDonnelleyRequestBody](docs/Model/ConnectRrDonnelleyRequestBody.md)
- [ConnectSekoRequestBody](docs/Model/ConnectSekoRequestBody.md)
- [ConnectSendleRequestBody](docs/Model/ConnectSendleRequestBody.md)
- [ConnectStampsRequestBody](docs/Model/ConnectStampsRequestBody.md)
- [ConnectUpsRequestBody](docs/Model/ConnectUpsRequestBody.md)
- [CreateAndValidateShipment](docs/Model/CreateAndValidateShipment.md)
- [CreateBatchRequestBody](docs/Model/CreateBatchRequestBody.md)
- [CreateBatchResponseBody](docs/Model/CreateBatchResponseBody.md)
- [CreateLabelFromRateRequestBody](docs/Model/CreateLabelFromRateRequestBody.md)
- [CreateLabelFromRateResponseBody](docs/Model/CreateLabelFromRateResponseBody.md)
- [CreateLabelFromShipmentRequestBody](docs/Model/CreateLabelFromShipmentRequestBody.md)
- [CreateLabelFromShipmentResponseBody](docs/Model/CreateLabelFromShipmentResponseBody.md)
- [CreateLabelRequestBody](docs/Model/CreateLabelRequestBody.md)
- [CreateLabelResponseBody](docs/Model/CreateLabelResponseBody.md)
- [CreateManifestByObjectRequestBody](docs/Model/CreateManifestByObjectRequestBody.md)
- [CreateManifestLabelIdsRequestBody](docs/Model/CreateManifestLabelIdsRequestBody.md)
- [CreateManifestRequestBody](docs/Model/CreateManifestRequestBody.md)
- [CreateManifestResponseBody](docs/Model/CreateManifestResponseBody.md)
- [CreatePackageTypeRequestBody](docs/Model/CreatePackageTypeRequestBody.md)
- [CreatePackageTypeResponseBody](docs/Model/CreatePackageTypeResponseBody.md)
- [CreateReturnLabelRequestBody](docs/Model/CreateReturnLabelRequestBody.md)
- [CreateReturnLabelResponseBody](docs/Model/CreateReturnLabelResponseBody.md)
- [CreateShipmentResponseBodyFields](docs/Model/CreateShipmentResponseBodyFields.md)
- [CreateShipmentsRequestBody](docs/Model/CreateShipmentsRequestBody.md)
- [CreateShipmentsResponseBody](docs/Model/CreateShipmentsResponseBody.md)
- [CreateTagResponseBody](docs/Model/CreateTagResponseBody.md)
- [CreateWarehouseRequestBody](docs/Model/CreateWarehouseRequestBody.md)
- [CreateWarehouseResponseBody](docs/Model/CreateWarehouseResponseBody.md)
- [CreateWebhookRequestBody](docs/Model/CreateWebhookRequestBody.md)
- [CreateWebhookResponseBody](docs/Model/CreateWebhookResponseBody.md)
- [Currency](docs/Model/Currency.md)
- [CustomsItem](docs/Model/CustomsItem.md)
- [DeliveryConfirmation](docs/Model/DeliveryConfirmation.md)
- [DeprecatedManifest](docs/Model/DeprecatedManifest.md)
- [DhlExpressAccountSettings](docs/Model/DhlExpressAccountSettings.md)
- [DhlExpressSettingsResponseBody](docs/Model/DhlExpressSettingsResponseBody.md)
- [DimensionUnit](docs/Model/DimensionUnit.md)
- [Dimensions](docs/Model/Dimensions.md)
- [DisplayScheme](docs/Model/DisplayScheme.md)
- [Error](docs/Model/Error.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [ErrorResponseBody](docs/Model/ErrorResponseBody.md)
- [ErrorSource](docs/Model/ErrorSource.md)
- [ErrorType](docs/Model/ErrorType.md)
- [EstimateRatesRequestBody](docs/Model/EstimateRatesRequestBody.md)
- [FedexAccountSettings](docs/Model/FedexAccountSettings.md)
- [FedexAccountSettingsRequestBody](docs/Model/FedexAccountSettingsRequestBody.md)
- [FedexPickupType](docs/Model/FedexPickupType.md)
- [FedexSettingsResponseBody](docs/Model/FedexSettingsResponseBody.md)
- [GetBatchByExternalIdResponseBody](docs/Model/GetBatchByExternalIdResponseBody.md)
- [GetBatchByIdResponseBody](docs/Model/GetBatchByIdResponseBody.md)
- [GetCarrierByIdResponseBody](docs/Model/GetCarrierByIdResponseBody.md)
- [GetCarrierOptionsResponseBody](docs/Model/GetCarrierOptionsResponseBody.md)
- [GetCarrierSettingsResponseBody](docs/Model/GetCarrierSettingsResponseBody.md)
- [GetCarriersResponseBody](docs/Model/GetCarriersResponseBody.md)
- [GetInsuranceBalanceResponseBody](docs/Model/GetInsuranceBalanceResponseBody.md)
- [GetLabelByExternalShipmentIdResponseBody](docs/Model/GetLabelByExternalShipmentIdResponseBody.md)
- [GetLabelByIdResponseBody](docs/Model/GetLabelByIdResponseBody.md)
- [GetManifestByIdResponseBody](docs/Model/GetManifestByIdResponseBody.md)
- [GetPackageTypeByIdResponseBody](docs/Model/GetPackageTypeByIdResponseBody.md)
- [GetRateByIdResponseBody](docs/Model/GetRateByIdResponseBody.md)
- [GetShipmentByExternalIdResponseBody](docs/Model/GetShipmentByExternalIdResponseBody.md)
- [GetShipmentByIdResponseBody](docs/Model/GetShipmentByIdResponseBody.md)
- [GetTrackingLogFromLabelResponseBody](docs/Model/GetTrackingLogFromLabelResponseBody.md)
- [GetTrackingLogResponseBody](docs/Model/GetTrackingLogResponseBody.md)
- [GetWarehouseByIdResponseBody](docs/Model/GetWarehouseByIdResponseBody.md)
- [GetWebhookByIdResponseBody](docs/Model/GetWebhookByIdResponseBody.md)
- [InsuranceProvider](docs/Model/InsuranceProvider.md)
- [InternationalShipmentOptions](docs/Model/InternationalShipmentOptions.md)
- [Label](docs/Model/Label.md)
- [LabelChargeEvent](docs/Model/LabelChargeEvent.md)
- [LabelDownload](docs/Model/LabelDownload.md)
- [LabelDownloadType](docs/Model/LabelDownloadType.md)
- [LabelFormat](docs/Model/LabelFormat.md)
- [LabelLayout](docs/Model/LabelLayout.md)
- [LabelMessages](docs/Model/LabelMessages.md)
- [LabelStatus](docs/Model/LabelStatus.md)
- [Link](docs/Model/Link.md)
- [ListBatchErrorsResponseBody](docs/Model/ListBatchErrorsResponseBody.md)
- [ListBatchesResponseBody](docs/Model/ListBatchesResponseBody.md)
- [ListCarrierPackageTypesResponseBody](docs/Model/ListCarrierPackageTypesResponseBody.md)
- [ListCarrierServicesResponseBody](docs/Model/ListCarrierServicesResponseBody.md)
- [ListCarriersResponseBody](docs/Model/ListCarriersResponseBody.md)
- [ListLabelsResponseBody](docs/Model/ListLabelsResponseBody.md)
- [ListManifestsResponseBody](docs/Model/ListManifestsResponseBody.md)
- [ListPackageTypesResponseBody](docs/Model/ListPackageTypesResponseBody.md)
- [ListShipmentErrorsResponseBody](docs/Model/ListShipmentErrorsResponseBody.md)
- [ListShipmentRatesResponseBody](docs/Model/ListShipmentRatesResponseBody.md)
- [ListShipmentsResponseBody](docs/Model/ListShipmentsResponseBody.md)
- [ListTagsResponseBody](docs/Model/ListTagsResponseBody.md)
- [ListWarehousesResponseBody](docs/Model/ListWarehousesResponseBody.md)
- [Manifest](docs/Model/Manifest.md)
- [ManifestDownload](docs/Model/ManifestDownload.md)
- [Manifests](docs/Model/Manifests.md)
- [ModifyBatch](docs/Model/ModifyBatch.md)
- [MonetaryValue](docs/Model/MonetaryValue.md)
- [NonDelivery](docs/Model/NonDelivery.md)
- [OptionalLink](docs/Model/OptionalLink.md)
- [OrderSourceName](docs/Model/OrderSourceName.md)
- [OriginType](docs/Model/OriginType.md)
- [Package](docs/Model/Package.md)
- [PackageContents](docs/Model/PackageContents.md)
- [PackageType](docs/Model/PackageType.md)
- [PagedListResponseBody](docs/Model/PagedListResponseBody.md)
- [PaginationLink](docs/Model/PaginationLink.md)
- [ParseAddressRequestBody](docs/Model/ParseAddressRequestBody.md)
- [ParseAddressResponseBody](docs/Model/ParseAddressResponseBody.md)
- [ParseShipmentRequestBody](docs/Model/ParseShipmentRequestBody.md)
- [ParseShipmentResponseBody](docs/Model/ParseShipmentResponseBody.md)
- [PartialAddress](docs/Model/PartialAddress.md)
- [PartialShipment](docs/Model/PartialShipment.md)
- [PaymentAmount](docs/Model/PaymentAmount.md)
- [ProcessBatchRequestBody](docs/Model/ProcessBatchRequestBody.md)
- [PurchaseLabelWithoutShipment](docs/Model/PurchaseLabelWithoutShipment.md)
- [Rate](docs/Model/Rate.md)
- [RateEstimate](docs/Model/RateEstimate.md)
- [RateEstimateByCarrierId](docs/Model/RateEstimateByCarrierId.md)
- [RateEstimateByCarrierIds](docs/Model/RateEstimateByCarrierIds.md)
- [RateEstimateOptions](docs/Model/RateEstimateOptions.md)
- [RateRequestBody](docs/Model/RateRequestBody.md)
- [RateRequestByShipmentIds](docs/Model/RateRequestByShipmentIds.md)
- [RateRequestByShipments](docs/Model/RateRequestByShipments.md)
- [RateRequestOptions](docs/Model/RateRequestOptions.md)
- [RateRequestRateOptions](docs/Model/RateRequestRateOptions.md)
- [RateResponse](docs/Model/RateResponse.md)
- [RateResponseStatus](docs/Model/RateResponseStatus.md)
- [RateType](docs/Model/RateType.md)
- [RatesInformation](docs/Model/RatesInformation.md)
- [RecognizedEntity](docs/Model/RecognizedEntity.md)
- [RemoveFromBatchRequestBody](docs/Model/RemoveFromBatchRequestBody.md)
- [ResponseMessage](docs/Model/ResponseMessage.md)
- [Service](docs/Model/Service.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentIdRequest](docs/Model/ShipmentIdRequest.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentRequest](docs/Model/ShipmentRequest.md)
- [ShipmentResponseError](docs/Model/ShipmentResponseError.md)
- [ShipmentStatus](docs/Model/ShipmentStatus.md)
- [ShipmentsSortBy](docs/Model/ShipmentsSortBy.md)
- [SmartPostHub](docs/Model/SmartPostHub.md)
- [SortDir](docs/Model/SortDir.md)
- [Tag](docs/Model/Tag.md)
- [TagShipmentResponseBody](docs/Model/TagShipmentResponseBody.md)
- [TrackEvent](docs/Model/TrackEvent.md)
- [TrackingInformation](docs/Model/TrackingInformation.md)
- [TrackingStatus](docs/Model/TrackingStatus.md)
- [UpdateAmazonBuyShippingRequestBody](docs/Model/UpdateAmazonBuyShippingRequestBody.md)
- [UpdateCarrierSettingsRequestBody](docs/Model/UpdateCarrierSettingsRequestBody.md)
- [UpdateDhlExpressSettingsRequestBody](docs/Model/UpdateDhlExpressSettingsRequestBody.md)
- [UpdateFedexSettingsRequestBody](docs/Model/UpdateFedexSettingsRequestBody.md)
- [UpdateNewgisticsSettingsRequestBody](docs/Model/UpdateNewgisticsSettingsRequestBody.md)
- [UpdatePackageTypeRequestBody](docs/Model/UpdatePackageTypeRequestBody.md)
- [UpdateShipmentFields](docs/Model/UpdateShipmentFields.md)
- [UpdateShipmentRequestBody](docs/Model/UpdateShipmentRequestBody.md)
- [UpdateShipmentResponseBody](docs/Model/UpdateShipmentResponseBody.md)
- [UpdateUpsSettingsRequestBody](docs/Model/UpdateUpsSettingsRequestBody.md)
- [UpdateWarehouseRequestBody](docs/Model/UpdateWarehouseRequestBody.md)
- [UpdateWebhookRequestBody](docs/Model/UpdateWebhookRequestBody.md)
- [UpsAccountSettings](docs/Model/UpsAccountSettings.md)
- [UpsInvoice](docs/Model/UpsInvoice.md)
- [UpsPickupType](docs/Model/UpsPickupType.md)
- [UpsSettingsResponseBody](docs/Model/UpsSettingsResponseBody.md)
- [ValidateAddress](docs/Model/ValidateAddress.md)
- [ValidateShipmentFields](docs/Model/ValidateShipmentFields.md)
- [ValidationStatus](docs/Model/ValidationStatus.md)
- [VoidLabelResponseBody](docs/Model/VoidLabelResponseBody.md)
- [Warehouse](docs/Model/Warehouse.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEvent](docs/Model/WebhookEvent.md)
- [Weight](docs/Model/Weight.md)
- [WeightUnit](docs/Model/WeightUnit.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

sales@shipengine.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.202012161912`
    - Package version: `1.1.202012041812.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
