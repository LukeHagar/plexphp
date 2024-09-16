# Server

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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getServerCapabilities();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetServerCapabilitiesResponse](../../Models/Operations/GetServerCapabilitiesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetServerCapabilitiesBadRequest        | 400                                           | application/json                              |
| Errors\GetServerCapabilitiesUnauthorized      | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getServerPreferences

Get Server Preferences

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getServerPreferences();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetServerPreferencesResponse](../../Models/Operations/GetServerPreferencesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetServerPreferencesBadRequest         | 400                                           | application/json                              |
| Errors\GetServerPreferencesUnauthorized       | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAvailableClients

Get Available Clients

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getAvailableClients();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetAvailableClientsResponse](../../Models/Operations/GetAvailableClientsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetAvailableClientsBadRequest          | 400                                           | application/json                              |
| Errors\GetAvailableClientsUnauthorized        | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getDevices

Get Devices

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getDevices();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetDevicesResponse](../../Models/Operations/GetDevicesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetDevicesBadRequest                   | 400                                           | application/json                              |
| Errors\GetDevicesUnauthorized                 | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getServerIdentity

This request is useful to determine if the server is online or offline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->build();

try {
    $response = $sdk->server->getServerIdentity();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetServerIdentityResponse](../../Models/Operations/GetServerIdentityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetServerIdentityRequestTimeout        | 408                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getMyPlexAccount

Returns MyPlex Account Information

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getMyPlexAccount();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetMyPlexAccountResponse](../../Models/Operations/GetMyPlexAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetMyPlexAccountBadRequest             | 400                                           | application/json                              |
| Errors\GetMyPlexAccountUnauthorized           | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getResizedPhoto

Plex's Photo transcoder is used throughout the service to serve images at specified sizes.


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
    $request = new Operations\GetResizedPhotoRequest(
        width: 110,
        height: 165,
        opacity: 643869,
        blur: 0,
        minSize: Operations\MinSize::Zero,
        upscale: Operations\Upscale::One,
        url: '/library/metadata/49564/thumb/1654258204',
    );
    $response = $sdk->server->getResizedPhoto($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetResizedPhotoRequest](../../Models/Operations/GetResizedPhotoRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetResizedPhotoResponse](../../Models/Operations/GetResizedPhotoResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetResizedPhotoBadRequest              | 400                                           | application/json                              |
| Errors\GetResizedPhotoUnauthorized            | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getMediaProviders

Retrieves media providers and their features from the Plex server.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {

    $response = $sdk->server->getMediaProviders('CV5xoxjTpFKUzBTShsaf');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               | Example                   |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `xPlexToken`              | *string*                  | :heavy_check_mark:        | Plex Authentication Token | CV5xoxjTpFKUzBTShsaf      |

### Response

**[?Operations\GetMediaProvidersResponse](../../Models/Operations/GetMediaProvidersResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetMediaProvidersBadRequest            | 400                                           | application/json                              |
| Errors\GetMediaProvidersUnauthorized          | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getServerList

Get Server List

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security(
    accessToken: "<YOUR_API_KEY_HERE>",
);

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('gcgzw5rz2xovp84b4vha3a40')
    ->setSecurity($security)->build();

try {
    $response = $sdk->server->getServerList();

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetServerListResponse](../../Models/Operations/GetServerListResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetServerListBadRequest                | 400                                           | application/json                              |
| Errors\GetServerListUnauthorized              | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
