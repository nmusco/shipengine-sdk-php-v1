# # AdvancedShipmentOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_to_account** | **string** | This field is used to [bill shipping costs to a third party](https://www.shipengine.com/docs/shipping/bill-to-third-party/).  This field must be used in conjunction with the &#x60;bill_to_country_code&#x60;, &#x60;bill_to_party&#x60;, and &#x60;bill_to_postal_code&#x60; fields. | [optional] [default to 'null']
**bill_to_country_code** | **string** | The two-letter [ISO 3166-1 country code](https://en.wikipedia.org/wiki/ISO_3166-1) of the third-party that is responsible for shipping costs. | [optional]
**bill_to_party** | [**BillToParty**](BillToParty.md) | Indicates whether to bill shipping costs to the recipient or to a third-party.  When billing to a third-party, the &#x60;bill_to_account&#x60;, &#x60;bill_to_country_code&#x60;, and &#x60;bill_to_postal_code&#x60; fields must also be set. | [optional]
**bill_to_postal_code** | **string** | The postal code of the third-party that is responsible for shipping costs. | [optional] [default to 'null']
**contains_alcohol** | **bool** | Indicates that the shipment contains alcohol. | [optional] [default to false]
**delivered_duty_paid** | **bool** | Indicates that the shipper is paying the international delivery duties for this shipment.  This option is supported by UPS, FedEx, and DHL Express. | [optional] [default to false]
**dry_ice** | **bool** | Indicates if the shipment contain dry ice | [optional] [default to false]
**dry_ice_weight** | [**Weight**](Weight.md) | The weight of the dry ice in the shipment | [optional]
**non_machinable** | **bool** | Indicates that the package cannot be processed automatically because it is too large or irregularly shaped. This is primarily for USPS shipments.  See [Section 1.2 of the USPS parcel standards](https://pe.usps.com/text/dmm300/101.htm#ep1047495) for details. | [optional] [default to false]
**saturday_delivery** | **bool** | Enables Saturday delivery, if supported by the carrier. | [optional] [default to false]
**use_ups_ground_freight_pricing** | **bool** | Whether to use [UPS Ground Freight pricing](https://www.shipengine.com/docs/shipping/ups-ground-freight/).  If enabled, then a &#x60;freight_class&#x60; must also be specified. | [optional]
**freight_class** | **string** | The National Motor Freight Traffic Association [freight class](http://www.nmfta.org/pages/nmfc?AspxAutoDetectCookieSupport&#x3D;1), such as \&quot;77.5\&quot;, \&quot;110\&quot;, or \&quot;250\&quot;. | [optional] [default to 'null']
**custom_field1** | **string** | An arbitrary field that can be used to store information about the shipment. | [optional] [default to 'null']
**custom_field2** | **string** | An arbitrary field that can be used to store information about the shipment. | [optional] [default to 'null']
**custom_field3** | **string** | An arbitrary field that can be used to store information about the shipment. | [optional] [default to 'null']
**origin_type** | [**OriginType**](OriginType.md) |  | [optional]
**collect_on_delivery** | [**\Nmusco\ShipEngine\v1\Models\CollectOnDelivery**](CollectOnDelivery.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
