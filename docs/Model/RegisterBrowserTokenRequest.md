# RegisterBrowserTokenRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | An email must be set unless a profile already exists with a userId set. In which case, a lookup from userId to email is performed. | [optional] 
**browser_token** | **string** | This is provided by Firebase Messaging javascript API. | 
**user_id** | **string** | Optional userId, typically your database generated id. Can be used in events/track api. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

