<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetServerActivitiesResponseBody - The Server Activities */
class GetServerActivitiesResponseBody
{
    /**
     *
     * @var ?GetServerActivitiesMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetServerActivitiesMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetServerActivitiesMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetServerActivitiesMediaContainer  $mediaContainer
     */
    public function __construct(?GetServerActivitiesMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}