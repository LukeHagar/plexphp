<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Field
{
	#[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('subType')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subType = null;
    
	public function __construct()
	{
		$this->key = null;
		$this->title = null;
		$this->type = null;
		$this->subType = null;
	}
}