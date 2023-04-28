<?php

namespace OpenIA\Contracts;

use OpenIA\Modules\Image\DTO\Image;

interface ImageInterface
{
    public function create(Image $image): array;
}