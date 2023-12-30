# Balance Send SMS

```php
$balanceSendSMSController = $client->getBalanceSendSMSController();
```

## Class Name

`BalanceSendSMSController`

## Methods

* [Send SMS](../../doc/controllers/balance-send-sms.md#send-sms)
* [Check Balance](../../doc/controllers/balance-send-sms.md#check-balance)


# Send SMS

Send SMS through your application by making a `HTTP POST` request to the following endpoints:

> Endpoint: /v2_send

## Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- |
| **to** `String` `Required` <br>Destination phone number, only one phone is supported at the moment                                    |
| **from** `String` `Required` <br>Sender Id or Sender Name sending out the message.                                                    |
| **content** `String` `Required` <br>The message to be sent.                                                                           |
| **dlr-url** `String` `Optional` <br>URL to receive dlr (delivery receipt).                                                            |
| **dlr-method** `String` `Optional` <br>The DLR is transmitted through http to a third party application using `GET` or `POST` method. |

<!-- | **dlr-level** `Integer` `Optional` <br> Priority of the level. Possible values are `1` to enable and `0` to disable. The default value is `1` | -->
## Api Response

`{ "message_id": "61854a56-75be-4342-8831-9a16a4fa06e6" }`

```php
function sendSMS(SendSMSRequest $body): SuccessfulResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SendSMSRequest`](../../doc/models/send-sms-request.md) | Body, Required | - |

## Response Type

[`SuccessfulResponse`](../../doc/models/successful-response.md)

## Example Usage

```php
$body_to = 'phone-number';
$body_from = 'sender-id';
$body_content = 'message content to send';
$body_dlr = 'yes';
$body_dlrUrl = 'http://192.168.202.54/dlr_receiver.php';
$body_dlrLevel = 1;
$body = new Models\SendSMSRequest(
    $body_to,
    $body_from,
    $body_content,
    $body_dlr,
    $body_dlrUrl,
    $body_dlrLevel
);

$result = $balanceSendSMSController->sendSMS($body);
```

## Example Response *(as JSON)*

```json
{
  "message_id": "61854a56-75be-4342-8831-9a16a4fa06e6"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`NotRegisteredSourceException`](../../doc/models/not-registered-source-exception.md) |
| 401 | Unauthorized | [`FailedAuthorizationException`](../../doc/models/failed-authorization-exception.md) |
| 403 | Forbidden | [`ZeroBalanceException`](../../doc/models/zero-balance-exception.md) |


# Check Balance

To check your account balance, send a request to the following endpoint with [Authorization header](/auth) already set.

#### With Basic Auth

> Authorization: Basic b25mb246IUBwYXMxMjM=

#### With Bearer Token

> Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

```php
function checkBalance(): SuccessfulResponse1
```

## Response Type

[`SuccessfulResponse1`](../../doc/models/successful-response-1.md)

## Example Usage

```php
$result = $balanceSendSMSController->checkBalance();
```

## Example Response *(as JSON)*

```json
{
  "balance": 0,
  "sms_count": 0
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`FailedAuthorizationException`](../../doc/models/failed-authorization-exception.md) |

