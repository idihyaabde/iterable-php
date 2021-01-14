# TargetPushRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** |  | 
**recipient_email** | **string** |  | 
**data_fields** | **object** | JSON object containing fields to merge into email template | [optional] 
**send_at** | **string** | Schedule the message for up to 365 days in the future. If set in the past, message is sent immediately. Format is YYYY-MM-DD HH:MM:SS in UTC | [optional] 
**allow_repeat_marketing_sends** | **bool** | Allow repeat marketing sends? Defaults to true. | [optional] 
**metadata** | **object** | Metadata to pass back via system webhooks. Not used for rendering | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

