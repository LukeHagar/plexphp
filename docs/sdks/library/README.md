# Library


## Overview

API Calls interacting with Plex Media Server Libraries


### Available Operations

* [getFileHash](#getfilehash) - Get Hash Value
* [getRecentlyAdded](#getrecentlyadded) - Get Recently Added
* [getLibraries](#getlibraries) - Get All Libraries
* [getLibrary](#getlibrary) - Get Library Details
* [deleteLibrary](#deletelibrary) - Delete Library Section
* [getLibraryItems](#getlibraryitems) - Get Library Items
* [refreshLibrary](#refreshlibrary) - Refresh Library
* [getLatestLibraryItems](#getlatestlibraryitems) - Get Latest Library Items
* [getCommonLibraryItems](#getcommonlibraryitems) - Get Common Library Items
* [getMetadata](#getmetadata) - Get Items Metadata
* [getMetadataChildren](#getmetadatachildren) - Get Items Children
* [getOnDeck](#getondeck) - Get On Deck

## getFileHash

This resource returns hash values for local files

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
    

    $response = $sdk->library->getFileHash('file://C:\Image.png&type=13', 4462.17);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `url`                                                             | *string*                                                          | :heavy_check_mark:                                                | This is the path to the local file, must be prefixed by `file://` | file://C:\Image.png&type=13                                       |
| `type`                                                            | *float*                                                           | :heavy_minus_sign:                                                | Item type                                                         |                                                                   |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetFileHashResponse](../../Models/Operations/GetFileHashResponse.md)**


## getRecentlyAdded

This endpoint will return the recently added content.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    $response = $sdk->library->getRecentlyAdded();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedResponse](../../Models/Operations/GetRecentlyAddedResponse.md)**


## getLibraries

A library section (commonly referred to as just a library) is a collection of media. 
Libraries are typed, and depending on their type provide either a flat or a hierarchical view of the media. 
For example, a music library has an artist > albums > tracks structure, whereas a movie library is flat.

Libraries have features beyond just being a collection of media; for starters, they include information about supported types, filters and sorts. 
This allows a client to provide a rich interface around the media (e.g. allow sorting movies by release year).


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    $response = $sdk->library->getLibraries();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetLibrariesResponse](../../Models/Operations/GetLibrariesResponse.md)**


## getLibrary

Returns details for the library. This can be thought of as an interstitial endpoint because it contains information about the library, rather than content itself. These details are:

- A list of `Directory` objects: These used to be used by clients to build a menuing system. There are four flavors of directory found here:
  - Primary: (e.g. all, On Deck) These are still used in some clients to provide "shortcuts" to subsets of media. However, with the exception of On Deck, all of them can be created by media queries, and the desire is to allow these to be customized by users.
  - Secondary: These are marked with `secondary="1"` and were used by old clients to provide nested menus allowing for primative (but structured) navigation.
  - Special: There is a By Folder entry which allows browsing the media by the underlying filesystem structure, and there's a completely obsolete entry marked `search="1"` which used to be used to allow clients to build search dialogs on the fly.
- A list of `Type` objects: These represent the types of things found in this library, and for each one, a list of `Filter` and `Sort` objects. These can be used to build rich controls around a grid of media to allow filtering and organizing. Note that these filters and sorts are optional, and without them, the client won't render any filtering controls. The `Type` object contains:
  - `key`: This provides the root endpoint returning the actual media list for the type.
  - `type`: This is the metadata type for the type (if a standard Plex type).
  - `title`: The title for for the content of this type (e.g. "Movies").
- Each `Filter` object contains a description of the filter. Note that it is not an exhaustive list of the full media query language, but an inportant subset useful for top-level API.
  - `filter`: This represents the filter name used for the filter, which can be used to construct complex media queries with.
  - `filterType`: This is either `string`, `integer`, or `boolean`, and describes the type of values used for the filter.
  - `key`: This provides the endpoint where the possible range of values for the filter can be retrieved (e.g. for a "Genre" filter, it returns a list of all the genres in the library). This will include a `type` argument that matches the metadata type of the Type element.
  - `title`: The title for the filter.
- Each `Sort` object contains a description of the sort field.
  - `defaultDirection`: Can be either `asc` or `desc`, and specifies the default direction for the sort field (e.g. titles default to alphabetically ascending).
  - `descKey` and `key`: Contains the parameters passed to the `sort=...` media query for each direction of the sort.
  - `title`: The title of the field.


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
    

    $response = $sdk->library->getLibrary(1000, Operations\IncludeDetails::Zero);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                  | Type                                                                                                                                                                                       | Required                                                                                                                                                                                   | Description                                                                                                                                                                                | Example                                                                                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `sectionId`                                                                                                                                                                                | *float*                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                         | the Id of the library to query                                                                                                                                                             | 1000                                                                                                                                                                                       |
| `includeDetails`                                                                                                                                                                           | [\LukeHagar\Plex_API\Models\Operations\IncludeDetails](../../Models/Operations/IncludeDetails.md)                                                                                          | :heavy_minus_sign:                                                                                                                                                                         | Whether or not to include details for a section (types, filters, and sorts). <br/>Only exists for backwards compatibility, media providers other than the server libraries have it on always.<br/> |                                                                                                                                                                                            |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetLibraryResponse](../../Models/Operations/GetLibraryResponse.md)**


## deleteLibrary

Delate a library using a specific section

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
    

    $response = $sdk->library->deleteLibrary(1000);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    | Example                        |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `sectionId`                    | *float*                        | :heavy_check_mark:             | the Id of the library to query | 1000                           |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\DeleteLibraryResponse](../../Models/Operations/DeleteLibraryResponse.md)**


## getLibraryItems

This endpoint will return a list of library items filtered by the filter and type provided


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
    

    $response = $sdk->library->getLibraryItems(4510.92, 760.66, 'string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `sectionId`                    | *float*                        | :heavy_check_mark:             | the Id of the library to query |
| `type`                         | *float*                        | :heavy_minus_sign:             | item type                      |
| `filter`                       | *string*                       | :heavy_minus_sign:             | the filter parameter           |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsResponse](../../Models/Operations/GetLibraryItemsResponse.md)**


## refreshLibrary

This endpoint Refreshes the library.


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
    

    $response = $sdk->library->refreshLibrary(934.16);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                        | Type                             | Required                         | Description                      |
| -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- |
| `sectionId`                      | *float*                          | :heavy_check_mark:               | the Id of the library to refresh |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\RefreshLibraryResponse](../../Models/Operations/RefreshLibraryResponse.md)**


## getLatestLibraryItems

This endpoint will return a list of the latest library items filtered by the filter and type provided


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
    

    $response = $sdk->library->getLatestLibraryItems(7171.54, 8015.12, 'string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `sectionId`                    | *float*                        | :heavy_check_mark:             | the Id of the library to query |
| `type`                         | *float*                        | :heavy_check_mark:             | item type                      |
| `filter`                       | *string*                       | :heavy_minus_sign:             | the filter parameter           |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetLatestLibraryItemsResponse](../../Models/Operations/GetLatestLibraryItemsResponse.md)**


## getCommonLibraryItems

Represents a "Common" item. It contains only the common attributes of the items selected by the provided filter


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
    

    $response = $sdk->library->getCommonLibraryItems(2710.37, 2760.31, 'string');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `sectionId`                    | *float*                        | :heavy_check_mark:             | the Id of the library to query |
| `type`                         | *float*                        | :heavy_check_mark:             | item type                      |
| `filter`                       | *string*                       | :heavy_minus_sign:             | the filter parameter           |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetCommonLibraryItemsResponse](../../Models/Operations/GetCommonLibraryItemsResponse.md)**


## getMetadata

This endpoint will return the metadata of a library item specified with the ratingKey.


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
    

    $response = $sdk->library->getMetadata(8382.31);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                             | Type                                                  | Required                                              | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `ratingKey`                                           | *float*                                               | :heavy_check_mark:                                    | the id of the library item to return the children of. |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetMetadataResponse](../../Models/Operations/GetMetadataResponse.md)**


## getMetadataChildren

This endpoint will return the children of of a library item specified with the ratingKey.


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
    

    $response = $sdk->library->getMetadataChildren(1539.14);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                             | Type                                                  | Required                                              | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `ratingKey`                                           | *float*                                               | :heavy_check_mark:                                    | the id of the library item to return the children of. |


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenResponse](../../Models/Operations/GetMetadataChildrenResponse.md)**


## getOnDeck

This endpoint will return the on deck content.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \LukeHagar\Plex_API;
use \LukeHagar\Plex_API\Models\Components;

$security = new Components\Security();
$security->accessToken = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();

try {
    $response = $sdk->library->getOnDeck();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\LukeHagar\Plex_API\Models\Operations\GetOnDeckResponse](../../Models/Operations/GetOnDeckResponse.md)**

