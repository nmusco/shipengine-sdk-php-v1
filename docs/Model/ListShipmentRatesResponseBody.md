# # ListShipmentRatesResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rates** | [**Rate[]**](Rate.md) | An array of shipment rates | [readonly]
**invalid_rates** | [**Rate[]**](Rate.md) | An array of invalid shipment rates | [readonly]
**rate_request_id** | **string** | A string that uniquely identifies the rate request | [readonly]
**shipment_id** | **string** | A string that uniquely identifies the shipment | [readonly]
**created_at** | **string** | When the rate was created |
**status** | [**RateResponseStatus**](RateResponseStatus.md) |  | [readonly]
**errors** | [**Error[]**](Error.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
