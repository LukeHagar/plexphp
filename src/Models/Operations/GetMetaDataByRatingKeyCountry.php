<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetMetaDataByRatingKeyCountry
{
    /**
     *
     * @var ?int $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?string $filter
     */
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $filter = null;

    /**
     *
     * @var ?string $tag
     */
    #[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $tag = null;

    /**
     * @param  ?int  $id
     * @param  ?string  $filter
     * @param  ?string  $tag
     */
    public function __construct(?int $id = null, ?string $filter = null, ?string $tag = null)
    {
        $this->id = $id;
        $this->filter = $filter;
        $this->tag = $tag;
    }
}