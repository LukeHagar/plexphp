<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetAllMediaLibraryImage
{
    /**
     *
     * @var string $alt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('alt')]
    public string $alt;

    /**
     *
     * @var GetAllMediaLibraryLibraryResponseType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\GetAllMediaLibraryLibraryResponseType')]
    public GetAllMediaLibraryLibraryResponseType $type;

    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * @param  string  $alt
     * @param  GetAllMediaLibraryLibraryResponseType  $type
     * @param  string  $url
     * @phpstan-pure
     */
    public function __construct(string $alt, GetAllMediaLibraryLibraryResponseType $type, string $url)
    {
        $this->alt = $alt;
        $this->type = $type;
        $this->url = $url;
    }
}