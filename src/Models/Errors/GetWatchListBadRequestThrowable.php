<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class GetWatchListBadRequestThrowable extends \RuntimeException
{
    public GetWatchListBadRequest $container;

    public function __construct(string $message, int $statusCode, GetWatchListBadRequest $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}