<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Components;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=X-Plex-Token')]
    public string $accessToken;

    public function __construct()
    {
        $this->accessToken = '';
    }
}