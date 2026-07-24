<?php

declare(strict_types=1);

use Phalcon\Mvc\Application;

$basePath = dirname(__DIR__);

require_once $basePath . '/vendor/autoload.php';

/** @var callable(): Application $factory */
$factory = require $basePath . '/src/bootstrap.php';

// Handle the request
try {
    $application = $factory();
    $application->handle($_SERVER['REQUEST_URI'])->send();
} catch (Throwable $e) {
    echo 'Exception: ', $e->getMessage();
}
