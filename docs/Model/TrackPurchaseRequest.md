# TrackPurchaseRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Optional purchase id. If a purchase exists with that id, the purchase will be updated. If none is specified, a new id will automatically be generated and returned. | [optional] 
**user** | [**\IterableIA\Iterable\Model\ApiUserUpdateRequest**](ApiUserUpdateRequest.md) |  | 
**items** | [**\IterableIA\Iterable\Model\CommerceItem[]**](CommerceItem.md) |  | 
**campaign_id** | **int** |  | [optional] 
**template_id** | **int** | Used in AB testing attribution | [optional] 
**total** | **double** | Total order dollar amount | 
**created_at** | **int** | Time event happened. Set to the time event was received if unspecified. Expects a Unix timestamp. | [optional] 
**data_fields** | **object** | Additional fields to be tracked. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

