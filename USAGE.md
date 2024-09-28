<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use LukeHagar\Plex_API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Plex_API\PlexAPI::builder()
    ->setClientID('gcgzw5rz2xovp84b4vha3a40')
    ->setClientName('Plex Web')
    ->setClientVersion('4.133.0')
    ->setClientPlatform('Chrome')
    ->setDeviceName('Linux')
    ->setSecurity($security)->build();



$response = $sdk->server->getServerCapabilities(

);

if ($response->object !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->