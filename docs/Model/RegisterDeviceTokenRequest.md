# RegisterDeviceTokenRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Either email or userId must be passed in to identify the user. If both are passed in, email takes precedence. | [optional] 
**device** | [**\IterableIA\Iterable\Model\Device**](Device.md) |  | 
**user_id** | **string** | Register device for a user with specified userId. Either email or userId must be specified. | [optional] 
**prefer_user_id** | **bool** | Create a new user with the specified userId if the user does not exist yet. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

