# # AddressValidationResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**AddressValidationStatus**](AddressValidationStatus.md) |  |
**original_address** | [**Address**](Address.md) | The original address that was sent for validation |
**matched_address** | [**Address**](Address.md) | The matched address found by the Shipengine API | [readonly]
**messages** | [**\Nmusco\ShipEngine\v1\Models\ResponseMessage[]**](ResponseMessage.md) | The list of messages that were generated during the address validation request. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
