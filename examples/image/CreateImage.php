<?php

use OpenIA\Modules\Chat\DTO\Edit;
use OpenIA\OpenIA;

require_once 'src/vendor/autoload.php';
require_once 'src/index.php';

$service = new OpenIA(config('app.secret-key'));

$dto = new Edit(
    'text-davinci-edit-001',
    'fix word'
);

$dto->setInput('nighborhood');

$response = $service->edit()->create($dto);
