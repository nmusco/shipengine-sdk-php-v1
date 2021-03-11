# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of a contact person at this address.  This field may be set instead of - or in addition to - the &#x60;company_name&#x60; field. |
**phone** | **string** | The phone number of a contact person at this address.  The format of this phone number varies depending on the country. |
**address_line1** | **string** | The first line of the street address.  For some addresses, this may be the only line.  Other addresses may require 2 or 3 lines. |
**city_locality** | **string** | The name of the city or locality |
**state_province** | **string** | The state or province.  For some countries (including the U.S.) only abbreviations are allowed.  Other countries allow the full name or abbreviation. |
**postal_code** | **string** |  |
**country_code** | **string** | The two-letter [ISO 3166-1 country code](https://en.wikipedia.org/wiki/ISO_3166-1) |
**address_residential_indicator** | [**AddressResidentialIndicator**](AddressResidentialIndicator.md) | Indicates whether this is a residential address. |
**company_name** | **string** | If this is a business address, then the company name should be specified here. | [optional]
**address_line2** | **string** | The second line of the street address.  For some addresses, this line may not be needed. | [optional]
**address_line3** | **string** | The third line of the street address.  For some addresses, this line may not be needed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
