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
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $request = new Operations\GetTimelineRequest(
        ratingKey: 23409,
        key: '/library/metadata/23409',
        state: Operations\State::Playing,
        hasMDE: 1,
        time: 2000,
        duration: 10000,
        context: 'home:hub.continueWatching',
        playQueueItemID: 1,
        playBackTime: 2000,
        row: 1,
    );
    $response = $sdk->video->getTimeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetTimelineRequest](../../Models/Operations/GetTimelineRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetTimelineResponse](../../Models/Operations/GetTimelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetTimelineBadRequest                  | 400                                           | application/json                              |
| Errors\GetTimelineUnauthorized                | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## startUniversalTranscode

Begin a Universal Transcode Session

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $request = new Operations\StartUniversalTranscodeRequest(
        hasMDE: 1,
        path: '/library/metadata/23409',
        mediaIndex: 0,
        partIndex: 0,
        protocol: 'hls',
        fastSeek: 0,
        directPlay: 0,
        directStream: 0,
        subtitleSize: 100,
        subtites: 'burn',
        audioBoost: 100,
        location: 'lan',
        mediaBufferSize: 102400,
        session: 'zvcage8b7rkioqcm8f4uns4c',
        addDebugOverlay: 0,
        autoAdjustQuality: 0,
    );
    $response = $sdk->video->startUniversalTranscode($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\StartUniversalTranscodeRequest](../../Models/Operations/StartUniversalTranscodeRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\StartUniversalTranscodeResponse](../../Models/Operations/StartUniversalTranscodeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\StartUniversalTranscodeBadRequest      | 400                                           | application/json                              |
| Errors\StartUniversalTranscodeUnauthorized    | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
