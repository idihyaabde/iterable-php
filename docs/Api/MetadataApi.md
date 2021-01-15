# IterableIA\MetadataApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](MetadataApi.md#calllist) | **GET** /api/metadata/{table} | List keys in a table
[**deleteMetadataKey**](MetadataApi.md#deletemetadatakey) | **DELETE** /api/metadata/{table}/{key} | Delete a single metadata key/value
[**deleteMetadataTable**](MetadataApi.md#deletemetadatatable) | **DELETE** /api/metadata/{table} | Delete a table
[**get**](MetadataApi.md#get) | **GET** /api/metadata/{table}/{key} | Get the metadata value of a single key
[**listTables**](MetadataApi.md#listtables) | **GET** /api/metadata | List available tables
[**put**](MetadataApi.md#put) | **PUT** /api/metadata/{table}/{key} | Create or replace metadata

# **callList**
> \IterableIA\Model\Listing callList($table, $next_marker)

List keys in a table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = "table_example"; // string | Table name [Alphanumeric, case insensitive]
$next_marker = "None"; // string | next result set id; returned by previous search if more hits exist

try {
    $result = $apiInstance->callList($table, $next_marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table** | **string**| Table name [Alphanumeric, case insensitive] |
 **next_marker** | **string**| next result set id; returned by previous search if more hits exist | [optional] [default to None]

### Return type

[**\IterableIA\Model\Listing**](../Model/Listing.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadataKey**
> \IterableIA\Model\IterableApiResponse deleteMetadataKey($table, $key)

Delete a single metadata key/value

Asynchronous. Deletes the specified item from the table. 200 response indicates a valid request that will be processed; data may not be deleted immediately. Use GET /api/metadata/{table}/{key} to verify completion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = "table_example"; // string | Table name [Alphanumeric, case insensitive]
$key = "key_example"; // string | Metadata key [Alphanumeric, case sensitive]

try {
    $result = $apiInstance->deleteMetadataKey($table, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->deleteMetadataKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table** | **string**| Table name [Alphanumeric, case insensitive] |
 **key** | **string**| Metadata key [Alphanumeric, case sensitive] |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadataTable**
> \IterableIA\Model\IterableApiResponse deleteMetadataTable($table)

Delete a table

Asynchronous. Deletes the table. 200 response indicates a valid request that will be processed; table may not be deleted immediately. Use GET /api/metadata/{table} to verify completion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = "table_example"; // string | Table name [Alphanumeric, case insensitive]

try {
    $result = $apiInstance->deleteMetadataTable($table);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->deleteMetadataTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table** | **string**| Table name [Alphanumeric, case insensitive] |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \IterableIA\Model\MetadataWithProperties get($table, $key)

Get the metadata value of a single key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = "table_example"; // string | Table name [Alphanumeric, case insensitive]
$key = "key_example"; // string | Metadata key [Alphanumeric, case sensitive]

try {
    $result = $apiInstance->get($table, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table** | **string**| Table name [Alphanumeric, case insensitive] |
 **key** | **string**| Metadata key [Alphanumeric, case sensitive] |

### Return type

[**\IterableIA\Model\MetadataWithProperties**](../Model/MetadataWithProperties.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTables**
> \IterableIA\Model\ListMetadataTablesResponse listTables()

List available tables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTables();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->listTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\IterableIA\Model\ListMetadataTablesResponse**](../Model/ListMetadataTablesResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> \IterableIA\Model\IterableApiResponse put($body, $table, $key)

Create or replace metadata

Asynchronous. Creates or replaces the item associated with the specified key. 200 response indicates a valid request that will be processed; updates may not be made immediately. Use GET /api/metadata/{table}/{key} to verify completion.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\PutMetadataRequest(); // \IterableIA\Model\PutMetadataRequest | Metadata properties
$table = "table_example"; // string | Table name [Alphanumeric, case insensitive]
$key = "key_example"; // string | Metadata key [Alphanumeric, case sensitive]

try {
    $result = $apiInstance->put($body, $table, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\PutMetadataRequest**](../Model/PutMetadataRequest.md)| Metadata properties |
 **table** | **string**| Table name [Alphanumeric, case insensitive] |
 **key** | **string**| Metadata key [Alphanumeric, case sensitive] |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

