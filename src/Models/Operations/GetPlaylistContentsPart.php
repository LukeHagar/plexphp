<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetPlaylistContentsPart
{
    /**
     *
     * @var ?int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?int $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     *
     * @var ?string $file
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('file')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $file = null;

    /**
     *
     * @var ?int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $size = null;

    /**
     *
     * @var ?string $audioProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioProfile = null;

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
     * @param  ?int  $id
     * @param  ?string  $key
     * @param  ?int  $duration
     * @param  ?string  $file
     * @param  ?int  $size
     * @param  ?string  $audioProfile
     * @param  ?string  $container
     * @param  ?bool  $has64bitOffsets
     * @param  ?bool  $optimizedForStreaming
     * @param  ?string  $videoProfile
     * @phpstan-pure
     */
    public function __construct(?int $id = null, ?string $key = null, ?int $duration = null, ?string $file = null, ?int $size = null, ?string $audioProfile = null, ?string $container = null, ?bool $has64bitOffsets = null, ?bool $optimizedForStreaming = null, ?string $videoProfile = null)
    {
        $this->id = $id;
        $this->key = $key;
        $this->duration = $duration;
        $this->file = $file;
        $this->size = $size;
        $this->audioProfile = $audioProfile;
        $this->container = $container;
        $this->has64bitOffsets = $has64bitOffsets;
        $this->optimizedForStreaming = $optimizedForStreaming;
        $this->videoProfile = $videoProfile;
    }
}