# Hubs
(*hubs*)

## Overview

Hubs are a structured two-dimensional container for media, generally represented by multiple horizontal rows.


### Available Operations

* [getRecentlyAdded](#getrecentlyadded) - Get Recently Added
* [getGlobalHubs](#getglobalhubs) - Get Global Hubs
* [getLibraryHubs](#getlibraryhubs) - Get library specific hubs

## getRecentlyAdded

This endpoint will return the recently added content.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

$request = new Operations\GetRecentlyAddedRequest(
    contentDirectoryID: 470161,
    type: Operations\Type::TvShow,
    sectionID: 2,
    includeMeta: Operations\IncludeMeta::Enable,
    xPlexContainerStart: 0,
    xPlexContainerSize: 50,
);

$response = $sdk->hubs->getRecentlyAdded(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetRecentlyAddedRequest](../../Models/Operations/GetRecentlyAddedRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetRecentlyAddedResponse](../../Models/Operations/GetRecentlyAddedResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGlobalHubs

Get Global Hubs filtered by the parameters provided.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();



$response = $sdk->hubs->getGlobalHubs(
    count: 1262.49,
    onlyTransient: Operations\OnlyTransient::One

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `count`                                                                                                                                               | *?float*                                                                                                                                              | :heavy_minus_sign:                                                                                                                                    | The number of items to return with each hub.                                                                                                          |
| `onlyTransient`                                                                                                                                       | [?Operations\OnlyTransient](../../Models/Operations/OnlyTransient.md)                                                                                 | :heavy_minus_sign:                                                                                                                                    | Only return hubs which are "transient", meaning those which are prone to changing after media playback or addition (e.g. On Deck, or Recently Added). |

### Response

**[?Operations\GetGlobalHubsResponse](../../Models/Operations/GetGlobalHubsResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GetGlobalHubsBadRequest   | 400                              | application/json                 |
| Errors\GetGlobalHubsUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |

## getLibraryHubs

This endpoint will return a list of library specific hubs


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();



$response = $sdk->hubs->getLibraryHubs(
    sectionId: 6728.76,
    count: 639.24,
    onlyTransient: Operations\QueryParamOnlyTransient::One

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sectionId`                                                                                                                                           | *float*                                                                                                                                               | :heavy_check_mark:                                                                                                                                    | the Id of the library to query                                                                                                                        |
| `count`                                                                                                                                               | *?float*                                                                                                                                              | :heavy_minus_sign:                                                                                                                                    | The number of items to return with each hub.                                                                                                          |
| `onlyTransient`                                                                                                                                       | [?Operations\QueryParamOnlyTransient](../../Models/Operations/QueryParamOnlyTransient.md)                                                             | :heavy_minus_sign:                                                                                                                                    | Only return hubs which are "transient", meaning those which are prone to changing after media playback or addition (e.g. On Deck, or Recently Added). |

### Response

**[?Operations\GetLibraryHubsResponse](../../Models/Operations/GetLibraryHubsResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\GetLibraryHubsBadRequest   | 400                               | application/json                  |
| Errors\GetLibraryHubsUnauthorized | 401                               | application/json                  |
| Errors\SDKException               | 4XX, 5XX                          | \*/\*                             |