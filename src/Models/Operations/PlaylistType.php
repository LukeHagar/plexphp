<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** limit to a type of playlist. */
enum PlaylistType: string
{
    case Audio = 'audio';
    case Video = 'video';
    case Photo = 'photo';
}