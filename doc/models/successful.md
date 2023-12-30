
# Successful

## Structure

`Successful`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextPageToken` | `string` | Required | - | getNextPageToken(): string | setNextPageToken(string nextPageToken): void |
| `groups` | [`Group1[]`](../../doc/models/group-1.md) | Required | - | getGroups(): array | setGroups(array groups): void |
| `collectionCount` | `int` | Required | - | getCollectionCount(): int | setCollectionCount(int collectionCount): void |

## Example (as JSON)

```json
{
  "nextPageToken": "MjY=",
  "groups": [
    {
      "groupId": "27",
      "groupName": "Test group",
      "clientId": "1",
      "client": null,
      "description": "",
      "parentId": "",
      "contacts": 0,
      "updateDate": "2022-10-04T08:53:10Z",
      "createDate": "2022-10-04T08:53:10Z"
    },
    {
      "groupId": "26",
      "groupName": "Test group",
      "clientId": "1",
      "client": null,
      "description": "",
      "parentId": "",
      "contacts": 0,
      "updateDate": "2022-10-04T08:40:07Z",
      "createDate": "2022-10-04T08:40:07Z"
    }
  ],
  "collectionCount": 5
}
```

