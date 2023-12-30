<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Controllers;

use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use OnfonDeveloperV1Lib\Exceptions\ApiException;

class PurchaseController extends BaseController
{
    /**
     * Retrieves a collection of account purchases.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/purchases
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
     *
     * ###### API Response
     *
     * ```
     * {
     * "purchases": [
     * {
     * "purchaseId": "14",
     * "clientId": "3",
     * "client": {
     * "clientId": "3",
     * "clientNames": "Account Name",
     * "clientStatus": "ACTIVE"
     * },
     * "paymentType": "MPESA",
     * "paymentAmount": 10,
     * "paymentValue": 14.29,
     * "rate": 0.7,
     * "paymentCurrency": "KSH",
     * "transactionReference": "QK77Gxxxx",
     * "comments": "The service request is processed successfully.",
     * "processed": true,
     * "processedDate": "2022-11-07T13:18:35Z",
     * "purchaseType": "CREDIT",
     * "paymentStatus": "SUCCESS",
     * "statusDescription": "Successfully credited buyer",
     * "balanceBefore": 28,
     * "balanceAfter": 42.29,
     * "sellerDeduected": false,
     * "unitsLoaded": true,
     * "createDate": "2022-11-07T13:18:35Z"
     * }
     * ],
     * "nextPageToken": "",
     * "collectionCount": 14
     * }
     * ```
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPurchases(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/purchases')->auth('global');

        $this->execute($_reqBuilder);
    }

    /**
     * Retrieves a single `Purchase` resource.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/purchases/{purchase_id}
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), the body of the request should
     * contain the following fields:
     *
     * | Field           | Type                | Description                         |
     * | --------------- | ------------------- | ----------------------------------- |
     * | **purchase_id** | `Number` `Required` | Purchase id to get more information |
     *
     * ###### API Response
     *
     * ```
     * {
     * "purchaseId": "14",
     * "clientId": "3",
     * "client": {
     * "clientId": "3",
     * "clientNames": "Account Name",
     * "clientStatus": "ACTIVE"
     * },
     * "paymentType": "MPESA",
     * "paymentAmount": 10,
     * "paymentValue": 14.29,
     * "rate": 0.7,
     * "paymentCurrency": "KSH",
     * "transactionReference": "QK77Gxxxx",
     * "comments": "The service request is processed successfully.",
     * "processed": true,
     * "processedDate": "2022-11-07T13:18:35Z",
     * "purchaseType": "CREDIT",
     * "paymentStatus": "SUCCESS",
     * "statusDescription": "Successfully credited buyer",
     * "balanceBefore": 28,
     * "balanceAfter": 42.29,
     * "sellerDeduected": false,
     * "unitsLoaded": true,
     * "createDate": "2022-11-07T13:18:35Z"
     * }
     * ```
     *
     * @param string $purchaseId
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPurchase(string $purchaseId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/purchases/{purchase_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('purchase_id', $purchaseId));

        $this->execute($_reqBuilder);
    }
}
