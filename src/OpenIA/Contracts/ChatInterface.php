<?php

namespace OpenIA\Contracts;

use OpenIA\Modules\Chat\DTO\ChatCompletion;
use OpenIA\Modules\Chat\DTO\Edit;

interface ChatInterface
{
    public function createChatCompletion(ChatCompletion $chatCompletion): array;

    public function createEdit(Edit $edit): array;
}