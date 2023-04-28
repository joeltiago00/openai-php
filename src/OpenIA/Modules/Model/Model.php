<?php

namespace OpenIA\Modules\Model;

use OpenIA\Contracts\ModelInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Enums\RouteEnum;

class Model implements ModelInterface
{
    public function __construct(private readonly OpenIAClientInterface $client)
    {
    }

    public function list(): array
    {
        $response = $this->client
            ->get(RouteEnum::LIST_MODELS->route());

        return responseToArray($response);
    }
}