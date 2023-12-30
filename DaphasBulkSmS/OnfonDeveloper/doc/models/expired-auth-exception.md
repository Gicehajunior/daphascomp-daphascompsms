
# Expired Auth Exception

## Structure

`ExpiredAuthException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `int` | Required | - | getCode(): int | setCode(int code): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `details` | `string[]` | Required | - | getDetails(): array | setDetails(array details): void |

## Example (as JSON)

```json
{
  "code": 16,
  "message": "invalid auth token: rpc error: code = Unauthenticated desc = failed to parse token with claims: token is expired by 27s",
  "details": []
}
```

