
# Sender Id 1

## Structure

`SenderId1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `senderValue` | `string` | Required | - | getSenderValue(): string | setSenderValue(string senderValue): void |
| `clientId` | `string` | Required | - | getClientId(): string | setClientId(string clientId): void |
| `purpose` | `string` | Required | - | getPurpose(): string | setPurpose(string purpose): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `statusText` | `string` | Required | - | getStatusText(): string | setStatusText(string statusText): void |
| `cost` | `int` | Required | - | getCost(): int | setCost(int cost): void |
| `isGeneric` | `bool` | Required | - | getIsGeneric(): bool | setIsGeneric(bool isGeneric): void |
| `client` | [`Client3`](../../doc/models/client-3.md) | Required | - | getClient(): Client3 | setClient(Client3 client): void |
| `createDate` | `string` | Required | - | getCreateDate(): string | setCreateDate(string createDate): void |
| `updatedDate` | `string` | Required | - | getUpdatedDate(): string | setUpdatedDate(string updatedDate): void |

## Example (as JSON)

```json
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
```

