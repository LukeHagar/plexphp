<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()->setSecurity($security)->build();



$response = $sdk->server->getMediaProviders(
    xPlexToken: 'CV5xoxjTpFKUzBTShsaf'
);

if ($response->object !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->