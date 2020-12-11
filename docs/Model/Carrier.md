# # Carrier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_id** | **string** | A string that uniquely identifies the carrier. | [optional] [readonly] 
**carrier_code** | **string** | A string that uniquely identifies the carrier. | [optional] 
**account_number** | **string** | The account number that the carrier is connected to. | [optional] [readonly] 
**requires_funded_amount** | **bool** | Indicates whether the carrier requires funding to use its services | [optional] [readonly] 
**balance** | **double** | Current available balance | [optional] [readonly] 
**nickname** | **string** | Nickname given to the account when initially setting up the carrier. | [optional] [readonly] 
**friendly_name** | **string** | Screen readable name | [optional] [readonly] 
**primary** | **bool** | Is this the primary carrier that is used by default when no carrier is specified in label/shipment creation | [optional] [readonly] 
**has_multi_package_supporting_services** | **bool** | Carrier supports multiple packages per shipment | [optional] [readonly] 
**supports_label_messages** | **bool** | The carrier supports adding custom label messages to an order. | [optional] [readonly] 
**services** | [**Service[]**](Service.md) | A list of services that are offered by the carrier | [optional] [readonly] 
**packages** | [**PackageType[]**](PackageType.md) | A list of package types that are supported by the carrier | [optional] [readonly] 
**options** | [**CarrierAdvancedOption[]**](CarrierAdvancedOption.md) | A list of options that are available to that carrier | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


