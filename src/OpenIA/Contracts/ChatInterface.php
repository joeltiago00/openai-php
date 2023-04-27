<?php

namespace OpenIA\Contracts;

use OpenIA\Modules\Chat\DTO\ChatCompletion;

interface ChatInterface
{
    public function create(ChatCompletion $chatCompletion): array;
}