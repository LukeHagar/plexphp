# Server
(*server*)

## Overview

Operations against the Plex Media Server System.


### Available Operations

* [getServerCapabilities](#getservercapabilities) - Get Server Capabilities
* [getServerPreferences](#getserverpreferences) - Get Server Preferences
* [getAvailableClients](#getavailableclients) - Get Available Clients
* [getDevices](#getdevices) - Get Devices
* [getServerIdentity](#getserveridentity) - Get Server Identity
* [getMyPlexAccount](#getmyplexaccount) - Get MyPlex Account
* [getResizedPhoto](#getresizedphoto) - Get a Resized Photo
* [getMediaProviders](#getmediaproviders) - Get Media Providers
* [getServerList](#getserverlist) - Get Server List

## getServerCapabilities

Get Server Capabilities

### Example Usage

<!-- UsageSnippet language="php" operationID="getServerCapabilities" method="get" path="/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getServerCapabilities(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerCapabilitiesResponse](../../Models/Operations/GetServerCapabilitiesResponse.md)**

### Errors

| Error Type                               | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\GetServerCapabilitiesBadRequest   | 400                                      | application/json                         |
| Errors\GetServerCapabilitiesUnauthorized | 401                                      | application/json                         |
| Errors\SDKException                      | 4XX, 5XX                                 | \*/\*                                    |

## getServerPreferences

Get Server Preferences

### Example Usage

<!-- UsageSnippet language="php" operationID="getServerPreferences" method="get" path="/:/prefs" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getServerPreferences(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerPreferencesResponse](../../Models/Operations/GetServerPreferencesResponse.md)**

### Errors

| Error Type                              | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\GetServerPreferencesBadRequest   | 400                                     | application/json                        |
| Errors\GetServerPreferencesUnauthorized | 401                                     | application/json                        |
| Errors\SDKException                     | 4XX, 5XX                                | \*/\*                                   |

## getAvailableClients

Get Available Clients

### Example Usage

<!-- UsageSnippet language="php" operationID="getAvailableClients" method="get" path="/clients" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getAvailableClients(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetAvailableClientsResponse](../../Models/Operations/GetAvailableClientsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\GetAvailableClientsBadRequest   | 400                                    | application/json                       |
| Errors\GetAvailableClientsUnauthorized | 401                                    | application/json                       |
| Errors\SDKException                    | 4XX, 5XX                               | \*/\*                                  |

## getDevices

Get Devices

### Example Usage

<!-- UsageSnippet language="php" operationID="getDevices" method="get" path="/devices" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getDevices(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetDevicesResponse](../../Models/Operations/GetDevicesResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GetDevicesBadRequest   | 400                           | application/json              |
| Errors\GetDevicesUnauthorized | 401                           | application/json              |
| Errors\SDKException           | 4XX, 5XX                      | \*/\*                         |

## getServerIdentity

This request is useful to determine if the server is online or offline

### Example Usage

<!-- UsageSnippet language="php" operationID="get-server-identity" method="get" path="/identity" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()->build();



$response = $sdk->server->getServerIdentity(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerIdentityResponse](../../Models/Operations/GetServerIdentityResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\GetServerIdentityRequestTimeout | 408                                    | application/json                       |
| Errors\SDKException                    | 4XX, 5XX                               | \*/\*                                  |

## getMyPlexAccount

Returns MyPlex Account Information

### Example Usage

<!-- UsageSnippet language="php" operationID="getMyPlexAccount" method="get" path="/myplex/account" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getMyPlexAccount(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetMyPlexAccountResponse](../../Models/Operations/GetMyPlexAccountResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GetMyPlexAccountBadRequest   | 400                                 | application/json                    |
| Errors\GetMyPlexAccountUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |

## getResizedPhoto

Plex's Photo transcoder is used throughout the service to serve images at specified sizes.


### Example Usage

<!-- UsageSnippet language="php" operationID="getResizedPhoto" method="get" path="/photo/:/transcode" -->
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

$request = new Operations\GetResizedPhotoRequest(
    width: 110,
    height: 165,
    blur: 0,
    minSize: Operations\MinSize::Zero,
    upscale: Operations\Upscale::Zero,
    url: '/library/metadata/49564/thumb/1654258204',
);

$response = $sdk->server->getResizedPhoto(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetResizedPhotoRequest](../../Models/Operations/GetResizedPhotoRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetResizedPhotoResponse](../../Models/Operations/GetResizedPhotoResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GetResizedPhotoBadRequest   | 400                                | application/json                   |
| Errors\GetResizedPhotoUnauthorized | 401                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## getMediaProviders

Retrieves media providers and their features from the Plex server.

### Example Usage

<!-- UsageSnippet language="php" operationID="get-media-providers" method="get" path="/media/providers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getMediaProviders(
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                      | Type                                           | Required                                       | Description                                    | Example                                        |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `xPlexToken`                                   | *string*                                       | :heavy_check_mark:                             | An authentication token, obtained from plex.tv | CV5xoxjTpFKUzBTShsaf                           |

### Response

**[?Operations\GetMediaProvidersResponse](../../Models/Operations/GetMediaProvidersResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GetMediaProvidersBadRequest   | 400                                  | application/json                     |
| Errors\GetMediaProvidersUnauthorized | 401                                  | application/json                     |
| Errors\SDKException                  | 4XX, 5XX                             | \*/\*                                |

## getServerList

Get Server List

### Example Usage

<!-- UsageSnippet language="php" operationID="getServerList" method="get" path="/servers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->server->getServerList(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetServerListResponse](../../Models/Operations/GetServerListResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GetServerListBadRequest   | 400                              | application/json                 |
| Errors\GetServerListUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |