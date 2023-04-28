<?php

namespace OpenIA\Modules\Edit\DTO;

use OpenIA\DTO;

class Edit extends DTO
{
    public ?string $input = null;
    public ?int $n = null;
    public ?float $temperature = null;
    public ?float $topN = null;

    public function __construct(
        public readonly string $model,
        public readonly string $instruction
    )
    {
    }

    public function setInput(string $value): self
    {
        $this->input = $value;

        return $this;
    }

    public function setN(int $value): self
    {
        $this->n = $value;

        return $this;
    }

    public function setTemperature(float $value): self
    {
        $this->temperature = $value;

        return $this;
    }

    public function setTopN(float $value): self
    {
        $this->topN = $value;

        return $this;
    }
}