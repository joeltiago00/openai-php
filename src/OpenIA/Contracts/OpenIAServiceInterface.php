<?php

namespace OpenIA\Contracts;

interface OpenIAServiceInterface
{
    public function models(): ModelInterface;

    public function chat(): ChatInterface;

    public function edit(): EditInterface;

    public function image(): ImageInterface;
}