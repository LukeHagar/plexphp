<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Metadata
{
    #[\JMS\Serializer\Annotation\SerializedName('art')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $art = null;

    #[\JMS\Serializer\Annotation\SerializedName('guid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $guid = null;

    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    #[\JMS\Serializer\Annotation\SerializedName('ratingKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ratingKey = null;

    #[\JMS\Serializer\Annotation\SerializedName('studio')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $studio = null;

    #[\JMS\Serializer\Annotation\SerializedName('tagline')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tagline = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('thumb')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $thumb = null;

    #[\JMS\Serializer\Annotation\SerializedName('addedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $addedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $duration = null;

    #[\JMS\Serializer\Annotation\SerializedName('publicPagesURL')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicPagesURL = null;

    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $slug = null;

    #[\JMS\Serializer\Annotation\SerializedName('userState')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $userState = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('contentRating')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $contentRating = null;

    #[\JMS\Serializer\Annotation\SerializedName('originallyAvailableAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $originallyAvailableAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('year')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $year = null;

    /**
     * $image
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\Image> $image
     */
    #[\JMS\Serializer\Annotation\SerializedName('Image')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\Image>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $image = null;

    #[\JMS\Serializer\Annotation\SerializedName('banner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $banner = null;

    #[\JMS\Serializer\Annotation\SerializedName('rating')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $rating = null;

    #[\JMS\Serializer\Annotation\SerializedName('expiresAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $expiresAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('originalTitle')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $originalTitle = null;

    #[\JMS\Serializer\Annotation\SerializedName('audienceRating')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $audienceRating = null;

    #[\JMS\Serializer\Annotation\SerializedName('audienceRatingImage')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $audienceRatingImage = null;

    #[\JMS\Serializer\Annotation\SerializedName('ratingImage')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ratingImage = null;

    #[\JMS\Serializer\Annotation\SerializedName('imdbRatingCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $imdbRatingCount = null;

    #[\JMS\Serializer\Annotation\SerializedName('subtype')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subtype = null;

    #[\JMS\Serializer\Annotation\SerializedName('theme')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $theme = null;

    #[\JMS\Serializer\Annotation\SerializedName('leafCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $leafCount = null;

    #[\JMS\Serializer\Annotation\SerializedName('childCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $childCount = null;

    #[\JMS\Serializer\Annotation\SerializedName('isContinuingSeries')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isContinuingSeries = null;

    #[\JMS\Serializer\Annotation\SerializedName('skipChildren')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $skipChildren = null;

    #[\JMS\Serializer\Annotation\SerializedName('availabilityId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $availabilityId = null;

    #[\JMS\Serializer\Annotation\SerializedName('streamingMediaId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $streamingMediaId = null;

    #[\JMS\Serializer\Annotation\SerializedName('playableKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $playableKey = null;

    public function __construct()
    {
        $this->art = null;
        $this->guid = null;
        $this->key = null;
        $this->ratingKey = null;
        $this->studio = null;
        $this->tagline = null;
        $this->type = null;
        $this->thumb = null;
        $this->addedAt = null;
        $this->duration = null;
        $this->publicPagesURL = null;
        $this->slug = null;
        $this->userState = null;
        $this->title = null;
        $this->contentRating = null;
        $this->originallyAvailableAt = null;
        $this->year = null;
        $this->image = null;
        $this->banner = null;
        $this->rating = null;
        $this->expiresAt = null;
        $this->originalTitle = null;
        $this->audienceRating = null;
        $this->audienceRatingImage = null;
        $this->ratingImage = null;
        $this->imdbRatingCount = null;
        $this->subtype = null;
        $this->theme = null;
        $this->leafCount = null;
        $this->childCount = null;
        $this->isContinuingSeries = null;
        $this->skipChildren = null;
        $this->availabilityId = null;
        $this->streamingMediaId = null;
        $this->playableKey = null;
    }
}