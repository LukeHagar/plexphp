# Media
(*media*)

## Overview

API Calls interacting with Plex Media Server Media


### Available Operations

* [getBannerImage](#getbannerimage) - Get Banner Image
* [getThumbImage](#getthumbimage) - Get Thumb Image
* [markPlayed](#markplayed) - Mark Media Played
* [markUnplayed](#markunplayed) - Mark Media Unplayed
* [updatePlayProgress](#updateplayprogress) - Update Media Play Progress

## getBannerImage

Gets the banner image of the media item

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

$request = new Operations\GetBannerImageRequest(
    ratingKey: 9518,
    width: 396,
    height: 396,
    minSize: 1,
    upscale: 1,
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
);

$response = $sdk->media->getBannerImage(
    request: $request
);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetBannerImageRequest](../../Models/Operations/GetBannerImageRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetBannerImageResponse](../../Models/Operations/GetBannerImageResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\GetBannerImageBadRequest   | 400                               | application/json                  |
| Errors\GetBannerImageUnauthorized | 401                               | application/json                  |
| Errors\SDKException               | 4XX, 5XX                          | \*/\*                             |

## getThumbImage

Gets the thumbnail image of the media item

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

$request = new Operations\GetThumbImageRequest(
    ratingKey: 9518,
    width: 396,
    height: 396,
    minSize: 1,
    upscale: 1,
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
);

$response = $sdk->media->getThumbImage(
    request: $request
);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetThumbImageRequest](../../Models/Operations/GetThumbImageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetThumbImageResponse](../../Models/Operations/GetThumbImageResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GetThumbImageBadRequest   | 400                              | application/json                 |
| Errors\GetThumbImageUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |

## markPlayed

This will mark the provided media key as Played.

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



$response = $sdk->media->markPlayed(
    key: 59398
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     | Example                         |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `key`                           | *float*                         | :heavy_check_mark:              | The media key to mark as played | 59398                           |

### Response

**[?Operations\MarkPlayedResponse](../../Models/Operations/MarkPlayedResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\MarkPlayedBadRequest   | 400                           | application/json              |
| Errors\MarkPlayedUnauthorized | 401                           | application/json              |
| Errors\SDKException           | 4XX, 5XX                      | \*/\*                         |

## markUnplayed

This will mark the provided media key as Unplayed.

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



$response = $sdk->media->markUnplayed(
    key: 59398
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       | Example                           |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `key`                             | *float*                           | :heavy_check_mark:                | The media key to mark as Unplayed | 59398                             |

### Response

**[?Operations\MarkUnplayedResponse](../../Models/Operations/MarkUnplayedResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\MarkUnplayedBadRequest   | 400                             | application/json                |
| Errors\MarkUnplayedUnauthorized | 401                             | application/json                |
| Errors\SDKException             | 4XX, 5XX                        | \*/\*                           |

## updatePlayProgress

This API command can be used to update the play progress of a media item.


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



$response = $sdk->media->updatePlayProgress(
    key: '<key>',
    time: 90000,
    state: 'played'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                           | Type                                                                | Required                                                            | Description                                                         | Example                                                             |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `key`                                                               | *string*                                                            | :heavy_check_mark:                                                  | the media key                                                       |                                                                     |
| `time`                                                              | *float*                                                             | :heavy_check_mark:                                                  | The time, in milliseconds, used to set the media playback progress. | 90000                                                               |
| `state`                                                             | *string*                                                            | :heavy_check_mark:                                                  | The playback state of the media item.                               | played                                                              |

### Response

**[?Operations\UpdatePlayProgressResponse](../../Models/Operations/UpdatePlayProgressResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\UpdatePlayProgressBadRequest   | 400                                   | application/json                      |
| Errors\UpdatePlayProgressUnauthorized | 401                                   | application/json                      |
| Errors\SDKException                   | 4XX, 5XX                              | \*/\*                                 |