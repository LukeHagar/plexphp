<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class AddPlaylistContentsRequest
{
    /**
     * the ID of the playlist
     *
     * @var float $playlistID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=playlistID')]
    public float $playlistID;

    /**
     * the content URI for the playlist
     *
     * @var string $uri
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=uri')]
    public string $uri;

    /**
     * the play queue to add to a playlist
     *
     * @var ?float $playQueueID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=playQueueID')]
    public ?float $playQueueID = null;

    /**
     * @param  float  $playlistID
     * @param  string  $uri
     * @param  ?float  $playQueueID
     * @phpstan-pure
     */
    public function __construct(float $playlistID, string $uri, ?float $playQueueID = null)
    {
        $this->playlistID = $playlistID;
        $this->uri = $uri;
        $this->playQueueID = $playQueueID;
    }
}