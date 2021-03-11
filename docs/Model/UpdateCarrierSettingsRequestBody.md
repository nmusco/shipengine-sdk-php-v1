# # UpdateCarrierSettingsRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nickname** | **string** | nickname | [optional]
**should_hide_account_number_on_archive_doc** | **bool** | Indicates if the account number should be hidden on the archive documentation | [optional]
**is_primary_account** | **bool** | Indicates if this is the primary UPS account | [optional]
**pickup_type** | [**UpsPickupType**](UpsPickupType.md) |  | [optional]
**smart_post_hub** | [**SmartPostHub**](SmartPostHub.md) |  | [optional]
**smart_post_endorsement** | [**AncillaryServiceEndorsement**](AncillaryServiceEndorsement.md) |  | [optional]
**include_barcode_with_order_number** | **bool** |  | [optional]
**receive_email_on_manifest_processing** | **bool** |  | [optional]
**use_carbon_neutral_shipping_program** | **bool** | The use carbon neutral shipping program | [optional]
**use_ground_freight_pricing** | **bool** | The use ground freight pricing | [optional]
**use_consolidation_services** | **bool** | The use consolidation services | [optional]
**use_order_number_on_mail_innovations_labels** | **bool** | The use order number on mail innovations labels | [optional]
**mail_innovations_endorsement** | [**AncillaryServiceEndorsement**](AncillaryServiceEndorsement.md) |  | [optional]
**mail_innovations_cost_center** | **string** | mail innovations cost center | [optional]
**use_negotiated_rates** | **bool** | The use negotiated rates | [optional]
**account_postal_code** | **string** | account postal code | [optional]
**invoice** | [**UpsInvoice**](UpsInvoice.md) | The invoice | [optional]
**email** | **string** | Email | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
