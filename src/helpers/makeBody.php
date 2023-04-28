<?php

if (!function_exists('makeBody')) {
    function makeBody(array $body): array
    {
        $body = json_encode($body);

        return ['body' => $body];
    }
}