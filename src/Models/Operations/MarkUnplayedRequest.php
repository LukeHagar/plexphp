<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use \LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class MarkUnplayedRequest
{
    /**
     * The media key to mark as Unplayed
     * 
     * @var float $key
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=key')]
    public float $key;
    
	public function __construct()
	{
		$this->key = 0;
	}
}