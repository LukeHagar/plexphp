# Hub


## Fields

| Field                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `hubKey`                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | /library/metadata/50768,65523,58188,57341,57302,57070                                                                                                                                                                                                                                                                                                                                                                                                          |
| `key`                                                                                                                                                                                                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | /playlists/all?type=15&sort=lastViewedAt:desc&playlistType=video,audio                                                                                                                                                                                                                                                                                                                                                                                         |
| `title`                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Recent Playlists                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `type`                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | playlist                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| `hubIdentifier`                                                                                                                                                                                                                                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | home.playlists                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| `context`                                                                                                                                                                                                                                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | hub.home.playlists                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| `size`                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?int*                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | 6                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| `more`                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?bool*                                                                                                                                                                                                                                                                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | true                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| `style`                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | shelf                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| `promoted`                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?bool*                                                                                                                                                                                                                                                                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | true                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| `metadata`                                                                                                                                                                                                                                                                                                                                                                                                                                                     | array<[\LukeHagar\Plex_API\Models\Operations\GetGlobalHubsMetadata](../../Models/Operations/GetGlobalHubsMetadata.md)>                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                             | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                            | [{"addedAt":1668779618,"composite":"/playlists/57070/composite/1668787730","duration":16873000,"guid":"com.plexapp.agents.none://9fee6c5b-3143-4923-813e-57bd0190056c","icon":"playlist://image.smart","key":"/playlists/57070/items","lastViewedAt":1668787732,"leafCount":3,"playlistType":"video","ratingKey":"57070","smart":false,"summary":"","title":"November Movie Day","titleSort":"Tracks","type":"playlist","updatedAt":1668787730,"viewCount":2}] |