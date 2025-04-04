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
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?float $guestUserID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guestUserID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $guestUserID = null;

    /**
     *
     * @var ?string $guestUserUUID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guestUserUUID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $guestUserUUID = null;

    /**
     *
     * @var ?bool $guestEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guestEnabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $guestEnabled = null;

    /**
     *
     * @var ?bool $subscription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $subscription = null;

    /**
     * @param  ?float  $id
     * @param  ?string  $name
     * @param  ?float  $guestUserID
     * @param  ?string  $guestUserUUID
     * @param  ?bool  $guestEnabled
     * @param  ?bool  $subscription
     * @phpstan-pure
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