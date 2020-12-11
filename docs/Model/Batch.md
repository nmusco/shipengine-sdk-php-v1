# # Batch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label_layout** | [**LabelLayout**](LabelLayout.md) | label layout | [readonly] 
**label_format** | [**LabelFormat**](LabelFormat.md) |  | [readonly] 
**batch_id** | **string** | A string that uniquely identifies the batch | [readonly] 
**batch_number** | **string** | The batch number. | [readonly] 
**external_batch_id** | **string** | A string that uniquely identifies the external batch | [readonly] 
**batch_notes** | **string** | Custom notes you can add for each created batch | [readonly] [default to '']
**created_at** | [**\DateTime**](\DateTime.md) | The date and time the batch was created in ShipEngine | [readonly] 
**processed_at** | [**\DateTime**](\DateTime.md) | The date and time the batch was processed in ShipEngine | [readonly] 
**errors** | **int** | The number of errors that occurred while generating the batch | [readonly] 
**warnings** | **int** | The number of warnings that occurred while generating the batch | [readonly] 
**completed** | **int** | The number of labels generated in the batch | [readonly] 
**forms** | **int** | The number of forms for customs that are available for download | [readonly] 
**count** | **int** | The total of errors, warnings, and completed properties | [readonly] 
**batch_shipments_url** | [**OptionalLink**](OptionalLink.md) | The batch shipments endpoint | 
**batch_labels_url** | [**OptionalLink**](OptionalLink.md) | Link to batch labels query | 
**batch_errors_url** | [**OptionalLink**](OptionalLink.md) | Link to batch errors endpoint | [readonly] 
**label_download** | [**LabelDownload**](LabelDownload.md) | The label download for the batch | [readonly] 
**form_download** | [**OptionalLink**](OptionalLink.md) | The form download for any customs that are needed | [readonly] 
**status** | [**BatchStatus**](BatchStatus.md) |  | [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


