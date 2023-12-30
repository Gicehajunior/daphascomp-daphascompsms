# Group

APIs for managing **contacts groups**

Allows CRUD operations to contact groups.

```php
$groupController = $client->getGroupController();
```

## Class Name

`GroupController`

## Methods

* [Create Group](../../doc/controllers/group.md#create-group)
* [List Groups](../../doc/controllers/group.md#list-groups)
* [Get Group](../../doc/controllers/group.md#get-group)
* [Delete Group](../../doc/controllers/group.md#delete-group)


# Create Group

To create a contact group. Send `HTTP POST` request to the following endpoints:

> Endpoint: /v2/onfonapps/groups

###### API Request

```
{
	"group": {
		"groupName": "Test group"
	}
}
```

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), the body of the request should contain the following fields:

| Field         | Type                | Description       |
| ------------- | ------------------- | ----------------- |
| **groupName** | `String` `Required` | Name of the group |

<!-- | **clientId**  | `Number` `Required` | The logged in client id | -->
###### API Response

```
{
    "groupId": "26",
    "groupName": "Test group",
    "clientId": "1",
    "client": null,
    "description": "",
    "parentId": "",
    "contacts": 0,
    "updateDate": "2022-10-04T08:40:07Z",
    "createDate": "2022-10-04T08:40:07Z"
}
```

```php
function createGroup(CreateGroupRequest $body): SuccessfulResponse2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateGroupRequest`](../../doc/models/create-group-request.md) | Body, Required | - |

## Response Type

[`SuccessfulResponse2`](../../doc/models/successful-response-2.md)

## Example Usage

```php
$body_group_groupName = 'Test group';
$body_group = new Models\Group(
    $body_group_groupName
);
$body = new Models\CreateGroupRequest(
    $body_group
);

$result = $groupController->createGroup($body);
```

## Example Response *(as JSON)*

```json
{
  "groupId": "26",
  "groupName": "Test group",
  "clientId": "1",
  "client": null,
  "description": "",
  "parentId": "",
  "contacts": 0,
  "updateDate": "2022-10-04T08:40:07Z",
  "createDate": "2022-10-04T08:40:07Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`FailedAuthenticationException`](../../doc/models/failed-authentication-exception.md) |


# List Groups

Retrieves a collection of `contact groups`.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v2/onfonapps/groups

###### Request parameters

In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the following parameters as `Query Strings` when calling the endpoint

| Description                                                                                                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum value is `200`; values above `200` will be coerced to `200`. |
| **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must match the call that provided the page token.                 |
| **filter.groupIds** `Number` `Optional` <br>When set to, it will only retrieve `contacts` that belongs to the particular `group`                                                                                                                                 |

###### API Response

```
{
	"nextPageToken": "",
	"groups": [
		{
			"groupId": "26",
			"groupName": "Test group",
			"clientId": "1",
			"client": null,
			"description": "",
			"parentId": "",
			"contacts": 0,
			"updateDate": "2022-10-04T08:40:07Z",
			"createDate": "2022-10-04T08:40:07Z"
		}
	],
	"collectionCount": 1
}
```

```php
function listGroups(int $pageSize, string $pageToken): Successful
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageSize` | `int` | Query, Required | - |
| `pageToken` | `string` | Query, Required | - |

## Response Type

[`Successful`](../../doc/models/successful.md)

## Example Usage

```php
$pageSize = 2;
$pageToken = 'pageToken2';

$result = $groupController->listGroups($pageSize, $pageToken);
```

## Example Response *(as JSON)*

```json
{
  "nextPageToken": "MjY=",
  "groups": [
    {
      "groupId": "27",
      "groupName": "Test group",
      "clientId": "1",
      "client": null,
      "description": "",
      "parentId": "",
      "contacts": 0,
      "updateDate": "2022-10-04T08:53:10Z",
      "createDate": "2022-10-04T08:53:10Z"
    },
    {
      "groupId": "26",
      "groupName": "Test group",
      "clientId": "1",
      "client": null,
      "description": "",
      "parentId": "",
      "contacts": 0,
      "updateDate": "2022-10-04T08:40:07Z",
      "createDate": "2022-10-04T08:40:07Z"
    }
  ],
  "collectionCount": 5
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`BadPageTokenException`](../../doc/models/bad-page-token-exception.md) |
| 401 | Unauthorized | [`FailedAuthenticationException`](../../doc/models/failed-authentication-exception.md) |


# Get Group

Retrieves a single `contact group` resource.

Send `HTTP GET` request to the following endpoints:

> Endpoint: /v2/onfonapps/groups/{groupId}

###### API Response

```
{
	"groupId": "26",
	"groupName": "Test group",
	"clientId": "1",
	"client": null,
	"description": "",
	"parentId": "",
	"contacts": 0,
	"updateDate": "2022-10-04T08:40:07Z",
	"createDate": "2022-10-04T08:40:07Z"
}
```

```php
function getGroup(): SuccessfulResponse3
```

## Response Type

[`SuccessfulResponse3`](../../doc/models/successful-response-3.md)

## Example Usage

```php
$result = $groupController->getGroup();
```

## Example Response *(as JSON)*

```json
{
  "groupId": "27",
  "groupName": "Test group",
  "clientId": "1",
  "client": {
    "clientId": "1",
    "clientNames": "Root User",
    "clientStatus": "ACTIVE"
  },
  "description": "",
  "parentId": "",
  "contacts": 0,
  "updateDate": "2022-10-04T08:53:10Z",
  "createDate": "2022-10-04T08:53:10Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`WrongGroupIdException`](../../doc/models/wrong-group-id-exception.md) |
| 404 | Not Found | [`NonExistingGroupIdException`](../../doc/models/non-existing-group-id-exception.md) |


# Delete Group

Removes a contact group resource.

Send `HTTP DELETE` request to the following endpoints:

> URL: https://apis.onfonmedia.co.ke/v2/onfonapps/groups/{groupId}

###### API Response

```
{}
```

```php
function deleteGroup(): array
```

## Response Type

`array`

## Example Usage

```php
$result = $groupController->deleteGroup();
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`NonExistingGroupException`](../../doc/models/non-existing-group-exception.md) |

