<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** A key representing a specific tag within the section. */
enum Tag: string
{
    case All = 'all';
    case Unwatched = 'unwatched';
    case Newest = 'newest';
    case RecentlyAdded = 'recentlyAdded';
    case RecentlyViewed = 'recentlyViewed';
    case OnDeck = 'onDeck';
    case Collection = 'collection';
    case Edition = 'edition';
    case Genre = 'genre';
    case Year = 'year';
    case Decade = 'decade';
    case Director = 'director';
    case Actor = 'actor';
    case Country = 'country';
    case ContentRating = 'contentRating';
    case Rating = 'rating';
    case Resolution = 'resolution';
    case FirstCharacter = 'firstCharacter';
    case Folder = 'folder';
    case Albums = 'albums';
}
