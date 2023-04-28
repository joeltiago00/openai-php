<?php

namespace tests\Unit\Edit;

use OpenIA\Modules\Edit\DTO\Edit;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class CreateEditTest extends TestCase
{
    public function testSuccess()
    {
        $service = new OpenIA(config('app.secret-key'));

        $dto = new Edit(
            'text-davinci-edit-001',
            'fix spells'
        );

        $dto->setInput('nighborhood');

        $response = $service->edit()->create($dto);

        $this->assertTrue(str_contains($response['choices'][0]['text'], 'neighborhood'));
        $this->assertArrayHasKey('object', $response);
        $this->assertArrayHasKey('created', $response);
        $this->assertArrayHasKey('choices', $response);
        $this->assertArrayHasKey('usage', $response);
    }
}