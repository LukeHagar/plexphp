<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Errors;


class ApplyUpdatesUpdaterErrors
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
     *
     * @var ?int $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $status = null;

    /**
     * @param  ?int  $code
     * @param  ?string  $message
     * @param  ?int  $status
     */
    public function __construct(?int $code = null, ?string $message = null, ?int $status = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->status = $status;
    }
}