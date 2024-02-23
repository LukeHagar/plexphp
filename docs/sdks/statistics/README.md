# Statistics


## Overview

API Calls that perform operations with Plex Media Server Statistics


### Available Operations

* [getStatistics](#getstatistics) - Get Media Statistics

## getStatistics

This will return the media statistics for the server

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;
use \LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->statistics->getStatistics(411769);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `timespan`                                                                                | *int*                                                                                     | :heavy_minus_sign:                                                                        | The timespan to retrieve statistics for<br/>the exact meaning of this parameter is not known<br/> |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetStatisticsResponse](../../Models/Operations/GetStatisticsResponse.md)**

