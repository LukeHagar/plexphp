<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class StopAllTasksUnauthorizedThrowable extends \RuntimeException
{
    public StopAllTasksUnauthorized $container;

    public function __construct(string $message, int $statusCode, StopAllTasksUnauthorized $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}