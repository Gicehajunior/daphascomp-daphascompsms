<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class Successful7 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $nextPageToken;

    /**
     * @var SenderId1[]
     */
    private $senderIds;

    /**
     * @var int
     */
    private $collectionCount;

    /**
     * @param string $nextPageToken
     * @param SenderId1[] $senderIds
     * @param int $collectionCount
     */
    public function __construct(string $nextPageToken, array $senderIds, int $collectionCount)
    {
        $this->nextPageToken = $nextPageToken;
        $this->senderIds = $senderIds;
        $this->collectionCount = $collectionCount;
    }

    /**
     * Returns Next Page Token.
     */
    public function getNextPageToken(): string
    {
        return $this->nextPageToken;
    }

    /**
     * Sets Next Page Token.
     *
     * @required
     * @maps nextPageToken
     */
    public function setNextPageToken(string $nextPageToken): void
    {
        $this->nextPageToken = $nextPageToken;
    }

    /**
     * Returns Sender Ids.
     *
     * @return SenderId1[]
     */
    public function getSenderIds(): array
    {
        return $this->senderIds;
    }

    /**
     * Sets Sender Ids.
     *
     * @required
     * @maps senderIds
     *
     * @param SenderId1[] $senderIds
     */
    public function setSenderIds(array $senderIds): void
    {
        $this->senderIds = $senderIds;
    }

    /**
     * Returns Collection Count.
     */
    public function getCollectionCount(): int
    {
        return $this->collectionCount;
    }

    /**
     * Sets Collection Count.
     *
     * @required
     * @maps collectionCount
     */
    public function setCollectionCount(int $collectionCount): void
    {
        $this->collectionCount = $collectionCount;
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
        $json['nextPageToken']   = $this->nextPageToken;
        $json['senderIds']       = $this->senderIds;
        $json['collectionCount'] = $this->collectionCount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}