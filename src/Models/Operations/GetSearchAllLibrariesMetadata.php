<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use Brick\DateTime\LocalDate;
class GetSearchAllLibrariesMetadata
{
    /**
     * The rating key (Media ID) of this media item.
     *
     * Note: This is always an integer, but is represented as a string in the API.
     *
     *
     * @var string $ratingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ratingKey')]
    public string $ratingKey;

    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $guid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guid')]
    public string $guid;

    /**
     * The type of media content
     *
     *
     *
     * @var GetSearchAllLibrariesType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesType')]
    public GetSearchAllLibrariesType $type;

    /**
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var string $summary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('summary')]
    public string $summary;

    /**
     * Unix epoch datetime in seconds
     *
     * @var int $addedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('addedAt')]
    public int $addedAt;

    /**
     *
     * @var ?string $studio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('studio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $studio = null;

    /**
     *
     * @var ?bool $skipChildren
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('skipChildren')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $skipChildren = null;

    /**
     *
     * @var ?int $librarySectionID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $librarySectionID = null;

    /**
     *
     * @var ?string $librarySectionTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $librarySectionTitle = null;

    /**
     *
     * @var ?string $librarySectionKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('librarySectionKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $librarySectionKey = null;

    /**
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     *
     * @var ?string $contentRating
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contentRating')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contentRating = null;

    /**
     *
     * @var ?float $rating
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rating')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $rating = null;

    /**
     *
     * @var ?float $audienceRating
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audienceRating')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $audienceRating = null;

    /**
     *
     * @var ?int $year
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('year')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $year = null;

    /**
     *
     * @var ?int $seasonCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('seasonCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $seasonCount = null;

    /**
     *
     * @var ?string $tagline
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagline')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tagline = null;

    /**
     * Setting that indicates the episode ordering for the show
     *
     * None = Library default,
     * tmdbAiring = The Movie Database (Aired),
     * tvdbAiring = TheTVDB (Aired),
     * tvdbDvd = TheTVDB (DVD),
     * tvdbAbsolute = TheTVDB (Absolute)).
     *
     *
     * @var ?GetSearchAllLibrariesShowOrdering $showOrdering
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('showOrdering')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesShowOrdering|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GetSearchAllLibrariesShowOrdering $showOrdering = null;

    /**
     *
     * @var ?string $thumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('thumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $thumb = null;

    /**
     *
     * @var ?string $art
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('art')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $art = null;

    /**
     *
     * @var ?string $banner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('banner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $banner = null;

    /**
     *
     * @var ?int $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $duration = null;

    /**
     *
     * @var ?LocalDate $originallyAvailableAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('originallyAvailableAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LocalDate $originallyAvailableAt = null;

    /**
     * Unix epoch datetime in seconds
     *
     * @var ?int $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $updatedAt = null;

    /**
     *
     * @var ?string $audienceRatingImage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('audienceRatingImage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $audienceRatingImage = null;

    /**
     *
     * @var ?string $chapterSource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chapterSource')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $chapterSource = null;

    /**
     *
     * @var ?string $primaryExtraKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primaryExtraKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $primaryExtraKey = null;

    /**
     *
     * @var ?string $ratingImage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ratingImage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ratingImage = null;

    /**
     *
     * @var ?string $grandparentRatingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentRatingKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentRatingKey = null;

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
     * @var ?string $grandparentTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentTitle = null;

    /**
     *
     * @var ?string $grandparentThumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentThumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentThumb = null;

    /**
     *
     * @var ?string $parentSlug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentSlug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentSlug = null;

    /**
     *
     * @var ?string $grandparentSlug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentSlug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentSlug = null;

    /**
     *
     * @var ?string $grandparentArt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentArt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentArt = null;

    /**
     *
     * @var ?string $grandparentTheme
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grandparentTheme')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $grandparentTheme = null;

    /**
     * The Media object is only included when type query is `4` or higher.
     *
     *
     *
     * @var ?array<GetSearchAllLibrariesMedia> $media
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Media')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesMedia>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $media = null;

    /**
     * $genre
     *
     * @var ?array<GetSearchAllLibrariesGenre> $genre
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Genre')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesGenre>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $genre = null;

    /**
     * $country
     *
     * @var ?array<GetSearchAllLibrariesCountry> $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Country')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesCountry>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $country = null;

    /**
     * $director
     *
     * @var ?array<GetSearchAllLibrariesDirector> $director
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Director')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesDirector>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $director = null;

    /**
     * $writer
     *
     * @var ?array<GetSearchAllLibrariesWriter> $writer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Writer')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesWriter>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $writer = null;

    /**
     * $collection
     *
     * @var ?array<GetSearchAllLibrariesCollection> $collection
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Collection')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesCollection>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $collection = null;

    /**
     * $role
     *
     * @var ?array<GetSearchAllLibrariesRole> $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Role')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesRole>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $role = null;

    /**
     * $location
     *
     * @var ?array<GetSearchAllLibrariesLocation> $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Location')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesLocation>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $location = null;

    /**
     * The Guid object is only included in the response if the `includeGuids` parameter is set to `1`.
     *
     *
     *
     * @var ?array<GetSearchAllLibrariesMediaGuid> $mediaGuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Guid')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesMediaGuid>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $mediaGuid = null;

    /**
     *
     * @var ?GetSearchAllLibrariesUltraBlurColors $ultraBlurColors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('UltraBlurColors')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesUltraBlurColors|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GetSearchAllLibrariesUltraBlurColors $ultraBlurColors = null;

    /**
     * $metaDataRating
     *
     * @var ?array<GetSearchAllLibrariesMetaDataRating> $metaDataRating
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Rating')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesMetaDataRating>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metaDataRating = null;

    /**
     * $image
     *
     * @var ?array<GetSearchAllLibrariesImage> $image
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Image')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesImage>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $image = null;

    /**
     *
     * @var ?string $titleSort
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('titleSort')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $titleSort = null;

    /**
     *
     * @var ?int $viewCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('viewCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $viewCount = null;

    /**
     *
     * @var ?int $lastViewedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastViewedAt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $lastViewedAt = null;

    /**
     *
     * @var ?string $originalTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('originalTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originalTitle = null;

    /**
     *
     * @var ?int $viewOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('viewOffset')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $viewOffset = null;

    /**
     *
     * @var ?int $skipCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('skipCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $skipCount = null;

    /**
     *
     * @var ?int $index
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('index')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $index = null;

    /**
     *
     * @var ?string $theme
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('theme')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $theme = null;

    /**
     *
     * @var ?int $leafCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('leafCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $leafCount = null;

    /**
     *
     * @var ?int $viewedLeafCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('viewedLeafCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $viewedLeafCount = null;

    /**
     *
     * @var ?int $childCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('childCount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $childCount = null;

    /**
     *
     * @var ?string $hasPremiumExtras
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasPremiumExtras')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hasPremiumExtras = null;

    /**
     *
     * @var ?string $hasPremiumPrimaryExtra
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasPremiumPrimaryExtra')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hasPremiumPrimaryExtra = null;

    /**
     * The rating key of the parent item.
     *
     *
     *
     * @var ?string $parentRatingKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentRatingKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentRatingKey = null;

    /**
     *
     * @var ?string $parentGuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentGuid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentGuid = null;

    /**
     *
     * @var ?string $parentStudio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentStudio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentStudio = null;

    /**
     *
     * @var ?string $parentKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentKey = null;

    /**
     *
     * @var ?string $parentTitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentTitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentTitle = null;

    /**
     *
     * @var ?int $parentIndex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentIndex')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $parentIndex = null;

    /**
     *
     * @var ?int $parentYear
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentYear')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $parentYear = null;

    /**
     *
     * @var ?string $parentThumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentThumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentThumb = null;

    /**
     *
     * @var ?string $parentTheme
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parentTheme')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentTheme = null;

    /**
     *
     * @var ?GetSearchAllLibrariesFlattenSeasons $flattenSeasons
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('flattenSeasons')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetSearchAllLibrariesFlattenSeasons|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?GetSearchAllLibrariesFlattenSeasons $flattenSeasons = null;

    /**
     * @param  string  $ratingKey
     * @param  string  $key
     * @param  string  $guid
     * @param  GetSearchAllLibrariesType  $type
     * @param  string  $title
     * @param  string  $summary
     * @param  int  $addedAt
     * @param  ?string  $studio
     * @param  ?bool  $skipChildren
     * @param  ?int  $librarySectionID
     * @param  ?string  $librarySectionTitle
     * @param  ?string  $librarySectionKey
     * @param  ?string  $slug
     * @param  ?string  $contentRating
     * @param  ?float  $rating
     * @param  ?float  $audienceRating
     * @param  ?int  $year
     * @param  ?int  $seasonCount
     * @param  ?string  $tagline
     * @param  ?GetSearchAllLibrariesFlattenSeasons  $flattenSeasons
     * @param  ?GetSearchAllLibrariesShowOrdering  $showOrdering
     * @param  ?string  $thumb
     * @param  ?string  $art
     * @param  ?string  $banner
     * @param  ?int  $duration
     * @param  ?LocalDate  $originallyAvailableAt
     * @param  ?int  $updatedAt
     * @param  ?string  $audienceRatingImage
     * @param  ?string  $chapterSource
     * @param  ?string  $primaryExtraKey
     * @param  ?string  $ratingImage
     * @param  ?string  $grandparentRatingKey
     * @param  ?string  $grandparentGuid
     * @param  ?string  $grandparentKey
     * @param  ?string  $grandparentTitle
     * @param  ?string  $grandparentThumb
     * @param  ?string  $parentSlug
     * @param  ?string  $grandparentSlug
     * @param  ?string  $grandparentArt
     * @param  ?string  $grandparentTheme
     * @param  ?array<GetSearchAllLibrariesMedia>  $media
     * @param  ?array<GetSearchAllLibrariesGenre>  $genre
     * @param  ?array<GetSearchAllLibrariesCountry>  $country
     * @param  ?array<GetSearchAllLibrariesDirector>  $director
     * @param  ?array<GetSearchAllLibrariesWriter>  $writer
     * @param  ?array<GetSearchAllLibrariesCollection>  $collection
     * @param  ?array<GetSearchAllLibrariesRole>  $role
     * @param  ?array<GetSearchAllLibrariesLocation>  $location
     * @param  ?array<GetSearchAllLibrariesMediaGuid>  $mediaGuid
     * @param  ?GetSearchAllLibrariesUltraBlurColors  $ultraBlurColors
     * @param  ?array<GetSearchAllLibrariesMetaDataRating>  $metaDataRating
     * @param  ?array<GetSearchAllLibrariesImage>  $image
     * @param  ?string  $titleSort
     * @param  ?int  $viewCount
     * @param  ?int  $lastViewedAt
     * @param  ?string  $originalTitle
     * @param  ?int  $viewOffset
     * @param  ?int  $skipCount
     * @param  ?int  $index
     * @param  ?string  $theme
     * @param  ?int  $leafCount
     * @param  ?int  $viewedLeafCount
     * @param  ?int  $childCount
     * @param  ?string  $hasPremiumExtras
     * @param  ?string  $hasPremiumPrimaryExtra
     * @param  ?string  $parentRatingKey
     * @param  ?string  $parentGuid
     * @param  ?string  $parentStudio
     * @param  ?string  $parentKey
     * @param  ?string  $parentTitle
     * @param  ?int  $parentIndex
     * @param  ?int  $parentYear
     * @param  ?string  $parentThumb
     * @param  ?string  $parentTheme
     */
    public function __construct(string $ratingKey, string $key, string $guid, GetSearchAllLibrariesType $type, string $title, string $summary, int $addedAt, ?string $studio = null, ?bool $skipChildren = null, ?int $librarySectionID = null, ?string $librarySectionTitle = null, ?string $librarySectionKey = null, ?string $slug = null, ?string $contentRating = null, ?float $rating = null, ?float $audienceRating = null, ?int $year = null, ?int $seasonCount = null, ?string $tagline = null, ?GetSearchAllLibrariesShowOrdering $showOrdering = null, ?string $thumb = null, ?string $art = null, ?string $banner = null, ?int $duration = null, ?LocalDate $originallyAvailableAt = null, ?int $updatedAt = null, ?string $audienceRatingImage = null, ?string $chapterSource = null, ?string $primaryExtraKey = null, ?string $ratingImage = null, ?string $grandparentRatingKey = null, ?string $grandparentGuid = null, ?string $grandparentKey = null, ?string $grandparentTitle = null, ?string $grandparentThumb = null, ?string $parentSlug = null, ?string $grandparentSlug = null, ?string $grandparentArt = null, ?string $grandparentTheme = null, ?array $media = null, ?array $genre = null, ?array $country = null, ?array $director = null, ?array $writer = null, ?array $collection = null, ?array $role = null, ?array $location = null, ?array $mediaGuid = null, ?GetSearchAllLibrariesUltraBlurColors $ultraBlurColors = null, ?array $metaDataRating = null, ?array $image = null, ?string $titleSort = null, ?int $viewCount = null, ?int $lastViewedAt = null, ?string $originalTitle = null, ?int $viewOffset = null, ?int $skipCount = null, ?int $index = null, ?string $theme = null, ?int $leafCount = null, ?int $viewedLeafCount = null, ?int $childCount = null, ?string $hasPremiumExtras = null, ?string $hasPremiumPrimaryExtra = null, ?string $parentRatingKey = null, ?string $parentGuid = null, ?string $parentStudio = null, ?string $parentKey = null, ?string $parentTitle = null, ?int $parentIndex = null, ?int $parentYear = null, ?string $parentThumb = null, ?string $parentTheme = null, ?GetSearchAllLibrariesFlattenSeasons $flattenSeasons = GetSearchAllLibrariesFlattenSeasons::False)
    {
        $this->ratingKey = $ratingKey;
        $this->key = $key;
        $this->guid = $guid;
        $this->type = $type;
        $this->title = $title;
        $this->summary = $summary;
        $this->addedAt = $addedAt;
        $this->studio = $studio;
        $this->skipChildren = $skipChildren;
        $this->librarySectionID = $librarySectionID;
        $this->librarySectionTitle = $librarySectionTitle;
        $this->librarySectionKey = $librarySectionKey;
        $this->slug = $slug;
        $this->contentRating = $contentRating;
        $this->rating = $rating;
        $this->audienceRating = $audienceRating;
        $this->year = $year;
        $this->seasonCount = $seasonCount;
        $this->tagline = $tagline;
        $this->showOrdering = $showOrdering;
        $this->thumb = $thumb;
        $this->art = $art;
        $this->banner = $banner;
        $this->duration = $duration;
        $this->originallyAvailableAt = $originallyAvailableAt;
        $this->updatedAt = $updatedAt;
        $this->audienceRatingImage = $audienceRatingImage;
        $this->chapterSource = $chapterSource;
        $this->primaryExtraKey = $primaryExtraKey;
        $this->ratingImage = $ratingImage;
        $this->grandparentRatingKey = $grandparentRatingKey;
        $this->grandparentGuid = $grandparentGuid;
        $this->grandparentKey = $grandparentKey;
        $this->grandparentTitle = $grandparentTitle;
        $this->grandparentThumb = $grandparentThumb;
        $this->parentSlug = $parentSlug;
        $this->grandparentSlug = $grandparentSlug;
        $this->grandparentArt = $grandparentArt;
        $this->grandparentTheme = $grandparentTheme;
        $this->media = $media;
        $this->genre = $genre;
        $this->country = $country;
        $this->director = $director;
        $this->writer = $writer;
        $this->collection = $collection;
        $this->role = $role;
        $this->location = $location;
        $this->mediaGuid = $mediaGuid;
        $this->ultraBlurColors = $ultraBlurColors;
        $this->metaDataRating = $metaDataRating;
        $this->image = $image;
        $this->titleSort = $titleSort;
        $this->viewCount = $viewCount;
        $this->lastViewedAt = $lastViewedAt;
        $this->originalTitle = $originalTitle;
        $this->viewOffset = $viewOffset;
        $this->skipCount = $skipCount;
        $this->index = $index;
        $this->theme = $theme;
        $this->leafCount = $leafCount;
        $this->viewedLeafCount = $viewedLeafCount;
        $this->childCount = $childCount;
        $this->hasPremiumExtras = $hasPremiumExtras;
        $this->hasPremiumPrimaryExtra = $hasPremiumPrimaryExtra;
        $this->parentRatingKey = $parentRatingKey;
        $this->parentGuid = $parentGuid;
        $this->parentStudio = $parentStudio;
        $this->parentKey = $parentKey;
        $this->parentTitle = $parentTitle;
        $this->parentIndex = $parentIndex;
        $this->parentYear = $parentYear;
        $this->parentThumb = $parentThumb;
        $this->parentTheme = $parentTheme;
        $this->flattenSeasons = $flattenSeasons;
    }
}