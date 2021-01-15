# IterableIA\Iterable\CommerceApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trackPurchase**](CommerceApi.md#trackpurchase) | **POST** /api/commerce/trackPurchase | Track a purchase
[**updateCart**](CommerceApi.md#updatecart) | **POST** /api/commerce/updateCart | Update user &#x27;shoppingCartItems&#x27;

# **trackPurchase**
> \IterableIA\Iterable\Model\IterableApiResponse trackPurchase($body)

Track a purchase

Track purchase events. 'shoppingCartItems' field on the user profile is cleared. User profile is also updated if it already exists (created otherwise) using the user request field. Also, note that there is a soft limit on the number of unique fields a user can have (default is 1,000). Types of data fields must match the types sent in previous requests, across all data fields in the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\TrackPurchaseRequest(); // \IterableIA\Iterable\Model\TrackPurchaseRequest | purchase data

try {
    $result = $apiInstance->trackPurchase($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->trackPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\TrackPurchaseRequest**](../Model/TrackPurchaseRequest.md)| purchase data |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCart**
> \IterableIA\Iterable\Model\IterableApiResponse updateCart($body)

Update user 'shoppingCartItems'

Update the 'shoppingCartItems' field on the user profile with shopping cart items. User profile is updated if it already exists (created otherwise) via the user field. Types of data fields must match the types sent in previous requests, across all data fields in the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\CommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpdateCartRequest(); // \IterableIA\Iterable\Model\UpdateCartRequest | state of the cart

try {
    $result = $apiInstance->updateCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommerceApi->updateCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpdateCartRequest**](../Model/UpdateCartRequest.md)| state of the cart |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

