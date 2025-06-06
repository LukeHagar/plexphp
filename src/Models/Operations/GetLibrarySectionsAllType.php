<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibrarySectionsAllType
{
    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    public bool $active;

    /**
     *
     * @var ?string $subtype
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subtype')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subtype = null;

    /**
     * $filter
     *
     * @var ?array<GetLibrarySectionsAllFilter> $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Filter')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibrarySectionsAllFilter>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $filter = null;

    /**
     * $sort
     *
     * @var ?array<GetLibrarySectionsAllSort> $sort
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Sort')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibrarySectionsAllSort>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $sort = null;

    /**
     * $field
     *
     * @var ?array<GetLibrarySectionsAllField> $field
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Field')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibrarySectionsAllField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $field = null;

    /**
     * @param  string  $key
     * @param  string  $type
     * @param  string  $title
     * @param  bool  $active
     * @param  ?string  $subtype
     * @param  ?array<GetLibrarySectionsAllFilter>  $filter
     * @param  ?array<GetLibrarySectionsAllSort>  $sort
     * @param  ?array<GetLibrarySectionsAllField>  $field
     * @phpstan-pure
     */
    public function __construct(string $key, string $type, string $title, bool $active, ?string $subtype = null, ?array $filter = null, ?array $sort = null, ?array $field = null)
    {
        $this->key = $key;
        $this->type = $type;
        $this->title = $title;
        $this->active = $active;
        $this->subtype = $subtype;
        $this->filter = $filter;
        $this->sort = $sort;
        $this->field = $field;
    }
}