# IterableIA\PushApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendPushToTarget**](PushApi.md#sendpushtotarget) | **POST** /api/push/target | Send push notification to user

# **sendPushToTarget**
> \IterableIA\Model\IterableApiResponse sendPushToTarget($body)

Send push notification to user

Send a push notification to a specific user. Request data fields will override user profile data fields. A reference to the user profile is provided via the 'profile' field, to help resolve field collisions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TargetPushRequest(); // \IterableIA\Model\TargetPushRequest | Recipient and email id

try {
    $result = $apiInstance->sendPushToTarget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->sendPushToTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TargetPushRequest**](../Model/TargetPushRequest.md)| Recipient and email id |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

