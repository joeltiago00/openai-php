<?php

namespace OpenIA\Modules\Chat\DTO;

use OpenIA\DTO;

class Message extends DTO
{
    public function __construct(
        public readonly string $role,
        public readonly string $content,
        public readonly ?string $name = null
    )
    {
    }
}