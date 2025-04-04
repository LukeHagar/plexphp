<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetTopWatchedContentUser
{
    /**
     *
     * @var ?int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     * @param  ?int  $id
     * @phpstan-pure
     */
    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }
}