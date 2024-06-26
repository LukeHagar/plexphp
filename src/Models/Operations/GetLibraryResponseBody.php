<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetLibraryResponseBody - The details of the library */
class GetLibraryResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('LukeHagar\Plex_API\Models\Operations\GetLibraryMediaContainer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetLibraryMediaContainer $mediaContainer = null;

    public function __construct()
    {
        $this->mediaContainer = null;
    }
}