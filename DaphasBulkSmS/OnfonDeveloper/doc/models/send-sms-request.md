
# Send SMS Request

## Structure

`SendSMSRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | `string` | Required | - | getTo(): string | setTo(string to): void |
| `from` | `string` | Required | - | getFrom(): string | setFrom(string from): void |
| `content` | `string` | Required | - | getContent(): string | setContent(string content): void |
| `dlr` | `string` | Required | - | getDlr(): string | setDlr(string dlr): void |
| `dlrUrl` | `string` | Required | - | getDlrUrl(): string | setDlrUrl(string dlrUrl): void |
| `dlrLevel` | `int` | Required | - | getDlrLevel(): int | setDlrLevel(int dlrLevel): void |

## Example (as JSON)

```json
{
  "to": "254716484395",
  "from": "EPLUG",
  "content": "no balance",
  "dlr": "yes",
  "dlr-url": "http://192.168.202.54/dlr_receiver.php",
  "dlr-level": 1
}
```

