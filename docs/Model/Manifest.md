# # Manifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifest_id** | **string** | A string that uniquely identifies the manifest | [optional] [readonly] 
**form_id** | **string** | A string that uniquely identifies the form | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) | The date-time that the manifest was created | [optional] [readonly] 
**ship_date** | [**\DateTime**](\DateTime.md) | The date-time that the manifests shipments will be picked up | [optional] [readonly] 
**shipments** | **int** | The number of shipments that are included in this manifest | [optional] [readonly] 
**label_ids** | **string[]** | An array of the label ids used in this manifest. | [optional] [readonly] 
**warehouse_id** | **string** | A string that uniquely identifies the warehouse | [optional] [readonly] 
**submission_id** | **string** | A string that uniquely identifies the submission | [optional] [readonly] 
**carrier_id** | **string** | A string that uniquely identifies the carrier | [optional] [readonly] 
**manifest_download** | [**ManifestDownload**](ManifestDownload.md) |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


