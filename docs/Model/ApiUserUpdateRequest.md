# ApiUserUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Either email or userId must be passed in to identify the user. If both are passed in, email takes precedence. | [optional] 
**data_fields** | **object** | Data fields to store in the user profile | [optional] 
**user_id** | **string** | Optional userId, typically your database generated id. Either email or userId must be specified. | [optional] 
**prefer_user_id** | **bool** | Create a new user with the specified userId if the user does not exist yet. | [optional] 
**merge_nested_objects** | **bool** | Merge top level objects instead of overwriting (default: false). e.g. if user profile has data: {mySettings:{mobile:true}} and change contact field has data: {mySettings:{email:true}}, the resulting profile: {mySettings:{mobile:true,email:true}} | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

