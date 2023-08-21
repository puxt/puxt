<?php

declare(strict_types=1);

namespace Puxt\Request;

interface RequestInterface
{
    /**
     * Get the request method used to access the endpoint
     *
     * @return string
     */
    public function getMethod(): string;
}