<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/**
 * GetMetadataLibraryResponseBody - Unauthorized - Returned if the X-Plex-Token is missing from the header or query.
 * 
 * @package LukeHagar\Plex_API\Models\Operations
 * @access public
 */
class GetMetadataLibraryResponseBody
{
    /**
     * $errors
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetMetadataErrors> $errors
     */
	#[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetMetadataErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;
    
	public function __construct()
	{
		$this->errors = null;
	}
}