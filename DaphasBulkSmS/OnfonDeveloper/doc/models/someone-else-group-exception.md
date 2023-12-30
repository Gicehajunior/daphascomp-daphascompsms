
# Someone Else Group Exception

## Structure

`SomeoneElseGroupException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `int` | Required | - | getCode(): int | setCode(int code): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `details` | `string[]` | Required | - | getDetails(): array | setDetails(array details): void |

## Example (as JSON)

```json
{
  "code": 7,
  "message": "not allowed to get group resource",
  "details": []
}
```

