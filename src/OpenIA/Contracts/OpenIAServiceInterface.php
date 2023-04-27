<?php

namespace OpenIA\Contracts;

interface OpenIAServiceInterface
{
    public function models(): ModelInterface;

    public function chat(): ChatInterface;
}