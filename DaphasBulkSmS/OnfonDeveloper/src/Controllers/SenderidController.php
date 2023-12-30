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
use OnfonDeveloperV1Lib\Exceptions\AlreadyRequestedException;
use OnfonDeveloperV1Lib\Exceptions\ApiException;
use OnfonDeveloperV1Lib\Models\RequestSenderIdRequest;
use OnfonDeveloperV1Lib\Models\Successful6;
use OnfonDeveloperV1Lib\Models\Successful7;

class SenderidController extends BaseController
{
    /**
     * To request for a `Sender ID`, send `HTTP POST` request to the following endpoints:
     *
     * > Endpoint: /v2/onfonapps/senderids
     *
     * After requesting for the `Sender ID`, the request will be submitted for approval, and Business team
     * will contact you for further processing.
     *
     * ###### API Request
     *
     * ```
     * {
     * "senderId": {
     * "senderValue": "COOL_NAME",
     * "purpose": "To share receipts of transactions, order stats, confirmations for purchase.com"
     * }
     * }
     * ```
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), the body of the request should
     * contain the following fields:
     *
     * | Field           | Type                | Description
     * |
     * | --------------- | ------------------- | -----------------------------------------------------------
     * --------------------- |
     * | **senderValue** | `String` `Required` | Sender id value. E.g `COOL_NAME`
     * |
     * | **purpose**     | `String` `Required` | The purpose of the sender id. Give description on how the
     * sender id will be used |
     *
     * ###### API Response
     *
     * ```
     * {
     * "id": "9",
     * "senderValue": "COOL_NAME",
     * "clientId": "3",
     * "purpose": "just for test",
     * "status": "PENDING_APPROVAL",
     * "statusText": "",
     * "cost": 0,
     * "isGeneric": false,
     * "client": {
     * "clientName": "",
     * "mainAccount": "",
     * "accountType": "",
     * "contactFname": "",
     * "contactLname": "",
     * "clientStatus": ""
     * },
     * "createDate": "2022-10-04T10:44:38Z",
     * "updatedDate": "2022-10-04T10:44:38Z"
     * }
     * ```
     *
     * @param RequestSenderIdRequest $body
     *
     * @return Successful6 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function requestSenderId(RequestSenderIdRequest $body): Successful6
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/onfonapps/senderids')
            ->auth('global')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(429, ErrorType::init('Too Many Requests', AlreadyRequestedException::class))
            ->type(Successful6::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a collection of requested sender ids.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/senderids
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
     * | **filter.status** `Enum String` `Optional` <br>When set, it will only retrieve `Sender Ids` with
     * the given status. Allowed values are `PENDING_APPROVAL`, `APPROVED`,`READY_FOR_SENDING`,`REJECTED`,
     * `INACTIVE`                                                   |
     *
     * ###### API Response
     *
     * ```
     * {
     * "nextPageToken": "OQ==",
     * "senderIds": [
     * {
     * "id": "9",
     * "senderValue": "COOL_NAME",
     * "clientId": "3",
     * "purpose": "just for test",
     * "status": "PENDING_APPROVAL",
     * "statusText": "",
     * "cost": 0,
     * "isGeneric": false,
     * "client": {
     * "clientName": "Gideon Kamau",
     * "mainAccount": "gideoncredo",
     * "accountType": "bal",
     * "contactFname": "Gideon",
     * "contactLname": "Kamau",
     * "clientStatus": "ACTIVE"
     * },
     * "createDate": "2022-10-04T10:44:38Z",
     * "updatedDate": "2022-10-04T10:44:38Z"
     * }
     * ],
     * "collectionCount": 2
     * }
     * ```
     *
     * @param int $pageSize
     * @param string $pageToken
     *
     * @return Successful7 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSenderIds(int $pageSize, string $pageToken): Successful7
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/senderids')
            ->auth('global')
            ->parameters(QueryParam::init('pageSize', $pageSize), QueryParam::init('pageToken', $pageToken));

        $_resHandler = $this->responseHandler()->type(Successful7::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a single `Sender ID` resource.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/senderids/{senderId}
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), the body of the request should
     * contain the following fields:
     *
     * | Field        | Type                | Description                     |
     * | ------------ | ------------------- | ------------------------------- |
     * | **senderId** | `Number` `Required` | Sender id `id` after requesting |
     *
     * ###### API Response
     *
     * ```
     * {
     * "id": "9",
     * "senderValue": "COOL_NAME",
     * "clientId": "3",
     * "purpose": "just for test",
     * "status": "PENDING_APPROVAL",
     * "statusText": "",
     * "cost": 0,
     * "isGeneric": false,
     * "client": {
     * "clientName": "Names",
     * "mainAccount": "account",
     * "accountType": "bal",
     * "contactFname": "FName",
     * "contactLname": "LName",
     * "clientStatus": "ACTIVE"
     * },
     * "createDate": "2022-10-04T10:44:38Z",
     * "updatedDate": "2022-10-04T10:44:38Z"
     * }
     * ```
     *
     * @return Successful6 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSenderId(): Successful6
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/senderids/9')->auth('global');

        $_resHandler = $this->responseHandler()->type(Successful6::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
