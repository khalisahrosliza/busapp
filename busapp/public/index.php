<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
$maintenanceFilePath = __DIR__ . '/../storage/framework/maintenance.php';
if (file_exists($maintenanceFilePath)) {
    require $maintenanceFilePath;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

$request = Request::capture();
$response = $app->handle($request);

$response->send();
$app->terminate($request, $response);
