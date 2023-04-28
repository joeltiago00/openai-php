<?php

namespace Tests\Unit\Image;

use OpenIA\Modules\Image\DTO\Image;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class CreateImageTest extends TestCase
{
    public function testSuccess()
    {
        $service = new OpenIA(config('app.secret-key'));

        $dto = new Image('blue sky');

        $response = $service->image()->create($dto);

        $this->assertArrayHasKey('created', $response);
        $this->assertArrayHasKey('data', $response);
    }
}