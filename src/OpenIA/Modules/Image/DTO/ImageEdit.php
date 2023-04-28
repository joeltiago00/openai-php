<?php

namespace OpenIA\Modules\Image\DTO;

use OpenIA\DTO;

class ImageEdit extends DTO
{
    public ?string $mask = null;
    public ?int $n = null;
    public ?string $size = null;
    public ?string $responseFormat = null;
    public ?string $user = null;
    public $image;

    public function __construct(
        $image,
        public readonly string $prompt
    )
    {
        $this->image = $image;
    }

    public function setMask(string $value): self
    {
        $this->mask = $value;

        return $this;
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

    public function setResponseFormat(string $value): self
    {
        $this->responseFormat = $value;

        return $this;
    }

    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }
}