# CreatePlaylistRequest


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `title`                                                                | *string*                                                               | :heavy_check_mark:                                                     | name of the playlist                                                   |
| `type`                                                                 | [Operations\QueryParamType](../../Models/Operations/QueryParamType.md) | :heavy_check_mark:                                                     | type of playlist to create                                             |
| `smart`                                                                | [Operations\Smart](../../Models/Operations/Smart.md)                   | :heavy_check_mark:                                                     | whether the playlist is smart or not                                   |
| `uri`                                                                  | *string*                                                               | :heavy_check_mark:                                                     | the content URI for the playlist                                       |
| `playQueueID`                                                          | *?float*                                                               | :heavy_minus_sign:                                                     | the play queue to copy to a playlist                                   |