<?php

namespace OpenIA\Modules\Chat\DTO;

use OpenIA\DTO;

class ChatCompletion extends DTO
{
    public function __construct(
        public readonly string $model,
//        /** @var Message[] $messages */
        public readonly array $messages,
        public readonly ?int $temperature = null,
        public readonly ?int $topP = null,
        public readonly ?int $n = null,
        public readonly ?bool $stream = null,
        public readonly string|array|null $stop = null,
        public readonly ?int $maxTokens = null,
        public readonly ?int $presencePenalty = null,
        public readonly ?int $frequencyPenalty = null,
        public readonly ?string $user = null
    )
    {
    }
}