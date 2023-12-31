<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class RequestSenderIdRequest implements \JsonSerializable
{
    /**
     * @var SenderId
     */
    private $senderId;

    /**
     * @param SenderId $senderId
     */
    public function __construct(SenderId $senderId)
    {
        $this->senderId = $senderId;
    }

    /**
     * Returns Sender Id.
     */
    public function getSenderId(): SenderId
    {
        return $this->senderId;
    }

    /**
     * Sets Sender Id.
     *
     * @required
     * @maps senderId
     */
    public function setSenderId(SenderId $senderId): void
    {
        $this->senderId = $senderId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['senderId'] = $this->senderId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
