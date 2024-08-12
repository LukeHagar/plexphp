# Watchlist


## Overview

API Calls that perform operations with Plex Media Server Watchlists


### Available Operations

* [getWatchlist](#getwatchlist) - Get User Watchlist

## getWatchlist

Get User Watchlist

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
    $request = new Operations\GetWatchlistRequest(
        filter: Operations\PathParamFilter::Released,
        xPlexToken: '<value>',
        sort: '<value>',
        libtype: Operations\Libtype::Movie,
        maxresults: 303056,
        includeCollections: Operations\IncludeCollections::Zero,
        includeExternalMedia: Operations\IncludeExternalMedia::One,
        xPlexContainerStart: 406911,
        xPlexContainerSize: 958629,
    );
    $response = $sdk->watchlist->getWatchlist($request);

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
| `$request`                                                                       | [Operations\GetWatchlistRequest](../../Models/Operations/GetWatchlistRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |
| `$serverURL`                                                                     | *string*                                                                         | :heavy_minus_sign:                                                               | An optional server URL to use.                                                   |


### Response

**[?Operations\GetWatchlistResponse](../../Models/Operations/GetWatchlistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetWatchlistResponseBody               | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
