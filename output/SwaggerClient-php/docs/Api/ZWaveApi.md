# Swagger\Client\ZWaveApi

All URIs are relative to *https://virtserver.swaggerhub.com/VincentTshipamba/test/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLightingSummary**](ZWaveApi.md#getLightingSummary) | **GET** /lightingSummary | 
[**getSwitchState**](ZWaveApi.md#getSwitchState) | **GET** /lighting/switches/{deviceId} | 
[**setDimmer**](ZWaveApi.md#setDimmer) | **POST** /lighting/dimmers/{deviceId}/{value} | 
[**setDimmerTimer**](ZWaveApi.md#setDimmerTimer) | **POST** /lighting/dimmers/{deviceId}/{value}/timer/{timeunit} | 
[**setSwitch**](ZWaveApi.md#setSwitch) | **POST** /lighting/switches/{deviceId}/{value} | 
[**setSwitchTimer**](ZWaveApi.md#setSwitchTimer) | **POST** /lighting/switches/{deviceId}/{value}/timer/{minutes} | 


# **getLightingSummary**
> \Swagger\Client\Model\LightingSummary getLightingSummary()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLightingSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->getLightingSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LightingSummary**](../Model/LightingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwitchState**
> \Swagger\Client\Model\DeviceState getSwitchState($device_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getSwitchState($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->getSwitchState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeviceState**](../Model/DeviceState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDimmer**
> \Swagger\Client\Model\ApiResponse setDimmer($device_id, $value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | 
$value = 56; // int | 

try {
    $result = $apiInstance->setDimmer($device_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->setDimmer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |
 **value** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDimmerTimer**
> \Swagger\Client\Model\ApiResponse setDimmerTimer($device_id, $value, $timeunit, $units)



sets a dimmer to a specific value on a timer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | 
$value = 56; // int | 
$timeunit = 56; // int | 
$units = "milliseconds"; // string | 

try {
    $result = $apiInstance->setDimmerTimer($device_id, $value, $timeunit, $units);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->setDimmerTimer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |
 **value** | **int**|  |
 **timeunit** | **int**|  |
 **units** | **string**|  | [optional] [default to milliseconds]

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSwitch**
> \Swagger\Client\Model\ApiResponse setSwitch($device_id, $value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | 
$value = "value_example"; // string | 

try {
    $result = $apiInstance->setSwitch($device_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->setSwitch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |
 **value** | **string**|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSwitchTimer**
> \Swagger\Client\Model\ApiResponse setSwitchTimer($device_id, $value, $minutes)



sets a switch to a specific value on a timer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZWaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device_id = "device_id_example"; // string | 
$value = "value_example"; // string | 
$minutes = 56; // int | 

try {
    $result = $apiInstance->setSwitchTimer($device_id, $value, $minutes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZWaveApi->setSwitchTimer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |
 **value** | **string**|  |
 **minutes** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

