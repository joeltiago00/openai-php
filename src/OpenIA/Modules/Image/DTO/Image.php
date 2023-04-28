<?php

namespace OpenIA\Modules\Image\DTO;

use OpenIA\DTO;

class Image extends DTO
{
    public ?int $n = null;
    public ?string $size = null;
    public ?string $format = null;
    public ?string $user = null;

    public function __construct(
        public readonly string $prompt
    )
    {
    }

    public function setN(int $value): self
    {
        $this->n = $value;

        return $this;
    }

    public function setSize(string $value): self
    {
        $this->size = $value;

        return $this;
    }

    public function setFormat(string $value): self
    {
        $this->format = $value;

        return $this;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }
}