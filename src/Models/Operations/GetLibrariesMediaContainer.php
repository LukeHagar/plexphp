<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetLibrariesMediaContainer
{
	#[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('allowSync')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $allowSync = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('title1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title1 = null;
    
    /**
     * $directory
     * 
     * @var ?array<\LukeHagar\Plex_API\Models\Operations\GetLibrariesDirectory> $directory
     */
	#[\JMS\Serializer\Annotation\SerializedName('Directory')]
    #[\JMS\Serializer\Annotation\Type('array<LukeHagar\Plex_API\Models\Operations\GetLibrariesDirectory>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $directory = null;
    
	public function __construct()
	{
		$this->size = null;
		$this->allowSync = null;
		$this->title1 = null;
		$this->directory = null;
	}
}