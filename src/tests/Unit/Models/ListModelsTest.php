<?php

namespace Tests\Unit\Model;

use OpenIA\OpenIAClient;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class ListModelsTest extends TestCase
{
    public function testSuccess()
    {
        $client = new OpenIAClient(config('app.secret-key'));

        $service = new OpenIA($client);

        $response = $service->listModels();

        $this->assertArrayHasKey('id', $response['data'][0]);
        $this->assertArrayHasKey('object', $response['data'][0]);
        $this->assertArrayHasKey('created', $response['data'][0]);
        $this->assertArrayHasKey('owned_by', $response['data'][0]);
        $this->assertArrayHasKey('permission', $response['data'][0]);
        $this->assertArrayHasKey('root', $response['data'][0]);
        $this->assertArrayHasKey('parent', $response['data'][0]);
    }
}