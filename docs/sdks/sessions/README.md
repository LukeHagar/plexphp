# Sessions
(*sessions*)

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
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->sessions->getSessions(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetSessionsResponse](../../Models/Operations/GetSessionsResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GetSessionsBadRequest   | 400                            | application/json               |
| Errors\GetSessionsUnauthorized | 401                            | application/json               |
| Errors\SDKException            | 4XX, 5XX                       | \*/\*                          |

## getSessionHistory

This will Retrieve a listing of all history views.

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

$filter = new Operations\QueryParamFilter();

$response = $sdk->sessions->getSessionHistory(
    sort: '<value>',
    accountId: 1,
    filter: $filter,
    librarySectionID: 12

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   | Example                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sort`                                                                                                                                                                                        | *?string*                                                                                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                            | Sorts the results by the specified field followed by the direction (asc, desc)<br/>                                                                                                           |                                                                                                                                                                                               |
| `accountId`                                                                                                                                                                                   | *?int*                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                            | Filter results by those that are related to a specific users id<br/>                                                                                                                          | 1                                                                                                                                                                                             |
| `filter`                                                                                                                                                                                      | [?Operations\QueryParamFilter](../../Models/Operations/QueryParamFilter.md)                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                            | Filters content by field and direction/equality<br/>(Unknown if viewedAt is the only supported column)<br/>                                                                                   | {<br/>"viewed-at-greater-than": {<br/>"value": "viewedAt\u003e"<br/>},<br/>"viewed-at-greater-than-or-equal-to": {<br/>"value": "viewedAt\u003e=\u003e"<br/>},<br/>"viewed-at-less-than": {<br/>"value": "viewedAt\u003c"<br/>}<br/>} |
| `librarySectionID`                                                                                                                                                                            | *?int*                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                            | Filters the results based on the id of a valid library section<br/>                                                                                                                           | 12                                                                                                                                                                                            |

### Response

**[?Operations\GetSessionHistoryResponse](../../Models/Operations/GetSessionHistoryResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GetSessionHistoryBadRequest   | 400                                  | application/json                     |
| Errors\GetSessionHistoryUnauthorized | 401                                  | application/json                     |
| Errors\SDKException                  | 4XX, 5XX                             | \*/\*                                |

## getTranscodeSessions

Get Transcode Sessions

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



$response = $sdk->sessions->getTranscodeSessions(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetTranscodeSessionsResponse](../../Models/Operations/GetTranscodeSessionsResponse.md)**

### Errors

| Error Type                              | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\GetTranscodeSessionsBadRequest   | 400                                     | application/json                        |
| Errors\GetTranscodeSessionsUnauthorized | 401                                     | application/json                        |
| Errors\SDKException                     | 4XX, 5XX                                | \*/\*                                   |

## stopTranscodeSession

Stop a Transcode Session

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



$response = $sdk->sessions->stopTranscodeSession(
    sessionKey: 'zz7llzqlx8w9vnrsbnwhbmep'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                | Type                                     | Required                                 | Description                              | Example                                  |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `sessionKey`                             | *string*                                 | :heavy_check_mark:                       | the Key of the transcode session to stop | zz7llzqlx8w9vnrsbnwhbmep                 |

### Response

**[?Operations\StopTranscodeSessionResponse](../../Models/Operations/StopTranscodeSessionResponse.md)**

### Errors

| Error Type                              | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\StopTranscodeSessionBadRequest   | 400                                     | application/json                        |
| Errors\StopTranscodeSessionUnauthorized | 401                                     | application/json                        |
| Errors\SDKException                     | 4XX, 5XX                                | \*/\*                                   |