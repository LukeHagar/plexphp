<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetAllLibrariesMediaContainer
{
    /**
     * Number of media items returned in this response.
     *
     * @var int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    public int $size;

    /**
     * Indicates whether syncing is allowed.
     *
     * @var bool $allowSync
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allowSync')]
    public bool $allowSync;

    /**
     * The primary title of the media container.
     *
     * @var string $title1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title1')]
    public string $title1;

    /**
     * $directory
     *
     * @var ?array<GetAllLibrariesDirectory> $directory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Directory')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetAllLibrariesDirectory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $directory = null;

    /**
     * @param  int  $size
     * @param  bool  $allowSync
     * @param  string  $title1
     * @param  ?array<GetAllLibrariesDirectory>  $directory
     * @phpstan-pure
     */
    public function __construct(int $size, bool $allowSync, string $title1, ?array $directory = null)
    {
        $this->size = $size;
        $this->allowSync = $allowSync;
        $this->title1 = $title1;
        $this->directory = $directory;
    }
}