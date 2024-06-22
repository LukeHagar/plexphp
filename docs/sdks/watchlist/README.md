# Watchlist


## Overview

API Calls that perform operations with Plex Media Server Watchlists


### Available Operations

* [getWatchlist](#getwatchlist) - Get User Watchlist

## getWatchlist

Get User Watchlist

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;
use \LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetWatchlistRequest();
    $request->filter = Operations\PathParamFilter::Released;
    $request->sort = '<value>';
    $request->libtype = Operations\Libtype::Movie;
    $request->maxresults = 303056;
    $request->includeCollections = Operations\IncludeCollections::Zero;
    $request->includeExternalMedia = Operations\IncludeExternalMedia::One;
    $request->xPlexToken = '<value>';
    $request->xPlexContainerStart = 406911;
    $request->xPlexContainerSize = 958629;;

    $response = $sdk->watchlist->getWatchlist($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\LukeHagar\Plex_API\Models\Operations\GetWatchlistRequest](../../Models/Operations/GetWatchlistRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `$serverURL`                                                                                                | *string*                                                                                                    | :heavy_minus_sign:                                                                                          | An optional server URL to use.                                                                              |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetWatchlistResponse](../../Models/Operations/GetWatchlistResponse.md)**

