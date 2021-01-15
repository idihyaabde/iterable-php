# IterableIA\InAppApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessages**](InAppApi.md#getmessages) | **GET** /api/inApp/getMessages | Get in-app messages for user
[**sendInAppToTarget**](InAppApi.md#sendinapptotarget) | **POST** /api/inApp/target | Send an in-app notification to a user

# **getMessages**
> \IterableIA\Model\ApiInAppMessagesResponse getMessages($count, $email, $user_id)

Get in-app messages for user

Get in-app messages for displaying to a user on mobile or web.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\InAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of messages to fetch
$email = "email_example"; // string | email of user to get messages for. Either email or userId must be specified
$user_id = "user_id_example"; // string | userId of user to get message for.

try {
    $result = $apiInstance->getMessages($count, $email, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of messages to fetch |
 **email** | **string**| email of user to get messages for. Either email or userId must be specified | [optional]
 **user_id** | **string**| userId of user to get message for. | [optional]

### Return type

[**\IterableIA\Model\ApiInAppMessagesResponse**](../Model/ApiInAppMessagesResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendInAppToTarget**
> \IterableIA\Model\IterableApiResponse sendInAppToTarget($body)

Send an in-app notification to a user

Send an in-app notification to a specific user. Request data fields will override user profile data fields. A reference to the user profile is provided via the 'profile' field, to help resolve field collisions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\InAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TargetInAppRequest(); // \IterableIA\Model\TargetInAppRequest | Recipient and email id

try {
    $result = $apiInstance->sendInAppToTarget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppApi->sendInAppToTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TargetInAppRequest**](../Model/TargetInAppRequest.md)| Recipient and email id |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

