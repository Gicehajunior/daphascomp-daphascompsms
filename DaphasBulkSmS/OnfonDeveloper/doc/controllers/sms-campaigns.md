# SMS Campaigns

```php
$sMSCampaignsController = $client->getSMSCampaignsController();
```

## Class Name

`SMSCampaignsController`

## Methods

* [List Campaigns](../../doc/controllers/sms-campaigns.md#list-campaigns)
* [Get Campaign](../../doc/controllers/sms-campaigns.md#get-campaign)
* [Delete Campaign](../../doc/controllers/sms-campaigns.md#delete-campaign)


# List Campaigns

Retrieves a collection of SMS campaigns.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/campaigns

`SMS Campains` will be in one of the following statuses:

[`PENDING`, `WAITING`, `PROCESSING`, `WAITING_SCHEDULE_TIME`, `RUNNING`, `PAUSED`, `FAILED`, `CANCELLED`, `COMPLETED`]

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the following parameters as `Query Strings` when calling the endpoint

| Description                                                                                                                                                                                                                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum value is `200`; values above `200` will be coerced to `200`.                                                                                        |
| **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must match the call that provided the page token.                                                                                                        |
| **filter.is_scheduled** `Boolean` `Optional` <br>When set to `true`, the service will only return campaigns that were scheduled.                                                                                                                                                                                                                        |
| **filter.create_start_timestamp** `Boolean` `Optional` <br>The value is UTC UNIX timestamp is seconds. When set to a value greater than zero, the service will fetch campaigns that were created after the specified timestamp.                                                                                                                         |
| **filter.create_end_timestamp** `Boolean` `Optional` <br>The value is UTC UNIX timestamp is seconds. When set to a value greater than zero, the service will fetch campaigns that were created before the specified timestamp.                                                                                                                          |
| **filter.statuses** `Boolean` `Optional` <br>Allowed values are `[PENDING, WAITING, PROCESSING, WAITING_SCHEDULE_TIME, RUNNING, PAUSED, FAILED, CANCELLED, COMPLETED]`. When the value is set, the service will only return campaigns that _match_ the given status. You can set this value multiple times in case you want to fetch multiple statuses. |

###### API Response

```
{
	"nextPageToken": "",
	"campaigns": [
		{
			"campaignId": "5",
			"clientId": "1",
			"senderName": "mysender",
			"campaignName": "Aug2022",
			"campaignDescription": "Another test campaign",
			"campaignMessage": "Sep 7 2022 is such a beutiful day",
			"campaignStatus": "COMPLETED",
			"schedule": false,
			"startDateUtcSeconds": "0",
			"recuring": false,
			"recurInterval": "RECUR_INTERVAL_UNSPECIFIED",
			"recurFrequency": 0,
			"totalSms": "1000002",
			"totalDelivery": "0",
			"totalPhones": "1000002",
			"totalCost": 1999998,
			"createDateUtc": "2022-10-11T09:35:35Z",
			"updateDateUtc": "2022-10-11T09:47:22Z",
			"longRunningId": "11",
			"campaignSummary": [],
			"previews": [],
			"uploadType": "CONTACTS_AND_GROUPS",
			"groupIds": [],
			"fileIds": []
		}
	],
	"collectionCount": 1
}
```

```php
function listCampaigns(int $pageSize, string $pageToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | The size of returned resource |
| `pageToken` | `string` | Query, Required | Like page number |

## Response Type

`void`

## Example Usage

```php
$pageSize = 2;
$pageToken = 'pageToken2';

$sMSCampaignsController->listCampaigns($pageSize, $pageToken);
```


# Get Campaign

Retrieves a single SMS campaign.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v1/onfonapps/campaigns/{campaignId}

###### API Response

```
{
    "campaignId": "5",
    "clientId": "1",
    "senderName": "mysender",
    "campaignName": "Aug2022",
    "campaignDescription": "Another test campaign",
    "campaignMessage": "Sep 7 2022 is such a beutiful day",
    "campaignStatus": "COMPLETED",
    "schedule": false,
    "startDateUtcSeconds": "0",
    "recuring": false,
    "recurInterval": "RECUR_INTERVAL_UNSPECIFIED",
    "recurFrequency": 0,
    "totalSms": "1000002",
    "totalDelivery": "0",
    "totalPhones": "1000002",
    "totalCost": 1999998,
    "createDateUtc": "2022-10-11T09:35:35Z",
    "updateDateUtc": "2022-10-11T09:47:22Z",
    "longRunningId": "11",
    "campaignSummary": [],
    "previews": [],
    "uploadType": "CONTACTS_AND_GROUPS",
    "groupIds": [],
    "fileIds": []
}
```

```php
function getCampaign(): void
```

## Response Type

`void`

## Example Usage

```php
$sMSCampaignsController->getCampaign();
```


# Delete Campaign

Removes a `SMS campaign` resource from the server.

Send `HTTP DELETE` request to the following endpoints:

> Endpoint: /v1/onfonapps/campaigns/{campaignId}

It is only possible to delete campaigns with status of `PENDING`. Campaigns with a different status will not removed.

###### API Response

```
{}
```

```php
function deleteCampaign(string $campaignId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `campaignId` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$campaignId = 'campaignId0';

$sMSCampaignsController->deleteCampaign($campaignId);
```

