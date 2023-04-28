<?php

namespace OpenIA\Contracts;

use OpenIA\Modules\Image\DTO\Image;
use OpenIA\Modules\Image\DTO\ImageEdit;

interface ImageInterface
{
    public function create(Image $image): array;

    public function createEdit(ImageEdit $edit): array;
}