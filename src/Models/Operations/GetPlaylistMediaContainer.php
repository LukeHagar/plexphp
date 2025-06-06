<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetPlaylistMediaContainer
{
    /**
     *
     * @var ?int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $size = null;

    /**
     * $metadata
     *
     * @var ?array<GetPlaylistMetadata> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetPlaylistMetadata>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * @param  ?int  $size
     * @param  ?array<GetPlaylistMetadata>  $metadata
     * @phpstan-pure
     */
    public function __construct(?int $size = null, ?array $metadata = null)
    {
        $this->size = $size;
        $this->metadata = $metadata;
    }
}