# Senderid

A `Sender ID` is an alphabetic name that identifies the sender of an SMS message.

When you send an SMS message using a `Sender ID`, and the recipient is in an area where `Sender ID` authentication is supported, your `Sender ID` appears on the recipient’s device instead of a phone number.

A `Sender ID` provides SMS recipients with more information about the sender than a phone number, long code, or short code provides.

Alphanumeric `Sender ID`s may be up to 11 characters long. Accepted characters include both `upper-` and `lower-case` Ascii letters, the digits 0 through 9, and the space character.

```php
$senderidController = $client->getSenderidController();
```

## Class Name

`SenderidController`

## Methods

* [Request Sender Id](../../doc/controllers/senderid.md#request-sender-id)
* [View Sender Ids](../../doc/controllers/senderid.md#view-sender-ids)
* [Get Sender Id](../../doc/controllers/senderid.md#get-sender-id)


# Request Sender Id

To request for a `Sender ID`, send `HTTP POST` request to the following endpoints:

> Endpoint: /v2/onfonapps/senderids

After requesting for the `Sender ID`, the request will be submitted for approval, and Business team will contact you for further processing.

###### API Request

```
{
	"senderId": {
		"senderValue": "COOL_NAME",
		"purpose": "To share receipts of transactions, order stats, confirmations for purchase.com"
	}
}
```

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field           | Type                | Description                                                                      |
| --------------- | ------------------- | -------------------------------------------------------------------------------- |
| **senderValue** | `String` `Required` | Sender id value. E.g `COOL_NAME`                                                 |
| **purpose**     | `String` `Required` | The purpose of the sender id. Give description on how the sender id will be used |

###### API Response

```
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
		"clientName": "",
		"mainAccount": "",
		"accountType": "",
		"contactFname": "",
		"contactLname": "",
		"clientStatus": ""
	},
	"createDate": "2022-10-04T10:44:38Z",
	"updatedDate": "2022-10-04T10:44:38Z"
}
```

```php
function requestSenderId(RequestSenderIdRequest $body): Successful6
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RequestSenderIdRequest`](../../doc/models/request-sender-id-request.md) | Body, Required | - |

## Response Type

[`Successful6`](../../doc/models/successful-6.md)

## Example Usage

```php
$body_senderId_senderValue = 'COOL_NAME';
$body_senderId_clientId = '1';
$body_senderId_purpose = 'just for test';
$body_senderId = new Models\SenderId(
    $body_senderId_senderValue,
    $body_senderId_clientId,
    $body_senderId_purpose
);
$body = new Models\RequestSenderIdRequest(
    $body_senderId
);

$result = $senderidController->requestSenderId($body);
```

## Example Response *(as JSON)*

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
    "clientName": "",
    "mainAccount": "",
    "accountType": "",
    "contactFname": "",
    "contactLname": "",
    "clientStatus": ""
  },
  "createDate": "2022-10-04T10:44:38Z",
  "updatedDate": "2022-10-04T10:44:38Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 429 | Too Many Requests | [`AlreadyRequestedException`](../../doc/models/already-requested-exception.md) |


# View Sender Ids

Retrieves a collection of requested sender ids.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/senderids

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the following parameters as `Query Strings` when calling the endpoint

| Description                                                                                                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum value is `200`; values above `200` will be coerced to `200`. |
| **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must match the call that provided the page token.                 |
| **filter.status** `Enum String` `Optional` <br>When set, it will only retrieve `Sender Ids` with the given status. Allowed values are `PENDING_APPROVAL`, `APPROVED`,`READY_FOR_SENDING`,`REJECTED`,`INACTIVE`                                                   |

###### API Response

```
{
	"nextPageToken": "OQ==",
	"senderIds": [
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
	],
	"collectionCount": 2
}
```

```php
function viewSenderIds(int $pageSize, string $pageToken): Successful7
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | - |
| `pageToken` | `string` | Query, Required | - |

## Response Type

[`Successful7`](../../doc/models/successful-7.md)

## Example Usage

```php
$pageSize = 1;
$pageToken = 'pageToken2';

$result = $senderidController->viewSenderIds($pageSize, $pageToken);
```

## Example Response *(as JSON)*

```json
{
  "nextPageToken": "OQ==",
  "senderIds": [
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
  ],
  "collectionCount": 2
}
```


# Get Sender Id

Retrieves a single `Sender ID` resource.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/senderids/{senderId}

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field        | Type                | Description                     |
| ------------ | ------------------- | ------------------------------- |
| **senderId** | `Number` `Required` | Sender id `id` after requesting |

###### API Response

```
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
		"clientName": "Names",
		"mainAccount": "account",
		"accountType": "bal",
		"contactFname": "FName",
		"contactLname": "LName",
		"clientStatus": "ACTIVE"
	},
	"createDate": "2022-10-04T10:44:38Z",
	"updatedDate": "2022-10-04T10:44:38Z"
}
```

```php
function getSenderId(): Successful6
```

## Response Type

[`Successful6`](../../doc/models/successful-6.md)

## Example Usage

```php
$result = $senderidController->getSenderId();
```

## Example Response *(as JSON)*

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
    "clientName": "Names",
    "mainAccount": "account",
    "accountType": "bal",
    "contactFname": "FName",
    "contactLname": "LName",
    "clientStatus": "ACTIVE"
  },
  "createDate": "2022-10-04T10:44:38Z",
  "updatedDate": "2022-10-04T10:44:38Z"
}
```

