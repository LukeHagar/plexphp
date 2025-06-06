<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibrarySectionsAllMedia
{
    /**
     * Unique media identifier.
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     * Duration of the media in milliseconds.
     *
     * @var ?int $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     * Bitrate in bits per second.
     *
     * @var ?int $bitrate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bitrate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $bitrate = null;

    /**
     * Video width in pixels.
     *
     * @var ?int $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $width = null;

    /**
     * Video height in pixels.
     *
     * @var ?int $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $height = null;

    /**
     * Aspect ratio of the video.
     *
     * @var ?float $aspectRatio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aspectRatio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $aspectRatio = null;

    /**
     * Number of audio channels.
     *
     * @var ?int $audioChannels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioChannels')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $audioChannels = null;

    /**
     *
     * @var ?int $displayOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayOffset')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $displayOffset = null;

    /**
     * Audio codec used.
     *
     * @var ?string $audioCodec
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioCodec')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioCodec = null;

    /**
     * Video codec used.
     *
     * @var ?string $videoCodec
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoCodec')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoCodec = null;

    /**
     * Video resolution (e.g., 4k).
     *
     * @var ?string $videoResolution
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoResolution')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoResolution = null;

    /**
     * File container type.
     *
     * @var ?string $container
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('container')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $container = null;

    /**
     * Frame rate of the video. Values found include NTSC, PAL, 24p
     *
     *
     *
     * @var ?string $videoFrameRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoFrameRate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoFrameRate = null;

    /**
     * Video profile (e.g., main 10).
     *
     * @var ?string $videoProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('videoProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $videoProfile = null;

    /**
     * Indicates whether voice activity is detected.
     *
     * @var ?bool $hasVoiceActivity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasVoiceActivity')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasVoiceActivity = null;

    /**
     * The audio profile used for the media (e.g., DTS, Dolby Digital, etc.).
     *
     * @var ?string $audioProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioProfile = null;

    /**
     * Has this media been optimized for streaming. NOTE: This can be 0, 1, false or true
     *
     * @var OptimizedForStreaming1|bool|null $optimizedForStreaming
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('optimizedForStreaming')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\OptimizedForStreaming1|bool|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public OptimizedForStreaming1|bool|null $optimizedForStreaming = null;

    /**
     *
     * @var ?bool $has64bitOffsets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has64bitOffsets')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $has64bitOffsets = null;

    /**
     * An array of parts for this media item.
     *
     * @var ?array<GetLibrarySectionsAllPart> $part
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Part')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibrarySectionsAllPart>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $part = null;

    /**
     * @param  int  $id
     * @param  ?int  $duration
     * @param  ?int  $bitrate
     * @param  ?int  $width
     * @param  ?int  $height
     * @param  ?float  $aspectRatio
     * @param  ?int  $audioChannels
     * @param  ?int  $displayOffset
     * @param  ?string  $audioCodec
     * @param  ?string  $videoCodec
     * @param  ?string  $videoResolution
     * @param  ?string  $container
     * @param  ?string  $videoFrameRate
     * @param  ?string  $videoProfile
     * @param  ?bool  $hasVoiceActivity
     * @param  ?string  $audioProfile
     * @param  OptimizedForStreaming1|bool|null  $optimizedForStreaming
     * @param  ?bool  $has64bitOffsets
     * @param  ?array<GetLibrarySectionsAllPart>  $part
     * @phpstan-pure
     */
    public function __construct(int $id, ?int $duration = null, ?int $bitrate = null, ?int $width = null, ?int $height = null, ?float $aspectRatio = null, ?int $audioChannels = null, ?int $displayOffset = null, ?string $audioCodec = null, ?string $videoCodec = null, ?string $videoResolution = null, ?string $container = null, ?string $videoFrameRate = null, ?string $videoProfile = null, ?bool $hasVoiceActivity = null, ?string $audioProfile = null, OptimizedForStreaming1|bool|null $optimizedForStreaming = null, ?bool $has64bitOffsets = null, ?array $part = null)
    {
        $this->id = $id;
        $this->duration = $duration;
        $this->bitrate = $bitrate;
        $this->width = $width;
        $this->height = $height;
        $this->aspectRatio = $aspectRatio;
        $this->audioChannels = $audioChannels;
        $this->displayOffset = $displayOffset;
        $this->audioCodec = $audioCodec;
        $this->videoCodec = $videoCodec;
        $this->videoResolution = $videoResolution;
        $this->container = $container;
        $this->videoFrameRate = $videoFrameRate;
        $this->videoProfile = $videoProfile;
        $this->hasVoiceActivity = $hasVoiceActivity;
        $this->audioProfile = $audioProfile;
        $this->optimizedForStreaming = $optimizedForStreaming;
        $this->has64bitOffsets = $has64bitOffsets;
        $this->part = $part;
    }
}