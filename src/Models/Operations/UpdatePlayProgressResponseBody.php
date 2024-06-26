<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** UpdatePlayProgressResponseBody - Unauthorized - Returned if the X-Plex-Token is missing from the header or query. */
class UpdatePlayProgressResponseBody
{
    /**
     * $errors
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\UpdatePlayProgressErrors> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\UpdatePlayProgressErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;

    public function __construct()
    {
        $this->errors = null;
    }
}