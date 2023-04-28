<?php

namespace Tests\Unit\Image;

use OpenIA\Modules\Image\DTO\ImageEdit;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class CreateEditImageTest extends TestCase
{
    public function testSuccess()
    {
        // TODO:: get valid image to fix test
        $this->markTestSkipped();
        $service = new OpenIA(config('app.secret-key'));

        $dto = new ImageEdit(fopen('...', 'r'), 'put in ocean');

        $response = $service->image()->createEdit($dto);

        $this->assertArrayHasKey('created', $response);
        $this->assertArrayHasKey('data', $response);
    }
}