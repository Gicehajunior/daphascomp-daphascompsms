
# Successful 7

## Structure

`Successful7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextPageToken` | `string` | Required | - | getNextPageToken(): string | setNextPageToken(string nextPageToken): void |
| `senderIds` | [`SenderId1[]`](../../doc/models/sender-id-1.md) | Required | - | getSenderIds(): array | setSenderIds(array senderIds): void |
| `collectionCount` | `int` | Required | - | getCollectionCount(): int | setCollectionCount(int collectionCount): void |

## Example (as JSON)

```json
{
  "nextPageToken": "OQ==",
  "senderIds": [
    {
      "id": "9",
      "senderValue": "COOL_NAME",
      "clientId": "3",
      "purpose": "just for test",
      "status": "PENDING_APPROVAL",
      "statusText": "",
      "cost": 0,
      "isGeneric": false,
      "client": {
        "clientName": "Gideon Kamau",
        "mainAccount": "gideoncredo",
        "accountType": "bal",
        "contactFname": "Gideon",
        "contactLname": "Kamau",
        "clientStatus": "ACTIVE"
      },
      "createDate": "2022-10-04T10:44:38Z",
      "updatedDate": "2022-10-04T10:44:38Z"
    }
  ],
  "collectionCount": 2
}
```

