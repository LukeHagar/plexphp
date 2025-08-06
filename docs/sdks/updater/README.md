# Updater
(*updater*)

## Overview

This describes the API for searching and applying updates to the Plex Media Server.
Updates to the status can be observed via the Event API.


### Available Operations

* [getUpdateStatus](#getupdatestatus) - Querying status of updates
* [checkForUpdates](#checkforupdates) - Checking for updates
* [applyUpdates](#applyupdates) - Apply Updates

## getUpdateStatus

Querying status of updates

### Example Usage

<!-- UsageSnippet language="php" operationID="getUpdateStatus" method="get" path="/updater/status" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->updater->getUpdateStatus(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetUpdateStatusResponse](../../Models/Operations/GetUpdateStatusResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GetUpdateStatusBadRequest   | 400                                | application/json                   |
| Errors\GetUpdateStatusUnauthorized | 401                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## checkForUpdates

Checking for updates

### Example Usage

<!-- UsageSnippet language="php" operationID="checkForUpdates" method="put" path="/updater/check" -->
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



$response = $sdk->updater->checkForUpdates(
    download: Operations\Download::One
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `download`                                                  | [?Operations\Download](../../Models/Operations/Download.md) | :heavy_minus_sign:                                          | Indicate that you want to start download any updates found. | 1                                                           |

### Response

**[?Operations\CheckForUpdatesResponse](../../Models/Operations/CheckForUpdatesResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\CheckForUpdatesBadRequest   | 400                                | application/json                   |
| Errors\CheckForUpdatesUnauthorized | 401                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## applyUpdates

Note that these two parameters are effectively mutually exclusive. The `tonight` parameter takes precedence and `skip` will be ignored if `tonight` is also passed


### Example Usage

<!-- UsageSnippet language="php" operationID="applyUpdates" method="put" path="/updater/apply" -->
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



$response = $sdk->updater->applyUpdates(
    tonight: Operations\Tonight::One,
    skip: Operations\Skip::One

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                | Type                                                                                                                                                     | Required                                                                                                                                                 | Description                                                                                                                                              | Example                                                                                                                                                  |
| -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `tonight`                                                                                                                                                | [?Operations\Tonight](../../Models/Operations/Tonight.md)                                                                                                | :heavy_minus_sign:                                                                                                                                       | Indicate that you want the update to run during the next Butler execution. Omitting this or setting it to false indicates that the update should install | 1                                                                                                                                                        |
| `skip`                                                                                                                                                   | [?Operations\Skip](../../Models/Operations/Skip.md)                                                                                                      | :heavy_minus_sign:                                                                                                                                       | Indicate that the latest version should be marked as skipped. The [Release] entry for this version will have the `state` set to `skipped`.               | 1                                                                                                                                                        |

### Response

**[?Operations\ApplyUpdatesResponse](../../Models/Operations/ApplyUpdatesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\ApplyUpdatesBadRequest   | 400                             | application/json                |
| Errors\ApplyUpdatesUnauthorized | 401                             | application/json                |
| Errors\SDKException             | 4XX, 5XX                        | \*/\*                           |