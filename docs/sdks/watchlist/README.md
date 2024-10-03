# Watchlist
(*watchlist*)

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
use LukeHagar\Plex_API\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('3381b62b-9ab7-4e37-827b-203e9809eb58')
    ->setClientName('Plex for Roku')
    ->setClientVersion('2.4.1')
    ->setPlatform('Roku')
    ->setDeviceNickname('Roku 3')
    ->setSecurity($security)->build();

$request = new Operations\GetWatchListRequest(
    filter: Operations\Filter::Available,
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
    xPlexContainerStart: 0,
    xPlexContainerSize: 50,
);

$response = $sdk->watchlist->getWatchList(
    request: $request
);

if ($response->object !== null) {
    // handle response
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

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\GetWatchListBadRequest   | 400                             | application/json                |
| Errors\GetWatchListUnauthorized | 401                             | application/json                |
| Errors\SDKException             | 4XX, 5XX                        | \*/\*                           |