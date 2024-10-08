<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class Account
{
    /**
     *
     * @var ?int $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $id = null;

    /**
     *
     * @var ?string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $defaultAudioLanguage
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultAudioLanguage')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $defaultAudioLanguage = null;

    /**
     *
     * @var ?bool $autoSelectAudio
     */
    #[\JMS\Serializer\Annotation\SerializedName('autoSelectAudio')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $autoSelectAudio = null;

    /**
     *
     * @var ?string $defaultSubtitleLanguage
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultSubtitleLanguage')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $defaultSubtitleLanguage = null;

    /**
     *
     * @var ?int $subtitleMode
     */
    #[\JMS\Serializer\Annotation\SerializedName('subtitleMode')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $subtitleMode = null;

    /**
     *
     * @var ?string $thumb
     */
    #[\JMS\Serializer\Annotation\SerializedName('thumb')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $thumb = null;

    /**
     * @param  ?int  $id
     * @param  ?string  $key
     * @param  ?string  $name
     * @param  ?string  $defaultAudioLanguage
     * @param  ?bool  $autoSelectAudio
     * @param  ?string  $defaultSubtitleLanguage
     * @param  ?int  $subtitleMode
     * @param  ?string  $thumb
     */
    public function __construct(?int $id = null, ?string $key = null, ?string $name = null, ?string $defaultAudioLanguage = null, ?bool $autoSelectAudio = null, ?string $defaultSubtitleLanguage = null, ?int $subtitleMode = null, ?string $thumb = null)
    {
        $this->id = $id;
        $this->key = $key;
        $this->name = $name;
        $this->defaultAudioLanguage = $defaultAudioLanguage;
        $this->autoSelectAudio = $autoSelectAudio;
        $this->defaultSubtitleLanguage = $defaultSubtitleLanguage;
        $this->subtitleMode = $subtitleMode;
        $this->thumb = $thumb;
    }
}