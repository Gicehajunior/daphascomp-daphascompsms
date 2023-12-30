# Purchase

```php
$purchaseController = $client->getPurchaseController();
```

## Class Name

`PurchaseController`

## Methods

* [List Purchases](../../doc/controllers/purchase.md#list-purchases)
* [Get Purchase](../../doc/controllers/purchase.md#get-purchase)


# List Purchases

Retrieves a collection of account purchases.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/purchases

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the following parameters as `Query Strings` when calling the endpoint

| Description                                                                                                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum value is `200`; values above `200` will be coerced to `200`. |
| **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must match the call that provided the page token.                 |

###### API Response

```
{
	"purchases": [
		{
			"purchaseId": "14",
			"clientId": "3",
			"client": {
				"clientId": "3",
				"clientNames": "Account Name",
				"clientStatus": "ACTIVE"
			},
			"paymentType": "MPESA",
			"paymentAmount": 10,
			"paymentValue": 14.29,
			"rate": 0.7,
			"paymentCurrency": "KSH",
			"transactionReference": "QK77Gxxxx",
			"comments": "The service request is processed successfully.",
			"processed": true,
			"processedDate": "2022-11-07T13:18:35Z",
			"purchaseType": "CREDIT",
			"paymentStatus": "SUCCESS",
			"statusDescription": "Successfully credited buyer",
			"balanceBefore": 28,
			"balanceAfter": 42.29,
			"sellerDeduected": false,
			"unitsLoaded": true,
			"createDate": "2022-11-07T13:18:35Z"
		}
	],
	"nextPageToken": "",
	"collectionCount": 14
}
```

```php
function listPurchases(): void
```

## Response Type

`void`

## Example Usage

```php
$purchaseController->listPurchases();
```


# Get Purchase

Retrieves a single `Purchase` resource.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/purchases/{purchase_id}

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field           | Type                | Description                         |
| --------------- | ------------------- | ----------------------------------- |
| **purchase_id** | `Number` `Required` | Purchase id to get more information |

###### API Response

```
{
	"purchaseId": "14",
	"clientId": "3",
	"client": {
		"clientId": "3",
		"clientNames": "Account Name",
		"clientStatus": "ACTIVE"
	},
	"paymentType": "MPESA",
	"paymentAmount": 10,
	"paymentValue": 14.29,
	"rate": 0.7,
	"paymentCurrency": "KSH",
	"transactionReference": "QK77Gxxxx",
	"comments": "The service request is processed successfully.",
	"processed": true,
	"processedDate": "2022-11-07T13:18:35Z",
	"purchaseType": "CREDIT",
	"paymentStatus": "SUCCESS",
	"statusDescription": "Successfully credited buyer",
	"balanceBefore": 28,
	"balanceAfter": 42.29,
	"sellerDeduected": false,
	"unitsLoaded": true,
	"createDate": "2022-11-07T13:18:35Z"
}
```

```php
function getPurchase(string $purchaseId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `purchaseId` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$purchaseId = 'purchase_id0';

$purchaseController->getPurchase($purchaseId);
```

