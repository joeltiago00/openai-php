<?php

namespace OpenIA\Contracts;

interface OpenIAServiceInterface
{
    public function model(): ModelInterface;

    public function chat(): ChatInterface;
}