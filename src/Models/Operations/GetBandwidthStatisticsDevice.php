<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetBandwidthStatisticsDevice
{
    /**
     *
     * @var ?int $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $platform
     */
    #[\JMS\Serializer\Annotation\SerializedName('platform')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $platform = null;

    /**
     *
     * @var ?string $clientIdentifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('clientIdentifier')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $clientIdentifier = null;

    /**
     *
     * @var ?int $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $createdAt = null;

    /**
     * @param  ?int  $id
     * @param  ?string  $name
     * @param  ?string  $platform
     * @param  ?string  $clientIdentifier
     * @param  ?int  $createdAt
     */
    public function __construct(?int $id = null, ?string $name = null, ?string $platform = null, ?string $clientIdentifier = null, ?int $createdAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->platform = $platform;
        $this->clientIdentifier = $clientIdentifier;
        $this->createdAt = $createdAt;
    }
}