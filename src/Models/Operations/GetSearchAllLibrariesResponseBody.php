<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetSearchAllLibrariesResponseBody - The libraries available on the Server */
class GetSearchAllLibrariesResponseBody
{
    /**
     *
     * @var GetSearchAllLibrariesMediaContainer $mediaContainer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesMediaContainer')]
    public GetSearchAllLibrariesMediaContainer $mediaContainer;

    /**
     * @param  GetSearchAllLibrariesMediaContainer  $mediaContainer
     * @phpstan-pure
     */
    public function __construct(GetSearchAllLibrariesMediaContainer $mediaContainer)
    {
        $this->mediaContainer = $mediaContainer;
    }
}