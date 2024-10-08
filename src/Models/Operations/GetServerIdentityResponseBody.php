<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetServerIdentityResponseBody - The Server Identity information */
class GetServerIdentityResponseBody
{
    /**
     *
     * @var ?GetServerIdentityMediaContainer $mediaContainer
     */
    #[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetServerIdentityMediaContainer|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GetServerIdentityMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetServerIdentityMediaContainer  $mediaContainer
     */
    public function __construct(?GetServerIdentityMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}