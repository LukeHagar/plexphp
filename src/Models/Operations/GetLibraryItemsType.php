<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibraryItemsType
{
    /**
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var bool $active
     */
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    public bool $active;

    /**
     * $filter
     *
     * @var ?array<GetLibraryItemsFilter> $filter
     */
    #[\JMS\Serializer\Annotation\SerializedName('Filter')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsFilter>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $filter = null;

    /**
     * $sort
     *
     * @var ?array<GetLibraryItemsSort> $sort
     */
    #[\JMS\Serializer\Annotation\SerializedName('Sort')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsSort>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $sort = null;

    /**
     * $field
     *
     * @var ?array<GetLibraryItemsField> $field
     */
    #[\JMS\Serializer\Annotation\SerializedName('Field')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsField>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $field = null;

    /**
     * @param  string  $key
     * @param  string  $type
     * @param  string  $title
     * @param  bool  $active
     * @param  ?array<GetLibraryItemsFilter>  $filter
     * @param  ?array<GetLibraryItemsSort>  $sort
     * @param  ?array<GetLibraryItemsField>  $field
     */
    public function __construct(string $key, string $type, string $title, bool $active, ?array $filter = null, ?array $sort = null, ?array $field = null)
    {
        $this->key = $key;
        $this->type = $type;
        $this->title = $title;
        $this->active = $active;
        $this->filter = $filter;
        $this->sort = $sort;
        $this->field = $field;
    }
}