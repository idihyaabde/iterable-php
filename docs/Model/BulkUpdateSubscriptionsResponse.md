# BulkUpdateSubscriptionsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success_count** | **int** | Number of users successfully updated | 
**fail_count** | **int** | Number of users that weren&#x27;t updated (due to invalid email or internal error) | 
**invalid_emails** | **string[]** | A list of emails that weren&#x27;t updated because they are invalid | 
**invalid_user_ids** | **string[]** | A list of userIds that weren&#x27;t updated because they are invalid | 
**valid_email_failures** | **string[]** | A list of emails that weren&#x27;t updated due to internal error | 
**valid_user_id_failures** | **string[]** | A list of userIds that weren&#x27;t updated due to internal error | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

