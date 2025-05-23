<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API\Models\Operations;


/** PostUsersSignInDataUserPlexAccount - Returns the user account data with a valid auth token */
class PostUsersSignInDataUserPlexAccount
{
    /**
     * The account token
     *
     * @var string $authToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authToken')]
    public string $authToken;

    /**
     * The account country
     *
     * @var string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     * The account email address
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * Your account full name
     *
     * @var string $friendlyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('friendlyName')]
    public string $friendlyName;

    /**
     * List of devices your allowed to use with this account
     *
     * @var array<string> $entitlements
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('entitlements')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $entitlements;

    /**
     * The number of accounts in the Plex Home
     *
     * @var int $homeSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('homeSize')]
    public int $homeSize;

    /**
     * The Plex account ID
     *
     * @var int $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public int $id;

    /**
     * Unix epoch datetime in seconds
     *
     * @var int $joinedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('joinedAt')]
    public int $joinedAt;

    /**
     * Your current mailing list status (active or unsubscribed)
     *
     * @var PostUsersSignInDataMailingListStatus $mailingListStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mailingListStatus')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataMailingListStatus')]
    public PostUsersSignInDataMailingListStatus $mailingListStatus;

    /**
     * The maximum number of accounts allowed in the Plex Home
     *
     * @var int $maxHomeSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maxHomeSize')]
    public int $maxHomeSize;

    /**
     *
     * @var PostUsersSignInDataUserProfile $profile
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('profile')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataUserProfile')]
    public PostUsersSignInDataUserProfile $profile;

    /**
     * Unix epoch datetime in seconds
     *
     * @var int $rememberExpiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rememberExpiresAt')]
    public int $rememberExpiresAt;

    /**
     * Unknown
     *
     * @var string $scrobbleTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scrobbleTypes')]
    public string $scrobbleTypes;

    /**
     * $services
     *
     * @var array<PostUsersSignInDataServices> $services
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('services')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataServices>')]
    public array $services;

    /**
     * If the account’s Plex Pass subscription is active
     *
     * @var PostUsersSignInDataSubscription $subscription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription')]
    #[\Speakeasy\Serializer\Annotation\Type('\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataSubscription')]
    public PostUsersSignInDataSubscription $subscription;

    /**
     * URL of the account thumbnail
     *
     * @var string $thumb
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('thumb')]
    public string $thumb;

    /**
     * The title of the account (username or friendly name)
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * The account username
     *
     * @var string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    public string $username;

    /**
     * The account UUID
     *
     * @var string $uuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uuid')]
    public string $uuid;

    /**
     * $pastSubscriptions
     *
     * @var array<PastSubscription> $pastSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pastSubscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\PastSubscription>')]
    public array $pastSubscriptions;

    /**
     * $trials
     *
     * @var array<Trials> $trials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('trials')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\Trials>')]
    public array $trials;

    /**
     * Unknown
     *
     * @var ?bool $adsConsent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('adsConsent')]
    public ?bool $adsConsent;

    /**
     *
     * @var ?int $adsConsentReminderAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('adsConsentReminderAt')]
    public ?int $adsConsentReminderAt;

    /**
     *
     * @var ?int $adsConsentSetAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('adsConsentSetAt')]
    public ?int $adsConsentSetAt;

    /**
     * The account locale
     *
     * @var ?string $locale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('locale')]
    public ?string $locale;

    /**
     * [Might be removed] The hashed Plex Home PIN 
     *
     * @var ?string $pin
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pin = null;

    /**
     * [Might be removed] List of account roles. Plexpass membership listed here
     *
     * @var ?array<string> $roles
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('roles')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $roles = null;

    /**
     * Description of the Plex Pass subscription
     *
     * @var ?string $subscriptionDescription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriptionDescription')]
    public ?string $subscriptionDescription;

    /**
     * $subscriptions
     *
     * @var ?array<PostUsersSignInDataAuthenticationSubscription> $subscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\LukeHagar\Plex_API\Models\Operations\PostUsersSignInDataAuthenticationSubscription>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $subscriptions = null;

    /**
     *
     * @var ?string $attributionPartner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attributionPartner')]
    public ?string $attributionPartner;

    /**
     * If the two-factor authentication backup codes have been created
     *
     * @var ?bool $backupCodesCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('backupCodesCreated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $backupCodesCreated = null;

    /**
     * If the account has been confirmed
     *
     * @var ?bool $confirmed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confirmed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $confirmed = null;

    /**
     * If login with email only is enabled
     *
     * @var ?bool $emailOnlyAuth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emailOnlyAuth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $emailOnlyAuth = null;

    /**
     * If experimental features are enabled
     *
     * @var ?bool $experimentalFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('experimentalFeatures')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $experimentalFeatures = null;

    /**
     * If the account is a Plex Home guest user
     *
     * @var ?bool $guest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guest')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $guest = null;

    /**
     * If the account has a password
     *
     * @var ?bool $hasPassword
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasPassword')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasPassword = null;

    /**
     * If the account is a Plex Home user
     *
     * @var ?bool $home
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('home')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $home = null;

    /**
     * If the account is the Plex Home admin
     *
     * @var ?bool $homeAdmin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('homeAdmin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $homeAdmin = null;

    /**
     * If you are subscribed to the Plex newsletter
     *
     * @var ?bool $mailingListActive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mailingListActive')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $mailingListActive = null;

    /**
     * If the account has a Plex Home PIN enabled
     *
     * @var ?bool $protected
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('protected')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $protected = null;

    /**
     * If the account is a Plex Home managed user
     *
     * @var ?bool $restricted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('restricted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $restricted = null;

    /**
     * If two-factor authentication is enabled
     *
     * @var ?bool $twoFactorEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('twoFactorEnabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $twoFactorEnabled = null;

    /**
     * Unknown
     *
     * @var ?bool $anonymous
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('anonymous')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $anonymous = null;

    /**
     * @param  string  $authToken
     * @param  string  $country
     * @param  string  $email
     * @param  string  $friendlyName
     * @param  array<string>  $entitlements
     * @param  int  $homeSize
     * @param  int  $id
     * @param  int  $joinedAt
     * @param  PostUsersSignInDataMailingListStatus  $mailingListStatus
     * @param  int  $maxHomeSize
     * @param  PostUsersSignInDataUserProfile  $profile
     * @param  int  $rememberExpiresAt
     * @param  string  $scrobbleTypes
     * @param  array<PostUsersSignInDataServices>  $services
     * @param  PostUsersSignInDataSubscription  $subscription
     * @param  string  $thumb
     * @param  string  $title
     * @param  string  $username
     * @param  string  $uuid
     * @param  array<PastSubscription>  $pastSubscriptions
     * @param  array<Trials>  $trials
     * @param  ?bool  $adsConsent
     * @param  ?int  $adsConsentReminderAt
     * @param  ?int  $adsConsentSetAt
     * @param  ?bool  $backupCodesCreated
     * @param  ?bool  $confirmed
     * @param  ?bool  $emailOnlyAuth
     * @param  ?bool  $experimentalFeatures
     * @param  ?bool  $guest
     * @param  ?bool  $hasPassword
     * @param  ?bool  $home
     * @param  ?bool  $homeAdmin
     * @param  ?string  $locale
     * @param  ?bool  $mailingListActive
     * @param  ?string  $pin
     * @param  ?bool  $protected
     * @param  ?bool  $restricted
     * @param  ?array<string>  $roles
     * @param  ?string  $subscriptionDescription
     * @param  ?array<PostUsersSignInDataAuthenticationSubscription>  $subscriptions
     * @param  ?bool  $twoFactorEnabled
     * @param  ?string  $attributionPartner
     * @param  ?bool  $anonymous
     * @phpstan-pure
     */
    public function __construct(string $authToken, string $country, string $email, string $friendlyName, array $entitlements, int $homeSize, int $id, int $joinedAt, PostUsersSignInDataMailingListStatus $mailingListStatus, int $maxHomeSize, PostUsersSignInDataUserProfile $profile, int $rememberExpiresAt, string $scrobbleTypes, array $services, PostUsersSignInDataSubscription $subscription, string $thumb, string $title, string $username, string $uuid, array $pastSubscriptions, array $trials, ?bool $adsConsent = null, ?int $adsConsentReminderAt = null, ?int $adsConsentSetAt = null, ?string $locale = null, ?string $pin = null, ?array $roles = null, ?string $subscriptionDescription = null, ?array $subscriptions = null, ?string $attributionPartner = null, ?bool $backupCodesCreated = false, ?bool $confirmed = false, ?bool $emailOnlyAuth = false, ?bool $experimentalFeatures = false, ?bool $guest = false, ?bool $hasPassword = true, ?bool $home = false, ?bool $homeAdmin = false, ?bool $mailingListActive = false, ?bool $protected = false, ?bool $restricted = false, ?bool $twoFactorEnabled = false, ?bool $anonymous = false)
    {
        $this->authToken = $authToken;
        $this->country = $country;
        $this->email = $email;
        $this->friendlyName = $friendlyName;
        $this->entitlements = $entitlements;
        $this->homeSize = $homeSize;
        $this->id = $id;
        $this->joinedAt = $joinedAt;
        $this->mailingListStatus = $mailingListStatus;
        $this->maxHomeSize = $maxHomeSize;
        $this->profile = $profile;
        $this->rememberExpiresAt = $rememberExpiresAt;
        $this->scrobbleTypes = $scrobbleTypes;
        $this->services = $services;
        $this->subscription = $subscription;
        $this->thumb = $thumb;
        $this->title = $title;
        $this->username = $username;
        $this->uuid = $uuid;
        $this->pastSubscriptions = $pastSubscriptions;
        $this->trials = $trials;
        $this->adsConsent = $adsConsent;
        $this->adsConsentReminderAt = $adsConsentReminderAt;
        $this->adsConsentSetAt = $adsConsentSetAt;
        $this->locale = $locale;
        $this->pin = $pin;
        $this->roles = $roles;
        $this->subscriptionDescription = $subscriptionDescription;
        $this->subscriptions = $subscriptions;
        $this->attributionPartner = $attributionPartner;
        $this->backupCodesCreated = $backupCodesCreated;
        $this->confirmed = $confirmed;
        $this->emailOnlyAuth = $emailOnlyAuth;
        $this->experimentalFeatures = $experimentalFeatures;
        $this->guest = $guest;
        $this->hasPassword = $hasPassword;
        $this->home = $home;
        $this->homeAdmin = $homeAdmin;
        $this->mailingListActive = $mailingListActive;
        $this->protected = $protected;
        $this->restricted = $restricted;
        $this->twoFactorEnabled = $twoFactorEnabled;
        $this->anonymous = $anonymous;
    }
}