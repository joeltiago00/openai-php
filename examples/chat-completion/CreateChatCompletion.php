<?php

use OpenIA\Modules\Chat\DTO\ChatCompletion;
use OpenIA\OpenIA;

require_once 'src/vendor/autoload.php';
require_once 'src/index.php';

$service = new OpenIA(config('app.secret-key'));

$dto = new ChatCompletion('gpt-3.5-turbo', [
    ['role' => 'user', 'content' => '1+1=?']
]);

$response = $service->chatCompletion()->create($dto);
