<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class ApplyUpdatesRequest
{
    /**
     * Indicate that you want the update to run during the next Butler execution. Omitting this or setting it to false indicates that the update should install
     *
     * @var ?Tonight $tonight
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tonight')]
    public ?Tonight $tonight = null;

    /**
     * Indicate that the latest version should be marked as skipped. The [Release] entry for this version will have the `state` set to `skipped`.
     *
     * @var ?Skip $skip
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=skip')]
    public ?Skip $skip = null;

    /**
     * @param  ?Tonight  $tonight
     * @param  ?Skip  $skip
     * @phpstan-pure
     */
    public function __construct(?Tonight $tonight = null, ?Skip $skip = null)
    {
        $this->tonight = $tonight;
        $this->skip = $skip;
    }
}