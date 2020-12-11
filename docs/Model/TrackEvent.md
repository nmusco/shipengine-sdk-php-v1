# # TrackEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**occurred_at** | [**\DateTime**](\DateTime.md) | Timestamp for carrier event | 
**carrier_occurred_at** | [**\DateTime**](\DateTime.md) | Carrier timestamp for the event, it is assumed to be the local time of where the event occurred. | [optional] 
**description** | **string** | Event description | [optional] [readonly] 
**city_locality** | **string** | City locality | [readonly] 
**state_province** | **string** | State province | [readonly] 
**postal_code** | **string** | Postal code | [readonly] 
**country_code** | **string** |  | [optional] 
**company_name** | **string** | Company Name | [optional] [readonly] 
**signer** | **string** | Signer information | [optional] [readonly] 
**event_code** | **string** | Event Code | [optional] 
**latitude** | **double** | Latitude coordinate of tracking event. | [optional] 
**longitude** | **double** | Longitude coordinate of tracking event. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


