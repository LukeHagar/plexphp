<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/**
 * An integer log level to write to the PMS log with.  
 * 
 * 0: Error  
 * 1: Warning  
 * 2: Info 
 * 3: Debug  
 * 4: Verbose
 * 
 */
enum Level: int
{
    case Zero = 0;
    case One = 1;
    case Two = 2;
    case Three = 3;
    case Four = 4;
}