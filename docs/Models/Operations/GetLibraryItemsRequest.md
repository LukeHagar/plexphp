# GetLibraryItemsRequest


## Fields

| Field                                                 | Type                                                  | Required                                              | Description                                           | Example                                               |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `sectionId`                                           | *mixed*                                               | :heavy_check_mark:                                    | the Id of the library to query                        |                                                       |
| `tag`                                                 | [Operations\Tag](../../Models/Operations/Tag.md)      | :heavy_check_mark:                                    | A key representing a specific tag within the section. |                                                       |
| `includeGuids`                                        | *?int*                                                | :heavy_minus_sign:                                    | Adds the Guids object to the response<br/>            | 1                                                     |