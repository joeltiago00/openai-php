<?php

namespace OpenIA\Enums;

enum RouteEnum
{
    case LIST_MODELS;
    case CREATE_CHAT_COMPLETION;
    case CREATE_CHAT_EDIT;

    public function route(): string
    {
        return match ($this) {
            self::LIST_MODELS => 'https://api.openai.com/v1/models',
            self::CREATE_CHAT_COMPLETION => 'https://api.openai.com/v1/chat/completions',
            self::CREATE_CHAT_EDIT => 'https://api.openai.com/v1/edits',
        };
    }
}
