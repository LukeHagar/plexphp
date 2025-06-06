<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetSessionsMetadata
{
    /**
     *
     * @var ?int $addedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $addedAt = null;

    /**
     *
     * @var ?string $art
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('art')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $art = null;

    /**
     *
     * @var ?int $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     *
     * @var ?string $grandparentArt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentArt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentArt = null;

    /**
     *
     * @var ?string $grandparentGuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentGuid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentGuid = null;

    /**
     *
     * @var ?string $grandparentKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentKey = null;

    /**
     *
     * @var ?string $grandparentRatingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentRatingKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentRatingKey = null;

    /**
     *
     * @var ?string $grandparentThumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentThumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentThumb = null;

    /**
     *
     * @var ?string $grandparentTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentTitle = null;

    /**
     *
     * @var ?string $guid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $guid = null;

    /**
     *
     * @var ?int $index
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('index')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $index = null;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?string $librarySectionID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $librarySectionID = null;

    /**
     *
     * @var ?string $librarySectionKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $librarySectionKey = null;

    /**
     *
     * @var ?string $librarySectionTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $librarySectionTitle = null;

    /**
     *
     * @var ?string $musicAnalysisVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('musicAnalysisVersion')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $musicAnalysisVersion = null;

    /**
     * The original untranslated name of the media item when non-english, or the track artist if an audio Item has an album artist
     *
     * @var ?string $originalTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('originalTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originalTitle = null;

    /**
     *
     * @var ?string $parentGuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentGuid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentGuid = null;

    /**
     *
     * @var ?int $parentIndex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentIndex')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $parentIndex = null;

    /**
     *
     * @var ?string $parentKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentKey = null;

    /**
     *
     * @var ?string $parentRatingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentRatingKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentRatingKey = null;

    /**
     *
     * @var ?string $parentStudio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentStudio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentStudio = null;

    /**
     *
     * @var ?string $parentThumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentThumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentThumb = null;

    /**
     *
     * @var ?string $parentTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentTitle = null;

    /**
     *
     * @var ?int $parentYear
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentYear')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $parentYear = null;

    /**
     *
     * @var ?int $ratingCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ratingCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $ratingCount = null;

    /**
     *
     * @var ?string $ratingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ratingKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ratingKey = null;

    /**
     *
     * @var ?string $sessionKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sessionKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sessionKey = null;

    /**
     *
     * @var ?string $thumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('thumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $thumb = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $titleSort
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('titleSort')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $titleSort = null;

    /**
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     *
     * @var ?int $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $updatedAt = null;

    /**
     *
     * @var ?int $viewOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('viewOffset')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $viewOffset = null;

    /**
     * $media
     *
     * @var ?array<GetSessionsMedia> $media
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Media')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSessionsMedia>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $media = null;

    /**
     *
     * @var ?GetSessionsUser $user
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('User')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSessionsUser|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GetSessionsUser $user = null;

    /**
     *
     * @var ?Player $player
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Player')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\Player|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Player $player = null;

    /**
     *
     * @var ?Session $session
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Session')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\Session|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Session $session = null;

    /**
     * @param  ?int  $addedAt
     * @param  ?string  $art
     * @param  ?int  $duration
     * @param  ?string  $grandparentArt
     * @param  ?string  $grandparentGuid
     * @param  ?string  $grandparentKey
     * @param  ?string  $grandparentRatingKey
     * @param  ?string  $grandparentThumb
     * @param  ?string  $grandparentTitle
     * @param  ?string  $guid
     * @param  ?int  $index
     * @param  ?string  $key
     * @param  ?string  $librarySectionID
     * @param  ?string  $librarySectionKey
     * @param  ?string  $librarySectionTitle
     * @param  ?string  $musicAnalysisVersion
     * @param  ?string  $originalTitle
     * @param  ?string  $parentGuid
     * @param  ?int  $parentIndex
     * @param  ?string  $parentKey
     * @param  ?string  $parentRatingKey
     * @param  ?string  $parentStudio
     * @param  ?string  $parentThumb
     * @param  ?string  $parentTitle
     * @param  ?int  $parentYear
     * @param  ?int  $ratingCount
     * @param  ?string  $ratingKey
     * @param  ?string  $sessionKey
     * @param  ?string  $thumb
     * @param  ?string  $title
     * @param  ?string  $titleSort
     * @param  ?string  $type
     * @param  ?int  $updatedAt
     * @param  ?int  $viewOffset
     * @param  ?array<GetSessionsMedia>  $media
     * @param  ?GetSessionsUser  $user
     * @param  ?Player  $player
     * @param  ?Session  $session
     * @phpstan-pure
     */
    public function __construct(?int $addedAt = null, ?string $art = null, ?int $duration = null, ?string $grandparentArt = null, ?string $grandparentGuid = null, ?string $grandparentKey = null, ?string $grandparentRatingKey = null, ?string $grandparentThumb = null, ?string $grandparentTitle = null, ?string $guid = null, ?int $index = null, ?string $key = null, ?string $librarySectionID = null, ?string $librarySectionKey = null, ?string $librarySectionTitle = null, ?string $musicAnalysisVersion = null, ?string $originalTitle = null, ?string $parentGuid = null, ?int $parentIndex = null, ?string $parentKey = null, ?string $parentRatingKey = null, ?string $parentStudio = null, ?string $parentThumb = null, ?string $parentTitle = null, ?int $parentYear = null, ?int $ratingCount = null, ?string $ratingKey = null, ?string $sessionKey = null, ?string $thumb = null, ?string $title = null, ?string $titleSort = null, ?string $type = null, ?int $updatedAt = null, ?int $viewOffset = null, ?array $media = null, ?GetSessionsUser $user = null, ?Player $player = null, ?Session $session = null)
    {
        $this->addedAt = $addedAt;
        $this->art = $art;
        $this->duration = $duration;
        $this->grandparentArt = $grandparentArt;
        $this->grandparentGuid = $grandparentGuid;
        $this->grandparentKey = $grandparentKey;
        $this->grandparentRatingKey = $grandparentRatingKey;
        $this->grandparentThumb = $grandparentThumb;
        $this->grandparentTitle = $grandparentTitle;
        $this->guid = $guid;
        $this->index = $index;
        $this->key = $key;
        $this->librarySectionID = $librarySectionID;
        $this->librarySectionKey = $librarySectionKey;
        $this->librarySectionTitle = $librarySectionTitle;
        $this->musicAnalysisVersion = $musicAnalysisVersion;
        $this->originalTitle = $originalTitle;
        $this->parentGuid = $parentGuid;
        $this->parentIndex = $parentIndex;
        $this->parentKey = $parentKey;
        $this->parentRatingKey = $parentRatingKey;
        $this->parentStudio = $parentStudio;
        $this->parentThumb = $parentThumb;
        $this->parentTitle = $parentTitle;
        $this->parentYear = $parentYear;
        $this->ratingCount = $ratingCount;
        $this->ratingKey = $ratingKey;
        $this->sessionKey = $sessionKey;
        $this->thumb = $thumb;
        $this->title = $title;
        $this->titleSort = $titleSort;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->viewOffset = $viewOffset;
        $this->media = $media;
        $this->user = $user;
        $this->player = $player;
        $this->session = $session;
    }
}