<?php

namespace OpenIA\Modules\Chat\DTO;

use OpenIA\DTO;

class ChatCompletion extends DTO
{
    public function __construct(
        public readonly string $model,
        public readonly array $messages,
        public readonly null|int|float $temperature = null,
        public readonly null|int|float $topP = null,
        public readonly ?int $n = null,
        public readonly ?bool $stream = null,
        public readonly string|array|null $stop = null,
        public readonly ?int $maxTokens = null,
        public readonly null|int|float $presencePenalty = null,
        public readonly null|int|float $frequencyPenalty = null,
        public readonly ?string $user = null
    )
    {
    }
}