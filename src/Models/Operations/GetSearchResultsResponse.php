<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetSearchResultsResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
    /**
     * Search Results
     * 
     * @var ?\LukeHagar\Plex_API\Models\Operations\GetSearchResultsResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?GetSearchResultsResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * Unauthorized - Returned if the X-Plex-Token is missing from the header or query.
     * 
     * @var ?\LukeHagar\Plex_API\Models\Operations\GetSearchResultsSearchResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?GetSearchResultsSearchResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->twoHundredApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
	}
}