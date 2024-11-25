# Swagger\Client\EnvironmentApi

All URIs are relative to *https://virtserver.swaggerhub.com/VincentTshipamba/test/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getForecast**](EnvironmentApi.md#getForecast) | **GET** /temperature/forecast/{days} | 
[**getHeaterState**](EnvironmentApi.md#getHeaterState) | **GET** /temperature/{zoneId}/heater | 
[**getZoneTemperature**](EnvironmentApi.md#getZoneTemperature) | **GET** /temperature/{zoneId} | 
[**setHeaterState**](EnvironmentApi.md#setHeaterState) | **POST** /temperature/{zoneId}/heater/{state} | 
[**temperatureSummary**](EnvironmentApi.md#temperatureSummary) | **GET** /temperature | 


# **getForecast**
> \Swagger\Client\Model\ForecastResponse getForecast($days)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$days = 56; // int | 

try {
    $result = $apiInstance->getForecast($days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days** | **int**|  |

### Return type

[**\Swagger\Client\Model\ForecastResponse**](../Model/ForecastResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHeaterState**
> \Swagger\Client\Model\HeaterState getHeaterState($zone_id)



gets the state of the heater

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = "zone_id_example"; // string | 

try {
    $result = $apiInstance->getHeaterState($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getHeaterState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\HeaterState**](../Model/HeaterState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZoneTemperature**
> \Swagger\Client\Model\TemperatueZoneStatus getZoneTemperature($zone_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = "zone_id_example"; // string | 

try {
    $result = $apiInstance->getZoneTemperature($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getZoneTemperature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemperatueZoneStatus**](../Model/TemperatueZoneStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setHeaterState**
> \Swagger\Client\Model\ApiResponse setHeaterState($zone_id, $state)



turns the heater on or off

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = "zone_id_example"; // string | 
$state = "state_example"; // string | 

try {
    $result = $apiInstance->setHeaterState($zone_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->setHeaterState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **string**|  |
 **state** | **string**|  |

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **temperatureSummary**
> \Swagger\Client\Model\TemperatureSummary temperatureSummary()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->temperatureSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->temperatureSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TemperatureSummary**](../Model/TemperatureSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

