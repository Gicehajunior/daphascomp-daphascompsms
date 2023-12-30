<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use OnfonDeveloperV1Lib\Exceptions\ApiException;

class SMSCampaignsController extends BaseController
{
    /**
     * Retrieves a collection of SMS campaigns.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/campaigns
     *
     * `SMS Campains` will be in one of the following statuses:
     *
     * [```PENDING```, ```WAITING```, ```PROCESSING```, ```WAITING_SCHEDULE_TIME```, ```RUNNING```,
     * ```PAUSED```, ```FAILED```, ```CANCELLED```, ```COMPLETED```]
     *
     * ###### Request parameters
     *
     * In addition to the [Authorization headers](/docs/request_headers), you can optionally pass the
     * following parameters as `Query Strings` when calling the endpoint
     *
     * | Description
     *
     *
     * |
     * | ---------------------------------------------------------------------------------------------------
     * -----------------------------------------------------------------------------------------------------
     * -----------------------------------------------------------------------------------------------------
     * ------------------------------------------ |
     * | **pageSize** `Number` `Optional` <br>The maximum number of resources to return. The service may
     * return fewer than this value. If unspecified, at most `100` resources will be returned. The maximum
     * value is `200`; values above `200` will be coerced to `200`.
     * |
     * | **pageToken** `String` `Optional` <br>A page token, received from a previous `API` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters provided to `API` must
     * match the call that provided the page token.
     * |
     * | **filter.is_scheduled** `Boolean` `Optional` <br>When set to `true`, the service will only return
     * campaigns that were scheduled.
     *
     * |
     * | **filter.create_start_timestamp** `Boolean` `Optional` <br>The value is UTC UNIX timestamp is
     * seconds. When set to a value greater than zero, the service will fetch campaigns that were created
     * after the specified timestamp.
     * |
     * | **filter.create_end_timestamp** `Boolean` `Optional` <br>The value is UTC UNIX timestamp is
     * seconds. When set to a value greater than zero, the service will fetch campaigns that were created
     * before the specified timestamp.
     * |
     * | **filter.statuses** `Boolean` `Optional` <br>Allowed values are `[PENDING, WAITING, PROCESSING,
     * WAITING_SCHEDULE_TIME, RUNNING, PAUSED, FAILED, CANCELLED, COMPLETED]`. When the value is set, the
     * service will only return campaigns that _match_ the given status. You can set this value multiple
     * times in case you want to fetch multiple statuses. |
     *
     * ###### API Response
     *
     * ```
     * {
     * "nextPageToken": "",
     * "campaigns": [
     * {
     * "campaignId": "5",
     * "clientId": "1",
     * "senderName": "mysender",
     * "campaignName": "Aug2022",
     * "campaignDescription": "Another test campaign",
     * "campaignMessage": "Sep 7 2022 is such a beutiful day",
     * "campaignStatus": "COMPLETED",
     * "schedule": false,
     * "startDateUtcSeconds": "0",
     * "recuring": false,
     * "recurInterval": "RECUR_INTERVAL_UNSPECIFIED",
     * "recurFrequency": 0,
     * "totalSms": "1000002",
     * "totalDelivery": "0",
     * "totalPhones": "1000002",
     * "totalCost": 1999998,
     * "createDateUtc": "2022-10-11T09:35:35Z",
     * "updateDateUtc": "2022-10-11T09:47:22Z",
     * "longRunningId": "11",
     * "campaignSummary": [],
     * "previews": [],
     * "uploadType": "CONTACTS_AND_GROUPS",
     * "groupIds": [],
     * "fileIds": []
     * }
     * ],
     * "collectionCount": 1
     * }
     * ```
     *
     * @param int $pageSize The size of returned resource
     * @param string $pageToken Like page number
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCampaigns(int $pageSize, string $pageToken): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/campaigns')
            ->auth('global')
            ->parameters(QueryParam::init('pageSize', $pageSize), QueryParam::init('pageToken', $pageToken));

        $this->execute($_reqBuilder);
    }

    /**
     * Retrieves a single SMS campaign.
     *
     * Send `HTTP GET` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/campaigns/{campaignId}
     *
     * ###### API Response
     *
     * ```
     * {
     * "campaignId": "5",
     * "clientId": "1",
     * "senderName": "mysender",
     * "campaignName": "Aug2022",
     * "campaignDescription": "Another test campaign",
     * "campaignMessage": "Sep 7 2022 is such a beutiful day",
     * "campaignStatus": "COMPLETED",
     * "schedule": false,
     * "startDateUtcSeconds": "0",
     * "recuring": false,
     * "recurInterval": "RECUR_INTERVAL_UNSPECIFIED",
     * "recurFrequency": 0,
     * "totalSms": "1000002",
     * "totalDelivery": "0",
     * "totalPhones": "1000002",
     * "totalCost": 1999998,
     * "createDateUtc": "2022-10-11T09:35:35Z",
     * "updateDateUtc": "2022-10-11T09:47:22Z",
     * "longRunningId": "11",
     * "campaignSummary": [],
     * "previews": [],
     * "uploadType": "CONTACTS_AND_GROUPS",
     * "groupIds": [],
     * "fileIds": []
     * }
     * ```
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getCampaign(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/onfonapps/campaigns/1')->auth('global');

        $this->execute($_reqBuilder);
    }

    /**
     * Removes a `SMS campaign` resource from the server.
     *
     * Send `HTTP DELETE` request to the following endpoints:
     *
     * > Endpoint: /v1/onfonapps/campaigns/{campaignId}
     *
     * It is only possible to delete campaigns with status of `PENDING`. Campaigns with a different status
     * will not removed.
     *
     * ###### API Response
     *
     * ```
     * {}
     * ```
     *
     * @param string $campaignId
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCampaign(string $campaignId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/onfonapps/campaigns/{campaignId}')
            ->auth('global')
            ->parameters(TemplateParam::init('campaignId', $campaignId));

        $this->execute($_reqBuilder);
    }
}