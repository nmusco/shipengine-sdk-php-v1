# # DeprecatedManifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifest_id** | **string** | A string that uniquely identifies the manifest | [optional]
**form_id** | **string** | A string that uniquely identifies the form | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date-time that the manifest was created | [optional]
**ship_date** | [**\DateTime**](\DateTime.md) | The date-time that the manifests shipments will be picked up | [optional]
**shipments** | **int** | The number of shipments that are included in this manifest | [optional] [readonly]
**warehouse_id** | **string** | A string that uniquely identifies the warehouse | [optional]
**submission_id** | **string** | A string that uniquely identifies the submission | [optional]
**carrier_id** | **string** | A string that uniquely identifies the carrier | [optional]
**manifest_download** | [**ManifestDownload**](ManifestDownload.md) |  | [optional]
**label_ids** | **string[]** | An array of the label ids used in this manifest. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
