# GetSearchAllLibrariesPart


## Fields

| Field                                                                                                                | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          | Example                                                                                                              |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                 | *int*                                                                                                                | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  | 119542                                                                                                               |
| `key`                                                                                                                | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  | /library/parts/119542/1680457526/file.mkv                                                                            |
| `file`                                                                                                               | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  | /movies/Avatar The Way of Water (2022)/Avatar.The.Way.of.Water.2022.2160p.WEB-DL.DDP5.1.Atmos.DV.HDR10.HEVC-CMRG.mkv |
| `size`                                                                                                               | *int*                                                                                                                | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  | 36158371307                                                                                                          |
| `container`                                                                                                          | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | The container format of the media file.<br/>                                                                         | mkv                                                                                                                  |
| `duration`                                                                                                           | *?int*                                                                                                               | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | 11558112                                                                                                             |
| `audioProfile`                                                                                                       | *?string*                                                                                                            | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | dts                                                                                                                  |
| `has64bitOffsets`                                                                                                    | *?bool*                                                                                                              | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | false                                                                                                                |
| `optimizedForStreaming`                                                                                              | *?bool*                                                                                                              | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | false                                                                                                                |
| `videoProfile`                                                                                                       | *?string*                                                                                                            | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | main 10                                                                                                              |
| `indexes`                                                                                                            | *?string*                                                                                                            | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | sd                                                                                                                   |
| `hasThumbnail`                                                                                                       | [?Operations\GetSearchAllLibrariesHasThumbnail](../../Models/Operations/GetSearchAllLibrariesHasThumbnail.md)        | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  | 1                                                                                                                    |
| `stream`                                                                                                             | array<[Operations\GetSearchAllLibrariesStream](../../Models/Operations/GetSearchAllLibrariesStream.md)>              | :heavy_minus_sign:                                                                                                   | N/A                                                                                                                  |                                                                                                                      |