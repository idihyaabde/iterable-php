# UpdateSubscriptionsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  | [optional] 
**user_id** | **string** |  | [optional] 
**email_list_ids** | **int[]** | Lists that a user is subscribed to | [optional] 
**unsubscribed_channel_ids** | **int[]** | Email channel ids to unsubscribe from | [optional] 
**unsubscribed_message_type_ids** | **int[]** | Individual message type ids to unsubscribe. This will not unsubscribe from the associated channel. | [optional] 
**campaign_id** | **int** | Campaign to attribute unsubscribes | [optional] 
**template_id** | **int** | Template to attribute unsubscribes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

