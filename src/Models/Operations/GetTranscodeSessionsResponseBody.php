<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/**
 * GetTranscodeSessionsResponseBody - The Transcode Sessions
 * 
 * @package LukeHagar\Plex_API\Models\Operations
 * @access public
 */
class GetTranscodeSessionsResponseBody
{
	#[\JMS\Serializer\Annotation\SerializedName('MediaContainer')]
    #[\JMS\Serializer\Annotation\Type('LukeHagar\Plex_API\Models\Operations\GetTranscodeSessionsMediaContainer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetTranscodeSessionsMediaContainer $mediaContainer = null;
    
	public function __construct()
	{
		$this->mediaContainer = null;
	}
}