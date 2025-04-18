<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetTopWatchedContentCountry
{
    /**
     *
     * @var ?int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?string $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filter')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $filter = null;

    /**
     *
     * @var ?string $tag
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tag')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tag = null;

    /**
     * @param  ?int  $id
     * @param  ?string  $filter
     * @param  ?string  $tag
     * @phpstan-pure
     */
    public function __construct(?int $id = null, ?string $filter = null, ?string $tag = null)
    {
        $this->id = $id;
        $this->filter = $filter;
        $this->tag = $tag;
    }
}