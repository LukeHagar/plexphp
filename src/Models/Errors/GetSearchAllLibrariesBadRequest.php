<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;

use LukeHagar\Plex_API\Utils;
/** GetSearchAllLibrariesBadRequest - Bad Request - A parameter was not specified, or was specified incorrectly. */
class GetSearchAllLibrariesBadRequest
{
    /**
     * $errors
     *
     * @var ?array<GetSearchAllLibrariesErrors> $errors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Errors\GetSearchAllLibrariesErrors>|null')]
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
     * @param  ?array<GetSearchAllLibrariesErrors>  $errors
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     * @phpstan-pure
     */
    public function __construct(?array $errors = null, ?\Psr\Http\Message\ResponseInterface $rawResponse = null)
    {
        $this->errors = $errors;
        $this->rawResponse = $rawResponse;
    }

    public function toException(): GetSearchAllLibrariesBadRequestThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new GetSearchAllLibrariesBadRequestThrowable($message, (int) $code, $this);
    }
}