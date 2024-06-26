<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class AddPlaylistContentsMediaContainer
{
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;

    #[\JMS\Serializer\Annotation\SerializedName('leafCountAdded')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $leafCountAdded = null;

    #[\JMS\Serializer\Annotation\SerializedName('leafCountRequested')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $leafCountRequested = null;

    /**
     * $metadata
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\AddPlaylistContentsMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('Metadata')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\AddPlaylistContentsMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    public function __construct()
    {
        $this->size = null;
        $this->leafCountAdded = null;
        $this->leafCountRequested = null;
        $this->metadata = null;
    }
}