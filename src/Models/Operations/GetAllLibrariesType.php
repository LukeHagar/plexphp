<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** The library type */
enum GetAllLibrariesType: string
{
    case Movie = 'movie';
    case TvShow = 'show';
    case Season = 'season';
    case Episode = 'episode';
    case Artist = 'artist';
    case Album = 'album';
    case Track = 'track';
    case PhotoAlbum = 'photoalbum';
    case Photo = 'photo';
    case Collection = 'collection';
}
