<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;


/** UpdatePlayProgressResponseBody - Unauthorized - Returned if the X-Plex-Token is missing from the header or query. */
class UpdatePlayProgressResponseBody
{
    /**
     * $errors
     *
     * @var ?array<UpdatePlayProgressErrors> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Errors\UpdatePlayProgressErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    #[\JMS\Serializer\Annotation\SerializedName('-')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;

    /**
     * @param  ?array<UpdatePlayProgressErrors>  $errors
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     */
    public function __construct(?array $errors = null, ?\Psr\Http\Message\ResponseInterface $rawResponse = null)
    {
        $this->errors = $errors;
        $this->rawResponse = $rawResponse;
    }
}