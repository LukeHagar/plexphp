# lukehagar/plex-api

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>

<!-- Start Summary [summary] -->
## Summary

Plex-API: An Open API Spec for interacting with Plex.tv and Plex Media Server

# Plex Media Server OpenAPI Specification

An Open Source OpenAPI Specification for Plex Media Server

Automation and SDKs provided by [Speakeasy](https://speakeasyapi.dev/)

## Documentation

[API Documentation](https://plexapi.dev)

## SDKs

The following SDKs are generated from the OpenAPI Specification. They are automatically generated and may not be fully tested. If you find any issues, please open an issue on the [main specification Repository](https://github.com/LukeHagar/plex-api-spec).

| Language              | Repository                                        | Releases                                                                                         | Other                                                   |
| --------------------- | ------------------------------------------------- | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------- |
| Python                | [GitHub](https://github.com/LukeHagar/plexpy)     | [PyPI](https://pypi.org/project/plex-api-client/)                                                | -                                                       |
| JavaScript/TypeScript | [GitHub](https://github.com/LukeHagar/plexjs)     | [NPM](https://www.npmjs.com/package/@lukehagar/plexjs) \ [JSR](https://jsr.io/@lukehagar/plexjs) | -                                                       |
| Go                    | [GitHub](https://github.com/LukeHagar/plexgo)     | [Releases](https://github.com/LukeHagar/plexgo/releases)                                         | [GoDoc](https://pkg.go.dev/github.com/LukeHagar/plexgo) |
| Ruby                  | [GitHub](https://github.com/LukeHagar/plexruby)   | [Releases](https://github.com/LukeHagar/plexruby/releases)                                       | -                                                       |
| Swift                 | [GitHub](https://github.com/LukeHagar/plexswift)  | [Releases](https://github.com/LukeHagar/plexswift/releases)                                      | -                                                       |
| PHP                   | [GitHub](https://github.com/LukeHagar/plexphp)    | [Releases](https://github.com/LukeHagar/plexphp/releases)                                        | -                                                       |
| Java                  | [GitHub](https://github.com/LukeHagar/plexjava)   | [Releases](https://github.com/LukeHagar/plexjava/releases)                                       | -                                                       |
| C#                    | [GitHub](https://github.com/LukeHagar/plexcsharp) | [Releases](https://github.com/LukeHagar/plexcsharp/releases)                                     | -
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [lukehagar/plex-api](#lukehagarplex-api)
* [Plex Media Server OpenAPI Specification](#plex-media-server-openapi-specification)
  * [Documentation](#documentation)
  * [SDKs](#sdks)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "lukehagar/plex-api"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name          | Type   | Scheme  |
| ------------- | ------ | ------- |
| `accessToken` | apiKey | API key |

To authenticate with the API the `accessToken` parameter must be set when initializing the SDK. For example:
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
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [activities](docs/sdks/activities/README.md)

* [cancelServerActivities](docs/sdks/activities/README.md#cancelserveractivities) - Cancel Server Activities
* [getServerActivities](docs/sdks/activities/README.md#getserveractivities) - Get Server Activities

### [authentication](docs/sdks/authentication/README.md)

* [getSourceConnectionInformation](docs/sdks/authentication/README.md#getsourceconnectioninformation) - Get Source Connection Information
* [getTokenDetails](docs/sdks/authentication/README.md#gettokendetails) - Get Token Details
* [getTransientToken](docs/sdks/authentication/README.md#gettransienttoken) - Get a Transient Token
* [postUsersSignInData](docs/sdks/authentication/README.md#postuserssignindata) - Get User Sign In Data

### [butler](docs/sdks/butler/README.md)

* [getButlerTasks](docs/sdks/butler/README.md#getbutlertasks) - Get Butler tasks
* [startAllTasks](docs/sdks/butler/README.md#startalltasks) - Start all Butler tasks
* [startTask](docs/sdks/butler/README.md#starttask) - Start a single Butler task
* [stopAllTasks](docs/sdks/butler/README.md#stopalltasks) - Stop all Butler tasks
* [stopTask](docs/sdks/butler/README.md#stoptask) - Stop a single Butler task

### [hubs](docs/sdks/hubs/README.md)

* [getRecentlyAdded](docs/sdks/hubs/README.md#getrecentlyadded) - Get Recently Added
* [getGlobalHubs](docs/sdks/hubs/README.md#getglobalhubs) - Get Global Hubs
* [getLibraryHubs](docs/sdks/hubs/README.md#getlibraryhubs) - Get library specific hubs

### [library](docs/sdks/library/README.md)

* [deleteLibrary](docs/sdks/library/README.md#deletelibrary) - Delete Library Section
* [getActorsLibrary](docs/sdks/library/README.md#getactorslibrary) - Get Actors of library media
* [getAllLibraries](docs/sdks/library/README.md#getalllibraries) - Get All Libraries
* [getAllMediaLibrary](docs/sdks/library/README.md#getallmedialibrary) - Get all media of library
* [getCountriesLibrary](docs/sdks/library/README.md#getcountrieslibrary) - Get Countries of library media
* [getGenresLibrary](docs/sdks/library/README.md#getgenreslibrary) - Get Genres of library media
* [getLibraryDetails](docs/sdks/library/README.md#getlibrarydetails) - Get Library Details
* [getLibraryItems](docs/sdks/library/README.md#getlibraryitems) - Get Library Items
* [getMediaMetaData](docs/sdks/library/README.md#getmediametadata) - Get Media Metadata
* [getRecentlyAddedLibrary](docs/sdks/library/README.md#getrecentlyaddedlibrary) - Get Recently Added
* [getRefreshLibraryMetadata](docs/sdks/library/README.md#getrefreshlibrarymetadata) - Refresh Metadata Of The Library
* [getSearchAllLibraries](docs/sdks/library/README.md#getsearchalllibraries) - Search All Libraries
* [getSearchLibrary](docs/sdks/library/README.md#getsearchlibrary) - Search Library
* [getFileHash](docs/sdks/library/README.md#getfilehash) - Get Hash Value
* [getMetadataChildren](docs/sdks/library/README.md#getmetadatachildren) - Get Items Children
* [getOnDeck](docs/sdks/library/README.md#getondeck) - Get On Deck
* [getTopWatchedContent](docs/sdks/library/README.md#gettopwatchedcontent) - Get Top Watched Content

### [log](docs/sdks/log/README.md)

* [enablePaperTrail](docs/sdks/log/README.md#enablepapertrail) - Enabling Papertrail
* [logLine](docs/sdks/log/README.md#logline) - Logging a single line message.
* [logMultiLine](docs/sdks/log/README.md#logmultiline) - Logging a multi-line message

### [media](docs/sdks/media/README.md)

* [getBannerImage](docs/sdks/media/README.md#getbannerimage) - Get Banner Image
* [getThumbImage](docs/sdks/media/README.md#getthumbimage) - Get Thumb Image
* [markPlayed](docs/sdks/media/README.md#markplayed) - Mark Media Played
* [markUnplayed](docs/sdks/media/README.md#markunplayed) - Mark Media Unplayed
* [updatePlayProgress](docs/sdks/media/README.md#updateplayprogress) - Update Media Play Progress

### [playlists](docs/sdks/playlists/README.md)

* [addPlaylistContents](docs/sdks/playlists/README.md#addplaylistcontents) - Adding to a Playlist
* [clearPlaylistContents](docs/sdks/playlists/README.md#clearplaylistcontents) - Delete Playlist Contents
* [createPlaylist](docs/sdks/playlists/README.md#createplaylist) - Create a Playlist
* [deletePlaylist](docs/sdks/playlists/README.md#deleteplaylist) - Deletes a Playlist
* [getPlaylist](docs/sdks/playlists/README.md#getplaylist) - Retrieve Playlist
* [getPlaylistContents](docs/sdks/playlists/README.md#getplaylistcontents) - Retrieve Playlist Contents
* [getPlaylists](docs/sdks/playlists/README.md#getplaylists) - Get All Playlists
* [updatePlaylist](docs/sdks/playlists/README.md#updateplaylist) - Update a Playlist
* [uploadPlaylist](docs/sdks/playlists/README.md#uploadplaylist) - Upload Playlist

### [plex](docs/sdks/plex/README.md)

* [getServerResources](docs/sdks/plex/README.md#getserverresources) - Get Server Resources
* [getCompanionsData](docs/sdks/plex/README.md#getcompanionsdata) - Get Companions Data
* [getGeoData](docs/sdks/plex/README.md#getgeodata) - Get Geo Data
* [getHomeData](docs/sdks/plex/README.md#gethomedata) - Get Plex Home Data
* [getPin](docs/sdks/plex/README.md#getpin) - Get a Pin
* [getTokenByPinId](docs/sdks/plex/README.md#gettokenbypinid) - Get Access Token by PinId
* [getUserFriends](docs/sdks/plex/README.md#getuserfriends) - Get list of friends of the user logged in


### [search](docs/sdks/search/README.md)

* [getSearchResults](docs/sdks/search/README.md#getsearchresults) - Get Search Results
* [performSearch](docs/sdks/search/README.md#performsearch) - Perform a search
* [performVoiceSearch](docs/sdks/search/README.md#performvoicesearch) - Perform a voice search

### [server](docs/sdks/server/README.md)

* [getMediaProviders](docs/sdks/server/README.md#getmediaproviders) - Get Media Providers
* [getServerIdentity](docs/sdks/server/README.md#getserveridentity) - Get Server Identity
* [getAvailableClients](docs/sdks/server/README.md#getavailableclients) - Get Available Clients
* [getDevices](docs/sdks/server/README.md#getdevices) - Get Devices
* [getMyPlexAccount](docs/sdks/server/README.md#getmyplexaccount) - Get MyPlex Account
* [getResizedPhoto](docs/sdks/server/README.md#getresizedphoto) - Get a Resized Photo
* [getServerCapabilities](docs/sdks/server/README.md#getservercapabilities) - Get Server Capabilities
* [getServerList](docs/sdks/server/README.md#getserverlist) - Get Server List
* [getServerPreferences](docs/sdks/server/README.md#getserverpreferences) - Get Server Preferences

### [sessions](docs/sdks/sessions/README.md)

* [getSessionHistory](docs/sdks/sessions/README.md#getsessionhistory) - Get Session History
* [getSessions](docs/sdks/sessions/README.md#getsessions) - Get Active Sessions
* [getTranscodeSessions](docs/sdks/sessions/README.md#gettranscodesessions) - Get Transcode Sessions
* [stopTranscodeSession](docs/sdks/sessions/README.md#stoptranscodesession) - Stop a Transcode Session

### [statistics](docs/sdks/statistics/README.md)

* [getBandwidthStatistics](docs/sdks/statistics/README.md#getbandwidthstatistics) - Get Bandwidth Statistics
* [getResourcesStatistics](docs/sdks/statistics/README.md#getresourcesstatistics) - Get Resources Statistics
* [getStatistics](docs/sdks/statistics/README.md#getstatistics) - Get Media Statistics

### [updater](docs/sdks/updater/README.md)

* [applyUpdates](docs/sdks/updater/README.md#applyupdates) - Apply Updates
* [checkForUpdates](docs/sdks/updater/README.md#checkforupdates) - Checking for updates
* [getUpdateStatus](docs/sdks/updater/README.md#getupdatestatus) - Querying status of updates

### [users](docs/sdks/users/README.md)

* [getUsers](docs/sdks/users/README.md#getusers) - Get list of all connected users

### [video](docs/sdks/video/README.md)

* [getTimeline](docs/sdks/video/README.md#gettimeline) - Get the timeline for a media item
* [startUniversalTranscode](docs/sdks/video/README.md#startuniversaltranscode) - Start Universal Transcode

### [watchlist](docs/sdks/watchlist/README.md)

* [getWatchList](docs/sdks/watchlist/README.md#getwatchlist) - Get User Watchlist

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `getMediaProviders` method throws the following exceptions:

| Error Type                           | Status Code | Content Type     |
| ------------------------------------ | ----------- | ---------------- |
| Errors\GetMediaProvidersBadRequest   | 400         | application/json |
| Errors\GetMediaProvidersUnauthorized | 401         | application/json |
| Errors\SDKException                  | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;
use LukeHagar\Plex_API\Models\Errors;

$sdk = Plex_API\PlexAPI::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

try {
    $response = $sdk->server->getMediaProviders(
        xPlexToken: 'CV5xoxjTpFKUzBTShsaf'
    );

    if ($response->object !== null) {
        // handle response
    }
} catch (Errors\GetMediaProvidersBadRequestThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\GetMediaProvidersUnauthorizedThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\SDKException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Server Variables

The default server `{protocol}://{ip}:{port}` contains variables and is set to `https://10.10.10.47:32400` by default. To override default values, the following builder methods are available when initializing the SDK client instance:

| Variable   | BuilderMethod                                   | Supported Values           | Default         | Description                                    |
| ---------- | ----------------------------------------------- | -------------------------- | --------------- | ---------------------------------------------- |
| `protocol` | `setProtocol(Plex_API\ServerProtocol protocol)` | - `"http"`<br/>- `"https"` | `"https"`       | The protocol to use for the server connection  |
| `ip`       | `setIp(string ip)`                              | string                     | `"10.10.10.47"` | The IP address or hostname of your Plex Server |
| `port`     | `setPort(string port)`                          | string                     | `"32400"`       | The port of your Plex Server                   |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setProtocol('https')
    ->setIp('247.38.141.142')
    ->setPort('6717')
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

### Override Server URL Per-Client

The default server can be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$sdk = Plex_API\PlexAPI::builder()
    ->setServerURL('https://10.10.10.47:32400')
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

### Override Server URL Per-Operation

The server URL can also be overridden on a per-operation basis, provided a server list was specified for the operation. For example:
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
    'https://plex.tv/api/v2',
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    includeHttps: Operations\IncludeHttps::Enable,
    includeRelay: Operations\IncludeRelay::Enable,
    includeIPv6: Operations\IncludeIPv6::Enable

);

if ($response->plexDevices !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
