<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetAllLibrariesMediaContainer
{
    /**
     *
     * @var int $size
     */
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    public int $size;

    /**
     *
     * @var bool $allowSync
     */
    #[\JMS\Serializer\Annotation\SerializedName('allowSync')]
    public bool $allowSync;

    /**
     *
     * @var string $title1
     */
    #[\JMS\Serializer\Annotation\SerializedName('title1')]
    public string $title1;

    /**
     * $directory
     *
     * @var ?array<GetAllLibrariesDirectory> $directory
     */
    #[\JMS\Serializer\Annotation\SerializedName('Directory')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetAllLibrariesDirectory>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $directory = null;

    /**
     * @param  int  $size
     * @param  bool  $allowSync
     * @param  string  $title1
     * @param  ?array<GetAllLibrariesDirectory>  $directory
     */
    public function __construct(int $size, bool $allowSync, string $title1, ?array $directory = null)
    {
        $this->size = $size;
        $this->allowSync = $allowSync;
        $this->title1 = $title1;
        $this->directory = $directory;
    }
}