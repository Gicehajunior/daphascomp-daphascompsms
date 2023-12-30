<?php

declare(strict_types=1);

/*
 * OnfonDeveloperV1Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OnfonDeveloperV1Lib\Exceptions;

class SomeoneElseGroup2Exception extends ApiException
{
    /**
     * @var string
     */
    private $error;

    /**
     * @param string $reason
     * @param \OnfonDeveloperV1Lib\Http\HttpRequest $request
     * @param \OnfonDeveloperV1Lib\Http\HttpResponse $response
     * @param string $error
     */
    public function __construct(
        string $reason,
        \OnfonDeveloperV1Lib\Http\HttpRequest $request,
        \OnfonDeveloperV1Lib\Http\HttpResponse $response,
        string $error
    ) {
        parent::__construct($reason, $request, $response);
        $this->error = $error;
    }

    /**
     * Returns Error.
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @required
     * @maps error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }
}
