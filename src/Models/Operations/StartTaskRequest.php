<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use \LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class StartTaskRequest
{
    /**
     * the name of the task to be started.
     * 
     * @var \LukeHagar\Plex_API\Models\Operations\TaskName $taskName
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=taskName')]
    public TaskName $taskName;
    
	public function __construct()
	{
		$this->taskName = \LukeHagar\Plex_API\Models\Operations\TaskName::BackupDatabase;
	}
}