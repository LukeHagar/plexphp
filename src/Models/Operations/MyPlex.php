<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class MyPlex
{
    #[\JMS\Serializer\Annotation\SerializedName('authToken')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authToken = null;

    #[\JMS\Serializer\Annotation\SerializedName('username')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $username = null;

    #[\JMS\Serializer\Annotation\SerializedName('mappingState')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mappingState = null;

    #[\JMS\Serializer\Annotation\SerializedName('mappingError')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mappingError = null;

    #[\JMS\Serializer\Annotation\SerializedName('signInState')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $signInState = null;

    #[\JMS\Serializer\Annotation\SerializedName('publicAddress')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicAddress = null;

    #[\JMS\Serializer\Annotation\SerializedName('publicPort')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $publicPort = null;

    #[\JMS\Serializer\Annotation\SerializedName('privateAddress')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $privateAddress = null;

    #[\JMS\Serializer\Annotation\SerializedName('privatePort')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $privatePort = null;

    #[\JMS\Serializer\Annotation\SerializedName('subscriptionFeatures')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subscriptionFeatures = null;

    #[\JMS\Serializer\Annotation\SerializedName('subscriptionActive')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $subscriptionActive = null;

    #[\JMS\Serializer\Annotation\SerializedName('subscriptionState')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subscriptionState = null;

    public function __construct()
    {
        $this->authToken = null;
        $this->username = null;
        $this->mappingState = null;
        $this->mappingError = null;
        $this->signInState = null;
        $this->publicAddress = null;
        $this->publicPort = null;
        $this->privateAddress = null;
        $this->privatePort = null;
        $this->subscriptionFeatures = null;
        $this->subscriptionActive = null;
        $this->subscriptionState = null;
    }
}