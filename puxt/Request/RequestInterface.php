<?php

declare(strict_types=1);

namespace Puxt\Request;

interface RequestInterface
{
    public function getMethod(): string;

    public function getQueryParam(string $key): ?string;

    public function getQueryParams(): array;

    public function getQueryString(): ?string;
}