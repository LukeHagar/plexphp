<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class GetServerPreferencesUnauthorizedThrowable extends \RuntimeException
{
    public GetServerPreferencesUnauthorized $container;

    public function __construct(string $message, int $statusCode, GetServerPreferencesUnauthorized $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}