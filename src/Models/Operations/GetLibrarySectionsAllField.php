<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibrarySectionsAllField
{
    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var ?string $subType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subType = null;

    /**
     * @param  string  $key
     * @param  string  $title
     * @param  string  $type
     * @param  ?string  $subType
     * @phpstan-pure
     */
    public function __construct(string $key, string $title, string $type, ?string $subType = null)
    {
        $this->key = $key;
        $this->title = $title;
        $this->type = $type;
        $this->subType = $subType;
    }
}