# Activities
(*activities*)

## Overview

Activities are awesome. They provide a way to monitor and control asynchronous operations on the server. In order to receive real-time updates for activities, a client would normally subscribe via either EventSource or Websocket endpoints.
Activities are associated with HTTP replies via a special `X-Plex-Activity` header which contains the UUID of the activity.
Activities are optional cancellable. If cancellable, they may be cancelled via the `DELETE` endpoint. Other details:
- They can contain a `progress` (from 0 to 100) marking the percent completion of the activity.
- They must contain an `type` which is used by clients to distinguish the specific activity.
- They may contain a `Context` object with attributes which associate the activity with various specific entities (items, libraries, etc.)
- The may contain a `Response` object which attributes which represent the result of the asynchronous operation.


### Available Operations

* [cancelServerActivities](#cancelserveractivities) - Cancel Server Activities
* [getServerActivities](#getserveractivities) - Get Server Activities

## cancelServerActivities

Cancel Server Activities

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->activities->cancelServerActivities(
    activityUUID: '25b71ed5-0f9d-461c-baa7-d404e9e10d3e'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `activityUUID`                       | *string*                             | :heavy_check_mark:                   | The UUID of the activity to cancel.  | 25b71ed5-0f9d-461c-baa7-d404e9e10d3e |

### Response

**[?Operations\CancelServerActivitiesResponse](../../Models/Operations/CancelServerActivitiesResponse.md)**

### Errors

| Error Type                                | Status Code                               | Content Type                              |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| Errors\CancelServerActivitiesBadRequest   | 400                                       | application/json                          |
| Errors\CancelServerActivitiesUnauthorized | 401                                       | application/json                          |
| Errors\SDKException                       | 4XX, 5XX                                  | \*/\*                                     |

## getServerActivities

Get Server Activities

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->activities->getServerActivities(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerActivitiesResponse](../../Models/Operations/GetServerActivitiesResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\GetServerActivitiesBadRequest   | 400                                    | application/json                       |
| Errors\GetServerActivitiesUnauthorized | 401                                    | application/json                       |
| Errors\SDKException                    | 4XX, 5XX                               | \*/\*                                  |