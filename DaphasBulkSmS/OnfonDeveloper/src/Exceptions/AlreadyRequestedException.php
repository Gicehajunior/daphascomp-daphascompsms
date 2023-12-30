<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Exceptions;

class AlreadyRequestedException extends ApiException
{
    /**
     * @var int
     */
    private $codeProperty;

    /**
     * @var string
     */
    private $messageProperty;

    /**
     * @var string[]
     */
    private $details;

    /**
     * @param string $reason
     * @param \OnfonDeveloperV1Lib\Http\HttpRequest $request
     * @param \OnfonDeveloperV1Lib\Http\HttpResponse $response
     * @param int $codeProperty
     * @param string $messageProperty
     * @param string[] $details
     */
    public function __construct(
        string $reason,
        \OnfonDeveloperV1Lib\Http\HttpRequest $request,
        \OnfonDeveloperV1Lib\Http\HttpResponse $response,
        int $codeProperty,
        string $messageProperty,
        array $details
    ) {
        parent::__construct($reason, $request, $response);
        $this->codeProperty = $codeProperty;
        $this->messageProperty = $messageProperty;
        $this->details = $details;
    }

    /**
     * Returns Code Property.
     */
    public function getCodeProperty(): int
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     *
     * @required
     * @maps code
     */
    public function setCodeProperty(int $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @required
     * @maps message
     */
    public function setMessageProperty(string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Details.
     *
     * @return string[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @required
     * @maps details
     *
     * @param string[] $details
     */
    public function setDetails(array $details): void
    {
        $this->details = $details;
    }
}
