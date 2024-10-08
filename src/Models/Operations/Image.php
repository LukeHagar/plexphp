<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Image
{
    /**
     *
     * @var ?string $alt
     */
    #[\JMS\Serializer\Annotation\SerializedName('alt')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $alt = null;

    /**
     *
     * @var ?string $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     *
     * @var ?string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?string  $alt
     * @param  ?string  $type
     * @param  ?string  $url
     */
    public function __construct(?string $alt = null, ?string $type = null, ?string $url = null)
    {
        $this->alt = $alt;
        $this->type = $type;
        $this->url = $url;
    }
}