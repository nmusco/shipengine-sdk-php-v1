# # EstimateRatesRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_country_code** | **string** |  |
**from_postal_code** | **string** |  |
**from_city_locality** | **string** | from postal code |
**to_country_code** | **string** |  |
**to_postal_code** | **string** |  |
**to_city_locality** | **string** | The city locality the package is being shipped to |
**to_state_province** | **string** | To state province |
**weight** | [**Weight**](Weight.md) | The weight of the package |
**ship_date** | [**\DateTime**](\DateTime.md) | ship date |
**from_state_province** | **string** | From state province | [optional]
**dimensions** | [**Dimensions**](Dimensions.md) | The dimensions of the package | [optional]
**confirmation** | [**DeliveryConfirmation**](DeliveryConfirmation.md) |  | [optional]
**address_residential_indicator** | [**AddressResidentialIndicator**](AddressResidentialIndicator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
