<?php

try {

	$config = new Phalcon_Config(array(
		'database' => array(
			'adapter' => 'Mysql',
			'host' => 'localhost',
			'username' => 'test',
			'password' => 'test',
			'name' => 'test_db'
		),
		'phalcon' => array(
			'controllersDir' => '../app/controllers/',
			'modelsDir' => '../app/models/',
			'viewsDir' => '../app/views/'
		)
	));

	$front = Phalcon_Controller_Front::getInstance();
	$front->setConfig($config);
	echo $front->dispatchLoop()->getContent();

}
catch(Phalcon_Exception $e){
	echo 'PhalconException: '.$e->getMessage(), PHP_EOL;
}

