<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetStatisticsResponseBody - Media Statistics */
class GetStatisticsResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('LukeHagar\Plex_API\Models\Operations\GetStatisticsMediaContainer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetStatisticsMediaContainer $mediaContainer = null;

    public function __construct()
    {
        $this->mediaContainer = null;
    }
}