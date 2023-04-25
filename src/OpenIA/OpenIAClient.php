<?php

namespace OpenIA;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use OpenIA\Contracts\OpenIAClientInterface;
use Psr\Http\Message\ResponseInterface;

class OpenIAClient implements OpenIAClientInterface
{

    private Client $httpClient;

    public function __construct(private readonly string $secretKey)
    {
        $this->setHttpClient();
    }

    private function setHttpClient(): void
    {
        $this->httpClient = new Client([
            'headers' => [
                'Authorization' => sprintf('Bearer %s', $this->secretKey),
                'Content-Type' => 'application/json'
            ],
                'verify' => false
        ]);
    }

    public function post(string $uri, array $payload): ResponseInterface
    {
        return $this->makeRequest('post', $uri, $payload);
    }

    public function get(string $uri): ResponseInterface
    {
        return $this->makeRequest('get', $uri);
    }

    private function makeRequest(string $method, string $uri, array $payload = []): ResponseInterface
    {
        try {
            return $this->httpClient->request($method, $uri, $payload);
        } catch (ServerException|ClientException $serverException) {
            return $serverException->getResponse();
        }
    }
}