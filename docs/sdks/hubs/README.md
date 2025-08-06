# Hubs
(*hubs*)

## Overview

Hubs are a structured two-dimensional container for media, generally represented by multiple horizontal rows.


### Available Operations

* [getGlobalHubs](#getglobalhubs) - Get Global Hubs
* [getRecentlyAdded](#getrecentlyadded) - Get Recently Added
* [getLibraryHubs](#getlibraryhubs) - Get library specific hubs

## getGlobalHubs

Get Global Hubs filtered by the parameters provided.

### Example Usage

<!-- UsageSnippet language="php" operationID="getGlobalHubs" method="get" path="/hubs" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->hubs->getGlobalHubs(

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

## getRecentlyAdded

This endpoint will return the recently added content.


### Example Usage

<!-- UsageSnippet language="php" operationID="get-recently-added" method="get" path="/hubs/home/recentlyAdded" -->
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

$request = new Operations\GetRecentlyAddedRequest(
    contentDirectoryID: 39486,
    sectionID: 2,
    type: Operations\Type::TvShow,
    includeMeta: Operations\IncludeMeta::Enable,
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

## getLibraryHubs

This endpoint will return a list of library specific hubs


### Example Usage

<!-- UsageSnippet language="php" operationID="getLibraryHubs" method="get" path="/hubs/sections/{sectionId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->hubs->getLibraryHubs(
    sectionId: 492.74
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