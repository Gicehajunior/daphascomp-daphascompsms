
# Successful 2

## Structure

`Successful2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextPageToken` | `string` | Required | - | getNextPageToken(): string | setNextPageToken(string nextPageToken): void |
| `contacts` | [`Contact1[]`](../../doc/models/contact-1.md) | Required | - | getContacts(): array | setContacts(array contacts): void |
| `collectionCount` | `int` | Required | - | getCollectionCount(): int | setCollectionCount(int collectionCount): void |

## Example (as JSON)

```json
{
  "nextPageToken": "MTkzOTA0ODY=",
  "contacts": [
    {
      "contactId": "19390487",
      "clientId": "3",
      "client": {
        "clientId": "3",
        "clientNames": "John Doe",
        "clientStatus": "ACTIVE"
      },
      "phone": "254716000000",
      "names": "",
      "email": "",
      "groupId": "29",
      "group": {
        "groupId": "29",
        "groupName": "Test group"
      },
      "createDate": "2022-10-04T09:59:24Z",
      "updateDate": "2022-10-04T09:59:24Z"
    },
    {
      "contactId": "19390486",
      "clientId": "3",
      "client": {
        "clientId": "3",
        "clientNames": "John Doe",
        "clientStatus": "ACTIVE"
      },
      "phone": "254716484395",
      "names": "",
      "email": "",
      "groupId": "29",
      "group": {
        "groupId": "29",
        "groupName": "Test group"
      },
      "createDate": "2022-10-04T09:58:21Z",
      "updateDate": "2022-10-04T09:58:21Z"
    }
  ],
  "collectionCount": 3
}
```

