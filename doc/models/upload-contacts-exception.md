
# Upload Contacts Exception

## Structure

`UploadContactsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | `string` | Required | - | getError(): string | setError(string error): void |

## Example (as JSON)

```json
{
  "error": "Upload contact failed - failed to authorize request: rpc error: code = Unauthenticated desc = invalid auth token: rpc error: code = Unauthenticated desc = failed to parse token with claims: token is expired by 15s"
}
```

