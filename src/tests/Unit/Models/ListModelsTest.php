<?php

namespace Tests\Unit\Model;

use OpenIA\OpenIAClient;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class ListModelsTest extends TestCase
{
    public function testSuccess()
    {
        // TODO:: fix error of config (ps: anothers tests works...)
        $this->markTestSkipped();
        $service = new OpenIA(config('app.secret-key'));

        $response = $service->models()->list();

        $this->assertArrayHasKey('id', $response['data'][0]);
        $this->assertArrayHasKey('object', $response['data'][0]);
        $this->assertArrayHasKey('created', $response['data'][0]);
        $this->assertArrayHasKey('owned_by', $response['data'][0]);
        $this->assertArrayHasKey('permission', $response['data'][0]);
        $this->assertArrayHasKey('root', $response['data'][0]);
        $this->assertArrayHasKey('parent', $response['data'][0]);
    }
}