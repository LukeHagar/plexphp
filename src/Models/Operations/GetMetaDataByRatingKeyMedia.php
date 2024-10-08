<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetMetaDataByRatingKeyMedia
{
    /**
     *
     * @var ?int $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?int $duration
     */
    #[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     *
     * @var ?int $bitrate
     */
    #[\JMS\Serializer\Annotation\SerializedName('bitrate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $bitrate = null;

    /**
     *
     * @var ?int $width
     */
    #[\JMS\Serializer\Annotation\SerializedName('width')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $width = null;

    /**
     *
     * @var ?int $height
     */
    #[\JMS\Serializer\Annotation\SerializedName('height')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $height = null;

    /**
     *
     * @var ?float $aspectRatio
     */
    #[\JMS\Serializer\Annotation\SerializedName('aspectRatio')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $aspectRatio = null;

    /**
     *
     * @var ?int $audioChannels
     */
    #[\JMS\Serializer\Annotation\SerializedName('audioChannels')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $audioChannels = null;

    /**
     *
     * @var ?string $audioCodec
     */
    #[\JMS\Serializer\Annotation\SerializedName('audioCodec')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $audioCodec = null;

    /**
     *
     * @var ?string $videoCodec
     */
    #[\JMS\Serializer\Annotation\SerializedName('videoCodec')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $videoCodec = null;

    /**
     *
     * @var ?string $videoResolution
     */
    #[\JMS\Serializer\Annotation\SerializedName('videoResolution')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $videoResolution = null;

    /**
     *
     * @var ?string $container
     */
    #[\JMS\Serializer\Annotation\SerializedName('container')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $container = null;

    /**
     *
     * @var ?string $videoFrameRate
     */
    #[\JMS\Serializer\Annotation\SerializedName('videoFrameRate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $videoFrameRate = null;

    /**
     *
     * @var ?int $optimizedForStreaming
     */
    #[\JMS\Serializer\Annotation\SerializedName('optimizedForStreaming')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $optimizedForStreaming = null;

    /**
     *
     * @var ?string $audioProfile
     */
    #[\JMS\Serializer\Annotation\SerializedName('audioProfile')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $audioProfile = null;

    /**
     *
     * @var ?bool $has64bitOffsets
     */
    #[\JMS\Serializer\Annotation\SerializedName('has64bitOffsets')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $has64bitOffsets = null;

    /**
     *
     * @var ?string $videoProfile
     */
    #[\JMS\Serializer\Annotation\SerializedName('videoProfile')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $videoProfile = null;

    /**
     * $part
     *
     * @var ?array<GetMetaDataByRatingKeyPart> $part
     */
    #[\JMS\Serializer\Annotation\SerializedName('Part')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetMetaDataByRatingKeyPart>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $part = null;

    /**
     * @param  ?int  $id
     * @param  ?int  $duration
     * @param  ?int  $bitrate
     * @param  ?int  $width
     * @param  ?int  $height
     * @param  ?float  $aspectRatio
     * @param  ?int  $audioChannels
     * @param  ?string  $audioCodec
     * @param  ?string  $videoCodec
     * @param  ?string  $videoResolution
     * @param  ?string  $container
     * @param  ?string  $videoFrameRate
     * @param  ?int  $optimizedForStreaming
     * @param  ?string  $audioProfile
     * @param  ?bool  $has64bitOffsets
     * @param  ?string  $videoProfile
     * @param  ?array<GetMetaDataByRatingKeyPart>  $part
     */
    public function __construct(?int $id = null, ?int $duration = null, ?int $bitrate = null, ?int $width = null, ?int $height = null, ?float $aspectRatio = null, ?int $audioChannels = null, ?string $audioCodec = null, ?string $videoCodec = null, ?string $videoResolution = null, ?string $container = null, ?string $videoFrameRate = null, ?int $optimizedForStreaming = null, ?string $audioProfile = null, ?bool $has64bitOffsets = null, ?string $videoProfile = null, ?array $part = null)
    {
        $this->id = $id;
        $this->duration = $duration;
        $this->bitrate = $bitrate;
        $this->width = $width;
        $this->height = $height;
        $this->aspectRatio = $aspectRatio;
        $this->audioChannels = $audioChannels;
        $this->audioCodec = $audioCodec;
        $this->videoCodec = $videoCodec;
        $this->videoResolution = $videoResolution;
        $this->container = $container;
        $this->videoFrameRate = $videoFrameRate;
        $this->optimizedForStreaming = $optimizedForStreaming;
        $this->audioProfile = $audioProfile;
        $this->has64bitOffsets = $has64bitOffsets;
        $this->videoProfile = $videoProfile;
        $this->part = $part;
    }
}