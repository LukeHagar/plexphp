<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** The state of the media item */
enum State: string
{
    case Playing = 'playing';
    case Paused = 'paused';
    case Stopped = 'stopped';
}