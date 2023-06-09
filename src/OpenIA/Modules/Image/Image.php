<?php

namespace OpenIA\Modules\Image;

use OpenIA\Contracts\ImageInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Enums\RouteEnum;
use OpenIA\Modules\Image\DTO\Image as ImageDTO;
use OpenIA\Modules\Image\DTO\ImageEdit;

class Image implements ImageInterface
{
    public function __construct(private readonly OpenIAClientInterface $client)
    {
    }

    public function create(ImageDTO $image): array
    {
        $response = $this->client
            ->post(
                RouteEnum::CREATE_IMAGE->route(),
                makeBody($image->toArray())
            );

        return responseToArray($response);
    }

    public function createEdit(ImageEdit $edit): array
    {

        $response = $this->client
            ->post(
                RouteEnum::CREATE_IMAGE_EDIT->route(),
                makeBodyMultipart($edit->toArray())
            );

        return responseToArray($response);
    }
}