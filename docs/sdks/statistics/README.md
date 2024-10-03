# Statistics
(*statistics*)

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

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('3381b62b-9ab7-4e37-827b-203e9809eb58')
    ->setClientName('Plex for Roku')
    ->setClientVersion('2.4.1')
    ->setPlatform('Roku')
    ->setDeviceNickname('Roku 3')
    ->setSecurity($security)->build();



$response = $sdk->statistics->getStatistics(
    timespan: 4
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *?int*                                                                                    | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetStatisticsResponse](../../Models/Operations/GetStatisticsResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GetStatisticsBadRequest   | 400                              | application/json                 |
| Errors\GetStatisticsUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |

## getResourcesStatistics

This will return the resources for the server

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('3381b62b-9ab7-4e37-827b-203e9809eb58')
    ->setClientName('Plex for Roku')
    ->setClientVersion('2.4.1')
    ->setPlatform('Roku')
    ->setDeviceNickname('Roku 3')
    ->setSecurity($security)->build();



$response = $sdk->statistics->getResourcesStatistics(
    timespan: 4
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *?int*                                                                                    | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetResourcesStatisticsResponse](../../Models/Operations/GetResourcesStatisticsResponse.md)**

### Errors

| Error Type                                | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\GetResourcesStatisticsBadRequest   | 400                                       | application/json                          |
| Errors\GetResourcesStatisticsUnauthorized | 401                                       | application/json                          |
| Errors\SDKException                       | 4XX, 5XX                                  | \*/\*                                     |

## getBandwidthStatistics

This will return the bandwidth statistics for the server

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('3381b62b-9ab7-4e37-827b-203e9809eb58')
    ->setClientName('Plex for Roku')
    ->setClientVersion('2.4.1')
    ->setPlatform('Roku')
    ->setDeviceNickname('Roku 3')
    ->setSecurity($security)->build();



$response = $sdk->statistics->getBandwidthStatistics(
    timespan: 4
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *?int*                                                                                    | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> | 4                                                                                         |

### Response

**[?Operations\GetBandwidthStatisticsResponse](../../Models/Operations/GetBandwidthStatisticsResponse.md)**

### Errors

| Error Type                                | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\GetBandwidthStatisticsBadRequest   | 400                                       | application/json                          |
| Errors\GetBandwidthStatisticsUnauthorized | 401                                       | application/json                          |
| Errors\SDKException                       | 4XX, 5XX                                  | \*/\*                                     |