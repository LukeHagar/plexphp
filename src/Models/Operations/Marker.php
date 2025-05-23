<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** Marker - The final status of the marker */
class Marker
{
    /**
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var int $startTimeOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('startTimeOffset')]
    public int $startTimeOffset;

    /**
     *
     * @var int $endTimeOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('endTimeOffset')]
    public int $endTimeOffset;

    /**
     *
     * @var ?bool $final
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('final')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $final = null;

    /**
     * Attributes associated with the marker.
     *
     * @var ?Attributes $attributes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Attributes')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\Attributes|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Attributes $attributes = null;

    /**
     * @param  int  $id
     * @param  string  $type
     * @param  int  $startTimeOffset
     * @param  int  $endTimeOffset
     * @param  ?bool  $final
     * @param  ?Attributes  $attributes
     * @phpstan-pure
     */
    public function __construct(int $id, string $type, int $startTimeOffset, int $endTimeOffset, ?bool $final = null, ?Attributes $attributes = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->startTimeOffset = $startTimeOffset;
        $this->endTimeOffset = $endTimeOffset;
        $this->final = $final;
        $this->attributes = $attributes;
    }
}