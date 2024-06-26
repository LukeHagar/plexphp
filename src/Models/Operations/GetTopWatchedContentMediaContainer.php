<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetTopWatchedContentMediaContainer
{
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;

    #[\JMS\Serializer\Annotation\SerializedName('allowSync')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $allowSync = null;

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

    /**
     * $metadata
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('Metadata')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetTopWatchedContentMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    public function __construct()
    {
        $this->size = null;
        $this->allowSync = null;
        $this->identifier = null;
        $this->mediaTagPrefix = null;
        $this->mediaTagVersion = null;
        $this->metadata = null;
    }
}