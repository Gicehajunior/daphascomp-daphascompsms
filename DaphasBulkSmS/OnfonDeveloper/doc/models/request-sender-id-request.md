
# Request Sender Id Request

## Structure

`RequestSenderIdRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `senderId` | [`SenderId`](../../doc/models/sender-id.md) | Required | - | getSenderId(): SenderId | setSenderId(SenderId senderId): void |

## Example (as JSON)

```json
{
  "senderId": {
    "senderValue": "COOL_NAME",
    "clientId": "1",
    "purpose": "just for test"
  }
}
```

