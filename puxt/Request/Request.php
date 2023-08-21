<?php

declare(strict_types=1);

namespace Puxt\Request;

class Request implements RequestInterface
{
    /**
     * Get the request method used to access the endpoint
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getQueryString(): ?string
    {
        $queryString = $_SERVER['QUERY_STRING'];

        return $queryString === '' ? null : $queryString;
    }
}