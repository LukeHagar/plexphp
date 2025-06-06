<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetRecentlyAddedLibraryPart
{
    /**
     *
     * @var ?float $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $id = null;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?float $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $duration = null;

    /**
     *
     * @var ?string $file
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('file')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $file = null;

    /**
     *
     * @var ?float $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $size = null;

    /**
     *
     * @var ?string $container
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('container')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $container = null;

    /**
     *
     * @var ?bool $has64bitOffsets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has64bitOffsets')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $has64bitOffsets = null;

    /**
     *
     * @var ?float $hasThumbnail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasThumbnail')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $hasThumbnail = null;

    /**
     *
     * @var ?bool $optimizedForStreaming
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('optimizedForStreaming')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $optimizedForStreaming = null;

    /**
     *
     * @var ?string $videoProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoProfile = null;

    /**
     * @param  ?float  $id
     * @param  ?string  $key
     * @param  ?float  $duration
     * @param  ?string  $file
     * @param  ?float  $size
     * @param  ?string  $container
     * @param  ?bool  $has64bitOffsets
     * @param  ?float  $hasThumbnail
     * @param  ?bool  $optimizedForStreaming
     * @param  ?string  $videoProfile
     * @phpstan-pure
     */
    public function __construct(?float $id = null, ?string $key = null, ?float $duration = null, ?string $file = null, ?float $size = null, ?string $container = null, ?bool $has64bitOffsets = null, ?float $hasThumbnail = null, ?bool $optimizedForStreaming = null, ?string $videoProfile = null)
    {
        $this->id = $id;
        $this->key = $key;
        $this->duration = $duration;
        $this->file = $file;
        $this->size = $size;
        $this->container = $container;
        $this->has64bitOffsets = $has64bitOffsets;
        $this->hasThumbnail = $hasThumbnail;
        $this->optimizedForStreaming = $optimizedForStreaming;
        $this->videoProfile = $videoProfile;
    }
}