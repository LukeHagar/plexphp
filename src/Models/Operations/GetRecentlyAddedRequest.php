<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class GetRecentlyAddedRequest
{
    /**
     * The index of the first item to return. If not specified, the first item will be returned.
     *
     * If the number of items exceeds the limit, the response will be paginated.
     * By default this is 0
     *
     *
     * @var ?int $xPlexContainerStart
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=X-Plex-Container-Start')]
    public ?int $xPlexContainerStart = null;

    /**
     * The number of items to return. If not specified, all items will be returned.
     *
     * If the number of items exceeds the limit, the response will be paginated.
     * By default this is 50
     *
     *
     * @var ?int $xPlexContainerSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=X-Plex-Container-Size')]
    public ?int $xPlexContainerSize = null;

    /**
     * @param  ?int  $xPlexContainerStart
     * @param  ?int  $xPlexContainerSize
     */
    public function __construct(?int $xPlexContainerStart = null, ?int $xPlexContainerSize = null)
    {
        $this->xPlexContainerStart = $xPlexContainerStart;
        $this->xPlexContainerSize = $xPlexContainerSize;
    }
}