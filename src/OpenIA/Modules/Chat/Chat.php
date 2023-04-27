<?php

namespace OpenIA\Modules\Chat;

use OpenIA\Contracts\ChatInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Enums\RouteEnum;
use OpenIA\Modules\Chat\DTO\ChatCompletion;

class Chat implements ChatInterface
{
    public function __construct(private readonly OpenIAClientInterface $client)
    {
    }

    public function createChatCompletion(ChatCompletion $chatCompletion): array
    {
        $body = json_encode($chatCompletion->toArray());

        $response = $this->client
            ->post(RouteEnum::CREATE_CHAT_COMPLETION->route(), ['body' => $body]);

        return json_decode($response->getBody(), true);
    }
}