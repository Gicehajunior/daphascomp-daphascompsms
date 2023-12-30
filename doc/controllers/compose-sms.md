# Compose SMS

```php
$composeSMSController = $client->getComposeSMSController();
```

## Class Name

`ComposeSMSController`

## Methods

* [Import Contacts](../../doc/controllers/compose-sms.md#import-contacts)
* [Compose SMS](../../doc/controllers/compose-sms.md#compose-sms)
* [Start Sending](../../doc/controllers/compose-sms.md#start-sending)
* [List Mt Messages](../../doc/controllers/compose-sms.md#list-mt-messages)
* [List MO Messages](../../doc/controllers/compose-sms.md#list-mo-messages)
* [Send From File Step 1](../../doc/controllers/compose-sms.md#send-from-file-step-1)
* [Send From File Step 2](../../doc/controllers/compose-sms.md#send-from-file-step-2)
* [Send From File Step 3](../../doc/controllers/compose-sms.md#send-from-file-step-3)
* [Send From File Preview](../../doc/controllers/compose-sms.md#send-from-file-preview)


# Import Contacts

This API tells you how many contacts are in given file.

Send `HTTP POST` request to the following endpoints:

> Testing: https://sandbox.onfonmedia.co.ke}/v1/onfonapps/sms:importContact
> Production: https://apis.onfonmedia.co.ke}/v1/onfonapps/sms:importContact

This API does not save the data on the server:

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the API allows following parameters to be passed as `Form Data` when calling the endpoint

| Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- |
| **file** `File` `Required` <br>The file containing contacts to import. The allowed file formats are `.csv` and `.xlsx` |

###### API Response

```
{
	"totalRows": 1256,
    "fileName": "UsersFile.csv"
}
```

```php
function importContacts(string $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `string` | Form, Required | File containing contacts |

## Response Type

`void`

## Example Usage

```php
$file = 'file0';

$composeSMSController->importContacts($file);
```


# Compose SMS

This API tells lets you compose SMS that will be sent to destination(s)

Send `HTTP POST` request to the following endpoints:

> Testing: https://sandbox.onfonmedia.co.ke}/v1/onfonapps/sms:compose
> Production: https://apis.onfonmedia.co.ke}/v1/onfonapps/sms:compose

This API will save the data on the server in a `transactional` manner.

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the API allows following parameters to be passed as `Form Data` when calling the endpoint

| Description                                                                                                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **file** `File` `Optional` <br>The file containing `msisdn` destinations. The allowed file formats are `.csv` and `.xlsx`                                                                                                                  |
| **fileExists** `String` `Optional` <br>The allowed values are `YES` and `NO`. If the value is `YES`, then the server will read from **file** above. If you pass any other value other than `YES`, the server will not read from the _file_ |
| **message** `String` `Required` <br>The message that is to be sent. You can create a message with tenmplates, which in that case will be read and parsed from _file_ param                                                                 |
| **senderName** `Aphanumeric` `Required` <br>The `sender id` or `shortcode` to be used                                                                                                                                                      |
| **senderName** `Aphanumeric` `Required` <br>The `sender id` or `shortcode` to be used                                                                                                                                                      |
| **campaignName** `String` `Required` <br>The name that will identify the campaign.                                                                                                                                                         |
| **campaignDescription** `String` `Optional` <br>The description for the campaign.                                                                                                                                                          |
| **contacts** `String` `Optional` <br>Comma separate phone numbers (msisn) to receive the message.                                                                                                                                          |
| **groupIds** `Int` `Optional` <br>Comma separate contact `group ids`. The `contacts` belonging to the `group ids` will receive the message.                                                                                                |
| **removeDuplicate** `String` `Optional` <br>The allowed values are `YES` and `NO`. If the value is `YES`, then duplicates `msisdn` will be removed, if `NO` then will send to all `msisdn`s even if there are duplicates                   |
| **removeDuplicate** `String` `Optional` <br>The allowed values are `YES` and `NO`. If the value is `YES`, then duplicates `msisdn` will be removed, if `NO` then will send to all `msisdn`s even if there are duplicates                   |
| **schedule** `String` `Optional` <br>The allowed values are `YES` and `NO`. If the value is `YES`, then message will be scheduled and `scheduleUTCSeconds` param _must_ be passed                                                          |
| **scheduleUTCSeconds** `Number` `Optional` <br>Future UTC Unix timestamp in seconds when message will be sent                                                                                                                              |

###### API Response

```
{
	"totalRows": 1256,
    "fileName": "UsersFile.csv"
}
```

```php
function composeSMS(
    string $file,
    string $fileExists,
    string $message,
    string $senderName,
    string $campaignName,
    string $campaignDescription,
    int $contacts,
    string $groupIds,
    string $removeDuplicate,
    string $flash,
    string $schedule,
    int $scheduleUTCSeconds
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `string` | Form, Required | if fileExists is YES, then this field is mandatory |
| `fileExists` | `string` | Form, Required | YES or NO (Not mandatory) |
| `message` | `string` | Form, Required | Message body |
| `senderName` | `string` | Form, Required | The `sender id` or `shortcode` to be |
| `campaignName` | `string` | Form, Required | name of campaign to be created |
| `campaignDescription` | `string` | Form, Required | description of campaign to be created |
| `contacts` | `int` | Form, Required | phone numbers comma separated |
| `groupIds` | `string` | Form, Required | group ids comma separated |
| `removeDuplicate` | `string` | Form, Required | YES or NO |
| `flash` | `string` | Form, Required | YES or NO |
| `schedule` | `string` | Form, Required | if YES then utcTimestampSeconds is required |
| `scheduleUTCSeconds` | `int` | Form, Required | Future UTC time in seconds |

## Response Type

`void`

## Example Usage

```php
$file = 'file0';
$fileExists = 'NO';
$message = 'Sep 7 2022 is such a beutiful day';
$senderName = 'gideon';
$campaignName = 'Aug2022';
$campaignDescription = 'Another test campaign';
$contacts = 254700000000;
$groupIds = 'groupIds4';
$removeDuplicate = 'YES';
$flash = 'NO';
$schedule = 'NO';
$scheduleUTCSeconds = 1655107192;

$composeSMSController->composeSMS($file, $fileExists, $message, $senderName, $campaignName, $campaignDescription, $contacts, $groupIds, $removeDuplicate, $flash, $schedule, $scheduleUTCSeconds);
```


# Start Sending

```php
function startSending(StartSendingRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`StartSendingRequest`](../../doc/models/start-sending-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_campaignId = '{{campaignId}}';
$body = new Models\StartSendingRequest(
    $body_campaignId
);

$composeSMSController->startSending($body);
```


# List Mt Messages

```php
function listMtMessages(int $pageSize, string $pageToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | - |
| `pageToken` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$pageSize = 5;
$pageToken = 'pageToken2';

$composeSMSController->listMtMessages($pageSize, $pageToken);
```


# List MO Messages

```php
function listMOMessages(int $pageSize, string $pageToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | - |
| `pageToken` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$pageSize = 100;
$pageToken = 'pageToken2';

$composeSMSController->listMOMessages($pageSize, $pageToken);
```


# Send From File Step 1

```php
function sendFromFileStep1(string $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `string` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$file = 'file0';

$composeSMSController->sendFromFileStep1($file);
```


# Send From File Step 2

```php
function sendFromFileStep2(
    string $message,
    string $senderName,
    string $uploadId,
    string $campaignName,
    string $msisdnField
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `message` | `string` | Form, Required | - |
| `senderName` | `string` | Form, Required | - |
| `uploadId` | `string` | Form, Required | - |
| `campaignName` | `string` | Form, Required | - |
| `msisdnField` | `string` | Form, Required | - |

## Response Type

`void`

## Example Usage

```php
$message = 'Hello ##MobileNumber##. Your order ##Order##, please pay ##Amount##';
$senderName = 'Onfon';
$uploadId = '{{uploadId}}';
$campaignName = 'T234';
$msisdnField = 'MobileNumber';

$composeSMSController->sendFromFileStep2($message, $senderName, $uploadId, $campaignName, $msisdnField);
```


# Send From File Step 3

```php
function sendFromFileStep3(SendFromFileStep3Request $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SendFromFileStep3Request`](../../doc/models/send-from-file-step-3-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_campaignId = '{{campaignId}}';
$body = new Models\SendFromFileStep3Request(
    $body_campaignId
);

$composeSMSController->sendFromFileStep3($body);
```


# Send From File Preview

```php
function sendFromFilePreview(string $message, int $uploadId, string $msisdnField): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `message` | `string` | Query, Required | - |
| `uploadId` | `int` | Query, Required | - |
| `msisdnField` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$message = 'Hello ##MobileNumber##. Your order ##Order##, please pay ##Amount##';
$uploadId = 73;
$msisdnField = 'MobileNumber';

$composeSMSController->sendFromFilePreview($message, $uploadId, $msisdnField);
```

