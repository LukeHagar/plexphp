<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

class EnablePaperTrailBadRequestThrowable extends \RuntimeException
{
    public EnablePaperTrailBadRequest $container;

    public function __construct(string $message, int $statusCode, EnablePaperTrailBadRequest $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}