<?php

require __DIR__ . '/vendor/autoload.php';
require_once('config.php');
require_once('route.php');

$base = new Core\Base();
$response = $base->match($routes);

echo $response;
