<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetSearchResultsMediaContainer
{
    /**
     *
     * @var ?float $size
     */
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $size = null;

    /**
     *
     * @var ?string $identifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('identifier')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $identifier = null;

    /**
     *
     * @var ?string $mediaTagPrefix
     */
    #[\JMS\Serializer\Annotation\SerializedName('mediaTagPrefix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $mediaTagPrefix = null;

    /**
     *
     * @var ?float $mediaTagVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('mediaTagVersion')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $mediaTagVersion = null;

    /**
     * $metadata
     *
     * @var ?array<GetSearchResultsMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('Metadata')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetSearchResultsMetadata>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * $provider
     *
     * @var ?array<Provider> $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('Provider')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\Provider>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $provider = null;

    /**
     * @param  ?float  $size
     * @param  ?string  $identifier
     * @param  ?string  $mediaTagPrefix
     * @param  ?float  $mediaTagVersion
     * @param  ?array<GetSearchResultsMetadata>  $metadata
     * @param  ?array<Provider>  $provider
     */
    public function __construct(?float $size = null, ?string $identifier = null, ?string $mediaTagPrefix = null, ?float $mediaTagVersion = null, ?array $metadata = null, ?array $provider = null)
    {
        $this->size = $size;
        $this->identifier = $identifier;
        $this->mediaTagPrefix = $mediaTagPrefix;
        $this->mediaTagVersion = $mediaTagVersion;
        $this->metadata = $metadata;
        $this->provider = $provider;
    }
}