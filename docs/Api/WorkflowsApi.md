# IterableIA\WorkflowsApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**triggerWorkflow**](WorkflowsApi.md#triggerworkflow) | **POST** /api/workflows/triggerWorkflow | Trigger a workflow

# **triggerWorkflow**
> \IterableIA\Model\IterableApiResponse triggerWorkflow($body)

Trigger a workflow

Trigger a workflow. Triggering with a list is asynchronous. If a list trigger is in progress, it must finish before the same list can be triggered again for a particular workflow. The workflow stats may take several minutes to update if other workflows are running.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Model\TriggerWorkflowRequest(); // \IterableIA\Model\TriggerWorkflowRequest | Trigger workflow request

try {
    $result = $apiInstance->triggerWorkflow($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->triggerWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Model\TriggerWorkflowRequest**](../Model/TriggerWorkflowRequest.md)| Trigger workflow request |

### Return type

[**\IterableIA\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

