<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class GetMetadataChildrenUnauthorizedThrowable extends \RuntimeException
{
    public GetMetadataChildrenUnauthorized $container;

    public function __construct(string $message, int $statusCode, GetMetadataChildrenUnauthorized $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}