# Sessions


## Overview

API Calls that perform search operations with Plex Media Server Sessions


### Available Operations

* [getSessions](#getsessions) - Get Active Sessions
* [getSessionHistory](#getsessionhistory) - Get Session History
* [getTranscodeSessions](#gettranscodesessions) - Get Transcode Sessions
* [stopTranscodeSession](#stoptranscodesession) - Stop a Transcode Session

## getSessions

This will retrieve the "Now Playing" Information of the PMS.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
    $response = $sdk->sessions->getSessions();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetSessionsResponse](../../Models/Operations/GetSessionsResponse.md)**


## getSessionHistory

This will Retrieve a listing of all history views.

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
        $filter = new Operations\Filter();

    $response = $sdk->sessions->getSessionHistory('<value>', 1, $filter, 12);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   | Example                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sort`                                                                                                                                                                                        | *string*                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                            | Sorts the results by the specified field followed by the direction (asc, desc)<br/>                                                                                                           |                                                                                                                                                                                               |
| `accountId`                                                                                                                                                                                   | *int*                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                            | Filter results by those that are related to a specific users id<br/>                                                                                                                          | 1                                                                                                                                                                                             |
| `filter`                                                                                                                                                                                      | [\LukeHagar\Plex_API\Models\Operations\Filter](../../Models/Operations/Filter.md)                                                                                                             | :heavy_minus_sign:                                                                                                                                                                            | Filters content by field and direction/equality<br/>(Unknown if viewedAt is the only supported column)<br/>                                                                                   | {<br/>"viewed-at-greater-than": {<br/>"value": "viewedAt\u003e"<br/>},<br/>"viewed-at-greater-than-or-equal-to": {<br/>"value": "viewedAt\u003e=\u003e"<br/>},<br/>"viewed-at-less-than": {<br/>"value": "viewedAt\u003c"<br/>}<br/>} |
| `librarySectionID`                                                                                                                                                                            | *int*                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                            | Filters the results based on the id of a valid library section<br/>                                                                                                                           | 12                                                                                                                                                                                            |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetSessionHistoryResponse](../../Models/Operations/GetSessionHistoryResponse.md)**


## getTranscodeSessions

Get Transcode Sessions

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
    $response = $sdk->sessions->getTranscodeSessions();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetTranscodeSessionsResponse](../../Models/Operations/GetTranscodeSessionsResponse.md)**


## stopTranscodeSession

Stop a Transcode Session

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
    

    $response = $sdk->sessions->stopTranscodeSession('zz7llzqlx8w9vnrsbnwhbmep');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                | Type                                     | Required                                 | Description                              | Example                                  |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `sessionKey`                             | *string*                                 | :heavy_check_mark:                       | the Key of the transcode session to stop | zz7llzqlx8w9vnrsbnwhbmep                 |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\StopTranscodeSessionResponse](../../Models/Operations/StopTranscodeSessionResponse.md)**

