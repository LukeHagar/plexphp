<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;


use LukeHagar\Plex_API\Utils;
/** LogMultiLineBadRequest - Bad Request - A parameter was not specified, or was specified incorrectly. */
class LogMultiLineBadRequest
{
    /**
     * $errors
     *
     * @var ?array<LogMultiLineErrors> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Errors\LogMultiLineErrors>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $errors = null;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    #[\JMS\Serializer\Annotation\Exclude]

    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;

    /**
     * @param  ?array<LogMultiLineErrors>  $errors
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     */
    public function __construct(?array $errors = null, ?\Psr\Http\Message\ResponseInterface $rawResponse = null)
    {
        $this->errors = $errors;
        $this->rawResponse = $rawResponse;
    }

    public function toException(): LogMultiLineBadRequestThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new LogMultiLineBadRequestThrowable($message, (int) $code, $this);
    }
}