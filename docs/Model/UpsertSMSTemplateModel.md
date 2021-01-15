# UpsertSMSTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_template_id** | **string** | Id used by the client to identify a template. If multiple templates exist with the Id, all will be updated | 
**name** | **string** | Name of the template | [optional] 
**message** | **string** | SMS message | [optional] 
**locale** | [**\IterableIA\Iterable\Model\IterableLocale**](IterableLocale.md) |  | [optional] 
**message_type_id** | **int** | Message Type Id | [optional] 
**image_url** | **string** | Image Url | [optional] 
**creator_user_id** | **string** | Specify a specific creator user id (email). The email must be an existing member of the project. Defaults to the organization creator. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

