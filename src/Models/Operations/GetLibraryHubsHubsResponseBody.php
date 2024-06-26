<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetLibraryHubsHubsResponseBody - Unauthorized - Returned if the X-Plex-Token is missing from the header or query. */
class GetLibraryHubsHubsResponseBody
{
    /**
     * $errors
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetLibraryHubsErrors> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetLibraryHubsErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;

    public function __construct()
    {
        $this->errors = null;
    }
}