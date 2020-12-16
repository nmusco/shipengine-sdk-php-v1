# # TrackingInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** |  | [optional] 
**status_code** | **string** | Status code | [optional] [readonly] 
**status_description** | **string** | Status description | [optional] [readonly] 
**carrier_status_code** | **string** | Carrier status code | [optional] [readonly] 
**carrier_status_description** | **string** | carrier status description | [optional] [readonly] 
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**estimated_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**actual_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**exception_description** | **string** | Exception description | [optional] [readonly] 
**events** | [**\Nmusco\ShipEngine\v1\Models\TrackEvent[]**](TrackEvent.md) | The events that have occured during the lifetime of this tracking number. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


