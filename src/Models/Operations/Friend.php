<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Friend
{
    /**
     * The account email address
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * If the account is a Plex Home user
     *
     * @var bool $home
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('home')]
    public bool $home;

    /**
     * The Plex account ID
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     * $sharedServers
     *
     * @var array<SharedServers> $sharedServers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sharedServers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\SharedServers>')]
    public array $sharedServers;

    /**
     * $sharedSources
     *
     * @var array<SharedSources> $sharedSources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sharedSources')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\SharedSources>')]
    public array $sharedSources;

    /**
     * Current friend request status
     *
     * @var Status $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\Status')]
    public Status $status;

    /**
     * URL of the account thumbnail
     *
     * @var string $thumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('thumb')]
    public string $thumb;

    /**
     * The title of the account (username or friendly name)
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * The account username
     *
     * @var string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    public string $username;

    /**
     * The account Universally Unique Identifier (UUID)
     *
     * @var string $uuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uuid')]
    public string $uuid;

    /**
     * The account full name
     *
     * @var ?string $friendlyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('friendlyName')]
    public ?string $friendlyName;

    /**
     * If the account is a Plex Home managed user
     *
     * @var ?bool $restricted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('restricted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $restricted = null;

    /**
     * @param  string  $email
     * @param  bool  $home
     * @param  int  $id
     * @param  array<SharedServers>  $sharedServers
     * @param  array<SharedSources>  $sharedSources
     * @param  Status  $status
     * @param  string  $thumb
     * @param  string  $title
     * @param  string  $username
     * @param  string  $uuid
     * @param  ?string  $friendlyName
     * @param  ?bool  $restricted
     * @phpstan-pure
     */
    public function __construct(string $email, bool $home, int $id, array $sharedServers, array $sharedSources, Status $status, string $thumb, string $title, string $username, string $uuid, ?string $friendlyName = null, ?bool $restricted = false)
    {
        $this->email = $email;
        $this->home = $home;
        $this->id = $id;
        $this->sharedServers = $sharedServers;
        $this->sharedSources = $sharedSources;
        $this->status = $status;
        $this->thumb = $thumb;
        $this->title = $title;
        $this->username = $username;
        $this->uuid = $uuid;
        $this->friendlyName = $friendlyName;
        $this->restricted = $restricted;
    }
}