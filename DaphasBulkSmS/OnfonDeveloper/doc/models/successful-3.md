
# Successful 3

## Structure

`Successful3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contactId` | `string` | Required | - | getContactId(): string | setContactId(string contactId): void |
| `clientId` | `string` | Required | - | getClientId(): string | setClientId(string clientId): void |
| `client` | [`Client`](../../doc/models/client.md) | Required | - | getClient(): Client | setClient(Client client): void |
| `phone` | `string` | Required | - | getPhone(): string | setPhone(string phone): void |
| `names` | `string` | Required | - | getNames(): string | setNames(string names): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `groupId` | `string` | Required | - | getGroupId(): string | setGroupId(string groupId): void |
| `group` | [`Group2`](../../doc/models/group-2.md) | Required | - | getGroup(): Group2 | setGroup(Group2 group): void |
| `createDate` | `string` | Required | - | getCreateDate(): string | setCreateDate(string createDate): void |
| `updateDate` | `string` | Required | - | getUpdateDate(): string | setUpdateDate(string updateDate): void |

## Example (as JSON)

```json
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
}
```

