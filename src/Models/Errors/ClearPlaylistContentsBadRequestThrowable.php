<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class ClearPlaylistContentsBadRequestThrowable extends \RuntimeException
{
    public ClearPlaylistContentsBadRequest $container;

    public function __construct(string $message, int $statusCode, ClearPlaylistContentsBadRequest $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}