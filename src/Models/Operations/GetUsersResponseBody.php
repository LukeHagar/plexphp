<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetUsersResponseBody - Successful response with media container data in XML */
class GetUsersResponseBody
{
    /**
     * Container holding user and server details.
     *
     * @var ?GetUsersMediaContainer $mediaContainer
     */
    public ?GetUsersMediaContainer $mediaContainer = null;

    /**
     * @param  ?GetUsersMediaContainer  $mediaContainer
     * @phpstan-pure
     */
    public function __construct(?GetUsersMediaContainer $mediaContainer = null)
    {
        $this->mediaContainer = $mediaContainer;
    }
}