# Authentication

```php
$authenticationController = $client->getAuthenticationController();
```

## Class Name

`AuthenticationController`


# Authorization

```php
function authorization(AuthorizationRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AuthorizationRequest`](../../doc/models/authorization-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_apiUsername = 'username';
$body_apiPassword = 'apiPass';
$body = new Models\AuthorizationRequest(
    $body_apiUsername,
    $body_apiPassword
);

$authenticationController->authorization($body);
```

