<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetStatisticsMediaContainer
{
	#[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;
    
    /**
     * $device
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetStatisticsDevice> $device
     */
	#[\JMS\Serializer\Annotation\SerializedName('Device')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetStatisticsDevice>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $device = null;
    
    /**
     * $account
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\Account> $account
     */
	#[\JMS\Serializer\Annotation\SerializedName('Account')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\Account>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $account = null;
    
    /**
     * $statisticsMedia
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\StatisticsMedia> $statisticsMedia
     */
	#[\JMS\Serializer\Annotation\SerializedName('StatisticsMedia')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\StatisticsMedia>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $statisticsMedia = null;
    
	public function __construct()
	{
		$this->size = null;
		$this->device = null;
		$this->account = null;
		$this->statisticsMedia = null;
	}
}