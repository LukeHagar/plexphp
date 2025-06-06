<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** Genre - The filter query string for similar items. */
class Genre
{
    /**
     * The unique identifier for the genre.
     *
     * NOTE: This is different for each Plex server and is not globally unique.
     *
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     *
     * @var string $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filter')]
    public string $filter;

    /**
     * The genre name of this media-item
     *
     *
     *
     * @var string $tag
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tag')]
    public string $tag;

    /**
     * @param  int  $id
     * @param  string  $filter
     * @param  string  $tag
     * @phpstan-pure
     */
    public function __construct(int $id, string $filter, string $tag)
    {
        $this->id = $id;
        $this->filter = $filter;
        $this->tag = $tag;
    }
}