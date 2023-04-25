<?php

namespace OpenIA\Contracts;

use Psr\Http\Message\ResponseInterface;

interface OpenIAClientInterface
{
    public function get(string $uri): ResponseInterface;

    public function post(string $uri, array $payload): ResponseInterface;
}