<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class GetSearchLibraryRequest
{
    /**
     * The unique key of the Plex library. 
     *
     * Note: This is unique in the context of the Plex server.
     *
     *
     * @var int $sectionKey
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=sectionKey')]
    public int $sectionKey;

    /**
     * The type of media to retrieve.
     *
     * 1 = movie
     * 2 = show
     * 3 = season
     * 4 = episode
     * E.g. A movie library will not return anything with type 3 as there are no seasons for movie libraries
     *
     *
     * @var QueryParamType $type
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public QueryParamType $type;

    /**
     * @param  int  $sectionKey
     * @param  QueryParamType  $type
     */
    public function __construct(int $sectionKey, QueryParamType $type)
    {
        $this->sectionKey = $sectionKey;
        $this->type = $type;
    }
}