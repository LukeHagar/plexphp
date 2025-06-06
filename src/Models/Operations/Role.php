<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Role
{
    /**
     * The unique identifier for the role.
     *
     * NOTE: This is different for each Plex server and is not globally unique.
     *
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     * The filter string used to query this actor. For example, it may indicate that this is an actor with a given key.
     *
     * @var string $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filter')]
    public string $filter;

    /**
     * The display tag for the actor (typically the actor's name).
     *
     * @var string $tag
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tag')]
    public string $tag;

    /**
     * A 24-character hexadecimal unique key associated with the actor's tag, used for internal identification.
     *
     * NOTE: This is globally unique across all Plex Servers.
     *
     *
     * @var string $tagKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagKey')]
    public string $tagKey;

    /**
     * The role played by the actor in the media item.
     *
     * @var ?string $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $role = null;

    /**
     * The absolute URL of the thumbnail image for the actor.
     *
     * @var ?string $thumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('thumb')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $thumb = null;

    /**
     * @param  int  $id
     * @param  string  $filter
     * @param  string  $tag
     * @param  string  $tagKey
     * @param  ?string  $role
     * @param  ?string  $thumb
     * @phpstan-pure
     */
    public function __construct(int $id, string $filter, string $tag, string $tagKey, ?string $role = null, ?string $thumb = null)
    {
        $this->id = $id;
        $this->filter = $filter;
        $this->tag = $tag;
        $this->tagKey = $tagKey;
        $this->role = $role;
        $this->thumb = $thumb;
    }
}