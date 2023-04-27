<?php

namespace Tests\Unit\Chat;

use OpenIA\Modules\Chat\DTO\ChatCompletion;
use OpenIA\OpenIA;
use PHPUnit\Framework\TestCase;

class CreateChatCompletionTest extends TestCase
{
    /**
     * @group l
     */
    public function testSuccessWithNumberOperation()
    {
        $service = new OpenIA(config('app.secret-key'));

        $dto = new ChatCompletion('gpt-3.5-turbo', [
            ['role' => 'user', 'content' => '1+1=?']
        ]);

        $response = $service->chatCompletion()
        ->create($dto);

        $this->assertEquals(2, $response['choices'][0]['message']['content']);
    }

    /**
     * @group l
     */
    public function testFailInvalidToken()
    {
        $service = new OpenIA('invalid_key');

        $dto = new ChatCompletion('gpt-3.5-turbo', [
            ['role' => 'user', 'content' => '1+1=?']
        ]);

        $response = $service->chatCompletion()
            ->create($dto);

        $this->assertEquals('invalid_api_key', $response['error']['code']);
    }
}