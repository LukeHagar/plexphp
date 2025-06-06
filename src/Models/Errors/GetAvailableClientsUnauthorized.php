<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

use LukeHagar\Plex_API\Utils;
/** GetAvailableClientsUnauthorized - Unauthorized - Returned if the X-Plex-Token is missing from the header or query. */
class GetAvailableClientsUnauthorized
{
    /**
     * $errors
     *
     * @var ?array<GetAvailableClientsServerErrors> $errors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Errors\GetAvailableClientsServerErrors>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $errors = null;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;

    /**
     * @param  ?array<GetAvailableClientsServerErrors>  $errors
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     * @phpstan-pure
     */
    public function __construct(?array $errors = null, ?\Psr\Http\Message\ResponseInterface $rawResponse = null)
    {
        $this->errors = $errors;
        $this->rawResponse = $rawResponse;
    }

    public function toException(): GetAvailableClientsUnauthorizedThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new GetAvailableClientsUnauthorizedThrowable($message, (int) $code, $this);
    }
}