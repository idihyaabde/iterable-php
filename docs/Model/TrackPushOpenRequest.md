# TrackPushOpenRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Either email or userId must be passed in to identify the user. If both are passed in, email takes precedence. | [optional] 
**user_id** | **string** | userId that was passed into the updateUser call | [optional] 
**campaign_id** | **int** | Campaign tied to open | 
**template_id** | **int** | Used in AB testing attribution | [optional] 
**message_id** | **string** | Iterable-generated Message ID | 
**created_at** | **int** | Timestamp of the open event. If unspecified, set to the time event was received  Expects a unix timestamp. | [optional] 
**data_fields** | **object** | Additional data associated with event | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

