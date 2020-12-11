# # CalculateRatesResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A string that uniquely identifies the shipment | [readonly] 
**carrier_id** | **string** | The carrier account that is billed for the shipping charges | [optional] 
**service_code** | **string** | The [carrier service](https://www.shipengine.com/docs/shipping/use-a-carrier-service/) used to ship the package, such as &#x60;fedex_ground&#x60;, &#x60;usps_first_class_mail&#x60;, &#x60;flat_rate_envelope&#x60;, etc. | [optional] 
**external_order_id** | **string** | ID that the Order Source assigned | [optional] 
**items** | [**ShipmentItem[]**](ShipmentItem.md) | Describe the packages included in this shipment as related to potential metadata that was imported from external order sources | [optional] 
**external_shipment_id** | **string** | You can optionally use this field to store your own identifier for this shipment.  &gt; **Warning:** The &#x60;external_shipment_id&#x60; is limited to 50 characters. Any additional characters will be truncated. | [optional] 
**ship_date** | [**\DateTime**](\DateTime.md) | The date that the shipment was (or will be) shippped.  ShipEngine will take the day of week into consideration. For example, if the carrier does not operate on Sundays, then a package that would have shipped on Sunday will ship on Monday instead. | 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time that the shipment was created in ShipEngine. | [readonly] 
**modified_at** | [**\DateTime**](\DateTime.md) | The date and time that the shipment was created or last modified. | [readonly] 
**shipment_status** | [**ShipmentStatus**](ShipmentStatus.md) | The current status of the shipment | [readonly] 
**ship_to** | [**Address**](Address.md) | The recipient&#39;s mailing address | [optional] 
**ship_from** | [**Address**](Address.md) | The shipment&#39;s origin address. If you frequently ship from the same location, consider [creating a warehouse](https://www.shipengine.com/docs/reference/create-warehouse/).  Then you can simply specify the &#x60;warehouse_id&#x60; rather than the complete address each time. | [optional] 
**warehouse_id** | **string** | The [warehouse](https://www.shipengine.com/docs/shipping/ship-from-a-warehouse/) that the shipment is being shipped from.  Either &#x60;warehouse_id&#x60; or &#x60;ship_from&#x60; must be specified. | [optional] 
**return_to** | [**Address**](Address.md) | The return address for this shipment.  Defaults to the &#x60;ship_from&#x60; address. | 
**confirmation** | [**DeliveryConfirmation**](DeliveryConfirmation.md) | The type of delivery confirmation that is required for this shipment. | 
**customs** | [**InternationalShipmentOptions**](InternationalShipmentOptions.md) | Customs information.  This is usually only needed for international shipments. | 
**advanced_options** | [**AdvancedShipmentOptions**](AdvancedShipmentOptions.md) | Advanced shipment options.  These are entirely optional. | 
**origin_type** | [**OriginType**](OriginType.md) | Indicates if the package will be picked up or dropped off by the carrier | [optional] 
**insurance_provider** | [**InsuranceProvider**](InsuranceProvider.md) | The insurance provider to use for any insured packages in the shipment. | 
**tags** | [**Tag[]**](Tag.md) | Arbitrary tags associated with this shipment.  Tags can be used to categorize shipments, and shipments can be queried by their tags. | [readonly] 
**order_source_code** | [**OrderSourceName**](OrderSourceName.md) |  | [optional] 
**packages** | [**Package[]**](Package.md) | The packages in the shipment.  &gt; **Note:** Some carriers only allow one package per shipment.  If you attempt to create a multi-package shipment for a carrier that doesn&#39;t allow it, an error will be returned. | 
**total_weight** | [**Weight**](Weight.md) | The combined weight of all packages in the shipment | [readonly] 
**rate_response** | [**RatesInformation**](RatesInformation.md) | The rates response | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


