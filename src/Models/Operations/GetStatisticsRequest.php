<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class GetStatisticsRequest
{
    /**
     * The timespan to retrieve statistics for
     *
     * the exact meaning of this parameter is not known
     *
     *
     * @var ?int $timespan
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=Timespan')]
    public ?int $timespan = null;

    public function __construct()
    {
        $this->timespan = null;
    }
}