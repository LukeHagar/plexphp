<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class DeletePlaylistBadRequestThrowable extends \RuntimeException
{
    public DeletePlaylistBadRequest $container;

    public function __construct(string $message, int $statusCode, DeletePlaylistBadRequest $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}