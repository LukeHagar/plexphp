# GetOnDeckResponse


## Fields

| Field                                                                                                                          | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                                  | *string*                                                                                                                       | :heavy_check_mark:                                                                                                             | HTTP response content type for this operation                                                                                  |
| `statusCode`                                                                                                                   | *int*                                                                                                                          | :heavy_check_mark:                                                                                                             | HTTP response status code for this operation                                                                                   |
| `rawResponse`                                                                                                                  | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                   | :heavy_check_mark:                                                                                                             | Raw HTTP response; suitable for custom response parsing                                                                        |
| `twoHundredApplicationJsonObject`                                                                                              | [?\LukeHagar\Plex_API\Models\Operations\GetOnDeckResponseBody](../../Models/Operations/GetOnDeckResponseBody.md)               | :heavy_minus_sign:                                                                                                             | The on Deck content                                                                                                            |
| `fourHundredAndOneApplicationJsonObject`                                                                                       | [?\LukeHagar\Plex_API\Models\Operations\GetOnDeckLibraryResponseBody](../../Models/Operations/GetOnDeckLibraryResponseBody.md) | :heavy_minus_sign:                                                                                                             | Unauthorized - Returned if the X-Plex-Token is missing from the header or query.                                               |