
# Non Existing Group Exception

## Structure

`NonExistingGroupException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `int` | Required | - | getCode(): int | setCode(int code): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `details` | `string[]` | Required | - | getDetails(): array | setDetails(array details): void |

## Example (as JSON)

```json
{
  "code": 5,
  "message": "group with id 1 does not exist",
  "details": []
}
```

