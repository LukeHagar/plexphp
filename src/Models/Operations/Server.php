<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Server
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    #[\JMS\Serializer\Annotation\SerializedName('host')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $host = null;

    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address = null;

    #[\JMS\Serializer\Annotation\SerializedName('port')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $port = null;

    #[\JMS\Serializer\Annotation\SerializedName('machineIdentifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $machineIdentifier = null;

    #[\JMS\Serializer\Annotation\SerializedName('version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $version = null;

    #[\JMS\Serializer\Annotation\SerializedName('protocol')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $protocol = null;

    #[\JMS\Serializer\Annotation\SerializedName('product')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $product = null;

    #[\JMS\Serializer\Annotation\SerializedName('deviceClass')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $deviceClass = null;

    #[\JMS\Serializer\Annotation\SerializedName('protocolVersion')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $protocolVersion = null;

    #[\JMS\Serializer\Annotation\SerializedName('protocolCapabilities')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $protocolCapabilities = null;

    public function __construct()
    {
        $this->name = null;
        $this->host = null;
        $this->address = null;
        $this->port = null;
        $this->machineIdentifier = null;
        $this->version = null;
        $this->protocol = null;
        $this->product = null;
        $this->deviceClass = null;
        $this->protocolVersion = null;
        $this->protocolCapabilities = null;
    }
}