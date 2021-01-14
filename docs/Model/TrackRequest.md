# TrackRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Either email or userId must be passed in to identify the user. If both are passed in, email takes precedence. | [optional] 
**event_name** | **string** | Name of event | 
**id** | **string** | Optional event id. If an event exists with that id, the event will be updated. If none is specified, a new id will automatically be generated and returned. | [optional] 
**created_at** | **int** | Time event happened. Set to the time event was received if unspecified. Expects a unix timestamp. | [optional] 
**data_fields** | **object** | Additional data associated with event (i.e. item id, item amount) | [optional] 
**user_id** | **string** | userId that was passed into the updateUser call | [optional] 
**campaign_id** | **int** | Campaign tied to conversion | [optional] 
**template_id** | **int** | Template id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

