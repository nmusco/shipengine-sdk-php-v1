# # Package

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | [**Weight**](Weight.md) | The package weight |
**package_code** | **string** | The [package type](https://www.shipengine.com/docs/reference/list-carrier-packages/), such as &#x60;thick_envelope&#x60;, &#x60;small_flat_rate_box&#x60;, &#x60;large_package&#x60;, etc.  The code &#x60;package&#x60; indicates a custom or unknown package type. | [optional]
**dimensions** | [**Dimensions**](Dimensions.md) | The package dimensions | [optional]
**insured_value** | [**MonetaryValue**](MonetaryValue.md) | The insured value of the package.  Requires the &#x60;insurance_provider&#x60; field of the shipment to be set. | [optional]
**tracking_number** | **string** | The tracking number for the package.  The format depends on the carrier. | [optional] [readonly]
**label_messages** | [**LabelMessages**](LabelMessages.md) |  | [optional]
**external_package_id** | **string** | An external package id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
