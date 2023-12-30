
# Wrong Group Id Exception

## Structure

`WrongGroupIdException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `int` | Required | - | getCode(): int | setCode(int code): void |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `details` | `string[]` | Required | - | getDetails(): array | setDetails(array details): void |

## Example (as JSON)

```json
{
  "code": 3,
  "message": "type mismatch, parameter: group_id, error: strconv.ParseUint: parsing \"27a\": invalid syntax",
  "details": []
}
```

