<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


class PostUsersSignInDataUserProfile
{
    /**
     * The preferred audio language for the account
     *
     * @var ?string $defaultAudioLanguage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultAudioLanguage')]
    public ?string $defaultAudioLanguage;

    /**
     * The preferred subtitle language for the account
     *
     * @var ?string $defaultSubtitleLanguage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultSubtitleLanguage')]
    public ?string $defaultSubtitleLanguage;

    /**
     * If the account has automatically select audio and subtitle tracks enabled
     *
     * @var ?bool $autoSelectAudio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('autoSelectAudio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $autoSelectAudio = null;

    /**
     *
     * @var ?PostUsersSignInDataAutoSelectSubtitle $autoSelectSubtitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('autoSelectSubtitle')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataAutoSelectSubtitle|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostUsersSignInDataAutoSelectSubtitle $autoSelectSubtitle = null;

    /**
     *
     * @var ?PostUsersSignInDataDefaultSubtitleAccessibility $defaultSubtitleAccessibility
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultSubtitleAccessibility')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataDefaultSubtitleAccessibility|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostUsersSignInDataDefaultSubtitleAccessibility $defaultSubtitleAccessibility = null;

    /**
     *
     * @var ?PostUsersSignInDataDefaultSubtitleForced $defaultSubtitleForced
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('defaultSubtitleForced')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataDefaultSubtitleForced|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostUsersSignInDataDefaultSubtitleForced $defaultSubtitleForced = null;

    /**
     *
     * @var ?PostUsersSignInDataWatchedIndicator $watchedIndicator
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('watchedIndicator')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataWatchedIndicator|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostUsersSignInDataWatchedIndicator $watchedIndicator = null;

    /**
     *
     * @var ?PostUsersSignInDataMediaReviewsVisibility $mediaReviewsVisibility
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mediaReviewsVisibility')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataMediaReviewsVisibility|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PostUsersSignInDataMediaReviewsVisibility $mediaReviewsVisibility = null;

    /**
     * @param  ?bool  $autoSelectAudio
     * @param  ?string  $defaultAudioLanguage
     * @param  ?string  $defaultSubtitleLanguage
     * @param  ?PostUsersSignInDataAutoSelectSubtitle  $autoSelectSubtitle
     * @param  ?PostUsersSignInDataDefaultSubtitleAccessibility  $defaultSubtitleAccessibility
     * @param  ?PostUsersSignInDataDefaultSubtitleForced  $defaultSubtitleForced
     * @param  ?PostUsersSignInDataWatchedIndicator  $watchedIndicator
     * @param  ?PostUsersSignInDataMediaReviewsVisibility  $mediaReviewsVisibility
     * @phpstan-pure
     */
    public function __construct(?string $defaultAudioLanguage = null, ?string $defaultSubtitleLanguage = null, ?bool $autoSelectAudio = true, ?PostUsersSignInDataAutoSelectSubtitle $autoSelectSubtitle = PostUsersSignInDataAutoSelectSubtitle::Disable, ?PostUsersSignInDataDefaultSubtitleAccessibility $defaultSubtitleAccessibility = PostUsersSignInDataDefaultSubtitleAccessibility::Disable, ?PostUsersSignInDataDefaultSubtitleForced $defaultSubtitleForced = PostUsersSignInDataDefaultSubtitleForced::Disable, ?PostUsersSignInDataWatchedIndicator $watchedIndicator = PostUsersSignInDataWatchedIndicator::Disable, ?PostUsersSignInDataMediaReviewsVisibility $mediaReviewsVisibility = PostUsersSignInDataMediaReviewsVisibility::Disable)
    {
        $this->defaultAudioLanguage = $defaultAudioLanguage;
        $this->defaultSubtitleLanguage = $defaultSubtitleLanguage;
        $this->autoSelectAudio = $autoSelectAudio;
        $this->autoSelectSubtitle = $autoSelectSubtitle;
        $this->defaultSubtitleAccessibility = $defaultSubtitleAccessibility;
        $this->defaultSubtitleForced = $defaultSubtitleForced;
        $this->watchedIndicator = $watchedIndicator;
        $this->mediaReviewsVisibility = $mediaReviewsVisibility;
    }
}