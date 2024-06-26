<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class CreatePlaylistRequest
{
    /**
     * name of the playlist
     *
     * @var string $title
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=title')]
    public string $title;

    /**
     * type of playlist to create
     *
     * @var \LukeHagar\Plex_API\Models\Operations\QueryParamType $type
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public QueryParamType $type;

    /**
     * whether the playlist is smart or not
     *
     * @var \LukeHagar\Plex_API\Models\Operations\Smart $smart
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=smart')]
    public Smart $smart;

    /**
     * the content URI for the playlist
     *
     * @var string $uri
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=uri')]
    public string $uri;

    /**
     * the play queue to copy to a playlist
     *
     * @var ?float $playQueueID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=playQueueID')]
    public ?float $playQueueID = null;

    public function __construct()
    {
        $this->title = '';
        $this->type = \LukeHagar\Plex_API\Models\Operations\QueryParamType::Audio;
        $this->smart = \LukeHagar\Plex_API\Models\Operations\Smart::Zero;
        $this->uri = '';
        $this->playQueueID = null;
    }
}