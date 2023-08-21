<?php

declare(strict_types=1);

namespace Puxt\Request;

class Request implements RequestInterface
{
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getQueryParam(string $key): ?string
    {
        $queryParams = $this->getQueryParams();

        return empty($queryParams[$key]) ? null : $queryParams[$key];
    }

    public function getQueryParams(): array
    {
        $queryString = $this->getQueryString();

        if ($queryString === null) {
            return [];
        }

        parse_str($queryString, $queryParams);

        return $queryParams;
    }

    public function getQueryString(): ?string
    {
        $queryString = $_SERVER['QUERY_STRING'];

        return $queryString === '' ? null : $queryString;
    }
}