<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** GetButlerTasksResponseBody - All butler tasks */
class GetButlerTasksResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('ButlerTasks')]
    #[\JMS\Serializer\Annotation\Type('LukeHagar\Plex_API\Models\Operations\ButlerTasks')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ButlerTasks $butlerTasks = null;

    public function __construct()
    {
        $this->butlerTasks = null;
    }
}