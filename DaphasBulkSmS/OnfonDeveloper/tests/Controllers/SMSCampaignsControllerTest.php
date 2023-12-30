<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Tests\Controllers;

use OnfonDeveloperV1Lib\Controllers\SMSCampaignsController;
use OnfonDeveloperV1Lib\Exceptions;

class SMSCampaignsControllerTest extends BaseTestController
{
    /**
     * @var SMSCampaignsController SMSCampaignsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSMSCampaignsController();
    }

    public function testListCampaigns()
    {
        // Parameters for the API call
        $pageSize = 2;
        $pageToken = '';

        // Perform API call
        try {
            self::$controller->listCampaigns($pageSize, $pageToken);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }

    public function testGetCampaign()
    {
        // Perform API call
        try {
            self::$controller->getCampaign();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }
}
