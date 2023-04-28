<?php

namespace Tests\Unit\Chat;

use OpenIA\Modules\Chat\DTO\ChatCompletion;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class CreateChatCompletionTest extends TestCase
{
    public function testSuccessWithNumberOperation()
    {
        $service = new OpenIA(config('app.secret-key'));

        $dto = new ChatCompletion('gpt-3.5-turbo', [
            ['role' => 'user', 'content' => '1+1=?']
        ]);

        $response = $service->chat()
        ->createChatCompletion($dto);

        $this->assertEquals(2, $response['choices'][0]['message']['content']);
    }

    public function testFailInvalidToken()
    {
        $service = new OpenIA('invalid_key');

        $dto = new ChatCompletion('gpt-3.5-turbo', [
            ['role' => 'user', 'content' => '1+1=?']
        ]);

        $response = $service->chat()
            ->createChatCompletion($dto);

        $this->assertEquals('invalid_api_key', $response['error']['code']);
    }
}