# GetPinResponseBody

The Pin


## Fields

| Field                                                                                                                                                                 | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           | Example                                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                  | *?float*                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                    | PinID for use with authentication                                                                                                                                     | 1272322473                                                                                                                                                            |
| `code`                                                                                                                                                                | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | 3patfx1a78ukcbr7x0n9bl26t                                                                                                                                             |
| `product`                                                                                                                                                             | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | Plex Web                                                                                                                                                              |
| `trusted`                                                                                                                                                             | *?bool*                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   |                                                                                                                                                                       |
| `qr`                                                                                                                                                                  | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | a link to a QR code hosted on plex.tv <br/>The QR code redirects to the relevant `plex.tv/link` authentication page<br/>Which then prompts the user for the 4 Digit Link Pin<br/> | https://plex.tv/api/v2/pins/qr/3patfx1a78ukcbr7x0n9bl26t                                                                                                              |
| `clientIdentifier`                                                                                                                                                    | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | Postman                                                                                                                                                               |
| `location`                                                                                                                                                            | [?\LukeHagar\Plex_API\Models\Operations\Location](../../Models/Operations/Location.md)                                                                                | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   |                                                                                                                                                                       |
| `expiresIn`                                                                                                                                                           | *?float*                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | 1800                                                                                                                                                                  |
| `createdAt`                                                                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                         | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | 2023-04-12 17:00:03 +0000 UTC                                                                                                                                         |
| `expiresAt`                                                                                                                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                         | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   | 2023-04-12 17:30:03 +0000 UTC                                                                                                                                         |
| `authToken`                                                                                                                                                           | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   |                                                                                                                                                                       |
| `newRegistration`                                                                                                                                                     | *?string*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                    | N/A                                                                                                                                                                   |                                                                                                                                                                       |