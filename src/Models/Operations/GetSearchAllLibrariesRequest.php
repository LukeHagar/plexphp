<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class GetSearchAllLibrariesRequest
{
    /**
     * The search query term.
     *
     * @var string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public string $query;

    /**
     * An opaque identifier unique to the client (UUID, serial number, or other unique device ID)
     *
     * @var string $clientID
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Plex-Client-Identifier')]
    public string $clientID;

    /**
     * Limit the number of results returned.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * A comma-separated list of search types to include. Valid values are: movies, music, otherVideos, people, tv.
     *
     *
     *
     * @var ?array<SearchTypes> $searchTypes
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=searchTypes')]
    public ?array $searchTypes = null;

    /**
     * Whether to include collections in the search results.
     *
     * @var ?QueryParamIncludeCollections $includeCollections
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeCollections')]
    public ?QueryParamIncludeCollections $includeCollections = null;

    /**
     * Whether to include external media in the search results.
     *
     * @var ?QueryParamIncludeExternalMedia $includeExternalMedia
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeExternalMedia')]
    public ?QueryParamIncludeExternalMedia $includeExternalMedia = null;

    /**
     * @param  string  $query
     * @param  string  $clientID
     * @param  ?int  $limit
     * @param  ?array<SearchTypes>  $searchTypes
     * @param  ?QueryParamIncludeCollections  $includeCollections
     * @param  ?QueryParamIncludeExternalMedia  $includeExternalMedia
     */
    public function __construct(string $query, string $clientID, ?int $limit = null, ?array $searchTypes = null, ?QueryParamIncludeCollections $includeCollections = QueryParamIncludeCollections::Disable, ?QueryParamIncludeExternalMedia $includeExternalMedia = QueryParamIncludeExternalMedia::Disable)
    {
        $this->query = $query;
        $this->clientID = $clientID;
        $this->limit = $limit;
        $this->searchTypes = $searchTypes;
        $this->includeCollections = $includeCollections;
        $this->includeExternalMedia = $includeExternalMedia;
    }
}