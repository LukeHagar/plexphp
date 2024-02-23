# Activities


## Overview

Activities are awesome. They provide a way to monitor and control asynchronous operations on the server. In order to receive real-time updates for activities, a client would normally subscribe via either EventSource or Websocket endpoints.
Activities are associated with HTTP replies via a special `X-Plex-Activity` header which contains the UUID of the activity.
Activities are optional cancellable. If cancellable, they may be cancelled via the `DELETE` endpoint. Other details:
- They can contain a `progress` (from 0 to 100) marking the percent completion of the activity.
- They must contain an `type` which is used by clients to distinguish the specific activity.
- They may contain a `Context` object with attributes which associate the activity with various specific entities (items, libraries, etc.)
- The may contain a `Response` object which attributes which represent the result of the asynchronous operation.


### Available Operations

* [getServerActivities](#getserveractivities) - Get Server Activities
* [cancelServerActivities](#cancelserveractivities) - Cancel Server Activities

## getServerActivities

Get Server Activities

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    $response = $sdk->activities->getServerActivities();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetServerActivitiesResponse](../../Models/Operations/GetServerActivitiesResponse.md)**


## cancelServerActivities

Cancel Server Activities

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
    

    $response = $sdk->activities->cancelServerActivities('<value>');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                           | Type                                | Required                            | Description                         |
| ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- |
| `activityUUID`                      | *string*                            | :heavy_check_mark:                  | The UUID of the activity to cancel. |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\CancelServerActivitiesResponse](../../Models/Operations/CancelServerActivitiesResponse.md)**

