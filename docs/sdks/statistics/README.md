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

<!-- UsageSnippet language="php" operationID="getStatistics" method="get" path="/statistics/media" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



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

<!-- UsageSnippet language="php" operationID="getResourcesStatistics" method="get" path="/statistics/resources" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



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

<!-- UsageSnippet language="php" operationID="getBandwidthStatistics" method="get" path="/statistics/bandwidth" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



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