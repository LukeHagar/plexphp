# PlexTv


### Available Operations

* [getPin](#getpin) - Get a Pin
* [getToken](#gettoken) - Get Access Token

## getPin

Retrieve a Pin from Plex.tv for authentication flows

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;
use \LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->plexTv->getPin('string', false);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `xPlexClientIdentifier`                                                                                                                               | *string*                                                                                                                                              | :heavy_check_mark:                                                                                                                                    | Plex Authentication Token                                                                                                                             |
| `strong`                                                                                                                                              | *bool*                                                                                                                                                | :heavy_minus_sign:                                                                                                                                    | Determines the kind of code returned by the API call<br/>Strong codes are used for Pin authentication flows<br/>Non-Strong codes are used for `Plex.tv/link`<br/> |
| `$serverURL`                                                                                                                                          | *string*                                                                                                                                              | :heavy_minus_sign:                                                                                                                                    | An optional server URL to use.                                                                                                                        |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetPinResponse](../../Models/Operations/GetPinResponse.md)**


## getToken

Retrieve an Access Token from Plex.tv after the Pin has already been authenticated

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;
use \LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->plexTv->getToken('string', 'string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `pinID`                                   | *string*                                  | :heavy_check_mark:                        | The PinID to retrieve an access token for |
| `xPlexClientIdentifier`                   | *string*                                  | :heavy_check_mark:                        | Plex Authentication Token                 |
| `$serverURL`                              | *string*                                  | :heavy_minus_sign:                        | An optional server URL to use.            |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetTokenResponse](../../Models/Operations/GetTokenResponse.md)**

