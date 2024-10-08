<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetSessionHistoryResponseBody - List of Plex Sessions */
class GetSessionHistoryResponseBody
{
    /**
     *
     * @var ?GetSessionHistoryMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSessionHistoryMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetSessionHistoryMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetSessionHistoryMediaContainer  $mediaContainer
     */
    public function __construct(?GetSessionHistoryMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}