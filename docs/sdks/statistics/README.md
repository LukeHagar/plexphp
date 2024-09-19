# Statistics

## Overview

API Calls that perform operations with Plex Media Server Statistics


### Available Operations

* [getStatistics](#getstatistics) - Get Media Statistics
* [getResourcesStatistics](#getresourcesstatistics) - Get Resources Statistics
* [getBandwidthStatistics](#getbandwidthstatistics) - Get Bandwidth Statistics

## getStatistics

This will return the media statistics for the server

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {

    $response = $sdk->statistics->getStatistics(4);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *int*                                                                                     | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetStatisticsResponse](../../Models/Operations/GetStatisticsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetStatisticsBadRequest                | 400                                           | application/json                              |
| Errors\GetStatisticsUnauthorized              | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getResourcesStatistics

This will return the resources for the server

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {

    $response = $sdk->statistics->getResourcesStatistics(4);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *int*                                                                                     | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetResourcesStatisticsResponse](../../Models/Operations/GetResourcesStatisticsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetResourcesStatisticsBadRequest       | 400                                           | application/json                              |
| Errors\GetResourcesStatisticsUnauthorized     | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getBandwidthStatistics

This will return the bandwidth statistics for the server

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {

    $response = $sdk->statistics->getBandwidthStatistics(4);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *int*                                                                                     | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetBandwidthStatisticsResponse](../../Models/Operations/GetBandwidthStatisticsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetBandwidthStatisticsBadRequest       | 400                                           | application/json                              |
| Errors\GetBandwidthStatisticsUnauthorized     | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
