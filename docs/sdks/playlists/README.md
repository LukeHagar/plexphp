# Playlists


## Overview

Playlists are ordered collections of media. They can be dumb (just a list of media) or smart (based on a media query, such as "all albums from 2017"). 
They can be organized in (optionally nesting) folders.
Retrieving a playlist, or its items, will trigger a refresh of its metadata. 
This may cause the duration and number of items to change.


### Available Operations

* [createPlaylist](#createplaylist) - Create a Playlist
* [getPlaylists](#getplaylists) - Get All Playlists
* [getPlaylist](#getplaylist) - Retrieve Playlist
* [deletePlaylist](#deleteplaylist) - Deletes a Playlist
* [updatePlaylist](#updateplaylist) - Update a Playlist
* [getPlaylistContents](#getplaylistcontents) - Retrieve Playlist Contents
* [clearPlaylistContents](#clearplaylistcontents) - Delete Playlist Contents
* [addPlaylistContents](#addplaylistcontents) - Adding to a Playlist
* [uploadPlaylist](#uploadplaylist) - Upload Playlist

## createPlaylist

Create a new playlist. By default the playlist is blank. To create a playlist along with a first item, pass:
- `uri` - The content URI for what we're playing (e.g. `server://1234/com.plexapp.plugins.library/library/metadata/1`).
- `playQueueID` - To create a playlist from an existing play queue.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {
    $request = new Operations\CreatePlaylistRequest(
        title: '<value>',
        type: Operations\QueryParamType::Photo,
        smart: Operations\Smart::One,
        uri: 'https://inborn-brochure.biz',
        playQueueID: 3686.33,
    );
    $response = $sdk->playlists->createPlaylist($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreatePlaylistRequest](../../Models/Operations/CreatePlaylistRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\CreatePlaylistResponse](../../Models/Operations/CreatePlaylistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\CreatePlaylistResponseBody             | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPlaylists

Get All Playlists given the specified filters.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->getPlaylists(Operations\PlaylistType::Audio, Operations\QueryParamSmart::Zero);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `playlistType`                                                           | [Operations\PlaylistType](../../Models/Operations/PlaylistType.md)       | :heavy_minus_sign:                                                       | limit to a type of playlist.                                             |
| `smart`                                                                  | [Operations\QueryParamSmart](../../Models/Operations/QueryParamSmart.md) | :heavy_minus_sign:                                                       | type of playlists to return (default is all).                            |


### Response

**[?Operations\GetPlaylistsResponse](../../Models/Operations/GetPlaylistsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetPlaylistsResponseBody               | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPlaylist

Gets detailed metadata for a playlist. A playlist for many purposes (rating, editing metadata, tagging), can be treated like a regular metadata item:
Smart playlist details contain the `content` attribute. This is the content URI for the generator. This can then be parsed by a client to provide smart playlist editing.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->getPlaylist(4109.48);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter              | Type                   | Required               | Description            |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `playlistID`           | *float*                | :heavy_check_mark:     | the ID of the playlist |


### Response

**[?Operations\GetPlaylistResponse](../../Models/Operations/GetPlaylistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetPlaylistResponseBody                | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## deletePlaylist

This endpoint will delete a playlist


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->deletePlaylist(216.22);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter              | Type                   | Required               | Description            |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `playlistID`           | *float*                | :heavy_check_mark:     | the ID of the playlist |


### Response

**[?Operations\DeletePlaylistResponse](../../Models/Operations/DeletePlaylistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\DeletePlaylistResponseBody             | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updatePlaylist

From PMS version 1.9.1 clients can also edit playlist metadata using this endpoint as they would via `PUT /library/metadata/{playlistID}`


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->updatePlaylist(3915, '<value>', '<value>');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                           | Type                                | Required                            | Description                         |
| ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- |
| `playlistID`                        | *float*                             | :heavy_check_mark:                  | the ID of the playlist              |
| `title`                             | *string*                            | :heavy_minus_sign:                  | name of the playlist                |
| `summary`                           | *string*                            | :heavy_minus_sign:                  | summary description of the playlist |


### Response

**[?Operations\UpdatePlaylistResponse](../../Models/Operations/UpdatePlaylistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\UpdatePlaylistResponseBody             | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPlaylistContents

Gets the contents of a playlist. Should be paged by clients via standard mechanisms. 
By default leaves are returned (e.g. episodes, movies). In order to return other types you can use the `type` parameter. 
For example, you could use this to display a list of recently added albums vis a smart playlist. 
Note that for dumb playlists, items have a `playlistItemID` attribute which is used for deleting or moving items.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->getPlaylistContents(5004.46, 9403.59);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                               | Type                                    | Required                                | Description                             |
| --------------------------------------- | --------------------------------------- | --------------------------------------- | --------------------------------------- |
| `playlistID`                            | *float*                                 | :heavy_check_mark:                      | the ID of the playlist                  |
| `type`                                  | *float*                                 | :heavy_check_mark:                      | the metadata type of the item to return |


### Response

**[?Operations\GetPlaylistContentsResponse](../../Models/Operations/GetPlaylistContentsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\GetPlaylistContentsResponseBody        | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## clearPlaylistContents

Clears a playlist, only works with dumb playlists. Returns the playlist.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->clearPlaylistContents(1893.18);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter              | Type                   | Required               | Description            |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `playlistID`           | *float*                | :heavy_check_mark:     | the ID of the playlist |


### Response

**[?Operations\ClearPlaylistContentsResponse](../../Models/Operations/ClearPlaylistContentsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\ClearPlaylistContentsResponseBody      | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## addPlaylistContents

Adds a generator to a playlist, same parameters as the POST to create. With a dumb playlist, this adds the specified items to the playlist.
With a smart playlist, passing a new `uri` parameter replaces the rules for the playlist. Returns the playlist.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->addPlaylistContents(8502.01, 'server://12345/com.plexapp.plugins.library/library/metadata/1', 123);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `playlistID`                                                  | *float*                                                       | :heavy_check_mark:                                            | the ID of the playlist                                        |                                                               |
| `uri`                                                         | *string*                                                      | :heavy_check_mark:                                            | the content URI for the playlist                              | server://12345/com.plexapp.plugins.library/library/metadata/1 |
| `playQueueID`                                                 | *float*                                                       | :heavy_minus_sign:                                            | the play queue to add to a playlist                           | 123                                                           |


### Response

**[?Operations\AddPlaylistContentsResponse](../../Models/Operations/AddPlaylistContentsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\AddPlaylistContentsResponseBody        | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## uploadPlaylist

Imports m3u playlists by passing a path on the server to scan for m3u-formatted playlist files, or a path to a single playlist file.


### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Components;
use LukeHagar\Plex_API\Models\Operations;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setXPlexClientIdentifier('Postman')
    ->setSecurity($security)->build();

try {

    $response = $sdk->playlists->uploadPlaylist('/home/barkley/playlist.m3u', Operations\Force::Zero);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `path`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | absolute path to a directory on the server where m3u files are stored, or the absolute path to a playlist file on the server. <br/>If the `path` argument is a directory, that path will be scanned for playlist files to be processed. <br/>Each file in that directory creates a separate playlist, with a name based on the filename of the file that created it. <br/>The GUID of each playlist is based on the filename. <br/>If the `path` argument is a file, that file will be used to create a new playlist, with the name based on the filename of the file that created it. <br/>The GUID of each playlist is based on the filename.<br/> | /home/barkley/playlist.m3u                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `force`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | [Operations\Force](../../Models/Operations/Force.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Force overwriting of duplicate playlists.  <br/>By default, a playlist file uploaded with the same path will overwrite the existing playlist. <br/>The `force` argument is used to disable overwriting.  <br/>If the `force` argument is set to 0, a new playlist will be created suffixed with the date and time that the duplicate was uploaded.<br/>                                                                                                                                                                                                                                                                      |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |


### Response

**[?Operations\UploadPlaylistResponse](../../Models/Operations/UploadPlaylistResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\UploadPlaylistResponseBody             | 401                                           | application/json                              |
| LukeHagar\Plex_API\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
