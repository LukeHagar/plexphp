<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetMetaDataByRatingKeyStream
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
     * @var ?int $streamType
     */
    #[\JMS\Serializer\Annotation\SerializedName('streamType')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $streamType = null;

    /**
     *
     * @var ?bool $default
     */
    #[\JMS\Serializer\Annotation\SerializedName('default')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $default = null;

    /**
     *
     * @var ?string $codec
     */
    #[\JMS\Serializer\Annotation\SerializedName('codec')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $codec = null;

    /**
     *
     * @var ?int $index
     */
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $index = null;

    /**
     *
     * @var ?int $bitrate
     */
    #[\JMS\Serializer\Annotation\SerializedName('bitrate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $bitrate = null;

    /**
     *
     * @var ?int $bitDepth
     */
    #[\JMS\Serializer\Annotation\SerializedName('bitDepth')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $bitDepth = null;

    /**
     *
     * @var ?string $chromaLocation
     */
    #[\JMS\Serializer\Annotation\SerializedName('chromaLocation')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $chromaLocation = null;

    /**
     *
     * @var ?string $chromaSubsampling
     */
    #[\JMS\Serializer\Annotation\SerializedName('chromaSubsampling')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $chromaSubsampling = null;

    /**
     *
     * @var ?int $codedHeight
     */
    #[\JMS\Serializer\Annotation\SerializedName('codedHeight')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $codedHeight = null;

    /**
     *
     * @var ?int $codedWidth
     */
    #[\JMS\Serializer\Annotation\SerializedName('codedWidth')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $codedWidth = null;

    /**
     *
     * @var ?string $colorPrimaries
     */
    #[\JMS\Serializer\Annotation\SerializedName('colorPrimaries')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $colorPrimaries = null;

    /**
     *
     * @var ?string $colorRange
     */
    #[\JMS\Serializer\Annotation\SerializedName('colorRange')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $colorRange = null;

    /**
     *
     * @var ?string $colorSpace
     */
    #[\JMS\Serializer\Annotation\SerializedName('colorSpace')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $colorSpace = null;

    /**
     *
     * @var ?string $colorTrc
     */
    #[\JMS\Serializer\Annotation\SerializedName('colorTrc')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $colorTrc = null;

    /**
     *
     * @var ?int $frameRate
     */
    #[\JMS\Serializer\Annotation\SerializedName('frameRate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $frameRate = null;

    /**
     *
     * @var ?bool $hasScalingMatrix
     */
    #[\JMS\Serializer\Annotation\SerializedName('hasScalingMatrix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasScalingMatrix = null;

    /**
     *
     * @var ?int $height
     */
    #[\JMS\Serializer\Annotation\SerializedName('height')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $height = null;

    /**
     *
     * @var ?int $level
     */
    #[\JMS\Serializer\Annotation\SerializedName('level')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $level = null;

    /**
     *
     * @var ?string $profile
     */
    #[\JMS\Serializer\Annotation\SerializedName('profile')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $profile = null;

    /**
     *
     * @var ?int $refFrames
     */
    #[\JMS\Serializer\Annotation\SerializedName('refFrames')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $refFrames = null;

    /**
     *
     * @var ?string $scanType
     */
    #[\JMS\Serializer\Annotation\SerializedName('scanType')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $scanType = null;

    /**
     *
     * @var ?string $streamIdentifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('streamIdentifier')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $streamIdentifier = null;

    /**
     *
     * @var ?int $width
     */
    #[\JMS\Serializer\Annotation\SerializedName('width')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $width = null;

    /**
     *
     * @var ?string $displayTitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('displayTitle')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $displayTitle = null;

    /**
     *
     * @var ?string $extendedDisplayTitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('extendedDisplayTitle')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $extendedDisplayTitle = null;

    /**
     *
     * @var ?bool $selected
     */
    #[\JMS\Serializer\Annotation\SerializedName('selected')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $selected = null;

    /**
     *
     * @var ?int $channels
     */
    #[\JMS\Serializer\Annotation\SerializedName('channels')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $channels = null;

    /**
     *
     * @var ?string $language
     */
    #[\JMS\Serializer\Annotation\SerializedName('language')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $language = null;

    /**
     *
     * @var ?string $languageTag
     */
    #[\JMS\Serializer\Annotation\SerializedName('languageTag')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $languageTag = null;

    /**
     *
     * @var ?string $languageCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('languageCode')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $languageCode = null;

    /**
     *
     * @var ?int $samplingRate
     */
    #[\JMS\Serializer\Annotation\SerializedName('samplingRate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $samplingRate = null;

    /**
     * @param  ?int  $id
     * @param  ?int  $streamType
     * @param  ?bool  $default
     * @param  ?string  $codec
     * @param  ?int  $index
     * @param  ?int  $bitrate
     * @param  ?int  $bitDepth
     * @param  ?string  $chromaLocation
     * @param  ?string  $chromaSubsampling
     * @param  ?int  $codedHeight
     * @param  ?int  $codedWidth
     * @param  ?string  $colorPrimaries
     * @param  ?string  $colorRange
     * @param  ?string  $colorSpace
     * @param  ?string  $colorTrc
     * @param  ?int  $frameRate
     * @param  ?bool  $hasScalingMatrix
     * @param  ?int  $height
     * @param  ?int  $level
     * @param  ?string  $profile
     * @param  ?int  $refFrames
     * @param  ?string  $scanType
     * @param  ?string  $streamIdentifier
     * @param  ?int  $width
     * @param  ?string  $displayTitle
     * @param  ?string  $extendedDisplayTitle
     * @param  ?bool  $selected
     * @param  ?int  $channels
     * @param  ?string  $language
     * @param  ?string  $languageTag
     * @param  ?string  $languageCode
     * @param  ?int  $samplingRate
     */
    public function __construct(?int $id = null, ?int $streamType = null, ?bool $default = null, ?string $codec = null, ?int $index = null, ?int $bitrate = null, ?int $bitDepth = null, ?string $chromaLocation = null, ?string $chromaSubsampling = null, ?int $codedHeight = null, ?int $codedWidth = null, ?string $colorPrimaries = null, ?string $colorRange = null, ?string $colorSpace = null, ?string $colorTrc = null, ?int $frameRate = null, ?bool $hasScalingMatrix = null, ?int $height = null, ?int $level = null, ?string $profile = null, ?int $refFrames = null, ?string $scanType = null, ?string $streamIdentifier = null, ?int $width = null, ?string $displayTitle = null, ?string $extendedDisplayTitle = null, ?bool $selected = null, ?int $channels = null, ?string $language = null, ?string $languageTag = null, ?string $languageCode = null, ?int $samplingRate = null)
    {
        $this->id = $id;
        $this->streamType = $streamType;
        $this->default = $default;
        $this->codec = $codec;
        $this->index = $index;
        $this->bitrate = $bitrate;
        $this->bitDepth = $bitDepth;
        $this->chromaLocation = $chromaLocation;
        $this->chromaSubsampling = $chromaSubsampling;
        $this->codedHeight = $codedHeight;
        $this->codedWidth = $codedWidth;
        $this->colorPrimaries = $colorPrimaries;
        $this->colorRange = $colorRange;
        $this->colorSpace = $colorSpace;
        $this->colorTrc = $colorTrc;
        $this->frameRate = $frameRate;
        $this->hasScalingMatrix = $hasScalingMatrix;
        $this->height = $height;
        $this->level = $level;
        $this->profile = $profile;
        $this->refFrames = $refFrames;
        $this->scanType = $scanType;
        $this->streamIdentifier = $streamIdentifier;
        $this->width = $width;
        $this->displayTitle = $displayTitle;
        $this->extendedDisplayTitle = $extendedDisplayTitle;
        $this->selected = $selected;
        $this->channels = $channels;
        $this->language = $language;
        $this->languageTag = $languageTag;
        $this->languageCode = $languageCode;
        $this->samplingRate = $samplingRate;
    }
}