<?php

declare(strict_types=1);

namespace Puxt\Request;

interface RequestInterface
{
    public function getMethod(): string;
}