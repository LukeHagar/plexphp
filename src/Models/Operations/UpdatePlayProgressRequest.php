<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class UpdatePlayProgressRequest
{
    /**
     * the media key
     *
     * @var string $key
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=key')]
    public string $key;

    /**
     * The time, in milliseconds, used to set the media playback progress.
     *
     * @var float $time
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=time')]
    public float $time;

    /**
     * The playback state of the media item.
     *
     * @var string $state
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=state')]
    public string $state;

    /**
     * @param  string  $key
     * @param  float  $time
     * @param  string  $state
     * @phpstan-pure
     */
    public function __construct(string $key, float $time, string $state)
    {
        $this->key = $key;
        $this->time = $time;
        $this->state = $state;
    }
}