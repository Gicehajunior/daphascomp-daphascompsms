<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use OnfonDeveloperV1Lib\Controllers\BalanceSendSMSController;
use OnfonDeveloperV1Lib\Exceptions;

class BalanceSendSMSControllerTest extends BaseTestController
{
    /**
     * @var BalanceSendSMSController BalanceSendSMSController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getBalanceSendSMSController();
    }

    public function testCheckBalance()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->checkBalance();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['Server'] = ['TwistedWeb/20.3.0', false];
        $headers['Date'] = ['Wed, 28 Sep 2022 10:11:33 GMT', false];
        $headers['X-Kong-Upstream-Latency'] = ['7', false];
        $headers['X-Kong-Proxy-Latency'] = ['1', false];
        $headers['Via'] = ['kong/2.8.1', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(
                KeysBodyMatcher::init(TestParam::object("{\r\n  \"balance\": 0,\r\n  \"sms_count\": 0\r\n}"))
            )
            ->assert();
    }
}
