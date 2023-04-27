<?php

namespace OpenIA;

use OpenIA\Contracts\ChatInterface;
use OpenIA\Contracts\ModelInterface;
use OpenIA\Contracts\OpenIAClientInterface;
use OpenIA\Contracts\OpenIAServiceInterface;
use OpenIA\Modules\Chat\ChatCompletion;
use OpenIA\Modules\Model\Model;

class OpenIA implements OpenIAServiceInterface
{
    private OpenIAClientInterface $client;

    public function __construct(string $secretKey)
    {
        $this->client = new OpenIAClient($secretKey);
    }

    public function chatCompletion(): ChatInterface
    {
        return new ChatCompletion($this->client);
    }

    public function models(): ModelInterface
    {
        return new Model($this->client);
    }
}