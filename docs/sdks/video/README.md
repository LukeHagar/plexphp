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

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetTimelineRequest();
    $request->ratingKey = 23409;
    $request->key = '/library/metadata/23409';
    $request->state = Operations\State::Playing;
    $request->hasMDE = 1;
    $request->time = 2000;
    $request->duration = 10000;
    $request->context = 'home:hub.continueWatching';
    $request->playQueueItemID = 1;
    $request->playBackTime = 2000;
    $request->row = 1;;

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

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
        $request = new Operations\StartUniversalTranscodeRequest();
    $request->hasMDE = 1;
    $request->path = '/library/metadata/23409';
    $request->mediaIndex = 0;
    $request->partIndex = 0;
    $request->protocol = 'hls';
    $request->fastSeek = 0;
    $request->directPlay = 0;
    $request->directStream = 0;
    $request->subtitleSize = 100;
    $request->subtites = 'burn';
    $request->audioBoost = 100;
    $request->location = 'lan';
    $request->mediaBufferSize = 102400;
    $request->session = 'zvcage8b7rkioqcm8f4uns4c';
    $request->addDebugOverlay = 0;
    $request->autoAdjustQuality = 0;;

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

