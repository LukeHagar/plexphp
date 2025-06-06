<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibrarySectionsAllStream
{
    /**
     * Unique stream identifier.
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     * Stream type:
     *
     *   - 1 = video
     *   - 2 = audio
     *   - 3 = subtitle
     *
     *
     * @var GetLibrarySectionsAllStreamType $streamType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('streamType')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetLibrarySectionsAllStreamType')]
    public GetLibrarySectionsAllStreamType $streamType;

    /**
     * Codec used by the stream.
     *
     * @var string $codec
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('codec')]
    public string $codec;

    /**
     * Display title for the stream.
     *
     * @var string $displayTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayTitle')]
    public string $displayTitle;

    /**
     * Extended display title for the stream.
     *
     * @var string $extendedDisplayTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extendedDisplayTitle')]
    public string $extendedDisplayTitle;

    /**
     * Format of the stream (e.g., srt).
     *
     * @var ?string $format
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('format')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $format = null;

    /**
     * Indicates if this stream is default.
     *
     * @var ?bool $default
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $default = null;

    /**
     * Index of the stream.
     *
     * @var ?int $index
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('index')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $index = null;

    /**
     * Bitrate of the stream.
     *
     * @var ?int $bitrate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bitrate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $bitrate = null;

    /**
     * Language of the stream.
     *
     * @var ?string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $language = null;

    /**
     * Language tag (e.g., en).
     *
     * @var ?string $languageTag
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('languageTag')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $languageTag = null;

    /**
     * ISO language code.
     *
     * @var ?string $languageCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('languageCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $languageCode = null;

    /**
     * Indicates whether header compression is enabled.
     *
     * @var ?bool $headerCompression
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('headerCompression')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $headerCompression = null;

    /**
     * Dolby Vision BL compatibility ID.
     *
     * @var ?int $doviblCompatID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIBLCompatID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $doviblCompatID = null;

    /**
     * Indicates if Dolby Vision BL is present.
     *
     * @var ?bool $doviblPresent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIBLPresent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $doviblPresent = null;

    /**
     * Indicates if Dolby Vision EL is present.
     *
     * @var ?bool $dovielPresent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIELPresent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $dovielPresent = null;

    /**
     * Dolby Vision level.
     *
     * @var ?int $doviLevel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVILevel')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $doviLevel = null;

    /**
     * Indicates if Dolby Vision is present.
     *
     * @var ?bool $doviPresent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIPresent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $doviPresent = null;

    /**
     * Dolby Vision profile.
     *
     * @var ?int $doviProfile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIProfile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $doviProfile = null;

    /**
     * Indicates if Dolby Vision RPU is present.
     *
     * @var ?bool $dovirpuPresent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIRPUPresent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $dovirpuPresent = null;

    /**
     * Dolby Vision version.
     *
     * @var ?string $doviVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('DOVIVersion')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $doviVersion = null;

    /**
     * Bit depth of the video stream.
     *
     * @var ?int $bitDepth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bitDepth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $bitDepth = null;

    /**
     * Chroma sample location.
     *
     * @var ?string $chromaLocation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chromaLocation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $chromaLocation = null;

    /**
     * Chroma subsampling format.
     *
     * @var ?string $chromaSubsampling
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chromaSubsampling')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $chromaSubsampling = null;

    /**
     * Coded video height.
     *
     * @var ?int $codedHeight
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('codedHeight')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $codedHeight = null;

    /**
     * Coded video width.
     *
     * @var ?int $codedWidth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('codedWidth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $codedWidth = null;

    /**
     *
     * @var ?bool $closedCaptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('closedCaptions')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $closedCaptions = null;

    /**
     * Color primaries used.
     *
     * @var ?string $colorPrimaries
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('colorPrimaries')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $colorPrimaries = null;

    /**
     * Color range (e.g., tv).
     *
     * @var ?string $colorRange
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('colorRange')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $colorRange = null;

    /**
     * Color space.
     *
     * @var ?string $colorSpace
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('colorSpace')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $colorSpace = null;

    /**
     * Color transfer characteristics.
     *
     * @var ?string $colorTrc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('colorTrc')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $colorTrc = null;

    /**
     * Frame rate of the stream.
     *
     * @var ?float $frameRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('frameRate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $frameRate = null;

    /**
     * Key to access this stream part.
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     * Height of the video stream.
     *
     * @var ?int $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $height = null;

    /**
     * Video level.
     *
     * @var ?int $level
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('level')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $level = null;

    /**
     * Indicates if this is the original stream.
     *
     * @var ?bool $original
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('original')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $original = null;

    /**
     *
     * @var ?bool $hasScalingMatrix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasScalingMatrix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasScalingMatrix = null;

    /**
     * Video profile.
     *
     * @var ?string $profile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('profile')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $profile = null;

    /**
     *
     * @var ?string $scanType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scanType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $scanType = null;

    /**
     *
     * @var ?string $embeddedInVideo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('embeddedInVideo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $embeddedInVideo = null;

    /**
     * Number of reference frames.
     *
     * @var ?int $refFrames
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refFrames')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $refFrames = null;

    /**
     * Width of the video stream.
     *
     * @var ?int $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $width = null;

    /**
     * Indicates if this stream is selected (applicable for audio streams).
     *
     * @var ?bool $selected
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('selected')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $selected = null;

    /**
     *
     * @var ?bool $forced
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('forced')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $forced = null;

    /**
     * Number of audio channels (for audio streams).
     *
     * @var ?int $channels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channels')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $channels = null;

    /**
     * Audio channel layout.
     *
     * @var ?string $audioChannelLayout
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audioChannelLayout')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audioChannelLayout = null;

    /**
     * Sampling rate for the audio stream.
     *
     * @var ?int $samplingRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('samplingRate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $samplingRate = null;

    /**
     * Indicates if the stream can auto-sync.
     *
     * @var ?bool $canAutoSync
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canAutoSync')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $canAutoSync = null;

    /**
     * Indicates if the stream is for the hearing impaired.
     *
     * @var ?bool $hearingImpaired
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hearingImpaired')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hearingImpaired = null;

    /**
     * Indicates if the stream is a dub.
     *
     * @var ?bool $dub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dub')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $dub = null;

    /**
     * Optional title for the stream (e.g., language variant).
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * @param  int  $id
     * @param  GetLibrarySectionsAllStreamType  $streamType
     * @param  string  $codec
     * @param  string  $displayTitle
     * @param  string  $extendedDisplayTitle
     * @param  ?string  $format
     * @param  ?bool  $default
     * @param  ?int  $index
     * @param  ?int  $bitrate
     * @param  ?string  $language
     * @param  ?string  $languageTag
     * @param  ?string  $languageCode
     * @param  ?bool  $headerCompression
     * @param  ?int  $doviblCompatID
     * @param  ?bool  $doviblPresent
     * @param  ?bool  $dovielPresent
     * @param  ?int  $doviLevel
     * @param  ?bool  $doviPresent
     * @param  ?int  $doviProfile
     * @param  ?bool  $dovirpuPresent
     * @param  ?string  $doviVersion
     * @param  ?int  $bitDepth
     * @param  ?string  $chromaLocation
     * @param  ?string  $chromaSubsampling
     * @param  ?int  $codedHeight
     * @param  ?int  $codedWidth
     * @param  ?bool  $closedCaptions
     * @param  ?string  $colorPrimaries
     * @param  ?string  $colorRange
     * @param  ?string  $colorSpace
     * @param  ?string  $colorTrc
     * @param  ?float  $frameRate
     * @param  ?string  $key
     * @param  ?int  $height
     * @param  ?int  $level
     * @param  ?bool  $original
     * @param  ?bool  $hasScalingMatrix
     * @param  ?string  $profile
     * @param  ?string  $scanType
     * @param  ?string  $embeddedInVideo
     * @param  ?int  $refFrames
     * @param  ?int  $width
     * @param  ?bool  $selected
     * @param  ?bool  $forced
     * @param  ?int  $channels
     * @param  ?string  $audioChannelLayout
     * @param  ?int  $samplingRate
     * @param  ?bool  $canAutoSync
     * @param  ?bool  $hearingImpaired
     * @param  ?bool  $dub
     * @param  ?string  $title
     * @phpstan-pure
     */
    public function __construct(int $id, GetLibrarySectionsAllStreamType $streamType, string $codec, string $displayTitle, string $extendedDisplayTitle, ?string $format = null, ?bool $default = null, ?int $index = null, ?int $bitrate = null, ?string $language = null, ?string $languageTag = null, ?string $languageCode = null, ?bool $headerCompression = null, ?int $doviblCompatID = null, ?bool $doviblPresent = null, ?bool $dovielPresent = null, ?int $doviLevel = null, ?bool $doviPresent = null, ?int $doviProfile = null, ?bool $dovirpuPresent = null, ?string $doviVersion = null, ?int $bitDepth = null, ?string $chromaLocation = null, ?string $chromaSubsampling = null, ?int $codedHeight = null, ?int $codedWidth = null, ?bool $closedCaptions = null, ?string $colorPrimaries = null, ?string $colorRange = null, ?string $colorSpace = null, ?string $colorTrc = null, ?float $frameRate = null, ?string $key = null, ?int $height = null, ?int $level = null, ?bool $original = null, ?bool $hasScalingMatrix = null, ?string $profile = null, ?string $scanType = null, ?string $embeddedInVideo = null, ?int $refFrames = null, ?int $width = null, ?bool $selected = null, ?bool $forced = null, ?int $channels = null, ?string $audioChannelLayout = null, ?int $samplingRate = null, ?bool $canAutoSync = null, ?bool $hearingImpaired = null, ?bool $dub = null, ?string $title = null)
    {
        $this->id = $id;
        $this->streamType = $streamType;
        $this->codec = $codec;
        $this->displayTitle = $displayTitle;
        $this->extendedDisplayTitle = $extendedDisplayTitle;
        $this->format = $format;
        $this->default = $default;
        $this->index = $index;
        $this->bitrate = $bitrate;
        $this->language = $language;
        $this->languageTag = $languageTag;
        $this->languageCode = $languageCode;
        $this->headerCompression = $headerCompression;
        $this->doviblCompatID = $doviblCompatID;
        $this->doviblPresent = $doviblPresent;
        $this->dovielPresent = $dovielPresent;
        $this->doviLevel = $doviLevel;
        $this->doviPresent = $doviPresent;
        $this->doviProfile = $doviProfile;
        $this->dovirpuPresent = $dovirpuPresent;
        $this->doviVersion = $doviVersion;
        $this->bitDepth = $bitDepth;
        $this->chromaLocation = $chromaLocation;
        $this->chromaSubsampling = $chromaSubsampling;
        $this->codedHeight = $codedHeight;
        $this->codedWidth = $codedWidth;
        $this->closedCaptions = $closedCaptions;
        $this->colorPrimaries = $colorPrimaries;
        $this->colorRange = $colorRange;
        $this->colorSpace = $colorSpace;
        $this->colorTrc = $colorTrc;
        $this->frameRate = $frameRate;
        $this->key = $key;
        $this->height = $height;
        $this->level = $level;
        $this->original = $original;
        $this->hasScalingMatrix = $hasScalingMatrix;
        $this->profile = $profile;
        $this->scanType = $scanType;
        $this->embeddedInVideo = $embeddedInVideo;
        $this->refFrames = $refFrames;
        $this->width = $width;
        $this->selected = $selected;
        $this->forced = $forced;
        $this->channels = $channels;
        $this->audioChannelLayout = $audioChannelLayout;
        $this->samplingRate = $samplingRate;
        $this->canAutoSync = $canAutoSync;
        $this->hearingImpaired = $hearingImpaired;
        $this->dub = $dub;
        $this->title = $title;
    }
}