# Users
(*users*)

## Overview

### Available Operations

* [getUsers](#getusers) - Get list of all connected users

## getUsers

Get list of all users that are friends and have library access with the provided Plex authentication token

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$sdk = Plex_API\PlexAPI::builder()->build();

$request = new Operations\GetUsersRequest(
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    clientName: 'Plex for Roku',
    deviceNickname: 'Roku 3',
    deviceName: 'Chrome',
    deviceScreenResolution: '1487x1165,2560x1440',
    clientVersion: '2.4.1',
    platform: 'Roku',
    clientFeatures: 'external-media,indirect-media,hub-style-list',
    model: '4200X',
    xPlexSessionId: '97e136ef-4ddd-4ff3-89a7-a5820c96c2ca',
    xPlexLanguage: 'en',
    platformVersion: '4.3 build 1057',
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf',
);

$response = $sdk->users->getUsers(
    request: $request
);

if ($response->body !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetUsersRequest](../../Models/Operations/GetUsersRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |
| `$serverURL`                                                             | *string*                                                                 | :heavy_minus_sign:                                                       | An optional server URL to use.                                           |

### Response

**[?Operations\GetUsersResponse](../../Models/Operations/GetUsersResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GetUsersBadRequest   | 400                         | application/json            |
| Errors\GetUsersUnauthorized | 401                         | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |