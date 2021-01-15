# IterableIA\EmailApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEmailToTarget**](EmailApi.md#sendemailtotarget) | **POST** /api/email/target | Send an email to an email address
[**viewInBrowser**](EmailApi.md#viewinbrowser) | **GET** /api/email/viewInBrowser | View a previously sent email

# **sendEmailToTarget**
> \IterableIA\Model\IterableApiResponse sendEmailToTarget($body)

Send an email to an email address

Send an email to a specific email address. Request data fields will override user profile data fields. A reference to the user profile is provided via the 'profile' field, to help resolve field collisions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TargetEmailRequest(); // \IterableIA\Model\TargetEmailRequest | Recipient and email id

try {
    $result = $apiInstance->sendEmailToTarget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailToTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TargetEmailRequest**](../Model/TargetEmailRequest.md)| Recipient and email id |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewInBrowser**
> string viewInBrowser($email, $message_id)

View a previously sent email

View a rendered version of a previously sent email. <b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | user's email
$message_id = "message_id_example"; // string | id of sent message

try {
    $result = $apiInstance->viewInBrowser($email, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->viewInBrowser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| user&#x27;s email |
 **message_id** | **string**| id of sent message |

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

