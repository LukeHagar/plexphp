<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class UserProfile
{
    /**
     * If the account has automatically select audio and subtitle tracks enabled
     *
     * @var ?bool $autoSelectAudio
     */
    #[\JMS\Serializer\Annotation\SerializedName('autoSelectAudio')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $autoSelectAudio = null;

    /**
     * The preferred audio language for the account
     *
     * @var ?string $defaultAudioLanguage
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultAudioLanguage')]
    public ?string $defaultAudioLanguage;

    /**
     * The preferred subtitle language for the account
     *
     * @var ?string $defaultSubtitleLanguage
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultSubtitleLanguage')]
    public ?string $defaultSubtitleLanguage;

    /**
     * The auto-select subtitle mode (0 = Manually selected, 1 = Shown with foreign audio, 2 = Always enabled)
     *
     * @var ?AutoSelectSubtitle $autoSelectSubtitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('autoSelectSubtitle')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\AutoSelectSubtitle|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AutoSelectSubtitle $autoSelectSubtitle = null;

    /**
     * The subtitles for the deaf or hard-of-hearing (SDH) searches mode (0 = Prefer non-SDH subtitles, 1 = Prefer SDH subtitles, 2 = Only show SDH subtitles, 3 = Only shown non-SDH subtitles)
     *
     * @var ?DefaultSubtitleAccessibility $defaultSubtitleAccessibility
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultSubtitleAccessibility')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\DefaultSubtitleAccessibility|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?DefaultSubtitleAccessibility $defaultSubtitleAccessibility = null;

    /**
     * The forced subtitles searches mode (0 = Prefer non-forced subtitles, 1 = Prefer forced subtitles, 2 = Only show forced subtitles, 3 = Only show non-forced subtitles)
     *
     * @var ?DefaultSubtitleForced $defaultSubtitleForced
     */
    #[\JMS\Serializer\Annotation\SerializedName('defaultSubtitleForced')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\DefaultSubtitleForced|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?DefaultSubtitleForced $defaultSubtitleForced = null;

    /**
     *
     * @var ?WatchedIndicator $watchedIndicator
     */
    #[\JMS\Serializer\Annotation\SerializedName('watchedIndicator')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\WatchedIndicator|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?WatchedIndicator $watchedIndicator = null;

    /**
     *
     * @var ?MediaReviewsVisibility $mediaReviewsVisibility
     */
    #[\JMS\Serializer\Annotation\SerializedName('mediaReviewsVisibility')]
    #[\JMS\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\MediaReviewsVisibility|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?MediaReviewsVisibility $mediaReviewsVisibility = null;

    /**
     * @param  ?bool  $autoSelectAudio
     * @param  ?string  $defaultAudioLanguage
     * @param  ?string  $defaultSubtitleLanguage
     * @param  ?AutoSelectSubtitle  $autoSelectSubtitle
     * @param  ?DefaultSubtitleAccessibility  $defaultSubtitleAccessibility
     * @param  ?DefaultSubtitleForced  $defaultSubtitleForced
     * @param  ?WatchedIndicator  $watchedIndicator
     * @param  ?MediaReviewsVisibility  $mediaReviewsVisibility
     */
    public function __construct(?bool $autoSelectAudio = null, ?string $defaultAudioLanguage = null, ?string $defaultSubtitleLanguage = null, ?AutoSelectSubtitle $autoSelectSubtitle = null, ?DefaultSubtitleAccessibility $defaultSubtitleAccessibility = null, ?DefaultSubtitleForced $defaultSubtitleForced = null, ?WatchedIndicator $watchedIndicator = null, ?MediaReviewsVisibility $mediaReviewsVisibility = null)
    {
        $this->autoSelectAudio = $autoSelectAudio;
        $this->defaultAudioLanguage = $defaultAudioLanguage;
        $this->defaultSubtitleLanguage = $defaultSubtitleLanguage;
        $this->autoSelectSubtitle = $autoSelectSubtitle;
        $this->defaultSubtitleAccessibility = $defaultSubtitleAccessibility;
        $this->defaultSubtitleForced = $defaultSubtitleForced;
        $this->watchedIndicator = $watchedIndicator;
        $this->mediaReviewsVisibility = $mediaReviewsVisibility;
    }
}