# Watchlist

## Overview

API Calls that perform operations with Plex Media Server Watchlists


### Available Operations

* [getWatchList](#getwatchlist) - Get User Watchlist

## getWatchList

Get User Watchlist

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $request = new Operations\GetWatchListRequest(
        filter: Operations\Filter::Available,
        xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
        xPlexContainerStart: 0,
        xPlexContainerSize: 50,
    );
    $response = $sdk->watchlist->getWatchList($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetWatchListRequest](../../Models/Operations/GetWatchListRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |
| `$serverURL`                                                                     | *string*                                                                         | :heavy_minus_sign:                                                               | An optional server URL to use.                                                   |

### Response

**[?Operations\GetWatchListResponse](../../Models/Operations/GetWatchListResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetWatchListBadRequest                 | 400                                           | application/json                              |
| Errors\GetWatchListUnauthorized               | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
