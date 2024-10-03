<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('3381b62b-9ab7-4e37-827b-203e9809eb58')
    ->setClientName('Plex for Roku')
    ->setClientVersion('2.4.1')
    ->setPlatform('Roku')
    ->setDeviceNickname('Roku 3')
    ->setSecurity($security)->build();



$response = $sdk->server->getServerCapabilities(

);

if ($response->object !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->