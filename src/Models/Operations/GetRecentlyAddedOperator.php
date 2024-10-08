<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetRecentlyAddedOperator
{
    /**
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * @param  string  $key
     * @param  string  $title
     */
    public function __construct(string $key, string $title)
    {
        $this->key = $key;
        $this->title = $title;
    }
}