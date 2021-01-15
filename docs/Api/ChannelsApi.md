# IterableIA\ChannelsApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channels**](ChannelsApi.md#channels) | **GET** /api/channels | Get channels

# **channels**
> \IterableIA\Model\ChannelsResponse channels()

Get channels

Get all message channels within the project. <b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->channels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IterableIA\Model\ChannelsResponse**](../Model/ChannelsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

