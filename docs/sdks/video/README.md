# Video


## Overview

API Calls that perform operations with Plex Media Server Videos


### Available Operations

* [getTimeline](#gettimeline) - Get the timeline for a media item
* [startUniversalTranscode](#startuniversaltranscode) - Start Universal Transcode

## getTimeline

Get the timeline for a media item

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

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTimelineRequest();
    $request->ratingKey = 716.56;
    $request->key = '<key>';
    $request->state = Operations\State::Paused;
    $request->hasMDE = 7574.33;
    $request->time = 3327.51;
    $request->duration = 7585.39;
    $request->context = '<value>';
    $request->playQueueItemID = 1406.21;
    $request->playBackTime = 2699.34;
    $request->row = 3536.42;;

    $response = $sdk->video->getTimeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\LukeHagar\Plex_API\Models\Operations\GetTimelineRequest](../../Models/Operations/GetTimelineRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetTimelineResponse](../../Models/Operations/GetTimelineResponse.md)**


## startUniversalTranscode

Begin a Universal Transcode Session

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

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
        $request = new Operations\StartUniversalTranscodeRequest();
    $request->hasMDE = 8924.99;
    $request->path = '/etc/mail';
    $request->mediaIndex = 9962.95;
    $request->partIndex = 1232.82;
    $request->protocol = '<value>';
    $request->fastSeek = 1630.75;
    $request->directPlay = 4531.53;
    $request->directStream = 4877.48;
    $request->subtitleSize = 3383.01;
    $request->subtites = '<value>';
    $request->audioBoost = 7970.18;
    $request->location = '<value>';
    $request->mediaBufferSize = 2664.33;
    $request->session = '<value>';
    $request->addDebugOverlay = 4930.91;
    $request->autoAdjustQuality = 2087.17;;

    $response = $sdk->video->startUniversalTranscode($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\LukeHagar\Plex_API\Models\Operations\StartUniversalTranscodeRequest](../../Models/Operations/StartUniversalTranscodeRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\StartUniversalTranscodeResponse](../../Models/Operations/StartUniversalTranscodeResponse.md)**

