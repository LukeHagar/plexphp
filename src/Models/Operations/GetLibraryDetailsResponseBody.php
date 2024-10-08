<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetLibraryDetailsResponseBody - The details of the library */
class GetLibraryDetailsResponseBody
{
    /**
     *
     * @var ?GetLibraryDetailsMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetLibraryDetailsMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetLibraryDetailsMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetLibraryDetailsMediaContainer  $mediaContainer
     */
    public function __construct(?GetLibraryDetailsMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}