<?php

declare(strict_types=1);

namespace Puxt\Request;

class Request implements RequestInterface
{
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}