# UpsertPushTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_template_id** | **string** | Id used by the client to identify a template. If multiple templates exist with the Id, all will be updated | 
**name** | **string** | Name of the template | [optional] 
**title** | **string** | Push message title | [optional] 
**message** | **string** | Push message | [optional] 
**payload** | [**\IterableIA\Model\JsObject**](JsObject.md) |  | [optional] 
**badge** | **string** | Badge to set for push notification | [optional] 
**locale** | [**\IterableIA\Model\IterableLocale**](IterableLocale.md) |  | [optional] 
**message_type_id** | **int** | Message Type Id | [optional] 
**sound** | **string** | Sound | [optional] 
**deeplink** | [**\IterableIA\Model\DeeplinkURI**](DeeplinkURI.md) |  | [optional] 
**creator_user_id** | **string** | Specify a specific creator user id (email). The email must be an existing member of the project. Defaults to the organization creator. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

