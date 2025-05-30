<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Feature
{
    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?string $flavor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('flavor')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $flavor = null;

    /**
     *
     * @var ?string $scrobbleKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scrobbleKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $scrobbleKey = null;

    /**
     *
     * @var ?string $unscrobbleKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unscrobbleKey')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $unscrobbleKey = null;

    /**
     * $directory
     *
     * @var ?array<GetMediaProvidersDirectory> $directory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Directory')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetMediaProvidersDirectory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $directory = null;

    /**
     * $action
     *
     * @var ?array<Action> $action
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Action')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\Action>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $action = null;

    /**
     * @param  string  $type
     * @param  ?string  $key
     * @param  ?string  $flavor
     * @param  ?string  $scrobbleKey
     * @param  ?string  $unscrobbleKey
     * @param  ?array<GetMediaProvidersDirectory>  $directory
     * @param  ?array<Action>  $action
     * @phpstan-pure
     */
    public function __construct(string $type, ?string $key = null, ?string $flavor = null, ?string $scrobbleKey = null, ?string $unscrobbleKey = null, ?array $directory = null, ?array $action = null)
    {
        $this->type = $type;
        $this->key = $key;
        $this->flavor = $flavor;
        $this->scrobbleKey = $scrobbleKey;
        $this->unscrobbleKey = $unscrobbleKey;
        $this->directory = $directory;
        $this->action = $action;
    }
}