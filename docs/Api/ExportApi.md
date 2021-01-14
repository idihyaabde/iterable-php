# IterableIA\Iterable\ExportApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportDataCsv**](ExportApi.md#exportdatacsv) | **GET** /api/export/data.csv | Export data to CSV
[**exportDataJson**](ExportApi.md#exportdatajson) | **GET** /api/export/data.json | Export data to JSON
[**exportUserEventsJson**](ExportApi.md#exportusereventsjson) | **GET** /api/export/userEvents | Export user events

# **exportDataCsv**
> string exportDataCsv($data_type_name, $range, $delimiter, $start_date_time, $end_date_time, $omit_fields, $only_fields, $campaign_id)

Export data to CSV

Export campaign analytics data in CSV format. Use of either 'range' or 'startDateTime' and 'endDateTime' is required.<br/><b>Rate limit</b>: 4 requests/minute, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_type_name = "data_type_name_example"; // string | data type name
$range = "Today"; // string | date range, uses UTC time
$delimiter = ","; // string | CSV filter delimiter
$start_date_time = "start_date_time_example"; // string | Export starting from (>=) (yyyy-MM-dd HH:mm:ss [ZZ])
$end_date_time = "end_date_time_example"; // string | Export ending at (<) (yyyy-MM-dd HH:mm:ss [ZZ])
$omit_fields = "omit_fields_example"; // string | Fields to omit (comma separated)
$only_fields = array("only_fields_example"); // string[] | If non-empty, will only export these fields
$campaign_id = 789; // int | If provided, only export data from this campaign

try {
    $result = $apiInstance->exportDataCsv($data_type_name, $range, $delimiter, $start_date_time, $end_date_time, $omit_fields, $only_fields, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDataCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_type_name** | **string**| data type name |
 **range** | **string**| date range, uses UTC time | [optional] [default to Today]
 **delimiter** | **string**| CSV filter delimiter | [optional] [default to ,]
 **start_date_time** | **string**| Export starting from (&gt;&#x3D;) (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]
 **end_date_time** | **string**| Export ending at (&lt;) (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]
 **omit_fields** | **string**| Fields to omit (comma separated) | [optional]
 **only_fields** | [**string[]**](../Model/string.md)| If non-empty, will only export these fields | [optional]
 **campaign_id** | **int**| If provided, only export data from this campaign | [optional]

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportDataJson**
> string exportDataJson($data_type_name, $range, $start_date_time, $end_date_time, $omit_fields, $only_fields, $campaign_id)

Export data to JSON

Export campaign analytics data in JSON format, one entry per line. Use of either 'range' or 'startDateTime' and 'endDateTime' is required.<br/><b>Rate limit</b>: 4 requests/minute, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_type_name = "data_type_name_example"; // string | data type name
$range = "Today"; // string | date range, uses UTC time
$start_date_time = "start_date_time_example"; // string | export starting from (&gt;=) (yyyy-MM-dd HH:mm:ss [ZZ])
$end_date_time = "end_date_time_example"; // string | export ending at (&lt;) (yyyy-MM-dd HH:mm:ss [ZZ])
$omit_fields = "omit_fields_example"; // string | fields to omit (comma separated)
$only_fields = array("only_fields_example"); // string[] | if nonempty, will only export these fields
$campaign_id = 789; // int | if provided, only export data from this campaign

try {
    $result = $apiInstance->exportDataJson($data_type_name, $range, $start_date_time, $end_date_time, $omit_fields, $only_fields, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDataJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_type_name** | **string**| data type name |
 **range** | **string**| date range, uses UTC time | [optional] [default to Today]
 **start_date_time** | **string**| export starting from (&amp;gt;&#x3D;) (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]
 **end_date_time** | **string**| export ending at (&amp;lt;) (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]
 **omit_fields** | **string**| fields to omit (comma separated) | [optional]
 **only_fields** | [**string[]**](../Model/string.md)| if nonempty, will only export these fields | [optional]
 **campaign_id** | **int**| if provided, only export data from this campaign | [optional]

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/x-json-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportUserEventsJson**
> string exportUserEventsJson($email, $include_custom_events)

Export user events

Export all events in JSON format for a user. One event per line.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | email
$include_custom_events = false; // bool | Include Custom Events

try {
    $result = $apiInstance->exportUserEventsJson($email, $include_custom_events);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportUserEventsJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |
 **include_custom_events** | **bool**| Include Custom Events | [optional] [default to false]

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/x-json-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

