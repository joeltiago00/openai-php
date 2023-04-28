<?php

use OpenIA\Modules\Image\DTO\Image;
use OpenIA\OpenIA;

require_once 'src/vendor/autoload.php';
require_once 'src/index.php';

$service = new OpenIA(config('app.secret-key'));

$dto = new Image('programador bravo com o código');

$response = $service->image()->create($dto);
