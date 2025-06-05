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

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetWatchListRequest(
    filter: Operations\Filter::Released,
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
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