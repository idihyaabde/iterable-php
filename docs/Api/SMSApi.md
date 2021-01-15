# IterableIA\SMSApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendSMSToTarget**](SMSApi.md#sendsmstotarget) | **POST** /api/sms/target | Send SMS notification to user

# **sendSMSToTarget**
> \IterableIA\Model\IterableApiResponse sendSMSToTarget($body)

Send SMS notification to user

Send an SMS notification to a specific user. Note that this API is typically used for transactional messaging. Request data fields will override user profile data fields.A reference to the user profile is provided via the 'profile' field, to help resolve field collisions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TargetSMSRequest(); // \IterableIA\Model\TargetSMSRequest | Recipient and email ID

try {
    $result = $apiInstance->sendSMSToTarget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->sendSMSToTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TargetSMSRequest**](../Model/TargetSMSRequest.md)| Recipient and email ID |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

