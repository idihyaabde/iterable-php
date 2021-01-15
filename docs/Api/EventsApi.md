# IterableIA\EventsApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inAppConsume**](EventsApi.md#inappconsume) | **POST** /api/events/inAppConsume | Consume an in-app notification
[**track**](EventsApi.md#track) | **POST** /api/events/track | Track an event
[**trackBulk**](EventsApi.md#trackbulk) | **POST** /api/events/trackBulk | Bulk track events
[**trackInAppClick**](EventsApi.md#trackinappclick) | **POST** /api/events/trackInAppClick | Track an in-app click
[**trackInAppOpen**](EventsApi.md#trackinappopen) | **POST** /api/events/trackInAppOpen | Track an in-app open
[**trackPushOpen**](EventsApi.md#trackpushopen) | **POST** /api/events/trackPushOpen | Track a mobile push open
[**trackWebPushClick**](EventsApi.md#trackwebpushclick) | **POST** /api/events/trackWebPushClick | Track a web push click
[**userEvents**](EventsApi.md#userevents) | **GET** /api/events/{email} | Get user events

# **inAppConsume**
> \IterableIA\Model\IterableApiResponse inAppConsume($body)

Consume an in-app notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\InAppEventRequest(); // \IterableIA\Model\InAppEventRequest | In-app notification to consume

try {
    $result = $apiInstance->inAppConsume($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->inAppConsume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\InAppEventRequest**](../Model/InAppEventRequest.md)| In-app notification to consume |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **track**
> \IterableIA\Model\IterableApiResponse track($body)

Track an event

Events are created asynchronously and <b>processed separately from single event (non-bulk) endpoint</b>. Thus, if you need to make sure events are tracked in order, it is recommended that all of them are sent to the same endpoint (either bulk or non-bulk). <br/>Please note there is a soft limit (default is 8,000) on the number of unique fields a custom event can have. Types of data fields must match the types sent in previous requests, across all data fields in the project.<br/><b>Rate limit</b>: 2000 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TrackRequest(); // \IterableIA\Model\TrackRequest | Event to track

try {
    $result = $apiInstance->track($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->track: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TrackRequest**](../Model/TrackRequest.md)| Event to track |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackBulk**
> \IterableIA\Model\BulkTrackResponse trackBulk($body)

Bulk track events

Events are created asynchronously and <b>processed separately from single event (non-bulk) endpoint</b>. Thus, if you need to make sure events are tracked in order, it is recommended that all of them are sent to the same endpoint (either bulk or non-bulk). <br /> Please note there is a soft limit (default is 8,000) on the number of unique fields a custom event can have. Types of data fields must match the types sent in previous requests, across all data fields in the project.<br/><b>Rate limit</b>: 10 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\BulkTrackRequest(); // \IterableIA\Model\BulkTrackRequest | Events to track

try {
    $result = $apiInstance->trackBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\BulkTrackRequest**](../Model/BulkTrackRequest.md)| Events to track |

### Return type

[**\IterableIA\Model\BulkTrackResponse**](../Model/BulkTrackResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackInAppClick**
> \IterableIA\Model\IterableApiResponse trackInAppClick($body)

Track an in-app click

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\InAppClickRequest(); // \IterableIA\Model\InAppClickRequest | In-app click to track

try {
    $result = $apiInstance->trackInAppClick($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackInAppClick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\InAppClickRequest**](../Model/InAppClickRequest.md)| In-app click to track |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackInAppOpen**
> \IterableIA\Model\IterableApiResponse trackInAppOpen($body)

Track an in-app open

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\InAppEventRequest(); // \IterableIA\Model\InAppEventRequest | In-app open to track

try {
    $result = $apiInstance->trackInAppOpen($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackInAppOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\InAppEventRequest**](../Model/InAppEventRequest.md)| In-app open to track |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackPushOpen**
> \IterableIA\Model\IterableApiResponse trackPushOpen($body)

Track a mobile push open

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TrackPushOpenRequest(); // \IterableIA\Model\TrackPushOpenRequest | Push open to track

try {
    $result = $apiInstance->trackPushOpen($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackPushOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TrackPushOpenRequest**](../Model/TrackPushOpenRequest.md)| Push open to track |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackWebPushClick**
> \IterableIA\Model\IterableApiResponse trackWebPushClick($body)

Track a web push click

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\WebPushClickEventRequest(); // \IterableIA\Model\WebPushClickEventRequest | Web Push click to track

try {
    $result = $apiInstance->trackWebPushClick($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackWebPushClick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\WebPushClickEventRequest**](../Model/WebPushClickEventRequest.md)| Web Push click to track |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEvents**
> \IterableIA\Model\GetEventsResponse userEvents($email, $limit)

Get user events

Get events for a specific user. <b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email of the user whose events you are retrieving.
$limit = 30; // int | The number of events to retrieve.  (Max is 200)

try {
    $result = $apiInstance->userEvents($email, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->userEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email of the user whose events you are retrieving. |
 **limit** | **int**| The number of events to retrieve.  (Max is 200) | [optional] [default to 30]

### Return type

[**\IterableIA\Model\GetEventsResponse**](../Model/GetEventsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

