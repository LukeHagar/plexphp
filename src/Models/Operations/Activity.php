<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Activity
{
    /**
     *
     * @var ?string $uuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uuid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $uuid = null;

    /**
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     *
     * @var ?bool $cancellable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cancellable')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $cancellable = null;

    /**
     *
     * @var ?float $userID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('userID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $userID = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $subtitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subtitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subtitle = null;

    /**
     *
     * @var ?float $progress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('progress')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $progress = null;

    /**
     *
     * @var ?Context $context
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Context')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\Context|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Context $context = null;

    /**
     * @param  ?string  $uuid
     * @param  ?string  $type
     * @param  ?bool  $cancellable
     * @param  ?float  $userID
     * @param  ?string  $title
     * @param  ?string  $subtitle
     * @param  ?float  $progress
     * @param  ?Context  $context
     * @phpstan-pure
     */
    public function __construct(?string $uuid = null, ?string $type = null, ?bool $cancellable = null, ?float $userID = null, ?string $title = null, ?string $subtitle = null, ?float $progress = null, ?Context $context = null)
    {
        $this->uuid = $uuid;
        $this->type = $type;
        $this->cancellable = $cancellable;
        $this->userID = $userID;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->progress = $progress;
        $this->context = $context;
    }
}