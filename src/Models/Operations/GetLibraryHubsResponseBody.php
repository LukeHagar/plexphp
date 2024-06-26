<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetLibraryHubsResponseBody - The hubs specific to the library */
class GetLibraryHubsResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('LukeHagar\Plex_API\Models\Operations\GetLibraryHubsMediaContainer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetLibraryHubsMediaContainer $mediaContainer = null;

    public function __construct()
    {
        $this->mediaContainer = null;
    }
}