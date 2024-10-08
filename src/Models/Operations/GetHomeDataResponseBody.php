<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetHomeDataResponseBody - Home Data */
class GetHomeDataResponseBody
{
    /**
     *
     * @var ?float $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?float $guestUserID
     */
    #[\JMS\Serializer\Annotation\SerializedName('guestUserID')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $guestUserID = null;

    /**
     *
     * @var ?string $guestUserUUID
     */
    #[\JMS\Serializer\Annotation\SerializedName('guestUserUUID')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $guestUserUUID = null;

    /**
     *
     * @var ?bool $guestEnabled
     */
    #[\JMS\Serializer\Annotation\SerializedName('guestEnabled')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $guestEnabled = null;

    /**
     *
     * @var ?bool $subscription
     */
    #[\JMS\Serializer\Annotation\SerializedName('subscription')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $subscription = null;

    /**
     * @param  ?float  $id
     * @param  ?string  $name
     * @param  ?float  $guestUserID
     * @param  ?string  $guestUserUUID
     * @param  ?bool  $guestEnabled
     * @param  ?bool  $subscription
     */
    public function __construct(?float $id = null, ?string $name = null, ?float $guestUserID = null, ?string $guestUserUUID = null, ?bool $guestEnabled = null, ?bool $subscription = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->guestUserID = $guestUserID;
        $this->guestUserUUID = $guestUserUUID;
        $this->guestEnabled = $guestEnabled;
        $this->subscription = $subscription;
    }
}