<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class GetGenresLibraryUnauthorizedThrowable extends \RuntimeException
{
    public GetGenresLibraryUnauthorized $container;

    public function __construct(string $message, int $statusCode, GetGenresLibraryUnauthorized $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}