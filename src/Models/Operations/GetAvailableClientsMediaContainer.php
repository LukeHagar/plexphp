<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetAvailableClientsMediaContainer
{
	#[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $size = null;
    
    /**
     * $server
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\Server> $server
     */
	#[\JMS\Serializer\Annotation\SerializedName('Server')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\Server>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $server = null;
    
	public function __construct()
	{
		$this->size = null;
		$this->server = null;
	}
}