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
use OnfonDeveloperV1Lib\Controllers\SenderidController;
use OnfonDeveloperV1Lib\Exceptions;
use OnfonDeveloperV1Lib\Models;

class SenderidControllerTest extends BaseTestController
{
    /**
     * @var SenderidController SenderidController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSenderidController();
    }

    public function testRequestSenderId()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "{\r\n  \"senderId\": {\r\n    \"senderValue\": \"COOL_NAME\",\r\n    \"clientId\":" .
            " \"1\",\r\n    \"purpose\": \"just for test\"\r\n  }\r\n}",
            Models\RequestSenderIdRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->requestSenderId($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Content-Length'] = ['336', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['Grpc-Metadata-Content-Type'] = ['application/grpc', false];
        $headers['Vary'] = ['Origin', false];
        $headers['Date'] = ['Tue, 04 Oct 2022 10:44:38 GMT', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];
        $headers['X-Kong-Upstream-Latency'] = ['7', false];
        $headers['X-Kong-Proxy-Latency'] = ['1', false];
        $headers['Via'] = ['kong/2.8.1', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object(
                    "{\r\n  \"id\": \"9\",\r\n  \"senderValue\": \"COOL_NAME\",\r\n  \"clientId" .
                    "\": \"3\",\r\n  \"purpose\": \"just for test\",\r\n  \"status\": \"PENDING_" .
                    "APPROVAL\",\r\n  \"statusText\": \"\",\r\n  \"cost\": 0,\r\n  \"isGeneric\"" .
                    ": false,\r\n  \"client\": {\r\n    \"clientName\": \"\",\r\n    \"mainAccou" .
                    "nt\": \"\",\r\n    \"accountType\": \"\",\r\n    \"contactFname\": \"\",\r" .
                    "\n    \"contactLname\": \"\",\r\n    \"clientStatus\": \"\"\r\n  },\r\n  \"" .
                    "createDate\": \"2022-10-04T10:44:38Z\",\r\n  \"updatedDate\": \"2022-10-04T" .
                    "10:44:38Z\"\r\n}"
                )
            ))
            ->assert();
    }

    public function testViewSenderIds()
    {
        // Parameters for the API call
        $pageSize = 1;
        $pageToken = '';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->viewSenderIds($pageSize, $pageToken);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Content-Length'] = ['438', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['Grpc-Metadata-Content-Type'] = ['application/grpc', false];
        $headers['Vary'] = ['Origin', false];
        $headers['Date'] = ['Tue, 04 Oct 2022 10:48:52 GMT', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];
        $headers['X-Kong-Upstream-Latency'] = ['5', false];
        $headers['X-Kong-Proxy-Latency'] = ['1', false];
        $headers['Via'] = ['kong/2.8.1', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"nextPageToken\": \"OQ==\",\r\n  \"senderIds\": [\r\n    {\r\n      \"" .
                "id\": \"9\",\r\n      \"senderValue\": \"COOL_NAME\",\r\n      \"clientId\": \"" .
                "3\",\r\n      \"purpose\": \"just for test\",\r\n      \"status\": \"PENDING_AP" .
                "PROVAL\",\r\n      \"statusText\": \"\",\r\n      \"cost\": 0,\r\n      \"isGen" .
                "eric\": false,\r\n      \"client\": {\r\n        \"clientName\": \"Gideon Kamau" .
                "\",\r\n        \"mainAccount\": \"gideoncredo\",\r\n        \"accountType\": \"" .
                "bal\",\r\n        \"contactFname\": \"Gideon\",\r\n        \"contactLname\": \"" .
                "Kamau\",\r\n        \"clientStatus\": \"ACTIVE\"\r\n      },\r\n      \"createD" .
                "ate\": \"2022-10-04T10:44:38Z\",\r\n      \"updatedDate\": \"2022-10-04T10:44:3" .
                "8Z\"\r\n    }\r\n  ],\r\n  \"collectionCount\": 2\r\n}"
            )))
            ->assert();
    }

    public function testGetSenderId()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getSenderId();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Content-Length'] = ['379', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['Grpc-Metadata-Content-Type'] = ['application/grpc', false];
        $headers['Vary'] = ['Origin', false];
        $headers['Date'] = ['Tue, 04 Oct 2022 10:51:21 GMT', false];
        $headers['Access-Control-Allow-Origin'] = ['*', false];
        $headers['X-Kong-Upstream-Latency'] = ['4', false];
        $headers['X-Kong-Proxy-Latency'] = ['1', false];
        $headers['Via'] = ['kong/2.8.1', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object(
                    "{\r\n  \"id\": \"9\",\r\n  \"senderValue\": \"COOL_NAME\",\r\n  \"clientId" .
                    "\": \"3\",\r\n  \"purpose\": \"just for test\",\r\n  \"status\": \"PENDING_" .
                    "APPROVAL\",\r\n  \"statusText\": \"\",\r\n  \"cost\": 0,\r\n  \"isGeneric\"" .
                    ": false,\r\n  \"client\": {\r\n    \"clientName\": \"Names\",\r\n    \"main" .
                    "Account\": \"account\",\r\n    \"accountType\": \"bal\",\r\n    \"contactFn" .
                    "ame\": \"FName\",\r\n    \"contactLname\": \"LName\",\r\n    \"clientStatus" .
                    "\": \"ACTIVE\"\r\n  },\r\n  \"createDate\": \"2022-10-04T10:44:38Z\",\r\n  " .
                    "\"updatedDate\": \"2022-10-04T10:44:38Z\"\r\n}"
                )
            ))
            ->assert();
    }
}
