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
        $response = $this->client
            ->post(RouteEnum::CREATE_CHAT_COMPLETION->route(), makeBody($chatCompletion->toArray()));

        return responseToArray($response);
    }
}