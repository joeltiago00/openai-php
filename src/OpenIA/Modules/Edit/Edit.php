<?php

namespace OpenIA\Modules\Edit;

use OpenIA\Contracts\EditInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Enums\RouteEnum;
use OpenIA\Modules\Edit\DTO\Edit as EditDTO;

class Edit implements EditInterface
{
    public function __construct(private readonly OpenIAClientInterface $client)
    {
    }

    public function create(EditDTO $edit): array
    {
        $response = $this->client
            ->post(RouteEnum::CREATE_CHAT_EDIT->route(), makeBody($edit->toArray()));

        return responseToArray($response);
    }
}