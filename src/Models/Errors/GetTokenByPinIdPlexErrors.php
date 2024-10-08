<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;


class GetTokenByPinIdPlexErrors
{
    /**
     *
     * @var ?int $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $code = null;

    /**
     *
     * @var ?string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     * @param  ?int  $code
     * @param  ?string  $message
     */
    public function __construct(?int $code = null, ?string $message = null)
    {
        $this->code = $code;
        $this->message = $message;
    }
}