# UpsertEmailTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_template_id** | **string** | Id used by the client to identify a template. If multiple templates exist with the Id, all will be updated | 
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
**link_params** | [**\IterableIA\Model\LinkParam[]**](LinkParam.md) | Parameters to append to each URL in html contents | [optional] 
**data_feed_id** | **int** | [Deprecated - use dataFeedIds instead] Id for data feed used in template rendering | [optional] 
**data_feed_ids** | **float[]** | Ids for data feeds used in template rendering | [optional] 
**cache_data_feed** | **float** | Cache data feed lookups for 1 hour | [optional] 
**merge_data_feed_context** | **bool** | Merge data feed contents into user context, so fields be referenced by {{field}} instead of [[field]] | [optional] 
**locale** | [**\IterableIA\Model\IterableLocale**](IterableLocale.md) |  | [optional] 
**message_type_id** | **int** | Message Type Id | [optional] 
**creator_user_id** | **string** | Specify a specific creator user id (email). The email must be an existing member of the project. Defaults to the organization creator. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

