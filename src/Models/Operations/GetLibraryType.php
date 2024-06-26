<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibraryType
{
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $active = null;

    /**
     * $filter
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetLibraryFilter> $filter
     */
    #[\JMS\Serializer\Annotation\SerializedName('Filter')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetLibraryFilter>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $filter = null;

    /**
     * $sort
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\Sort> $sort
     */
    #[\JMS\Serializer\Annotation\SerializedName('Sort')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\Sort>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $sort = null;

    /**
     * $field
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\Field> $field
     */
    #[\JMS\Serializer\Annotation\SerializedName('Field')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\Field>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $field = null;

    public function __construct()
    {
        $this->key = null;
        $this->type = null;
        $this->title = null;
        $this->active = null;
        $this->filter = null;
        $this->sort = null;
        $this->field = null;
    }
}