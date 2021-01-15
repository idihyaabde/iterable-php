# IterableIA\Iterable\UsersApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateSubscriptions**](UsersApi.md#bulkupdatesubscriptions) | **POST** /api/users/bulkUpdateSubscriptions | Bulk update user subscriptions
[**bulkUpdateUser**](UsersApi.md#bulkupdateuser) | **POST** /api/users/bulkUpdate | Bulk update user data
[**deleteUser**](UsersApi.md#deleteuser) | **DELETE** /api/users/byUserId/{userId} | Delete user by userId
[**deleteUserByEmail**](UsersApi.md#deleteuserbyemail) | **DELETE** /api/users/{email} | Delete a user by email
[**disableDevice**](UsersApi.md#disabledevice) | **POST** /api/users/disableDevice | Disable pushes to a mobile device
[**forget**](UsersApi.md#forget) | **POST** /api/users/forget | Forget a user in compliance with GDPR
[**getForgottenUsers**](UsersApi.md#getforgottenusers) | **GET** /api/users/forgotten | Get forgotten users in compliance with GDPR
[**getSentMessages**](UsersApi.md#getsentmessages) | **GET** /api/users/getSentMessages | Get messages sent to a user
[**getUser**](UsersApi.md#getuser) | **GET** /api/users/byUserId | Get a user by userId
[**getUserByEmail**](UsersApi.md#getuserbyemail) | **GET** /api/users/{email} | Get a user by email
[**getUserByEmail2**](UsersApi.md#getuserbyemail2) | **GET** /api/users/getByEmail | Get a user by email
[**getUserByUserId**](UsersApi.md#getuserbyuserid) | **GET** /api/users/byUserId/{userId} | Get a user by userId
[**getUserFields**](UsersApi.md#getuserfields) | **GET** /api/users/getFields | Get all user fields
[**registerBrowserToken**](UsersApi.md#registerbrowsertoken) | **POST** /api/users/registerBrowserToken | Register a browser token for web push
[**registerDeviceToken**](UsersApi.md#registerdevicetoken) | **POST** /api/users/registerDeviceToken | Register a device token for push
[**unforget**](UsersApi.md#unforget) | **POST** /api/users/unforget | Unforget a user in compliance with GDPR
[**updateEmail**](UsersApi.md#updateemail) | **POST** /api/users/updateEmail | Update user email
[**updateSubscriptions**](UsersApi.md#updatesubscriptions) | **POST** /api/users/updateSubscriptions | Update user subscriptions
[**updateUser**](UsersApi.md#updateuser) | **POST** /api/users/update | Update user data

# **bulkUpdateSubscriptions**
> \IterableIA\Iterable\Model\BulkUpdateSubscriptionsResponse bulkUpdateSubscriptions($body)

Bulk update user subscriptions

<b>WARNING</b>: This will overwrite (instead of merging) existing data if the provided fields are not null.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\BulkUpdateSubscriptionsRequest(); // \IterableIA\Iterable\Model\BulkUpdateSubscriptionsRequest | Bulk subscriptions to update

try {
    $result = $apiInstance->bulkUpdateSubscriptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->bulkUpdateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\BulkUpdateSubscriptionsRequest**](../Model/BulkUpdateSubscriptionsRequest.md)| Bulk subscriptions to update |

### Return type

[**\IterableIA\Iterable\Model\BulkUpdateSubscriptionsResponse**](../Model/BulkUpdateSubscriptionsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkUpdateUser**
> \IterableIA\Iterable\Model\ListResponse bulkUpdateUser($body)

Bulk update user data

Bulk update user data. This will add the data if it doesn't exist yet. Data will be merged; missing fields are not deleted. Changing emailListIds, unsubscribedChannelIds, messageTypeIds through this endpoint will <b>NOT</b> generate unsubscribe events. However, the bulkUpdateSubscription will generate unsubscribe events. Also, note that there is a soft limit on the number of unique fields a user can have (default is 1,000). Types of data fields must match the types sent in previous requests, across all data fields in the project.<br>Note that bulk updates are processed separately from single-user calls (update, updateEmail, updateSubscriptions, etc). If the same user is modified using both bulk update and single-user calls made near the same time, the results may be inconsistent. It's important to use either only single-user calls or only bulk update calls around the same time for any given user.<br><b>Rate limit</b>: 10 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\BulkUpdateUsersRequest(); // \IterableIA\Iterable\Model\BulkUpdateUsersRequest | Users to update

try {
    $result = $apiInstance->bulkUpdateUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->bulkUpdateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\BulkUpdateUsersRequest**](../Model/BulkUpdateUsersRequest.md)| Users to update |

### Return type

[**\IterableIA\Iterable\Model\ListResponse**](../Model/ListResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \IterableIA\Iterable\Model\IterableApiResponse deleteUser($user_id)

Delete user by userId

Delete user by a userId. This will delete multiple users if they happen to share the same userId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserByEmail**
> \IterableIA\Iterable\Model\IterableApiResponse deleteUserByEmail($email)

Delete a user by email

Delete a specific user by email address. <b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | email

try {
    $result = $apiInstance->deleteUserByEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableDevice**
> \IterableIA\Iterable\Model\IterableApiResponse disableDevice($body)

Disable pushes to a mobile device

Manually disable push notifications to a device until it comes online again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\DisableDeviceRequest(); // \IterableIA\Iterable\Model\DisableDeviceRequest | Request to disable device

try {
    $result = $apiInstance->disableDevice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->disableDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\DisableDeviceRequest**](../Model/DisableDeviceRequest.md)| Request to disable device | [optional]

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forget**
> \IterableIA\Iterable\Model\IterableApiResponse forget($body)

Forget a user in compliance with GDPR

Add user to the forgotten users blacklist. Existing data is retained but new data for this user will be rejected.<br><b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UserRequest(); // \IterableIA\Iterable\Model\UserRequest | user's email to be added to blacklist.

try {
    $result = $apiInstance->forget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->forget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UserRequest**](../Model/UserRequest.md)| user&#x27;s email to be added to blacklist. |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForgottenUsers**
> \IterableIA\Iterable\Model\GetForgottenUserEmailsResponse getForgottenUsers()

Get forgotten users in compliance with GDPR

Get all user emails that are currently in the blacklist.<br><b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getForgottenUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getForgottenUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IterableIA\Iterable\Model\GetForgottenUserEmailsResponse**](../Model/GetForgottenUserEmailsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSentMessages**
> \IterableIA\Iterable\Model\GetSentMessagesResponse getSentMessages($email, $user_id, $limit, $campaign_id, $start_date_time, $end_date_time, $exclude_blast_campaigns, $message_medium)

Get messages sent to a user

Get messages sent to a user by email address or user ID. Returns 10 by default, up to 1,000. <b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | user's email, either email or userId must be specified
$user_id = "user_id_example"; // string | user's userId, either email or userId must be specified
$limit = 10; // int | max number of messages to return (default: 10, max limit: 1000)
$campaign_id = array(3.4); // float[] | only include messages from these campaigns
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start date time (yyyy-MM-dd HH:mm:ss ZZ)
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end date time (yyyy-MM-dd HH:mm:ss ZZ)
$exclude_blast_campaigns = false; // bool | exclude results coming from blast campaigns (ignored if campaignId is set)
$message_medium = "message_medium_example"; // string | only include messages of this type

try {
    $result = $apiInstance->getSentMessages($email, $user_id, $limit, $campaign_id, $start_date_time, $end_date_time, $exclude_blast_campaigns, $message_medium);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSentMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| user&#x27;s email, either email or userId must be specified | [optional]
 **user_id** | **string**| user&#x27;s userId, either email or userId must be specified | [optional]
 **limit** | **int**| max number of messages to return (default: 10, max limit: 1000) | [optional] [default to 10]
 **campaign_id** | [**float[]**](../Model/float.md)| only include messages from these campaigns | [optional]
 **start_date_time** | **\DateTime**| start date time (yyyy-MM-dd HH:mm:ss ZZ) | [optional]
 **end_date_time** | **\DateTime**| end date time (yyyy-MM-dd HH:mm:ss ZZ) | [optional]
 **exclude_blast_campaigns** | **bool**| exclude results coming from blast campaigns (ignored if campaignId is set) | [optional] [default to false]
 **message_medium** | **string**| only include messages of this type | [optional]

### Return type

[**\IterableIA\Iterable\Model\GetSentMessagesResponse**](../Model/GetSentMessagesResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \IterableIA\Iterable\Model\UserResponse getUser($user_id)

Get a user by userId

<b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  | [optional]

### Return type

[**\IterableIA\Iterable\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserByEmail**
> \IterableIA\Iterable\Model\UserResponse getUserByEmail($email)

Get a user by email

Get a user by their email address. <b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | email

try {
    $result = $apiInstance->getUserByEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |

### Return type

[**\IterableIA\Iterable\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserByEmail2**
> \IterableIA\Iterable\Model\UserResponse getUserByEmail2($email)

Get a user by email

<b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 

try {
    $result = $apiInstance->getUserByEmail2($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserByEmail2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]

### Return type

[**\IterableIA\Iterable\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserByUserId**
> \IterableIA\Iterable\Model\UserResponse getUserByUserId($user_id)

Get a user by userId

Get a user by your custom userId. <b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | userId

try {
    $result = $apiInstance->getUserByUserId($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserByUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| userId |

### Return type

[**\IterableIA\Iterable\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserFields**
> \IterableIA\Iterable\Model\GetUserFieldsResponse getUserFields()

Get all user fields

Get all user fields within a project. <b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IterableIA\Iterable\Model\GetUserFieldsResponse**](../Model/GetUserFieldsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerBrowserToken**
> \IterableIA\Iterable\Model\IterableApiResponse registerBrowserToken($body)

Register a browser token for web push

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\RegisterBrowserTokenRequest(); // \IterableIA\Iterable\Model\RegisterBrowserTokenRequest | Request to register browser

try {
    $result = $apiInstance->registerBrowserToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->registerBrowserToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\RegisterBrowserTokenRequest**](../Model/RegisterBrowserTokenRequest.md)| Request to register browser |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerDeviceToken**
> \IterableIA\Iterable\Model\IterableApiResponse registerDeviceToken($body)

Register a device token for push

Register a device token for push. This will add the data if it doesn't exist yet. It will also update data fields on the device. Data will be merged; missing fields are not deleted. Also, note that there is a soft limit on the number of unique fields a user can have (default is 1,000). Types of data fields must match the types sent in previous requests, across all data fields in the project.<br><b>Rate limit</b>: Not limited by default, but a sudden increase in the call rate by over 1000/sec may require us to set a rate limit for your API key. Please let us know if you expect a traffic spike.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\RegisterDeviceTokenRequest(); // \IterableIA\Iterable\Model\RegisterDeviceTokenRequest | Request to register device

try {
    $result = $apiInstance->registerDeviceToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->registerDeviceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\RegisterDeviceTokenRequest**](../Model/RegisterDeviceTokenRequest.md)| Request to register device |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unforget**
> \IterableIA\Iterable\Model\IterableApiResponse unforget($body)

Unforget a user in compliance with GDPR

Remove user from forgotten users blacklist. New data for this user will now be accepted. Previously deleted data is unrecoverable.<br><b>Rate limit</b>: 3 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UserRequest(); // \IterableIA\Iterable\Model\UserRequest | user's email to be removed from blacklist.

try {
    $result = $apiInstance->unforget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->unforget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UserRequest**](../Model/UserRequest.md)| user&#x27;s email to be removed from blacklist. |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmail**
> \IterableIA\Iterable\Model\IterableApiResponse updateEmail($body)

Update user email

Change a user's email address. All profile data and events will be migrated to the new email address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpdateEmailRequest(); // \IterableIA\Iterable\Model\UpdateEmailRequest | Update a user's email. All profile data and events will be migrated.

try {
    $result = $apiInstance->updateEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpdateEmailRequest**](../Model/UpdateEmailRequest.md)| Update a user&#x27;s email. All profile data and events will be migrated. |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscriptions**
> \IterableIA\Iterable\Model\IterableApiResponse updateSubscriptions($body)

Update user subscriptions

Update user subscriptions. <b>NOTE</b>: Overwrites existing data if the field is provided and not null.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpdateSubscriptionsRequest(); // \IterableIA\Iterable\Model\UpdateSubscriptionsRequest | Subscriptions to update

try {
    $result = $apiInstance->updateSubscriptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpdateSubscriptionsRequest**](../Model/UpdateSubscriptionsRequest.md)| Subscriptions to update |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \IterableIA\Iterable\Model\IterableApiResponse updateUser($body)

Update user data

Update user data or adds a user if none exists. Data is merged - missing fields are not deleted. Please note there is a soft limit (default: 1,000) on the number of unique fields users can have. Types of data fields must match the types sent in previous requests, across all data fields in the project.<br><b>Rate limit</b>: 500 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\ApiUserUpdateRequest(); // \IterableIA\Iterable\Model\ApiUserUpdateRequest | user object

try {
    $result = $apiInstance->updateUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\ApiUserUpdateRequest**](../Model/ApiUserUpdateRequest.md)| user object |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

