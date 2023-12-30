<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class Client3 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $clientName;

    /**
     * @var string
     */
    private $mainAccount;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var string
     */
    private $contactFname;

    /**
     * @var string
     */
    private $contactLname;

    /**
     * @var string
     */
    private $clientStatus;

    /**
     * @param string $clientName
     * @param string $mainAccount
     * @param string $accountType
     * @param string $contactFname
     * @param string $contactLname
     * @param string $clientStatus
     */
    public function __construct(
        string $clientName,
        string $mainAccount,
        string $accountType,
        string $contactFname,
        string $contactLname,
        string $clientStatus
    ) {
        $this->clientName = $clientName;
        $this->mainAccount = $mainAccount;
        $this->accountType = $accountType;
        $this->contactFname = $contactFname;
        $this->contactLname = $contactLname;
        $this->clientStatus = $clientStatus;
    }

    /**
     * Returns Client Name.
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * Sets Client Name.
     *
     * @required
     * @maps clientName
     */
    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * Returns Main Account.
     */
    public function getMainAccount(): string
    {
        return $this->mainAccount;
    }

    /**
     * Sets Main Account.
     *
     * @required
     * @maps mainAccount
     */
    public function setMainAccount(string $mainAccount): void
    {
        $this->mainAccount = $mainAccount;
    }

    /**
     * Returns Account Type.
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * Sets Account Type.
     *
     * @required
     * @maps accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * Returns Contact Fname.
     */
    public function getContactFname(): string
    {
        return $this->contactFname;
    }

    /**
     * Sets Contact Fname.
     *
     * @required
     * @maps contactFname
     */
    public function setContactFname(string $contactFname): void
    {
        $this->contactFname = $contactFname;
    }

    /**
     * Returns Contact Lname.
     */
    public function getContactLname(): string
    {
        return $this->contactLname;
    }

    /**
     * Sets Contact Lname.
     *
     * @required
     * @maps contactLname
     */
    public function setContactLname(string $contactLname): void
    {
        $this->contactLname = $contactLname;
    }

    /**
     * Returns Client Status.
     */
    public function getClientStatus(): string
    {
        return $this->clientStatus;
    }

    /**
     * Sets Client Status.
     *
     * @required
     * @maps clientStatus
     */
    public function setClientStatus(string $clientStatus): void
    {
        $this->clientStatus = $clientStatus;
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
        $json['clientName']   = $this->clientName;
        $json['mainAccount']  = $this->mainAccount;
        $json['accountType']  = $this->accountType;
        $json['contactFname'] = $this->contactFname;
        $json['contactLname'] = $this->contactLname;
        $json['clientStatus'] = $this->clientStatus;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
