<?php

use OpenIA\Modules\Image\DTO\ImageEdit;
use OpenIA\OpenIA;

require_once 'src/vendor/autoload.php';
require_once 'src/index.php';

$service = new OpenIA(config('app.secret-key'));

$dto = new ImageEdit(fopen('relative_path.pgn', 'r'), 'put in ocean');

$response = $service->image()->createEdit($dto);
