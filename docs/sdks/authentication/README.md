# Authentication

## Overview

API Calls regarding authentication for Plex Media Server


### Available Operations

* [getTransientToken](#gettransienttoken) - Get a Transient Token
* [getSourceConnectionInformation](#getsourceconnectioninformation) - Get Source Connection Information
* [getTokenDetails](#gettokendetails) - Get Token Details
* [postUsersSignInData](#postuserssignindata) - Get User Sign In Data

## getTransientToken

This endpoint provides the caller with a temporary token with the same access level as the caller's token. These tokens are valid for up to 48 hours and are destroyed if the server instance is restarted.


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
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {

    $response = $sdk->authentication->getTransientToken(Operations\GetTransientTokenQueryParamType::Delegation, Operations\Scope::All);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `type`                                                                                                   | [Operations\GetTransientTokenQueryParamType](../../Models/Operations/GetTransientTokenQueryParamType.md) | :heavy_check_mark:                                                                                       | `delegation` - This is the only supported `type` parameter.                                              |
| `scope`                                                                                                  | [Operations\Scope](../../Models/Operations/Scope.md)                                                     | :heavy_check_mark:                                                                                       | `all` - This is the only supported `scope` parameter.                                                    |

### Response

**[?Operations\GetTransientTokenResponse](../../Models/Operations/GetTransientTokenResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetTransientTokenBadRequest            | 400                                           | application/json                              |
| Errors\GetTransientTokenUnauthorized          | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getSourceConnectionInformation

If a caller requires connection details and a transient token for a source that is known to the server, for example a cloud media provider or shared PMS, then this endpoint can be called. This endpoint is only accessible with either an admin token or a valid transient token generated from an admin token.
Note: requires Plex Media Server >= 1.15.4.


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
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {

    $response = $sdk->authentication->getSourceConnectionInformation('server://client-identifier');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                      | Type                                           | Required                                       | Description                                    | Example                                        |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `source`                                       | *string*                                       | :heavy_check_mark:                             | The source identifier with an included prefix. | server://client-identifier                     |

### Response

**[?Operations\GetSourceConnectionInformationResponse](../../Models/Operations/GetSourceConnectionInformationResponse.md)**

### Errors

| Error Object                                      | Status Code                                       | Content Type                                      |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| Errors\GetSourceConnectionInformationBadRequest   | 400                                               | application/json                                  |
| Errors\GetSourceConnectionInformationUnauthorized | 401                                               | application/json                                  |
| LukeHagar\Plex_API\Models\Errors.SDKException     | 4xx-5xx                                           | */*                                               |


## getTokenDetails

Get the User data from the provided X-Plex-Token

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
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();

try {
    $response = $sdk->authentication->getTokenDetails();

    if ($response->userPlexAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |

### Response

**[?Operations\GetTokenDetailsResponse](../../Models/Operations/GetTokenDetailsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetTokenDetailsBadRequest              | 400                                           | application/json                              |
| Errors\GetTokenDetailsUnauthorized            | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## postUsersSignInData

Sign in user with username and password and return user data with Plex authentication token

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Operations;

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->build();

try {
    $requestBody = new Operations\PostUsersSignInDataRequestBody(
        login: 'username@email.com',
        password: 'password123',
        verificationCode: '123456',
    );
    $response = $sdk->authentication->postUsersSignInData('gcgzw5rz2xovp84b4vha3a40', $requestBody);

    if ($response->userPlexAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           | Example                                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `clientID`                                                                                                                                                            | *string*                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                    | The unique identifier for the client application<br/>This is used to track the client application and its usage<br/>(UUID, serial number, or other number unique per device)<br/> | gcgzw5rz2xovp84b4vha3a40                                                                                                                                              |
| `requestBody`                                                                                                                                                         | [Operations\PostUsersSignInDataRequestBody](../../Models/Operations/PostUsersSignInDataRequestBody.md)                                                                | :heavy_minus_sign:                                                                                                                                                    | Login credentials                                                                                                                                                     |                                                                                                                                                                       |
| `$serverURL`                                                                                                                                                          | *string*                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                    | An optional server URL to use.                                                                                                                                        | http://localhost:8080                                                                                                                                                 |

### Response

**[?Operations\PostUsersSignInDataResponse](../../Models/Operations/PostUsersSignInDataResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\PostUsersSignInDataBadRequest          | 400                                           | application/json                              |
| Errors\PostUsersSignInDataUnauthorized        | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
