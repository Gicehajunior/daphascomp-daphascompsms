# Contacts

APIs for managing **group contacts**

Allows CRUD operations to contacts.

```php
$contactsController = $client->getContactsController();
```

## Class Name

`ContactsController`

## Methods

* [Create Contact](../../doc/controllers/contacts.md#create-contact)
* [List Contacts](../../doc/controllers/contacts.md#list-contacts)
* [Get Contact](../../doc/controllers/contacts.md#get-contact)
* [Delete Contact](../../doc/controllers/contacts.md#delete-contact)
* [Update Contact](../../doc/controllers/contacts.md#update-contact)
* [Upload Contacts](../../doc/controllers/contacts.md#upload-contacts)


# Create Contact

Tp create a `contact`. Send `HTTP POST` request to the following endpoints:

> Endpoint: /v2/onfonapps/contacts

###### API Request

```
{
	"contact": {
		"phone": "254700000000",
        "names": "John Does"
		"groupId": "2"
	}
}
```

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field       | Type                | Description                                   |
| ----------- | ------------------- | --------------------------------------------- |
| **phone**   | `String` `Required` | Contact Phone                                 |
| **names**   | `String` `Optional` | The contact names                             |
| **email**   | `String` `Optional` | The contact email                             |
| **groupId** | `Number` `Required` | The group id where the contact will belong to |

###### API Response

```
{
	"contactId": "19390485",
	"clientId": "3",
	"client": null,
	"phone": "254700000000",
	"names": "",
	"email": "",
	"groupId": "2",
	"group": null,
	"createDate": "2022-10-04T09:11:02Z",
	"updateDate": "2022-10-04T09:11:02Z"
}
```

```php
function createContact(CreateContactRequest $body): Successful1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateContactRequest`](../../doc/models/create-contact-request.md) | Body, Required | - |

## Response Type

[`Successful1`](../../doc/models/successful-1.md)

## Example Usage

```php
$body_contact_phone = '254716000000';
$body_contact_groupId = '29';
$body_contact = new Models\Contact(
    $body_contact_phone,
    $body_contact_groupId
);
$body = new Models\CreateContactRequest(
    $body_contact
);

$result = $contactsController->createContact($body);
```

## Example Response *(as JSON)*

```json
{
  "contactId": "19390485",
  "clientId": "3",
  "client": null,
  "phone": "254716000000",
  "names": "",
  "email": "",
  "groupId": "2",
  "group": null,
  "createDate": "2022-10-04T09:11:02Z",
  "updateDate": "2022-10-04T09:11:02Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`SessionExpiredException`](../../doc/models/session-expired-exception.md) |
| 403 | Forbidden | [`SomeoneElseGroupException`](../../doc/models/someone-else-group-exception.md) |


# List Contacts

Retrieves a collection of user contacts.

Send `HTTP GET` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/contacts

###### API Response

```
{
	"nextPageToken": "MTkzOTA0ODc=",
	"contacts": [
		{
			"contactId": "19390487",
			"clientId": "3",
			"client": {
				"clientId": "3",
				"clientNames": "John Doe",
				"clientStatus": "ACTIVE"
			},
			"phone": "254716000000",
			"names": "",
			"email": "",
			"groupId": "29",
			"group": {
				"groupId": "29",
				"groupName": "Test group"
			},
			"createDate": "2022-10-04T09:59:24Z",
			"updateDate": "2022-10-04T09:59:24Z"
		}
	],
	"collectionCount": 3
}
```

```php
function listContacts(int $pageSize): Successful2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | - |

## Response Type

[`Successful2`](../../doc/models/successful-2.md)

## Example Usage

```php
$pageSize = 2;

$result = $contactsController->listContacts($pageSize);
```

## Example Response *(as JSON)*

```json
{
  "nextPageToken": "MTkzOTA0ODY=",
  "contacts": [
    {
      "contactId": "19390487",
      "clientId": "3",
      "client": {
        "clientId": "3",
        "clientNames": "John Doe",
        "clientStatus": "ACTIVE"
      },
      "phone": "254716000000",
      "names": "",
      "email": "",
      "groupId": "29",
      "group": {
        "groupId": "29",
        "groupName": "Test group"
      },
      "createDate": "2022-10-04T09:59:24Z",
      "updateDate": "2022-10-04T09:59:24Z"
    },
    {
      "contactId": "19390486",
      "clientId": "3",
      "client": {
        "clientId": "3",
        "clientNames": "John Doe",
        "clientStatus": "ACTIVE"
      },
      "phone": "254716484395",
      "names": "",
      "email": "",
      "groupId": "29",
      "group": {
        "groupId": "29",
        "groupName": "Test group"
      },
      "createDate": "2022-10-04T09:58:21Z",
      "updateDate": "2022-10-04T09:58:21Z"
    }
  ],
  "collectionCount": 3
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`IncorrectAuthException`](../../doc/models/incorrect-auth-exception.md) |


# Get Contact

Retrieves a single contact resource.

Send `HTTP GET` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/contacts/{contactId}

###### API Response

```
{
	"contactId": "19390487",
	"clientId": "3",
	"client": {
		"clientId": "3",
		"clientNames": "John Doe",
		"clientStatus": "ACTIVE"
	},
	"phone": "254716000000",
	"names": "",
	"email": "",
	"groupId": "29",
	"group": {
		"groupId": "29",
		"groupName": "Test group"
	},
	"createDate": "2022-10-04T09:59:24Z",
	"updateDate": "2022-10-04T09:59:24Z"
}
```

```php
function getContact(): Successful3
```

## Response Type

[`Successful3`](../../doc/models/successful-3.md)

## Example Usage

```php
$result = $contactsController->getContact();
```

## Example Response *(as JSON)*

```json
{
  "contactId": "19390487",
  "clientId": "3",
  "client": {
    "clientId": "3",
    "clientNames": "John Doe",
    "clientStatus": "ACTIVE"
  },
  "phone": "254716000000",
  "names": "",
  "email": "",
  "groupId": "29",
  "group": {
    "groupId": "29",
    "groupName": "Test group"
  },
  "createDate": "2022-10-04T09:59:24Z",
  "updateDate": "2022-10-04T09:59:24Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`SomeoneElseContactException`](../../doc/models/someone-else-contact-exception.md) |


# Delete Contact

Removes a contact contact resource.

Send `HTTP DELETE` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/contact/{contactId}

###### API Response

```
{}
```

```php
function deleteContact(): array
```

## Response Type

`array`

## Example Usage

```php
$result = $contactsController->deleteContact();
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`IncorrectAuthException`](../../doc/models/incorrect-auth-exception.md) |
| 403 | Forbidden | [`SomeoneElseException`](../../doc/models/someone-else-exception.md) |


# Update Contact

Updates a contact field. Send `HTTP PATCH` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/contacts/{contactId}

###### API Request

```
{
	"contact": {
		"names": "John Cena"
	}
}
```

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field | Type | Description
| ----------- | ----------- | ----------- |
| **names** | `String` `Optional` | Names for the given contact |
| **email**| `String` `Optional` | Email address for the give contact |

###### API Response

```
{
	"contactId": "0",
	"clientId": "0",
	"client": null,
	"phone": "",
	"names": "John Cena",
	"email": "",
	"groupId": "0",
	"group": null,
	"createDate": "0001-01-01T00:00:00Z",
	"updateDate": "2022-10-04T10:12:12Z"
}
```

```php
function updateContact(UpdateContactRequest $body): Successful1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`UpdateContactRequest`](../../doc/models/update-contact-request.md) | Body, Required | - |

## Response Type

[`Successful1`](../../doc/models/successful-1.md)

## Example Usage

```php
$body_contact_names = 'John Cena';
$body_contact = new Models\Contact2(
    $body_contact_names
);
$body = new Models\UpdateContactRequest(
    $body_contact
);

$result = $contactsController->updateContact($body);
```

## Example Response *(as JSON)*

```json
{
  "contactId": "0",
  "clientId": "0",
  "client": null,
  "phone": "",
  "names": "John Cena",
  "email": "",
  "groupId": "0",
  "group": null,
  "createDate": "0001-01-01T00:00:00Z",
  "updateDate": "2022-10-04T10:12:12Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`IncorrectAuthException`](../../doc/models/incorrect-auth-exception.md) |
| 403 | Forbidden | [`SomeElseContactException`](../../doc/models/some-else-contact-exception.md) |


# Upload Contacts

Assume you want to create 1000 contacts at a go.
The `upload contact` API lets you upload many contacts. It is fast and suitable for large contact uploads.
Simply add the contacts in a file, then upload it by sending `HTTP POST` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/contacts:uploadContact

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following `formdata` fields:

| Field | Type | Description
| ----------- | ----------- | ----------- |
| **groupId** | `Number` `Required` | Group id for the upload. Note The group must already exist |
| **contacts**| `File` `Required` | File containing contacts |

###### API Response

```
{
    "message": "successfully uploaded"
}
```

```php
function uploadContacts(int $groupId, string $contacts): Successful5
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `groupId` | `int` | Form, Required | - |
| `contacts` | `string` | Form, Required | - |

## Response Type

[`Successful5`](../../doc/models/successful-5.md)

## Example Usage

```php
$groupId = 29;
$contacts = 'contacts8';

$result = $contactsController->uploadContacts($groupId, $contacts);
```

## Example Response *(as JSON)*

```json
{
  "message": "successfully uploaded"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`SomeoneElseGroup2Exception`](../../doc/models/someone-else-group-2-exception.md) |
| 401 | Unauthorized | [`IncorrectAuthException`](../../doc/models/incorrect-auth-exception.md) |

