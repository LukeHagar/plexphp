# Video


## Overview

API Calls that perform operations with Plex Media Server Videos


### Available Operations

* [startUniversalTranscode](#startuniversaltranscode) - Start Universal Transcode
* [getTimeline](#gettimeline) - Get the timeline for a media item

## startUniversalTranscode

Begin a Universal Transcode Session

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
        $request = new Operations\StartUniversalTranscodeRequest();
    $request->hasMDE = 8924.99;
    $request->path = '/etc/mail';
    $request->mediaIndex = 9962.95;
    $request->partIndex = 1232.82;
    $request->protocol = 'string';
    $request->fastSeek = 1630.75;
    $request->directPlay = 4531.53;
    $request->directStream = 4877.48;
    $request->subtitleSize = 3383.01;
    $request->subtites = 'string';
    $request->audioBoost = 7970.18;
    $request->location = 'string';
    $request->mediaBufferSize = 2664.33;
    $request->session = 'string';
    $request->addDebugOverlay = 4930.91;
    $request->autoAdjustQuality = 2087.17;;

    $response = $sdk->video->startUniversalTranscode($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\LukeHagar\Plex_API\Models\Operations\StartUniversalTranscodeRequest](../../Models/Operations/StartUniversalTranscodeRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\StartUniversalTranscodeResponse](../../Models/Operations/StartUniversalTranscodeResponse.md)**


## getTimeline

Get the timeline for a media item

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
        $request = new Operations\GetTimelineRequest();
    $request->ratingKey = 716.56;
    $request->key = '<key>';
    $request->state = Operations\State::Paused;
    $request->hasMDE = 7574.33;
    $request->time = 3327.51;
    $request->duration = 7585.39;
    $request->context = 'string';
    $request->playQueueItemID = 1406.21;
    $request->playBackTime = 2699.34;
    $request->row = 3536.42;;

    $response = $sdk->video->getTimeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\LukeHagar\Plex_API\Models\Operations\GetTimelineRequest](../../Models/Operations/GetTimelineRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetTimelineResponse](../../Models/Operations/GetTimelineResponse.md)**

