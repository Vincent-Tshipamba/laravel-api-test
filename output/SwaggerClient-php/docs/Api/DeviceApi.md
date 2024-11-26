# Swagger\Client\DeviceApi

All URIs are relative to *https://virtserver.swaggerhub.com/VincentTshipamba/test/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDevices**](DeviceApi.md#getDevices) | **GET** /devices | 
[**register**](DeviceApi.md#register) | **POST** /devices | 


# **getDevices**
> string[] getDevices($skip, $limit)



returns all registered devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$skip = 56; // int | number of records to skip
$limit = 56; // int | max number of records to return

try {
    $result = $apiInstance->getDevices($skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| number of records to skip | [optional]
 **limit** | **int**| max number of records to return | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> register($device)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device = new \Swagger\Client\Model\DeviceRegistrationInfo(); // \Swagger\Client\Model\DeviceRegistrationInfo | 

try {
    $apiInstance->register($device);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\Swagger\Client\Model\DeviceRegistrationInfo**](../Model/DeviceRegistrationInfo.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

