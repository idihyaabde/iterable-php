# IterableIA\Iterable\ExperimentsApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExperimentMetrics**](ExperimentsApi.md#getexperimentmetrics) | **GET** /api/experiments/metrics | Get metrics for experiments

# **getExperimentMetrics**
> \IterableIA\Iterable\Model\ExperimentMetricsResponse getExperimentMetrics($experiment_id, $campaign_id, $start_date_time, $end_date_time)

Get metrics for experiments

Get metrics for a single experiment or for multiple experiments. Note that we currently only support exporting email experiment metrics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\ExperimentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experiment_id = array(3.4); // float[] | Experiment to export. Specify multiple experimentId query parameters to export multiple experiments.
$campaign_id = array(3.4); // float[] | Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns.
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | export starting from (>=)
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | export ending at (<=)

try {
    $result = $apiInstance->getExperimentMetrics($experiment_id, $campaign_id, $start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExperimentsApi->getExperimentMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **experiment_id** | [**float[]**](../Model/float.md)| Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. | [optional]
 **campaign_id** | [**float[]**](../Model/float.md)| Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. | [optional]
 **start_date_time** | **\DateTime**| export starting from (&gt;&#x3D;) | [optional]
 **end_date_time** | **\DateTime**| export ending at (&lt;&#x3D;) | [optional]

### Return type

[**\IterableIA\Iterable\Model\ExperimentMetricsResponse**](../Model/ExperimentMetricsResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

