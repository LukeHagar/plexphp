<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetSearchLibraryResponseBody - The contents of the library by section and type */
class GetSearchLibraryResponseBody
{
    /**
     *
     * @var ?GetSearchLibraryMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchLibraryMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetSearchLibraryMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetSearchLibraryMediaContainer  $mediaContainer
     */
    public function __construct(?GetSearchLibraryMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}