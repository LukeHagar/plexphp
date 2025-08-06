# Log
(*log*)

## Overview

Submit logs to the Log Handler for Plex Media Server


### Available Operations

* [logLine](#logline) - Logging a single line message.
* [logMultiLine](#logmultiline) - Logging a multi-line message
* [enablePaperTrail](#enablepapertrail) - Enabling Papertrail

## logLine

This endpoint will write a single-line log message, including a level and source to the main Plex Media Server log.


### Example Usage

<!-- UsageSnippet language="php" operationID="logLine" method="get" path="/log" -->
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



$response = $sdk->log->logLine(
    level: Operations\Level::Three,
    message: 'Test log message',
    source: 'Postman'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         | Example                                                                                             |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `level`                                                                                             | [Operations\Level](../../Models/Operations/Level.md)                                                | :heavy_check_mark:                                                                                  | An integer log level to write to the PMS log with.<br/>0: Error<br/>1: Warning<br/>2: Info<br/>3: Debug<br/>4: Verbose<br/> |                                                                                                     |
| `message`                                                                                           | *string*                                                                                            | :heavy_check_mark:                                                                                  | The text of the message to write to the log.                                                        | Test log message                                                                                    |
| `source`                                                                                            | *string*                                                                                            | :heavy_check_mark:                                                                                  | a string indicating the source of the message.                                                      | Postman                                                                                             |

### Response

**[?Operations\LogLineResponse](../../Models/Operations/LogLineResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\LogLineBadRequest   | 400                        | application/json           |
| Errors\LogLineUnauthorized | 401                        | application/json           |
| Errors\SDKException        | 4XX, 5XX                   | \*/\*                      |

## logMultiLine

This endpoint allows for the batch addition of log entries to the main Plex Media Server log.
It accepts a text/plain request body, where each line represents a distinct log entry.
Each log entry consists of URL-encoded key-value pairs, specifying log attributes such as 'level', 'message', and 'source'.

Log entries are separated by a newline character (`\n`).
Each entry's parameters should be URL-encoded to ensure accurate parsing and handling of special characters.
This method is efficient for logging multiple entries in a single API call, reducing the overhead of multiple individual requests.

The 'level' parameter specifies the log entry's severity or importance, with the following integer values:
- `0`: Error - Critical issues that require immediate attention.
- `1`: Warning - Important events that are not critical but may indicate potential issues.
- `2`: Info - General informational messages about system operation.
- `3`: Debug - Detailed information useful for debugging purposes.
- `4`: Verbose - Highly detailed diagnostic information for in-depth analysis.

The 'message' parameter contains the log text, and 'source' identifies the log message's origin (e.g., an application name or module).

Example of a single log entry format:
`level=4&message=Sample%20log%20entry&source=applicationName`

Ensure each parameter is properly URL-encoded to avoid interpretation issues.


### Example Usage

<!-- UsageSnippet language="php" operationID="logMultiLine" method="post" path="/log" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = 'level=4&message=Test%20message%201&source=postman\n' .
'level=3&message=Test%20message%202&source=postman\n' .
'level=1&message=Test%20message%203&source=postman';

$response = $sdk->log->logMultiLine(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [string](../../.md)                        | :heavy_check_mark:                         | The request object to use for the request. |

### Response

**[?Operations\LogMultiLineResponse](../../Models/Operations/LogMultiLineResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\LogMultiLineBadRequest   | 400                             | application/json                |
| Errors\LogMultiLineUnauthorized | 401                             | application/json                |
| Errors\SDKException             | 4XX, 5XX                        | \*/\*                           |

## enablePaperTrail

This endpoint will enable all Plex Media Serverlogs to be sent to the Papertrail networked logging site for a period of time.


### Example Usage

<!-- UsageSnippet language="php" operationID="enablePaperTrail" method="get" path="/log/networked" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->log->enablePaperTrail(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\EnablePaperTrailResponse](../../Models/Operations/EnablePaperTrailResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\EnablePaperTrailBadRequest   | 400                                 | application/json                    |
| Errors\EnablePaperTrailUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |