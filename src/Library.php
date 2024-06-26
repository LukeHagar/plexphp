<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API;

class Library
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Get Hash Value
     *
     * This resource returns hash values for local files
     *
     * @param  string  $url
     * @param  ?float  $type
     * @return \LukeHagar\Plex_API\Models\Operations\GetFileHashResponse
     */
    public function getFileHash(
        string $url,
        ?float $type = null,
    ): \LukeHagar\Plex_API\Models\Operations\GetFileHashResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetFileHashRequest();
        $request->url = $url;
        $request->type = $type;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/hashes');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\GetFileHashRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetFileHashResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetFileHashResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Recently Added
     *
     * This endpoint will return the recently added content.
     *
     *
     * @return \LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedResponse
     */
    public function getRecentlyAdded(
    ): \LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedResponse {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/recentlyAdded');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get All Libraries
     *
     * A library section (commonly referred to as just a library) is a collection of media. 
     * Libraries are typed, and depending on their type provide either a flat or a hierarchical view of the media. 
     * For example, a music library has an artist > albums > tracks structure, whereas a movie library is flat.
     *
     * Libraries have features beyond just being a collection of media; for starters, they include information about supported types, filters and sorts. 
     * This allows a client to provide a rich interface around the media (e.g. allow sorting movies by release year).
     *
     *
     * @return \LukeHagar\Plex_API\Models\Operations\GetLibrariesResponse
     */
    public function getLibraries(
    ): \LukeHagar\Plex_API\Models\Operations\GetLibrariesResponse {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetLibrariesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibrariesResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibrariesLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Library Details
     *
     * ## Library Details Endpoint
     *
     * This endpoint provides comprehensive details about the library, focusing on organizational aspects rather than the content itself.   
     *
     * The details include:
     *
     * ### Directories
     * Organized into three categories:
     *
     * - **Primary Directories**: 
     *   - Used in some clients for quick access to media subsets (e.g., "All", "On Deck").
     *   - Most can be replicated via media queries.
     *   - Customizable by users.
     *
     * - **Secondary Directories**:
     *   - Marked with `secondary="1"`.
     *   - Used in older clients for structured navigation.
     *
     * - **Special Directories**:
     *   - Includes a "By Folder" entry for filesystem-based browsing.
     *   - Contains an obsolete `search="1"` entry for on-the-fly search dialog creation.
     *
     * ### Types
     * Each type in the library comes with a set of filters and sorts, aiding in building dynamic media controls:
     *
     * - **Type Object Attributes**:
     *   - `key`: Endpoint for the media list of this type.
     *   - `type`: Metadata type (if standard Plex type).
     *   - `title`: Title for this content type (e.g., "Movies").
     *
     * - **Filter Objects**:
     *   - Subset of the media query language.
     *   - Attributes include `filter` (name), `filterType` (data type), `key` (endpoint for value range), and `title`.
     *
     * - **Sort Objects**:
     *   - Description of sort fields.
     *   - Attributes include `defaultDirection` (asc/desc), `descKey` and `key` (sort parameters), and `title`.
     *
     * > **Note**: Filters and sorts are optional; without them, no filtering controls are rendered.
     *
     *
     * @param  float  $sectionId
     * @param  ?\LukeHagar\Plex_API\Models\Operations\IncludeDetails  $includeDetails
     * @return \LukeHagar\Plex_API\Models\Operations\GetLibraryResponse
     */
    public function getLibrary(
        float $sectionId,
        ?\LukeHagar\Plex_API\Models\Operations\IncludeDetails $includeDetails = null,
    ): \LukeHagar\Plex_API\Models\Operations\GetLibraryResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetLibraryRequest();
        $request->sectionId = $sectionId;
        $request->includeDetails = $includeDetails;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections/{sectionId}', \LukeHagar\Plex_API\Models\Operations\GetLibraryRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\GetLibraryRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetLibraryResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibraryResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibraryLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Delete Library Section
     *
     * Delate a library using a specific section
     *
     * @param  float  $sectionId
     * @return \LukeHagar\Plex_API\Models\Operations\DeleteLibraryResponse
     */
    public function deleteLibrary(
        float $sectionId,
    ): \LukeHagar\Plex_API\Models\Operations\DeleteLibraryResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\DeleteLibraryRequest();
        $request->sectionId = $sectionId;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections/{sectionId}', \LukeHagar\Plex_API\Models\Operations\DeleteLibraryRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\DeleteLibraryResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\DeleteLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Library Items
     *
     * Fetches details from a specific section of the library identified by a section key and a tag. The tag parameter accepts the following values:
     * - `all`: All items in the section.
     * - `unwatched`: Items that have not been played.
     * - `newest`: Items that are recently released.
     * - `recentlyAdded`: Items that are recently added to the library.
     * - `recentlyViewed`: Items that were recently viewed.
     * - `onDeck`: Items to continue watching.
     * - `collection`: Items categorized by collection.
     * - `edition`: Items categorized by edition.
     * - `genre`: Items categorized by genre.
     * - `year`: Items categorized by year of release.
     * - `decade`: Items categorized by decade.
     * - `director`: Items categorized by director.
     * - `actor`: Items categorized by starring actor.
     * - `country`: Items categorized by country of origin.
     * - `contentRating`: Items categorized by content rating.
     * - `rating`: Items categorized by rating.
     * - `resolution`: Items categorized by resolution.
     * - `firstCharacter`: Items categorized by the first letter.
     * - `folder`: Items categorized by folder.
     *
     *
     * @param  mixed  $sectionId
     * @param  \LukeHagar\Plex_API\Models\Operations\Tag  $tag
     * @param  ?int  $includeGuids
     * @return \LukeHagar\Plex_API\Models\Operations\GetLibraryItemsResponse
     */
    public function getLibraryItems(
        mixed $sectionId,
        \LukeHagar\Plex_API\Models\Operations\Tag $tag,
        ?int $includeGuids = null,
    ): \LukeHagar\Plex_API\Models\Operations\GetLibraryItemsResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetLibraryItemsRequest();
        $request->sectionId = $sectionId;
        $request->tag = $tag;
        $request->includeGuids = $includeGuids;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections/{sectionId}/{tag}', \LukeHagar\Plex_API\Models\Operations\GetLibraryItemsRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetLibraryItemsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibraryItemsResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetLibraryItemsLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Refresh Library
     *
     * This endpoint Refreshes the library.
     *
     *
     * @param  float  $sectionId
     * @return \LukeHagar\Plex_API\Models\Operations\RefreshLibraryResponse
     */
    public function refreshLibrary(
        float $sectionId,
    ): \LukeHagar\Plex_API\Models\Operations\RefreshLibraryResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\RefreshLibraryRequest();
        $request->sectionId = $sectionId;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections/{sectionId}/refresh', \LukeHagar\Plex_API\Models\Operations\RefreshLibraryRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\RefreshLibraryResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\RefreshLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Search Library
     *
     * Search for content within a specific section of the library.
     *
     * ### Types
     * Each type in the library comes with a set of filters and sorts, aiding in building dynamic media controls:
     *
     * - **Type Object Attributes**:
     *   - `type`: Metadata type (if standard Plex type).  
     *   - `title`: Title for this content type (e.g., "Movies").
     *
     * - **Filter Objects**:
     *   - Subset of the media query language.
     *   - Attributes include `filter` (name), `filterType` (data type), `key` (endpoint for value range), and `title`.
     *
     * - **Sort Objects**:
     *   - Description of sort fields.
     *   - Attributes include `defaultDirection` (asc/desc), `descKey` and `key` (sort parameters), and `title`.
     *
     * > **Note**: Filters and sorts are optional; without them, no filtering controls are rendered.
     *
     *
     * @param  int  $sectionId
     * @param  \LukeHagar\Plex_API\Models\Operations\Type  $type
     * @return \LukeHagar\Plex_API\Models\Operations\SearchLibraryResponse
     */
    public function searchLibrary(
        int $sectionId,
        \LukeHagar\Plex_API\Models\Operations\Type $type,
    ): \LukeHagar\Plex_API\Models\Operations\SearchLibraryResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\SearchLibraryRequest();
        $request->sectionId = $sectionId;
        $request->type = $type;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/sections/{sectionId}/search', \LukeHagar\Plex_API\Models\Operations\SearchLibraryRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\SearchLibraryRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\SearchLibraryResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\SearchLibraryResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\SearchLibraryLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Items Metadata
     *
     * This endpoint will return the metadata of a library item specified with the ratingKey.
     *
     *
     * @param  float  $ratingKey
     * @return \LukeHagar\Plex_API\Models\Operations\GetMetadataResponse
     */
    public function getMetadata(
        float $ratingKey,
    ): \LukeHagar\Plex_API\Models\Operations\GetMetadataResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetMetadataRequest();
        $request->ratingKey = $ratingKey;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/metadata/{ratingKey}', \LukeHagar\Plex_API\Models\Operations\GetMetadataRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetMetadataResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetMetadataResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetMetadataLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Items Children
     *
     * This endpoint will return the children of of a library item specified with the ratingKey.
     *
     *
     * @param  float  $ratingKey
     * @param  ?string  $includeElements
     * @return \LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenResponse
     */
    public function getMetadataChildren(
        float $ratingKey,
        ?string $includeElements = null,
    ): \LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenRequest();
        $request->ratingKey = $ratingKey;
        $request->includeElements = $includeElements;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/metadata/{ratingKey}/children', \LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenLibraryResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get Top Watched Content
     *
     * This endpoint will return the top watched content from libraries of a certain type
     *
     *
     * @param  int  $type
     * @param  ?int  $includeGuids
     * @return \LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentResponse
     */
    public function getTopWatchedContent(
        int $type,
        ?int $includeGuids = null,
    ): \LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentResponse {
        $request = new \LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentRequest();
        $request->type = $type;
        $request->includeGuids = $includeGuids;
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/all/top');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Get On Deck
     *
     * This endpoint will return the on deck content.
     *
     *
     * @return \LukeHagar\Plex_API\Models\Operations\GetOnDeckResponse
     */
    public function getOnDeck(
    ): \LukeHagar\Plex_API\Models\Operations\GetOnDeckResponse {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/library/onDeck');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \LukeHagar\Plex_API\Models\Operations\GetOnDeckResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetOnDeckResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'LukeHagar\Plex_API\Models\Operations\GetOnDeckLibraryResponseBody', 'json');
            }
        }

        return $response;
    }
}