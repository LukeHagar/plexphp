<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** PerformSearchResponseBody - Unauthorized - Returned if the X-Plex-Token is missing from the header or query. */
class PerformSearchResponseBody
{
    /**
     * $errors
     *
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\PerformSearchErrors> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\PerformSearchErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;

    public function __construct()
    {
        $this->errors = null;
    }
}