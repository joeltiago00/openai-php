<?php

namespace OpenIA;

use OpenIA\Contracts\ChatInterface;
use OpenIA\Contracts\ModelInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Contracts\OpenIAServiceInterface;
use OpenIA\Modules\Chat\Chat;
use OpenIA\Modules\Model\Model;

class OpenIA implements OpenIAServiceInterface
{
    private OpenIAClientInterface $client;

    public function __construct(string $secretKey)
    {
        $this->client = new OpenIAClient($secretKey);
    }

    public function chat(): ChatInterface
    {
        return new Chat($this->client);
    }

    public function models(): ModelInterface
    {
        return new Model($this->client);
    }
}