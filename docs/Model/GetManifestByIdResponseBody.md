# # GetManifestByIdResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifest_id** | **string** | A string that uniquely identifies the manifest | [readonly]
**form_id** | **string** | A string that uniquely identifies the form | [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | The date-time that the manifest was created | [readonly]
**ship_date** | [**\DateTime**](\DateTime.md) | The date-time that the manifests shipments will be picked up | [readonly]
**shipments** | **int** | The number of shipments that are included in this manifest | [readonly]
**label_ids** | **string[]** | An array of the label ids used in this manifest. | [readonly]
**warehouse_id** | **string** | A string that uniquely identifies the warehouse | [readonly]
**submission_id** | **string** | A string that uniquely identifies the submission | [readonly]
**carrier_id** | **string** | A string that uniquely identifies the carrier | [readonly]
**manifest_download** | [**ManifestDownload**](ManifestDownload.md) |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
