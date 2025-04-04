<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetMediaMetaDataGuids
{
    /**
     * The GUID value.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}