# Butler
(*butler*)

## Overview

Butler is the task manager of the Plex Media Server Ecosystem.


### Available Operations

* [getButlerTasks](#getbutlertasks) - Get Butler tasks
* [startAllTasks](#startalltasks) - Start all Butler tasks
* [stopAllTasks](#stopalltasks) - Stop all Butler tasks
* [startTask](#starttask) - Start a single Butler task
* [stopTask](#stoptask) - Stop a single Butler task

## getButlerTasks

Returns a list of butler tasks

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



$response = $sdk->butler->getButlerTasks(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetButlerTasksResponse](../../Models/Operations/GetButlerTasksResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\GetButlerTasksBadRequest   | 400                               | application/json                  |
| Errors\GetButlerTasksUnauthorized | 401                               | application/json                  |
| Errors\SDKException               | 4XX, 5XX                          | \*/\*                             |

## startAllTasks

This endpoint will attempt to start all Butler tasks that are enabled in the settings. Butler tasks normally run automatically during a time window configured on the server's Settings page but can be manually started using this endpoint. Tasks will run with the following criteria:
1. Any tasks not scheduled to run on the current day will be skipped.
2. If a task is configured to run at a random time during the configured window and we are outside that window, the task will start immediately.
3. If a task is configured to run at a random time during the configured window and we are within that window, the task will be scheduled at a random time within the window.
4. If we are outside the configured window, the task will start immediately.


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



$response = $sdk->butler->startAllTasks(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\StartAllTasksResponse](../../Models/Operations/StartAllTasksResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\StartAllTasksBadRequest   | 400                              | application/json                 |
| Errors\StartAllTasksUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |

## stopAllTasks

This endpoint will stop all currently running tasks and remove any scheduled tasks from the queue.


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



$response = $sdk->butler->stopAllTasks(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\StopAllTasksResponse](../../Models/Operations/StopAllTasksResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\StopAllTasksBadRequest   | 400                             | application/json                |
| Errors\StopAllTasksUnauthorized | 401                             | application/json                |
| Errors\SDKException             | 4XX, 5XX                        | \*/\*                           |

## startTask

This endpoint will attempt to start a single Butler task that is enabled in the settings. Butler tasks normally run automatically during a time window configured on the server's Settings page but can be manually started using this endpoint. Tasks will run with the following criteria:
1. Any tasks not scheduled to run on the current day will be skipped.
2. If a task is configured to run at a random time during the configured window and we are outside that window, the task will start immediately.
3. If a task is configured to run at a random time during the configured window and we are within that window, the task will be scheduled at a random time within the window.
4. If we are outside the configured window, the task will start immediately.


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



$response = $sdk->butler->startTask(
    taskName: Operations\TaskName::CleanOldBundles
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `taskName`                                                 | [Operations\TaskName](../../Models/Operations/TaskName.md) | :heavy_check_mark:                                         | the name of the task to be started.                        |

### Response

**[?Operations\StartTaskResponse](../../Models/Operations/StartTaskResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\StartTaskBadRequest   | 400                          | application/json             |
| Errors\StartTaskUnauthorized | 401                          | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## stopTask

This endpoint will stop a currently running task by name, or remove it from the list of scheduled tasks if it exists. See the section above for a list of task names for this endpoint.


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



$response = $sdk->butler->stopTask(
    taskName: Operations\PathParamTaskName::BackupDatabase
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `taskName`                                                                   | [Operations\PathParamTaskName](../../Models/Operations/PathParamTaskName.md) | :heavy_check_mark:                                                           | The name of the task to be started.                                          |

### Response

**[?Operations\StopTaskResponse](../../Models/Operations/StopTaskResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\StopTaskBadRequest   | 400                         | application/json            |
| Errors\StopTaskUnauthorized | 401                         | application/json            |
| Errors\SDKException         | 4XX, 5XX                    | \*/\*                       |