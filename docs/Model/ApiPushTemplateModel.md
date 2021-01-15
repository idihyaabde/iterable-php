# ApiPushTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | Push template ID | 
**created_at** | [**\DateTime**](\DateTime.md) | Date created [Read only] | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date last updated [Read only] | [optional] 
**name** | **string** | Name of the template | [optional] 
**title** | **string** | Push message title | [optional] 
**message** | **string** | Push message | [optional] 
**payload** | **object** | Payload to send with push notification | [optional] 
**badge** | **string** | Badge to set for push notification | [optional] 
**locale** | [**\IterableIA\Model\IterableLocale**](IterableLocale.md) |  | [optional] 
**message_type_id** | **int** | Message Type Id | [optional] 
**sound** | **string** | Sound | [optional] 
**deeplink** | [**\IterableIA\Model\DeeplinkURI**](DeeplinkURI.md) |  | [optional] 
**client_template_id** | **string** | Client template Id. Used as a secondary key to reference the template | [optional] 
**campaign_id** | **float** | Campaign ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

