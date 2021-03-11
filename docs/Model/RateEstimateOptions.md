# # RateEstimateOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_country_code** | **string** |  | [optional]
**from_postal_code** | **string** |  | [optional]
**from_city_locality** | **string** | from postal code | [optional]
**from_state_province** | **string** | From state province | [optional]
**to_country_code** | **string** |  | [optional]
**to_postal_code** | **string** |  | [optional]
**to_city_locality** | **string** | The city locality the package is being shipped to | [optional]
**to_state_province** | **string** | To state province | [optional]
**weight** | [**Weight**](Weight.md) | The weight of the package | [optional]
**dimensions** | [**Dimensions**](Dimensions.md) | The dimensions of the package | [optional]
**confirmation** | [**DeliveryConfirmation**](DeliveryConfirmation.md) |  | [optional]
**address_residential_indicator** | [**AddressResidentialIndicator**](AddressResidentialIndicator.md) |  | [optional]
**ship_date** | [**\DateTime**](\DateTime.md) | ship date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
