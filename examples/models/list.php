<?php

use OpenIA\OpenIA;

require_once 'src/vendor/autoload.php';
require_once 'src/index.php';

$service = new OpenIA(config('app.secret-key'));

$models = $service->model()->list();
