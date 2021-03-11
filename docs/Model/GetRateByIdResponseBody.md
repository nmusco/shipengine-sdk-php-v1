# # GetRateByIdResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rate_id** | **string** | A string that uniquely identifies the rate | [readonly]
**rate_type** | [**RateType**](RateType.md) |  | [readonly]
**carrier_id** | **string** | A string that uniquely identifies the carrier | [readonly]
**shipping_amount** | [**MonetaryValue**](MonetaryValue.md) | The shipping amount | [readonly]
**insurance_amount** | [**MonetaryValue**](MonetaryValue.md) | The insurance amount | [readonly]
**confirmation_amount** | [**MonetaryValue**](MonetaryValue.md) | The confirmation amount | [readonly]
**other_amount** | [**MonetaryValue**](MonetaryValue.md) | Any other charges associated with this rate | [readonly]
**zone** | **int** | Certain carriers base [their rates](https://blog.stamps.com/2017/09/08/usps-postal-zones/) off of custom zones that vary depending upon the ship_to and ship_from location | [readonly]
**package_type** | **string** | package type that this rate was estimated for | [readonly]
**guaranteed_service** | **bool** | Indicates if the rate is guaranteed. | [readonly]
**negotiated_rate** | **bool** | Indicates if the rates been negotiated | [readonly]
**service_type** | **string** | service type | [readonly]
**service_code** | **string** | service code for the rate | [readonly]
**trackable** | **bool** | Indicates if rate is trackable | [readonly]
**carrier_code** | **string** | carrier code | [readonly]
**carrier_nickname** | **string** | carrier nickname | [readonly]
**carrier_friendly_name** | **string** | carrier friendly name | [readonly]
**validation_status** | [**ValidationStatus**](ValidationStatus.md) |  | [readonly]
**warning_messages** | **string[]** | The warning messages | [readonly]
**error_messages** | **string[]** | The error messages | [readonly]
**tax_amount** | [**MonetaryValue**](MonetaryValue.md) | Tariff and additional taxes associated with an international shipment. | [optional] [readonly]
**delivery_days** | **int** | The number of days estimated for delivery, this will show the _actual_ delivery time if for example, the package gets shipped on a Friday | [optional] [readonly]
**estimated_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**carrier_delivery_days** | **string** | The carrier delivery days | [optional] [readonly]
**ship_date** | [**\DateTime**](\DateTime.md) | ship date | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
