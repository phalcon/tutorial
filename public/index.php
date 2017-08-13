<?php

use Phalcon\Loader;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

// Register an autoloader
$loader = new Loader();
$loader->registerDirs(
    array(
        APP_PATH . '/controllers/',
        APP_PATH . '/models/'
    )
)->register();

// Create a DI
$di = new FactoryDefault();

// Setting up the view component
$di['view'] = function() {
    $view = new View();
    $view->setViewsDir(APP_PATH . '/views/');
    return $view;
};

// Setup a base URI so that all generated URIs include the "tutorial" folder
$di['url'] = function() {
    $url = new Url();
    $url->setBaseUri('/');
    return $url;
};

// Set the database service
$di['db'] = function() {
    return new DbAdapter(array(
        "host"     => "127.0.0.1",
        "username" => "root",
        "password" => "secret",
        "dbname"   => "tutorial1"
    ));
};

// Handle the request
try {
    $application = new Application($di);
    echo $application->handle()->getContent();
} catch (Exception $e) {
     echo "Exception: ", $e->getMessage();
}
