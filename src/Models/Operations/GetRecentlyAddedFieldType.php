<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class GetRecentlyAddedFieldType
{
    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * $operator
     *
     * @var array<GetRecentlyAddedOperator> $operator
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('Operator')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\GetRecentlyAddedOperator>')]
    public array $operator;

    /**
     * @param  string  $type
     * @param  array<GetRecentlyAddedOperator>  $operator
     * @phpstan-pure
     */
    public function __construct(string $type, array $operator)
    {
        $this->type = $type;
        $this->operator = $operator;
    }
}