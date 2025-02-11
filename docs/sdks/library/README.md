# Library
(*library*)

## Overview

API Calls interacting with Plex Media Server Libraries


### Available Operations

* [deleteLibrary](#deletelibrary) - Delete Library Section
* [getActorsLibrary](#getactorslibrary) - Get Actors of library media
* [getAllLibraries](#getalllibraries) - Get All Libraries
* [getAllMediaLibrary](#getallmedialibrary) - Get all media of library
* [getCountriesLibrary](#getcountrieslibrary) - Get Countries of library media
* [getGenresLibrary](#getgenreslibrary) - Get Genres of library media
* [getLibraryDetails](#getlibrarydetails) - Get Library Details
* [getLibraryItems](#getlibraryitems) - Get Library Items
* [getMediaMetaData](#getmediametadata) - Get Media Metadata
* [getRecentlyAddedLibrary](#getrecentlyaddedlibrary) - Get Recently Added
* [getRefreshLibraryMetadata](#getrefreshlibrarymetadata) - Refresh Metadata Of The Library
* [getSearchAllLibraries](#getsearchalllibraries) - Search All Libraries
* [getSearchLibrary](#getsearchlibrary) - Search Library
* [getFileHash](#getfilehash) - Get Hash Value
* [getMetadataChildren](#getmetadatachildren) - Get Items Children
* [getOnDeck](#getondeck) - Get On Deck
* [getTopWatchedContent](#gettopwatchedcontent) - Get Top Watched Content

## deleteLibrary

Delete a library using a specific section id

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



$response = $sdk->library->deleteLibrary(
    sectionKey: 9518
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   | Example                                                                                       |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                  | *int*                                                                                         | :heavy_check_mark:                                                                            | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/> | 9518                                                                                          |

### Response

**[?Operations\DeleteLibraryResponse](../../Models/Operations/DeleteLibraryResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\DeleteLibraryBadRequest   | 400                              | application/json                 |
| Errors\DeleteLibraryUnauthorized | 401                              | application/json                 |
| Errors\SDKException              | 4XX, 5XX                         | \*/\*                            |

## getActorsLibrary

Retrieves a list of all the actors that are found for the media in this library.


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



$response = $sdk->library->getActorsLibrary(
    sectionKey: 9518,
    type: Operations\GetActorsLibraryQueryParamType::TvShow

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                                                                                                                 | *int*                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                           | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/>                                                                                        | 9518                                                                                                                                                                                         |
| `type`                                                                                                                                                                                       | [Operations\GetActorsLibraryQueryParamType](../../Models/Operations/GetActorsLibraryQueryParamType.md)                                                                                       | :heavy_check_mark:                                                                                                                                                                           | The type of media to retrieve or filter by.<br/>1 = movie<br/>2 = show<br/>3 = season<br/>4 = episode<br/>E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries<br/> | 2                                                                                                                                                                                            |

### Response

**[?Operations\GetActorsLibraryResponse](../../Models/Operations/GetActorsLibraryResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GetActorsLibraryBadRequest   | 400                                 | application/json                    |
| Errors\GetActorsLibraryUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |

## getAllLibraries

A library section (commonly referred to as just a library) is a collection of media. 
Libraries are typed, and depending on their type provide either a flat or a hierarchical view of the media. 
For example, a music library has an artist > albums > tracks structure, whereas a movie library is flat.

Libraries have features beyond just being a collection of media; for starters, they include information about supported types, filters and sorts. 
This allows a client to provide a rich interface around the media (e.g. allow sorting movies by release year).


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



$response = $sdk->library->getAllLibraries(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetAllLibrariesResponse](../../Models/Operations/GetAllLibrariesResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GetAllLibrariesBadRequest   | 400                                | application/json                   |
| Errors\GetAllLibrariesUnauthorized | 401                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## getAllMediaLibrary

Retrieves a list of all general media data for this library.


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

$request = new Operations\GetAllMediaLibraryRequest(
    sectionKey: 9518,
    type: Operations\GetAllMediaLibraryQueryParamType::TvShow,
);

$response = $sdk->library->getAllMediaLibrary(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAllMediaLibraryRequest](../../Models/Operations/GetAllMediaLibraryRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAllMediaLibraryResponse](../../Models/Operations/GetAllMediaLibraryResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\GetAllMediaLibraryBadRequest   | 400                                   | application/json                      |
| Errors\GetAllMediaLibraryUnauthorized | 401                                   | application/json                      |
| Errors\SDKException                   | 4XX, 5XX                              | \*/\*                                 |

## getCountriesLibrary

Retrieves a list of all the countries that are found for the media in this library.


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



$response = $sdk->library->getCountriesLibrary(
    sectionKey: 9518,
    type: Operations\GetCountriesLibraryQueryParamType::TvShow

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                                                                                                                 | *int*                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                           | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/>                                                                                        | 9518                                                                                                                                                                                         |
| `type`                                                                                                                                                                                       | [Operations\GetCountriesLibraryQueryParamType](../../Models/Operations/GetCountriesLibraryQueryParamType.md)                                                                                 | :heavy_check_mark:                                                                                                                                                                           | The type of media to retrieve or filter by.<br/>1 = movie<br/>2 = show<br/>3 = season<br/>4 = episode<br/>E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries<br/> | 2                                                                                                                                                                                            |

### Response

**[?Operations\GetCountriesLibraryResponse](../../Models/Operations/GetCountriesLibraryResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\GetCountriesLibraryBadRequest   | 400                                    | application/json                       |
| Errors\GetCountriesLibraryUnauthorized | 401                                    | application/json                       |
| Errors\SDKException                    | 4XX, 5XX                               | \*/\*                                  |

## getGenresLibrary

Retrieves a list of all the genres that are found for the media in this library.


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



$response = $sdk->library->getGenresLibrary(
    sectionKey: 9518,
    type: Operations\GetGenresLibraryQueryParamType::TvShow

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                                                                                                                 | *int*                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                           | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/>                                                                                        | 9518                                                                                                                                                                                         |
| `type`                                                                                                                                                                                       | [Operations\GetGenresLibraryQueryParamType](../../Models/Operations/GetGenresLibraryQueryParamType.md)                                                                                       | :heavy_check_mark:                                                                                                                                                                           | The type of media to retrieve or filter by.<br/>1 = movie<br/>2 = show<br/>3 = season<br/>4 = episode<br/>E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries<br/> | 2                                                                                                                                                                                            |

### Response

**[?Operations\GetGenresLibraryResponse](../../Models/Operations/GetGenresLibraryResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GetGenresLibraryBadRequest   | 400                                 | application/json                    |
| Errors\GetGenresLibraryUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |

## getLibraryDetails

## Library Details Endpoint

This endpoint provides comprehensive details about the library, focusing on organizational aspects rather than the content itself.   

The details include:

### Directories
Organized into three categories:

- **Primary Directories**: 
  - Used in some clients for quick access to media subsets (e.g., "All", "On Deck").
  - Most can be replicated via media queries.
  - Customizable by users.

- **Secondary Directories**:
  - Marked with `secondary="1"`.
  - Used in older clients for structured navigation.

- **Special Directories**:
  - Includes a "By Folder" entry for filesystem-based browsing.
  - Contains an obsolete `search="1"` entry for on-the-fly search dialog creation.

### Types
Each type in the library comes with a set of filters and sorts, aiding in building dynamic media controls:

- **Type Object Attributes**:
  - `key`: Endpoint for the media list of this type.
  - `type`: Metadata type (if standard Plex type).
  - `title`: Title for this content type (e.g., "Movies").

- **Filter Objects**:
  - Subset of the media query language.
  - Attributes include `filter` (name), `filterType` (data type), `key` (endpoint for value range), and `title`.

- **Sort Objects**:
  - Description of sort fields.
  - Attributes include `defaultDirection` (asc/desc), `descKey` and `key` (sort parameters), and `title`.

> **Note**: Filters and sorts are optional; without them, no filtering controls are rendered.


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



$response = $sdk->library->getLibraryDetails(
    sectionKey: 9518,
    includeDetails: Operations\IncludeDetails::Zero

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                  | Type                                                                                                                                                                                       | Required                                                                                                                                                                                   | Description                                                                                                                                                                                | Example                                                                                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `sectionKey`                                                                                                                                                                               | *int*                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                         | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/>                                                                                      | 9518                                                                                                                                                                                       |
| `includeDetails`                                                                                                                                                                           | [?Operations\IncludeDetails](../../Models/Operations/IncludeDetails.md)                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                         | Whether or not to include details for a section (types, filters, and sorts). <br/>Only exists for backwards compatibility, media providers other than the server libraries have it on always.<br/> |                                                                                                                                                                                            |

### Response

**[?Operations\GetLibraryDetailsResponse](../../Models/Operations/GetLibraryDetailsResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GetLibraryDetailsBadRequest   | 400                                  | application/json                     |
| Errors\GetLibraryDetailsUnauthorized | 401                                  | application/json                     |
| Errors\SDKException                  | 4XX, 5XX                             | \*/\*                                |

## getLibraryItems

Fetches details from a specific section of the library identified by a section key and a tag. The tag parameter accepts the following values:
- `all`: All items in the section.
- `unwatched`: Items that have not been played.
- `newest`: Items that are recently released.
- `recentlyAdded`: Items that are recently added to the library.
- `recentlyViewed`: Items that were recently viewed.
- `onDeck`: Items to continue watching.
- `collection`: Items categorized by collection.
- `edition`: Items categorized by edition.
- `genre`: Items categorized by genre.
- `year`: Items categorized by year of release.
- `decade`: Items categorized by decade.
- `director`: Items categorized by director.
- `actor`: Items categorized by starring actor.
- `country`: Items categorized by country of origin.
- `contentRating`: Items categorized by content rating.
- `rating`: Items categorized by rating.
- `resolution`: Items categorized by resolution.
- `firstCharacter`: Items categorized by the first letter.
- `folder`: Items categorized by folder.
- `albums`: Items categorized by album.


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

$request = new Operations\GetLibraryItemsRequest(
    tag: Operations\Tag::Edition,
    type: Operations\GetLibraryItemsQueryParamType::TvShow,
    sectionKey: 9518,
);

$response = $sdk->library->getLibraryItems(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetLibraryItemsRequest](../../Models/Operations/GetLibraryItemsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetLibraryItemsResponse](../../Models/Operations/GetLibraryItemsResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GetLibraryItemsBadRequest   | 400                                | application/json                   |
| Errors\GetLibraryItemsUnauthorized | 401                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## getMediaMetaData

This endpoint will return all the (meta)data of a library item specified with by the ratingKey.


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

$request = new Operations\GetMediaMetaDataRequest(
    ratingKey: 9518,
    includeConcerts: true,
    includeExtras: true,
    includeOnDeck: true,
    includePopularLeaves: true,
    includePreferences: true,
    includeReviews: true,
    includeChapters: true,
    includeStations: true,
    includeExternalMedia: true,
    asyncAugmentMetadata: true,
    asyncCheckFiles: true,
    asyncRefreshAnalysis: true,
    asyncRefreshLocalMediaAgent: true,
);

$response = $sdk->library->getMediaMetaData(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetMediaMetaDataRequest](../../Models/Operations/GetMediaMetaDataRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetMediaMetaDataResponse](../../Models/Operations/GetMediaMetaDataResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GetMediaMetaDataBadRequest   | 400                                 | application/json                    |
| Errors\GetMediaMetaDataUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |

## getRecentlyAddedLibrary

This endpoint will return the recently added content.


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

$request = new Operations\GetRecentlyAddedLibraryRequest(
    type: Operations\QueryParamType::TvShow,
    contentDirectoryID: 2,
    pinnedContentDirectoryID: [
        3,
        5,
        7,
        13,
        12,
        1,
        6,
        14,
        2,
        10,
        16,
        17,
    ],
    sectionID: 2,
);

$response = $sdk->library->getRecentlyAddedLibrary(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetRecentlyAddedLibraryRequest](../../Models/Operations/GetRecentlyAddedLibraryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetRecentlyAddedLibraryResponse](../../Models/Operations/GetRecentlyAddedLibraryResponse.md)**

### Errors

| Error Type                                 | Status Code                                | Content Type                               |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| Errors\GetRecentlyAddedLibraryBadRequest   | 400                                        | application/json                           |
| Errors\GetRecentlyAddedLibraryUnauthorized | 401                                        | application/json                           |
| Errors\SDKException                        | 4XX, 5XX                                   | \*/\*                                      |

## getRefreshLibraryMetadata

This endpoint Refreshes all the Metadata of the library.


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



$response = $sdk->library->getRefreshLibraryMetadata(
    sectionKey: 9518,
    force: Operations\Force::One

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   | Example                                                                                       |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                  | *int*                                                                                         | :heavy_check_mark:                                                                            | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/> | 9518                                                                                          |
| `force`                                                                                       | [?Operations\Force](../../Models/Operations/Force.md)                                         | :heavy_minus_sign:                                                                            | Force the refresh even if the library is already being refreshed.                             | 0                                                                                             |

### Response

**[?Operations\GetRefreshLibraryMetadataResponse](../../Models/Operations/GetRefreshLibraryMetadataResponse.md)**

### Errors

| Error Type                                   | Status Code                                  | Content Type                                 |
| -------------------------------------------- | -------------------------------------------- | -------------------------------------------- |
| Errors\GetRefreshLibraryMetadataBadRequest   | 400                                          | application/json                             |
| Errors\GetRefreshLibraryMetadataUnauthorized | 401                                          | application/json                             |
| Errors\SDKException                          | 4XX, 5XX                                     | \*/\*                                        |

## getSearchAllLibraries

Search the provided query across all library sections, or a single section, and return matches as hubs, split up by type.


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

$request = new Operations\GetSearchAllLibrariesRequest(
    query: '<value>',
    clientID: '3381b62b-9ab7-4e37-827b-203e9809eb58',
    searchTypes: [
        Operations\SearchTypes::People,
    ],
);

$response = $sdk->library->getSearchAllLibraries(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetSearchAllLibrariesRequest](../../Models/Operations/GetSearchAllLibrariesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetSearchAllLibrariesResponse](../../Models/Operations/GetSearchAllLibrariesResponse.md)**

### Errors

| Error Type                               | Status Code                              | Content Type                             |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| Errors\GetSearchAllLibrariesBadRequest   | 400                                      | application/json                         |
| Errors\GetSearchAllLibrariesUnauthorized | 401                                      | application/json                         |
| Errors\SDKException                      | 4XX, 5XX                                 | \*/\*                                    |

## getSearchLibrary

Search for content within a specific section of the library.

### Types
Each type in the library comes with a set of filters and sorts, aiding in building dynamic media controls:

- **Type Object Attributes**:
  - `type`: Metadata type (if standard Plex type).  
  - `title`: Title for this content type (e.g., "Movies").

- **Filter Objects**:
  - Subset of the media query language.
  - Attributes include `filter` (name), `filterType` (data type), `key` (endpoint for value range), and `title`.

- **Sort Objects**:
  - Description of sort fields.
  - Attributes include `defaultDirection` (asc/desc), `descKey` and `key` (sort parameters), and `title`.

> **Note**: Filters and sorts are optional; without them, no filtering controls are rendered.


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



$response = $sdk->library->getSearchLibrary(
    sectionKey: 9518,
    type: Operations\GetSearchLibraryQueryParamType::TvShow

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `sectionKey`                                                                                                                                                                                 | *int*                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                           | The unique key of the Plex library. <br/>Note: This is unique in the context of the Plex server.<br/>                                                                                        | 9518                                                                                                                                                                                         |
| `type`                                                                                                                                                                                       | [Operations\GetSearchLibraryQueryParamType](../../Models/Operations/GetSearchLibraryQueryParamType.md)                                                                                       | :heavy_check_mark:                                                                                                                                                                           | The type of media to retrieve or filter by.<br/>1 = movie<br/>2 = show<br/>3 = season<br/>4 = episode<br/>E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries<br/> | 2                                                                                                                                                                                            |

### Response

**[?Operations\GetSearchLibraryResponse](../../Models/Operations/GetSearchLibraryResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GetSearchLibraryBadRequest   | 400                                 | application/json                    |
| Errors\GetSearchLibraryUnauthorized | 401                                 | application/json                    |
| Errors\SDKException                 | 4XX, 5XX                            | \*/\*                               |

## getFileHash

This resource returns hash values for local files

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



$response = $sdk->library->getFileHash(
    url: 'file://C:\Image.png&type=13',
    type: 4462.17

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `url`                                                             | *string*                                                          | :heavy_check_mark:                                                | This is the path to the local file, must be prefixed by `file://` | file://C:\Image.png&type=13                                       |
| `type`                                                            | *?float*                                                          | :heavy_minus_sign:                                                | Item type                                                         |                                                                   |

### Response

**[?Operations\GetFileHashResponse](../../Models/Operations/GetFileHashResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GetFileHashBadRequest   | 400                            | application/json               |
| Errors\GetFileHashUnauthorized | 401                            | application/json               |
| Errors\SDKException            | 4XX, 5XX                       | \*/\*                          |

## getMetadataChildren

This endpoint will return the children of of a library item specified with the ratingKey.


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



$response = $sdk->library->getMetadataChildren(
    ratingKey: 1539.14,
    includeElements: '<value>'

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                               | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `ratingKey`                                                             | *float*                                                                 | :heavy_check_mark:                                                      | the id of the library item to return the children of.                   |
| `includeElements`                                                       | *?string*                                                               | :heavy_minus_sign:                                                      | Adds additional elements to the response. Supported types are (Stream)<br/> |

### Response

**[?Operations\GetMetadataChildrenResponse](../../Models/Operations/GetMetadataChildrenResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\GetMetadataChildrenBadRequest   | 400                                    | application/json                       |
| Errors\GetMetadataChildrenUnauthorized | 401                                    | application/json                       |
| Errors\SDKException                    | 4XX, 5XX                               | \*/\*                                  |

## getOnDeck

This endpoint will return the on deck content.


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



$response = $sdk->library->getOnDeck(

);

if ($response->object !== null) {
    // handle response
}
```

### Response

**[?Operations\GetOnDeckResponse](../../Models/Operations/GetOnDeckResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GetOnDeckBadRequest   | 400                          | application/json             |
| Errors\GetOnDeckUnauthorized | 401                          | application/json             |
| Errors\SDKException          | 4XX, 5XX                     | \*/\*                        |

## getTopWatchedContent

This endpoint will return the top watched content from libraries of a certain type


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



$response = $sdk->library->getTopWatchedContent(
    type: Operations\GetTopWatchedContentQueryParamType::TvShow,
    includeGuids: 1

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `type`                                                                                                                                                                                       | [Operations\GetTopWatchedContentQueryParamType](../../Models/Operations/GetTopWatchedContentQueryParamType.md)                                                                               | :heavy_check_mark:                                                                                                                                                                           | The type of media to retrieve or filter by.<br/>1 = movie<br/>2 = show<br/>3 = season<br/>4 = episode<br/>E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries<br/> | 2                                                                                                                                                                                            |
| `includeGuids`                                                                                                                                                                               | *?int*                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                           | Adds the Guids object to the response<br/>                                                                                                                                                   | 1                                                                                                                                                                                            |

### Response

**[?Operations\GetTopWatchedContentResponse](../../Models/Operations/GetTopWatchedContentResponse.md)**

### Errors

| Error Type                              | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\GetTopWatchedContentBadRequest   | 400                                     | application/json                        |
| Errors\GetTopWatchedContentUnauthorized | 401                                     | application/json                        |
| Errors\SDKException                     | 4XX, 5XX                                | \*/\*                                   |