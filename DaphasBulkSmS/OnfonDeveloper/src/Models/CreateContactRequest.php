<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Models;

use stdClass;

class CreateContactRequest implements \JsonSerializable
{
    /**
     * @var Contact
     */
    private $contact;

    /**
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Returns Contact.
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * Sets Contact.
     *
     * @required
     * @maps contact
     */
    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
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
        $json['contact'] = $this->contact;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
