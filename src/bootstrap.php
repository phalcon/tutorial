<?php

declare(strict_types=1);

use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;

return static function (): Application {
    $viewsDir = __DIR__ . '/views/';

    // Create a Dependency Injection container with the framework defaults
    $container = new FactoryDefault();

    // Controllers live under the Tutorial\Controllers namespace
    $container->set('dispatcher', function () {
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace('Tutorial\\Controllers');

        return $dispatcher;
    });

    // Views
    $container->set('view', function () use ($viewsDir) {
        $view = new View();
        $view->setViewsDir($viewsDir);

        return $view;
    });

    // Base URI
    $container->set('url', function () {
        $url = new Url();
        $url->setBaseUri('/');

        return $url;
    });

    // Database — reads env vars (set by docker-compose / CI) with local defaults
    $container->set('db', function () {
        return new Mysql(
            [
                'host'     => getenv('DB_HOST') ?: '127.0.0.1',
                'username' => getenv('DB_USERNAME') ?: 'root',
                'password' => getenv('DB_PASSWORD') ?: 'secret',
                'dbname'   => getenv('DB_NAME') ?: 'tutorial',
            ]
        );
    });

    return new Application($container);
};
