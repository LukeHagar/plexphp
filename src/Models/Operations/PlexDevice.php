<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class PlexDevice
{
    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $product
     */
    #[\JMS\Serializer\Annotation\SerializedName('product')]
    public string $product;

    /**
     *
     * @var string $productVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('productVersion')]
    public string $productVersion;

    /**
     *
     * @var ?string $platform
     */
    #[\JMS\Serializer\Annotation\SerializedName('platform')]
    public ?string $platform;

    /**
     *
     * @var ?string $platformVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('platformVersion')]
    public ?string $platformVersion;

    /**
     *
     * @var ?string $device
     */
    #[\JMS\Serializer\Annotation\SerializedName('device')]
    public ?string $device;

    /**
     *
     * @var string $clientIdentifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('clientIdentifier')]
    public string $clientIdentifier;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var \DateTime $lastSeenAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('lastSeenAt')]
    public \DateTime $lastSeenAt;

    /**
     *
     * @var string $provides
     */
    #[\JMS\Serializer\Annotation\SerializedName('provides')]
    public string $provides;

    /**
     * ownerId is null when the device is owned by the token used to send the request
     *
     * @var ?int $ownerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('ownerId')]
    public ?int $ownerId;

    /**
     *
     * @var ?string $sourceTitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('sourceTitle')]
    public ?string $sourceTitle;

    /**
     *
     * @var string $publicAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('publicAddress')]
    public string $publicAddress;

    /**
     *
     * @var string $accessToken
     */
    #[\JMS\Serializer\Annotation\SerializedName('accessToken')]
    public string $accessToken;

    /**
     *
     * @var bool $owned
     */
    #[\JMS\Serializer\Annotation\SerializedName('owned')]
    public bool $owned;

    /**
     *
     * @var bool $home
     */
    #[\JMS\Serializer\Annotation\SerializedName('home')]
    public bool $home;

    /**
     *
     * @var bool $synced
     */
    #[\JMS\Serializer\Annotation\SerializedName('synced')]
    public bool $synced;

    /**
     *
     * @var bool $relay
     */
    #[\JMS\Serializer\Annotation\SerializedName('relay')]
    public bool $relay;

    /**
     *
     * @var bool $presence
     */
    #[\JMS\Serializer\Annotation\SerializedName('presence')]
    public bool $presence;

    /**
     *
     * @var bool $httpsRequired
     */
    #[\JMS\Serializer\Annotation\SerializedName('httpsRequired')]
    public bool $httpsRequired;

    /**
     *
     * @var bool $publicAddressMatches
     */
    #[\JMS\Serializer\Annotation\SerializedName('publicAddressMatches')]
    public bool $publicAddressMatches;

    /**
     *
     * @var bool $dnsRebindingProtection
     */
    #[\JMS\Serializer\Annotation\SerializedName('dnsRebindingProtection')]
    public bool $dnsRebindingProtection;

    /**
     *
     * @var bool $natLoopbackSupported
     */
    #[\JMS\Serializer\Annotation\SerializedName('natLoopbackSupported')]
    public bool $natLoopbackSupported;

    /**
     * $connections
     *
     * @var array<Connections> $connections
     */
    #[\JMS\Serializer\Annotation\SerializedName('connections')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\Connections>')]
    public array $connections;

    /**
     * @param  string  $name
     * @param  string  $product
     * @param  string  $productVersion
     * @param  string  $clientIdentifier
     * @param  \DateTime  $createdAt
     * @param  \DateTime  $lastSeenAt
     * @param  string  $provides
     * @param  string  $publicAddress
     * @param  string  $accessToken
     * @param  bool  $owned
     * @param  bool  $home
     * @param  bool  $synced
     * @param  bool  $relay
     * @param  bool  $presence
     * @param  bool  $httpsRequired
     * @param  bool  $publicAddressMatches
     * @param  bool  $dnsRebindingProtection
     * @param  bool  $natLoopbackSupported
     * @param  array<Connections>  $connections
     * @param  ?string  $platform
     * @param  ?string  $platformVersion
     * @param  ?string  $device
     * @param  ?int  $ownerId
     * @param  ?string  $sourceTitle
     */
    public function __construct(string $name, string $product, string $productVersion, string $clientIdentifier, \DateTime $createdAt, \DateTime $lastSeenAt, string $provides, string $publicAddress, string $accessToken, bool $owned, bool $home, bool $synced, bool $relay, bool $presence, bool $httpsRequired, bool $publicAddressMatches, bool $dnsRebindingProtection, bool $natLoopbackSupported, array $connections, ?string $platform = null, ?string $platformVersion = null, ?string $device = null, ?int $ownerId = null, ?string $sourceTitle = null)
    {
        $this->name = $name;
        $this->product = $product;
        $this->productVersion = $productVersion;
        $this->clientIdentifier = $clientIdentifier;
        $this->createdAt = $createdAt;
        $this->lastSeenAt = $lastSeenAt;
        $this->provides = $provides;
        $this->publicAddress = $publicAddress;
        $this->accessToken = $accessToken;
        $this->owned = $owned;
        $this->home = $home;
        $this->synced = $synced;
        $this->relay = $relay;
        $this->presence = $presence;
        $this->httpsRequired = $httpsRequired;
        $this->publicAddressMatches = $publicAddressMatches;
        $this->dnsRebindingProtection = $dnsRebindingProtection;
        $this->natLoopbackSupported = $natLoopbackSupported;
        $this->connections = $connections;
        $this->platform = $platform;
        $this->platformVersion = $platformVersion;
        $this->device = $device;
        $this->ownerId = $ownerId;
        $this->sourceTitle = $sourceTitle;
    }
}