<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetMetadataChildrenResponseBody - The children of the library item. */
class GetMetadataChildrenResponseBody
{
    /**
     *
     * @var ?GetMetadataChildrenMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetMetadataChildrenMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetMetadataChildrenMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetMetadataChildrenMediaContainer  $mediaContainer
     */
    public function __construct(?GetMetadataChildrenMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}