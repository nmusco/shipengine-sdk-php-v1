# # CreateManifestResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifests** | [**\Nmusco\ShipEngine\v1\Model\Manifest[]**](Manifest.md) |  | [optional] 
**manifest_id** | **string** | A string that uniquely identifies the manifest | 
**form_id** | **string** | A string that uniquely identifies the form | 
**created_at** | [**\DateTime**](\DateTime.md) | The date-time that the manifest was created | 
**ship_date** | [**\DateTime**](\DateTime.md) | The date-time that the manifests shipments will be picked up | 
**shipments** | **int** | The number of shipments that are included in this manifest | [readonly] 
**warehouse_id** | **string** | A string that uniquely identifies the warehouse | 
**submission_id** | **string** | A string that uniquely identifies the submission | 
**carrier_id** | **string** | A string that uniquely identifies the carrier | 
**manifest_download** | [**ManifestDownload**](ManifestDownload.md) |  | 
**label_ids** | **string[]** | An array of the label ids used in this manifest. | [optional] [readonly] 
**request_id** | **string** | A UUID that uniquely identifies the request id. This can be given to the support team to help debug non-trivial issues that may occur | 
**errors** | [**Error[]**](Error.md) | The errors associated with the failed API call | [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


