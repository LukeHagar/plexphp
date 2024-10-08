<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetLibraryItemsResponseBody - The contents of the library by section and tag */
class GetLibraryItemsResponseBody
{
    /**
     *
     * @var ?GetLibraryItemsMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetLibraryItemsMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetLibraryItemsMediaContainer  $mediaContainer
     */
    public function __construct(?GetLibraryItemsMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}