<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibraryHubsHub
{
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('hubIdentifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $hubIdentifier = null;

    #[\JMS\Serializer\Annotation\SerializedName('context')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $context = null;

    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;

    #[\JMS\Serializer\Annotation\SerializedName('more')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $more = null;

    #[\JMS\Serializer\Annotation\SerializedName('style')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $style = null;

    #[\JMS\Serializer\Annotation\SerializedName('hubKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $hubKey = null;

    /**
     * $metadata
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetLibraryHubsMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('Metadata')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetLibraryHubsMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('promoted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $promoted = null;

    #[\JMS\Serializer\Annotation\SerializedName('random')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $random = null;

    public function __construct()
    {
        $this->key = null;
        $this->title = null;
        $this->type = null;
        $this->hubIdentifier = null;
        $this->context = null;
        $this->size = null;
        $this->more = null;
        $this->style = null;
        $this->hubKey = null;
        $this->metadata = null;
        $this->promoted = null;
        $this->random = null;
    }
}