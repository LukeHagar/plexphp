<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class SearchLibraryMediaContainer
{
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;

    #[\JMS\Serializer\Annotation\SerializedName('allowSync')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $allowSync = null;

    #[\JMS\Serializer\Annotation\SerializedName('art')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $art = null;

    #[\JMS\Serializer\Annotation\SerializedName('identifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $identifier = null;

    #[\JMS\Serializer\Annotation\SerializedName('mediaTagPrefix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mediaTagPrefix = null;

    #[\JMS\Serializer\Annotation\SerializedName('mediaTagVersion')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $mediaTagVersion = null;

    #[\JMS\Serializer\Annotation\SerializedName('nocache')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $nocache = null;

    #[\JMS\Serializer\Annotation\SerializedName('thumb')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $thumb = null;

    #[\JMS\Serializer\Annotation\SerializedName('title1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title1 = null;

    #[\JMS\Serializer\Annotation\SerializedName('title2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title2 = null;

    #[\JMS\Serializer\Annotation\SerializedName('viewGroup')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $viewGroup = null;

    #[\JMS\Serializer\Annotation\SerializedName('viewMode')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $viewMode = null;

    /**
     * $metadata
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\SearchLibraryMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('Metadata')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\SearchLibraryMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    public function __construct()
    {
        $this->size = null;
        $this->allowSync = null;
        $this->art = null;
        $this->identifier = null;
        $this->mediaTagPrefix = null;
        $this->mediaTagVersion = null;
        $this->nocache = null;
        $this->thumb = null;
        $this->title1 = null;
        $this->title2 = null;
        $this->viewGroup = null;
        $this->viewMode = null;
        $this->metadata = null;
    }
}