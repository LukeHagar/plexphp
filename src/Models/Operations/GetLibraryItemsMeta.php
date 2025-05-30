<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/**
 * GetLibraryItemsMeta - The Meta object is only included in the response if the `includeMeta` parameter is set to `1`.
 *
 *
 */
class GetLibraryItemsMeta
{
    /**
     * $type
     *
     * @var ?array<GetLibraryItemsLibraryResponseType> $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Type')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsLibraryResponseType>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $type = null;

    /**
     * $fieldType
     *
     * @var ?array<GetLibraryItemsLibraryFieldType> $fieldType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('FieldType')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetLibraryItemsLibraryFieldType>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $fieldType = null;

    /**
     * @param  ?array<GetLibraryItemsLibraryResponseType>  $type
     * @param  ?array<GetLibraryItemsLibraryFieldType>  $fieldType
     * @phpstan-pure
     */
    public function __construct(?array $type = null, ?array $fieldType = null)
    {
        $this->type = $type;
        $this->fieldType = $fieldType;
    }
}