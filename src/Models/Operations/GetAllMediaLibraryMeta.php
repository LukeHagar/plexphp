<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/**
 * GetAllMediaLibraryMeta - The Meta object is only included in the response if the `includeMeta` parameter is set to `1`.
 *
 *
 */
class GetAllMediaLibraryMeta
{
    /**
     * $type
     *
     * @var ?array<GetAllMediaLibraryType> $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Type')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetAllMediaLibraryType>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $type = null;

    /**
     * $fieldType
     *
     * @var ?array<GetAllMediaLibraryFieldType> $fieldType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('FieldType')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetAllMediaLibraryFieldType>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $fieldType = null;

    /**
     * @param  ?array<GetAllMediaLibraryType>  $type
     * @param  ?array<GetAllMediaLibraryFieldType>  $fieldType
     * @phpstan-pure
     */
    public function __construct(?array $type = null, ?array $fieldType = null)
    {
        $this->type = $type;
        $this->fieldType = $fieldType;
    }
}