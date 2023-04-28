<?php

if (!function_exists('makeBody')) {
    function makeBody(array $body): array
    {
        $body = json_encode($body);

        return ['body' => $body];
    }
}

if (!function_exists('makeBodyMultipart')) {
    function makeBodyMultipart(array $params): array
    {
        foreach ($params as $key => $value) {
            $payload[] = ['name' => $key, 'contents' => $value];
        }

        return ['multipart' => $payload];
    }
}