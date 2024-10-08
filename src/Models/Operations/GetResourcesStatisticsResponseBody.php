<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetResourcesStatisticsResponseBody - Resource Statistics */
class GetResourcesStatisticsResponseBody
{
    /**
     *
     * @var ?GetResourcesStatisticsMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetResourcesStatisticsMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetResourcesStatisticsMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetResourcesStatisticsMediaContainer  $mediaContainer
     */
    public function __construct(?GetResourcesStatisticsMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}