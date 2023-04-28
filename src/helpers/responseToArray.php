<?php

use Psr\Http\Message\ResponseInterface;

if (!function_exists('responseToArray')) {
    function responseToArray(ResponseInterface $response): array
    {
        return json_decode($response->getBody(), true);
    }
}
