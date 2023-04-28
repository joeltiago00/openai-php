<?php

namespace OpenIA\Contracts;

use OpenIA\Modules\Edit\DTO\Edit;

interface EditInterface
{
    public function create(Edit $edit): array;
}