# Plex
(*plex*)

## Overview

API Calls that perform operations directly against https://Plex.tv


### Available Operations

* [getCompanionsData](#getcompanionsdata) - Get Companions Data
* [getUserFriends](#getuserfriends) - Get list of friends of the user logged in
* [getGeoData](#getgeodata) - Get Geo Data
* [getHomeData](#gethomedata) - Get Plex Home Data
* [getServerResources](#getserverresources) - Get Server Resources
* [getPin](#getpin) - Get a Pin
* [getTokenByPinId](#gettokenbypinid) - Get Access Token by PinId

## getCompanionsData

Get Companions Data

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



$response = $sdk->plex->getCompanionsData(

);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |

### Response

**[?Operations\GetCompanionsDataResponse](../../Models/Operations/GetCompanionsDataResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GetCompanionsDataBadRequest   | 400                                  | application/json                     |
| Errors\GetCompanionsDataUnauthorized | 401                                  | application/json                     |
| Errors\SDKException                  | 4XX, 5XX                             | \*/\*                                |

## getUserFriends

Get friends of provided auth token.

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



$response = $sdk->plex->getUserFriends(

);

if ($response->friends !== null) {
    // handle response
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |

### Response

**[?Operations\GetUserFriendsResponse](../../Models/Operations/GetUserFriendsResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\GetUserFriendsBadRequest   | 400                               | application/json                  |
| Errors\GetUserFriendsUnauthorized | 401                               | application/json                  |
| Errors\SDKException               | 4XX, 5XX                          | \*/\*                             |

## getGeoData

Returns the geolocation and locale data of the caller

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()->build();



$response = $sdk->plex->getGeoData(

);

if ($response->geoData !== null) {
    // handle response
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |

### Response

**[?Operations\GetGeoDataResponse](../../Models/Operations/GetGeoDataResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GetGeoDataBadRequest   | 400                           | application/json              |
| Errors\GetGeoDataUnauthorized | 401                           | application/json              |
| Errors\SDKException           | 4XX, 5XX                      | \*/\*                         |

## getHomeData

Retrieves the home data for the authenticated user, including details like home ID, name, guest access information, and subscription status.

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



$response = $sdk->plex->getHomeData(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetHomeDataResponse](../../Models/Operations/GetHomeDataResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GetHomeDataBadRequest   | 400                            | application/json               |
| Errors\GetHomeDataUnauthorized | 401                            | application/json               |
| Errors\SDKException            | 4XX, 5XX                       | \*/\*                          |

## getServerResources

Get Plex server access tokens and server connections

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



$response = $sdk->plex->getServerResources(
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    includeHttps: Operations\IncludeHttps::Enable,
    includeRelay: Operations\IncludeRelay::Enable,
    includeIPv6: Operations\IncludeIPv6::Enable

);

if ($response->plexDevices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        | Example                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `clientID`                                                                                                         | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | An opaque identifier unique to the client (UUID, serial number, or other unique device ID)                         | 3381b62b-9ab7-4e37-827b-203e9809eb58                                                                               |
| `includeHttps`                                                                                                     | [?Operations\IncludeHttps](../../Models/Operations/IncludeHttps.md)                                                | :heavy_minus_sign:                                                                                                 | Include Https entries in the results                                                                               | 1                                                                                                                  |
| `includeRelay`                                                                                                     | [?Operations\IncludeRelay](../../Models/Operations/IncludeRelay.md)                                                | :heavy_minus_sign:                                                                                                 | Include Relay addresses in the results <br/>E.g: https://10-0-0-25.bbf8e10c7fa20447cacee74cd9914cde.plex.direct:32400<br/> | 1                                                                                                                  |
| `includeIPv6`                                                                                                      | [?Operations\IncludeIPv6](../../Models/Operations/IncludeIPv6.md)                                                  | :heavy_minus_sign:                                                                                                 | Include IPv6 entries in the results                                                                                | 1                                                                                                                  |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     | http://localhost:8080                                                                                              |

### Response

**[?Operations\GetServerResourcesResponse](../../Models/Operations/GetServerResourcesResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\GetServerResourcesBadRequest   | 400                                   | application/json                      |
| Errors\GetServerResourcesUnauthorized | 401                                   | application/json                      |
| Errors\SDKException                   | 4XX, 5XX                              | \*/\*                                 |

## getPin

Retrieve a Pin ID from Plex.tv to use for authentication flows

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$sdk = Plex_API\PlexAPI::builder()->build();

$request = new Operations\GetPinRequest(
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    clientName: 'Plex for Roku',
    deviceNickname: 'Roku 3',
    clientVersion: '2.4.1',
    platform: 'Roku',
);

$response = $sdk->plex->getPin(
    request: $request
);

if ($response->authPinContainer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `$request`                                                           | [Operations\GetPinRequest](../../Models/Operations/GetPinRequest.md) | :heavy_check_mark:                                                   | The request object to use for the request.                           |
| `$serverURL`                                                         | *string*                                                             | :heavy_minus_sign:                                                   | An optional server URL to use.                                       |

### Response

**[?Operations\GetPinResponse](../../Models/Operations/GetPinResponse.md)**

### Errors

| Error Type              | Status Code             | Content Type            |
| ----------------------- | ----------------------- | ----------------------- |
| Errors\GetPinBadRequest | 400                     | application/json        |
| Errors\SDKException     | 4XX, 5XX                | \*/\*                   |

## getTokenByPinId

Retrieve an Access Token from Plex.tv after the Pin has been authenticated

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$sdk = Plex_API\PlexAPI::builder()->build();

$request = new Operations\GetTokenByPinIdRequest(
    pinID: 408895,
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    clientName: 'Plex for Roku',
    deviceNickname: 'Roku 3',
    clientVersion: '2.4.1',
    platform: 'Roku',
);

$response = $sdk->plex->getTokenByPinId(
    request: $request
);

if ($response->authPinContainer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetTokenByPinIdRequest](../../Models/Operations/GetTokenByPinIdRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |
| `$serverURL`                                                                           | *string*                                                                               | :heavy_minus_sign:                                                                     | An optional server URL to use.                                                         |

### Response

**[?Operations\GetTokenByPinIdResponse](../../Models/Operations/GetTokenByPinIdResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GetTokenByPinIdBadRequest   | 400                                | application/json                   |
| Errors\GetTokenByPinIdResponseBody | 404                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |