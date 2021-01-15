# ApiEmailTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | Email Template ID | 
**metadata** | [**\IterableIA\Iterable\Model\ApiTemplateResponse**](ApiTemplateResponse.md) |  | [optional] 
**name** | **string** | Name of the template | [optional] 
**from_name** | **string** | From name | [optional] 
**from_email** | **string** | From email (must be an authorized sender) | [optional] 
**reply_to_email** | **string** | Reply to email | [optional] 
**subject** | **string** | Subject | [optional] 
**preheader_text** | **string** | Preheader text | [optional] 
**cc_emails** | **string[]** | CC emails | [optional] 
**bcc_emails** | **string[]** | BCC emails | [optional] 
**html** | **string** | HTML contents | [optional] 
**plain_text** | **string** | Plain text contents | [optional] 
**google_analytics_campaign_name** | **string** | Google analytics utm_campaign value | [optional] 
**link_params** | [**\IterableIA\Iterable\Model\LinkParam[]**](LinkParam.md) | Parameters to append to each URL in html contents | [optional] 
**data_feed_id** | **float** | [Deprecated - use dataFeedIds instead] Id for data feed used in template rendering | [optional] 
**data_feed_ids** | **float[]** | Ids for data feeds used in template rendering | [optional] 
**cache_data_feed** | **float** | Cache data feed lookups for 1 hour | [optional] 
**merge_data_feed_context** | **float** | Merge data feed contents into user context, so fields be referenced by {{field}} instead of [[field]] | [optional] 
**client_template_id** | **string** | Client template Id. Used as a secondary key to reference the template | [optional] 
**locale** | [**\IterableIA\Iterable\Model\IterableLocale**](IterableLocale.md) |  | [optional] 
**message_type_id** | **float** | Message Type Id | [optional] 
**creator_user_id** | **string** | Creator User Id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

