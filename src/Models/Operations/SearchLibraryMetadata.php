<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class SearchLibraryMetadata
{
    #[\JMS\Serializer\Annotation\SerializedName('ratingKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ratingKey = null;

    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentRatingKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentRatingKey = null;

    #[\JMS\Serializer\Annotation\SerializedName('guid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $guid = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentGuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentGuid = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentStudio')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentStudio = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentKey = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentTitle')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentTitle = null;

    #[\JMS\Serializer\Annotation\SerializedName('summary')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $summary = null;

    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $index = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentIndex')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $parentIndex = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentYear')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $parentYear = null;

    #[\JMS\Serializer\Annotation\SerializedName('thumb')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $thumb = null;

    #[\JMS\Serializer\Annotation\SerializedName('art')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $art = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentThumb')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentThumb = null;

    #[\JMS\Serializer\Annotation\SerializedName('parentTheme')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentTheme = null;

    #[\JMS\Serializer\Annotation\SerializedName('addedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $addedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $updatedAt = null;

    public function __construct()
    {
        $this->ratingKey = null;
        $this->key = null;
        $this->parentRatingKey = null;
        $this->guid = null;
        $this->parentGuid = null;
        $this->parentStudio = null;
        $this->type = null;
        $this->title = null;
        $this->parentKey = null;
        $this->parentTitle = null;
        $this->summary = null;
        $this->index = null;
        $this->parentIndex = null;
        $this->parentYear = null;
        $this->thumb = null;
        $this->art = null;
        $this->parentThumb = null;
        $this->parentTheme = null;
        $this->addedAt = null;
        $this->updatedAt = null;
    }
}