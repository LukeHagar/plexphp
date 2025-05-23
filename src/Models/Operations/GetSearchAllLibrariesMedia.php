<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetSearchAllLibrariesMedia
{
    /**
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     *
     * @var string $container
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('container')]
    public string $container;

    /**
     * $part
     *
     * @var array<GetSearchAllLibrariesPart> $part
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Part')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesPart>')]
    public array $part;

    /**
     *
     * @var ?int $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     *
     * @var ?int $bitrate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bitrate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $bitrate = null;

    /**
     *
     * @var ?int $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $width = null;

    /**
     *
     * @var ?int $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $height = null;

    /**
     *
     * @var ?float $aspectRatio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aspectRatio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $aspectRatio = null;

    /**
     *
     * @var ?string $audioProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioProfile = null;

    /**
     *
     * @var ?int $audioChannels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioChannels')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $audioChannels = null;

    /**
     *
     * @var ?string $audioCodec
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioCodec')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioCodec = null;

    /**
     *
     * @var ?string $videoCodec
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoCodec')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoCodec = null;

    /**
     *
     * @var ?string $videoResolution
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoResolution')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoResolution = null;

    /**
     *
     * @var ?string $videoFrameRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoFrameRate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoFrameRate = null;

    /**
     *
     * @var ?string $videoProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoProfile = null;

    /**
     *
     * @var ?bool $hasVoiceActivity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasVoiceActivity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasVoiceActivity = null;

    /**
     *
     * @var ?bool $has64bitOffsets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has64bitOffsets')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $has64bitOffsets = null;

    /**
     *
     * @var ?GetSearchAllLibrariesOptimizedForStreaming $optimizedForStreaming
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('optimizedForStreaming')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesOptimizedForStreaming|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GetSearchAllLibrariesOptimizedForStreaming $optimizedForStreaming = null;

    /**
     * @param  int  $id
     * @param  string  $container
     * @param  array<GetSearchAllLibrariesPart>  $part
     * @param  ?int  $duration
     * @param  ?int  $bitrate
     * @param  ?int  $width
     * @param  ?int  $height
     * @param  ?float  $aspectRatio
     * @param  ?string  $audioProfile
     * @param  ?int  $audioChannels
     * @param  ?string  $audioCodec
     * @param  ?string  $videoCodec
     * @param  ?string  $videoResolution
     * @param  ?string  $videoFrameRate
     * @param  ?string  $videoProfile
     * @param  ?bool  $hasVoiceActivity
     * @param  ?GetSearchAllLibrariesOptimizedForStreaming  $optimizedForStreaming
     * @param  ?bool  $has64bitOffsets
     * @phpstan-pure
     */
    public function __construct(int $id, string $container, array $part, ?int $duration = null, ?int $bitrate = null, ?int $width = null, ?int $height = null, ?float $aspectRatio = null, ?string $audioProfile = null, ?int $audioChannels = null, ?string $audioCodec = null, ?string $videoCodec = null, ?string $videoResolution = null, ?string $videoFrameRate = null, ?string $videoProfile = null, ?bool $hasVoiceActivity = null, ?bool $has64bitOffsets = null, ?GetSearchAllLibrariesOptimizedForStreaming $optimizedForStreaming = GetSearchAllLibrariesOptimizedForStreaming::Disable)
    {
        $this->id = $id;
        $this->container = $container;
        $this->part = $part;
        $this->duration = $duration;
        $this->bitrate = $bitrate;
        $this->width = $width;
        $this->height = $height;
        $this->aspectRatio = $aspectRatio;
        $this->audioProfile = $audioProfile;
        $this->audioChannels = $audioChannels;
        $this->audioCodec = $audioCodec;
        $this->videoCodec = $videoCodec;
        $this->videoResolution = $videoResolution;
        $this->videoFrameRate = $videoFrameRate;
        $this->videoProfile = $videoProfile;
        $this->hasVoiceActivity = $hasVoiceActivity;
        $this->has64bitOffsets = $has64bitOffsets;
        $this->optimizedForStreaming = $optimizedForStreaming;
    }
}