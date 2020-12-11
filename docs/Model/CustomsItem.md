# # CustomsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customs_item_id** | **string** | A string that uniquely identifies the customs item | [readonly] 
**description** | **string** | A description of the item | [optional] [default to 'null']
**quantity** | **int** | The quantity of this item in the shipment. | [optional] [default to 0]
**value** | [**MonetaryValue**](MonetaryValue.md) | The declared customs value of each item | [optional] 
**harmonized_tariff_code** | **string** | The [Harmonized Tariff Code](https://en.wikipedia.org/wiki/Harmonized_System) of this item. | [optional] [default to 'null']
**country_of_origin** | **string** | The two-letter [ISO 3166-1 country code](https://en.wikipedia.org/wiki/ISO_3166-1) where this item originated | [optional] 
**unit_of_measure** | **string** |  | [optional] 
**sku** | **string** | The SKU (Stock Keeping Unit) of the customs item | [optional] 
**sku_description** | **string** | Description of the Custom Item&#39;s SKU | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


