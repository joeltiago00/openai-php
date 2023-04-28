<?php

namespace OpenIA\Enums;

enum RouteEnum
{
    case LIST_MODELS;
    case CREATE_CHAT_COMPLETION;
    case CREATE_CHAT_EDIT;
    case CREATE_IMAGE;

    public function route(): string
    {
        return match ($this) {
            self::LIST_MODELS => 'https://api.openai.com/v1/models',
            self::CREATE_CHAT_COMPLETION => 'https://api.openai.com/v1/chat/completions',
            self::CREATE_CHAT_EDIT => 'https://api.openai.com/v1/edits',
            self::CREATE_IMAGE => 'https://api.openai.com/v1/images/generations'
        };
    }
}
