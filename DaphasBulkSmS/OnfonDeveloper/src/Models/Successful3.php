<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class Successful3 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $contactId;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $names;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $groupId;

    /**
     * @var Group2
     */
    private $group;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @var string
     */
    private $updateDate;

    /**
     * @param string $contactId
     * @param string $clientId
     * @param Client $client
     * @param string $phone
     * @param string $names
     * @param string $email
     * @param string $groupId
     * @param Group2 $group
     * @param string $createDate
     * @param string $updateDate
     */
    public function __construct(
        string $contactId,
        string $clientId,
        Client $client,
        string $phone,
        string $names,
        string $email,
        string $groupId,
        Group2 $group,
        string $createDate,
        string $updateDate
    ) {
        $this->contactId = $contactId;
        $this->clientId = $clientId;
        $this->client = $client;
        $this->phone = $phone;
        $this->names = $names;
        $this->email = $email;
        $this->groupId = $groupId;
        $this->group = $group;
        $this->createDate = $createDate;
        $this->updateDate = $updateDate;
    }

    /**
     * Returns Contact Id.
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }

    /**
     * Sets Contact Id.
     *
     * @required
     * @maps contactId
     */
    public function setContactId(string $contactId): void
    {
        $this->contactId = $contactId;
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
     * Returns Client.
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Sets Client.
     *
     * @required
     * @maps client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * Returns Phone.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     *
     * @required
     * @maps phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Names.
     */
    public function getNames(): string
    {
        return $this->names;
    }

    /**
     * Sets Names.
     *
     * @required
     * @maps names
     */
    public function setNames(string $names): void
    {
        $this->names = $names;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Group Id.
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }

    /**
     * Sets Group Id.
     *
     * @required
     * @maps groupId
     */
    public function setGroupId(string $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * Returns Group.
     */
    public function getGroup(): Group2
    {
        return $this->group;
    }

    /**
     * Sets Group.
     *
     * @required
     * @maps group
     */
    public function setGroup(Group2 $group): void
    {
        $this->group = $group;
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
     * Returns Update Date.
     */
    public function getUpdateDate(): string
    {
        return $this->updateDate;
    }

    /**
     * Sets Update Date.
     *
     * @required
     * @maps updateDate
     */
    public function setUpdateDate(string $updateDate): void
    {
        $this->updateDate = $updateDate;
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
        $json['contactId']  = $this->contactId;
        $json['clientId']   = $this->clientId;
        $json['client']     = $this->client;
        $json['phone']      = $this->phone;
        $json['names']      = $this->names;
        $json['email']      = $this->email;
        $json['groupId']    = $this->groupId;
        $json['group']      = $this->group;
        $json['createDate'] = $this->createDate;
        $json['updateDate'] = $this->updateDate;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
