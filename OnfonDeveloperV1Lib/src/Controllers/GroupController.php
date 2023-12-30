<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use OnfonDeveloperV1Lib\Exceptions\ApiException;
use OnfonDeveloperV1Lib\Exceptions\BadPageTokenException;
use OnfonDeveloperV1Lib\Exceptions\FailedAuthenticationException;
use OnfonDeveloperV1Lib\Exceptions\NonExistingGroupException;
use OnfonDeveloperV1Lib\Exceptions\NonExistingGroupIdException;
use OnfonDeveloperV1Lib\Exceptions\WrongGroupIdException;
use OnfonDeveloperV1Lib\Models\CreateGroupRequest;
use OnfonDeveloperV1Lib\Models\Successful;
use OnfonDeveloperV1Lib\Models\SuccessfulResponse2;
use OnfonDeveloperV1Lib\Models\SuccessfulResponse3;

class GroupController extends BaseController
{
    /**
     * To create a contact group. Send `HTTP POST` request to the following endpoints:
     *
     * > Endpoint: /v2/onfonapps/groups
     *
     * ###### API Request
     *
     * ```
     * {
     * "group": {
     * "groupName": "Test group"
     * }
     * }
     * ```
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), the body of the request should
     * contain the following fields:
     *
     * | Field         | Type                | Description       |
     * | ------------- | ------------------- | ----------------- |
     * | **groupName** | `String` `Required` | Name of the group |
     *
     * <!-- | **clientId**  | `Number` `Required` | The logged in client id | -->
     *
     * ###### API Response
     *
     * ```
     * {
     * "groupId": "26",
     * "groupName": "Test group",
     * "clientId": "1",
     * "client": null,
     * "description": "",
     * "parentId": "",
     * "contacts": 0,
     * "updateDate": "2022-10-04T08:40:07Z",
     * "createDate": "2022-10-04T08:40:07Z"
     * }
     * ```
     *
     * @param CreateGroupRequest $body
     *
     * @return SuccessfulResponse2 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createGroup(CreateGroupRequest $body): SuccessfulResponse2
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/onfonapps/contactgroups')
            ->auth('global')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', FailedAuthenticationException::class))
            ->type(SuccessfulResponse2::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a collection of `contact groups`.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v2/onfonapps/groups
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the
     * following parameters as `Query Strings` when calling the endpoint
     *
     * | Description
     *
     * |
     * | ---------------------------------------------------------------------------------------------------
     * -----------------------------------------------------------------------------------------------------
     * -------------------------------------------------------- |
     * | **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may
     * return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum
     * value is `200`; values above `200` will be coerced to `200`. |
     * | **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must
     * match the call that provided the page token.                 |
     * | **filter.groupIds** `Number` `Optional` <br>When set to, it will only retrieve `contacts` that
     * belongs to the particular `group`
     * |
     *
     * ###### API Response
     *
     * ```
     * {
     * "nextPageToken": "",
     * "groups": [
     * {
     * "groupId": "26",
     * "groupName": "Test group",
     * "clientId": "1",
     * "client": null,
     * "description": "",
     * "parentId": "",
     * "contacts": 0,
     * "updateDate": "2022-10-04T08:40:07Z",
     * "createDate": "2022-10-04T08:40:07Z"
     * }
     * ],
     * "collectionCount": 1
     * }
     * ```
     *
     * @param int $pageSize
     * @param string $pageToken
     *
     * @return Successful Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listGroups(int $pageSize, string $pageToken): Successful
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/contactgroups')
            ->auth('global')
            ->parameters(QueryParam::init('pageSize', $pageSize), QueryParam::init('pageToken', $pageToken));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(400, ErrorType::init('Bad Request', BadPageTokenException::class))
            ->throwErrorOn(401, ErrorType::init('Unauthorized', FailedAuthenticationException::class))
            ->type(Successful::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a single `contact group` resource.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v2/onfonapps/groups/{groupId}
     *
     * ###### API Response
     *
     * ```
     * {
     * "groupId": "26",
     * "groupName": "Test group",
     * "clientId": "1",
     * "client": null,
     * "description": "",
     * "parentId": "",
     * "contacts": 0,
     * "updateDate": "2022-10-04T08:40:07Z",
     * "createDate": "2022-10-04T08:40:07Z"
     * }
     * ```
     *
     * @return SuccessfulResponse3 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getGroup(): SuccessfulResponse3
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/contactgroups/27123')->auth('global');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(400, ErrorType::init('Bad Request', WrongGroupIdException::class))
            ->throwErrorOn(404, ErrorType::init('Not Found', NonExistingGroupIdException::class))
            ->type(SuccessfulResponse3::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Removes a contact group resource.
     *
     * Send `HTTP DELETE` request to the following endpoints:
     * > URL: https://apis.onfonmedia.co.ke/v2/onfonapps/groups/{groupId}
     *
     * ######  API Response
     * ```
     * {}
     * ```
     *
     * @return array Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteGroup(): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/onfonapps/contactgroups/1')->auth('global');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(404, ErrorType::init('Not Found', NonExistingGroupException::class));

        return $this->execute($_reqBuilder, $_resHandler);
    }
}