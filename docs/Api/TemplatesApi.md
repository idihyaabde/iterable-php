# IterableIA\Iterable\TemplatesApi

All URIs are relative to *https://api.iterable.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getByClientTemplateId**](TemplatesApi.md#getbyclienttemplateid) | **GET** /api/templates/getByClientTemplateId | Get an email template by Client Template ID
[**getEmailTemplate**](TemplatesApi.md#getemailtemplate) | **GET** /api/templates/email/get | Get an email template by templateId
[**getPushTemplate**](TemplatesApi.md#getpushtemplate) | **GET** /api/templates/push/get | Get a push template
[**getSMSTemplate**](TemplatesApi.md#getsmstemplate) | **GET** /api/templates/sms/get | Get an SMS template
[**getTemplates**](TemplatesApi.md#gettemplates) | **GET** /api/templates | Get templates
[**updateEmailTemplate**](TemplatesApi.md#updateemailtemplate) | **POST** /api/templates/email/update | Update email template
[**updatePushTemplate**](TemplatesApi.md#updatepushtemplate) | **POST** /api/templates/push/update | Update push template
[**updateSMSTemplate**](TemplatesApi.md#updatesmstemplate) | **POST** /api/templates/sms/update | Update SMS template
[**upsertEmailTemplate**](TemplatesApi.md#upsertemailtemplate) | **POST** /api/templates/email/upsert | Create email template
[**upsertPushTemplate**](TemplatesApi.md#upsertpushtemplate) | **POST** /api/templates/push/upsert | Create a push template
[**upsertSMSTemplate**](TemplatesApi.md#upsertsmstemplate) | **POST** /api/templates/sms/upsert | Create an SMS template

# **getByClientTemplateId**
> \IterableIA\Iterable\Model\ClientTemplateIdResponse getByClientTemplateId($client_template_id)

Get an email template by Client Template ID

<b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_template_id = "client_template_id_example"; // string | Client Template Id

try {
    $result = $apiInstance->getByClientTemplateId($client_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getByClientTemplateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_template_id** | **string**| Client Template Id |

### Return type

[**\IterableIA\Iterable\Model\ClientTemplateIdResponse**](../Model/ClientTemplateIdResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplate**
> \IterableIA\Iterable\Model\ApiEmailTemplateModel getEmailTemplate($template_id, $locale)

Get an email template by templateId

<b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 789; // int | Template ID
$locale = "locale_example"; // string | Locale of content to get

try {
    $result = $apiInstance->getEmailTemplate($template_id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template ID |
 **locale** | **string**| Locale of content to get | [optional]

### Return type

[**\IterableIA\Iterable\Model\ApiEmailTemplateModel**](../Model/ApiEmailTemplateModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushTemplate**
> \IterableIA\Iterable\Model\ApiPushTemplateModel getPushTemplate($template_id, $locale)

Get a push template

<b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 789; // int | Template ID
$locale = "locale_example"; // string | Locale of content to get

try {
    $result = $apiInstance->getPushTemplate($template_id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getPushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template ID |
 **locale** | **string**| Locale of content to get | [optional]

### Return type

[**\IterableIA\Iterable\Model\ApiPushTemplateModel**](../Model/ApiPushTemplateModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMSTemplate**
> \IterableIA\Iterable\Model\ApiSMSTemplateModel getSMSTemplate($template_id, $locale)

Get an SMS template

<b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 789; // int | Template ID
$locale = "locale_example"; // string | Locale of content to get

try {
    $result = $apiInstance->getSMSTemplate($template_id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getSMSTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template ID |
 **locale** | **string**| Locale of content to get | [optional]

### Return type

[**\IterableIA\Iterable\Model\ApiSMSTemplateModel**](../Model/ApiSMSTemplateModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \IterableIA\Iterable\Model\GetTemplatesResponse getTemplates($template_type, $message_medium, $start_date_time, $end_date_time)

Get templates

Get templates for a project. <b>Rate limit</b>: 100 requests/second, per project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_type = "template_type_example"; // string | Only retrieve templates associated with this template type
$message_medium = "message_medium_example"; // string | Only retrieve templates associated with this message medium
$start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get templates created at or after this date time (yyyy-MM-dd HH:mm:ss [ZZ])
$end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Get templates created before this date time (yyyy-MM-dd HH:mm:ss [ZZ])

try {
    $result = $apiInstance->getTemplates($template_type, $message_medium, $start_date_time, $end_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_type** | **string**| Only retrieve templates associated with this template type | [optional]
 **message_medium** | **string**| Only retrieve templates associated with this message medium | [optional]
 **start_date_time** | **\DateTime**| Get templates created at or after this date time (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]
 **end_date_time** | **\DateTime**| Get templates created before this date time (yyyy-MM-dd HH:mm:ss [ZZ]) | [optional]

### Return type

[**\IterableIA\Iterable\Model\GetTemplatesResponse**](../Model/GetTemplatesResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse updateEmailTemplate($body)

Update email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\ApiEmailTemplateModel(); // \IterableIA\Iterable\Model\ApiEmailTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->updateEmailTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\ApiEmailTemplateModel**](../Model/ApiEmailTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePushTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse updatePushTemplate($body)

Update push template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\ApiPushTemplateModel(); // \IterableIA\Iterable\Model\ApiPushTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->updatePushTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updatePushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\ApiPushTemplateModel**](../Model/ApiPushTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSMSTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse updateSMSTemplate($body)

Update SMS template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\ApiSMSTemplateModel(); // \IterableIA\Iterable\Model\ApiSMSTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->updateSMSTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateSMSTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\ApiSMSTemplateModel**](../Model/ApiSMSTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertEmailTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse upsertEmailTemplate($body)

Create email template

Create email template if it doesn't exist already, otherwise update all email templates which match the name provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpsertEmailTemplateModel(); // \IterableIA\Iterable\Model\UpsertEmailTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->upsertEmailTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->upsertEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpsertEmailTemplateModel**](../Model/UpsertEmailTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertPushTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse upsertPushTemplate($body)

Create a push template

Create a push template if it doesn't exist, otherwise update all push templates which match the name provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpsertPushTemplateModel(); // \IterableIA\Iterable\Model\UpsertPushTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->upsertPushTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->upsertPushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpsertPushTemplateModel**](../Model/UpsertPushTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertSMSTemplate**
> \IterableIA\Iterable\Model\IterableApiResponse upsertSMSTemplate($body)

Create an SMS template

Create an SMS template if it doesn't exist yet, otherwise update all SMS templates which match the name provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKey('Api_Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = IterableIA\Iterable\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api_Key', 'Bearer');

$apiInstance = new IterableIA\Iterable\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \IterableIA\Iterable\Model\UpsertSMSTemplateModel(); // \IterableIA\Iterable\Model\UpsertSMSTemplateModel | Only the fields specified will be updated

try {
    $result = $apiInstance->upsertSMSTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->upsertSMSTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\IterableIA\Iterable\Model\UpsertSMSTemplateModel**](../Model/UpsertSMSTemplateModel.md)| Only the fields specified will be updated |

### Return type

[**\IterableIA\Iterable\Model\IterableApiResponse**](../Model/IterableApiResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

