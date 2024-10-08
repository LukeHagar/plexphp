<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetStatisticsResponseBody - Media Statistics */
class GetStatisticsResponseBody
{
    /**
     *
     * @var ?GetStatisticsMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetStatisticsMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetStatisticsMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetStatisticsMediaContainer  $mediaContainer
     */
    public function __construct(?GetStatisticsMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}