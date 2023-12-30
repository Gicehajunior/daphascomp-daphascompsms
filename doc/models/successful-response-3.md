
# Successful Response 3

## Structure

`SuccessfulResponse3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `groupId` | `string` | Required | - | getGroupId(): string | setGroupId(string groupId): void |
| `groupName` | `string` | Required | - | getGroupName(): string | setGroupName(string groupName): void |
| `clientId` | `string` | Required | - | getClientId(): string | setClientId(string clientId): void |
| `client` | [`Client`](../../doc/models/client.md) | Required | - | getClient(): Client | setClient(Client client): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `parentId` | `string` | Required | - | getParentId(): string | setParentId(string parentId): void |
| `contacts` | `int` | Required | - | getContacts(): int | setContacts(int contacts): void |
| `updateDate` | `string` | Required | - | getUpdateDate(): string | setUpdateDate(string updateDate): void |
| `createDate` | `string` | Required | - | getCreateDate(): string | setCreateDate(string createDate): void |

## Example (as JSON)

```json
{
  "groupId": "27",
  "groupName": "Test group",
  "clientId": "1",
  "client": {
    "clientId": "1",
    "clientNames": "Root User",
    "clientStatus": "ACTIVE"
  },
  "description": "",
  "parentId": "",
  "contacts": 0,
  "updateDate": "2022-10-04T08:53:10Z",
  "createDate": "2022-10-04T08:53:10Z"
}
```

