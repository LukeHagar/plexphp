<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;

use LukeHagar\Plex_API\Utils\SpeakeasyMetadata;
class GetSourceConnectionInformationRequest
{
    /**
     * The source identifier with an included prefix.
     *
     * @var string $source
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=source')]
    public string $source;

    /**
     * @param  string  $source
     * @phpstan-pure
     */
    public function __construct(string $source)
    {
        $this->source = $source;
    }
}