# CreateCampaignRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**list_ids** | **float[]** |  | 
**template_id** | **float** |  | 
**suppression_list_ids** | **float[]** | Optional ids of lists of users that this campaign should not send emails to | [optional] 
**send_at** | **string** | When to send the message up to 7 days in the future. If in the past, email is sent immediately. Format is YYYY-MM-DD HH:MM:SS in UTC | [optional] 
**send_mode** | **string** | Send campaign based on project time zone or recipient time zone | [optional] 
**start_time_zone** | **string** | The starting time zone in for recipient time zone-based sends in IANA format (e.g. America/New_York, America/Los_Angeles, etc) | [optional] 
**default_time_zone** | **string** | The fallback time zone for recipient time zone-based sends if the recipient does not have time zone set in IANA format (e.g. America/New_York, America/Los_Angeles, etc) | [optional] 
**data_fields** | **object** | JSON object with additional data used to render data feed fields in specified template | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

