# # GetTrackingLogFromLabelResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** |  |
**status_code** | **string** | Status code | [readonly]
**carrier_status_code** | **string** | Carrier status code | [readonly]
**estimated_delivery_date** | [**\DateTime**](\DateTime.md) |  |
**events** | [**\Nmusco\ShipEngine\v1\Models\TrackEvent[]**](TrackEvent.md) | The events that have occured during the lifetime of this tracking number. | [readonly]
**status_description** | **string** | Status description | [optional] [readonly]
**carrier_status_description** | **string** | carrier status description | [optional] [readonly]
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**actual_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**exception_description** | **string** | Exception description | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
