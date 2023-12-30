<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class SenderId1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $senderValue;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $purpose;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $statusText;

    /**
     * @var int
     */
    private $cost;

    /**
     * @var bool
     */
    private $isGeneric;

    /**
     * @var Client3
     */
    private $client;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @var string
     */
    private $updatedDate;

    /**
     * @param string $id
     * @param string $senderValue
     * @param string $clientId
     * @param string $purpose
     * @param string $status
     * @param string $statusText
     * @param int $cost
     * @param bool $isGeneric
     * @param Client3 $client
     * @param string $createDate
     * @param string $updatedDate
     */
    public function __construct(
        string $id,
        string $senderValue,
        string $clientId,
        string $purpose,
        string $status,
        string $statusText,
        int $cost,
        bool $isGeneric,
        Client3 $client,
        string $createDate,
        string $updatedDate
    ) {
        $this->id = $id;
        $this->senderValue = $senderValue;
        $this->clientId = $clientId;
        $this->purpose = $purpose;
        $this->status = $status;
        $this->statusText = $statusText;
        $this->cost = $cost;
        $this->isGeneric = $isGeneric;
        $this->client = $client;
        $this->createDate = $createDate;
        $this->updatedDate = $updatedDate;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Sender Value.
     */
    public function getSenderValue(): string
    {
        return $this->senderValue;
    }

    /**
     * Sets Sender Value.
     *
     * @required
     * @maps senderValue
     */
    public function setSenderValue(string $senderValue): void
    {
        $this->senderValue = $senderValue;
    }

    /**
     * Returns Client Id.
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * Sets Client Id.
     *
     * @required
     * @maps clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * Returns Purpose.
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * Sets Purpose.
     *
     * @required
     * @maps purpose
     */
    public function setPurpose(string $purpose): void
    {
        $this->purpose = $purpose;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Text.
     */
    public function getStatusText(): string
    {
        return $this->statusText;
    }

    /**
     * Sets Status Text.
     *
     * @required
     * @maps statusText
     */
    public function setStatusText(string $statusText): void
    {
        $this->statusText = $statusText;
    }

    /**
     * Returns Cost.
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * Sets Cost.
     *
     * @required
     * @maps cost
     */
    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * Returns Is Generic.
     */
    public function getIsGeneric(): bool
    {
        return $this->isGeneric;
    }

    /**
     * Sets Is Generic.
     *
     * @required
     * @maps isGeneric
     */
    public function setIsGeneric(bool $isGeneric): void
    {
        $this->isGeneric = $isGeneric;
    }

    /**
     * Returns Client.
     */
    public function getClient(): Client3
    {
        return $this->client;
    }

    /**
     * Sets Client.
     *
     * @required
     * @maps client
     */
    public function setClient(Client3 $client): void
    {
        $this->client = $client;
    }

    /**
     * Returns Create Date.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * Sets Create Date.
     *
     * @required
     * @maps createDate
     */
    public function setCreateDate(string $createDate): void
    {
        $this->createDate = $createDate;
    }

    /**
     * Returns Updated Date.
     */
    public function getUpdatedDate(): string
    {
        return $this->updatedDate;
    }

    /**
     * Sets Updated Date.
     *
     * @required
     * @maps updatedDate
     */
    public function setUpdatedDate(string $updatedDate): void
    {
        $this->updatedDate = $updatedDate;
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
        $json['id']          = $this->id;
        $json['senderValue'] = $this->senderValue;
        $json['clientId']    = $this->clientId;
        $json['purpose']     = $this->purpose;
        $json['status']      = $this->status;
        $json['statusText']  = $this->statusText;
        $json['cost']        = $this->cost;
        $json['isGeneric']   = $this->isGeneric;
        $json['client']      = $this->client;
        $json['createDate']  = $this->createDate;
        $json['updatedDate'] = $this->updatedDate;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}