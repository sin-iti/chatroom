<?php
	use Workerman\Worker;
	use Workerman\WebServer;
	use Workerman\Protocols\Http;
	require_once 'workerman/Autoloader.php';
	// $myHttpMethod = new newhttp();
	

	$myHTTP = new WebServer('http://192.168.199.189:3000');
	$myHTTP->count = 1;
	$myHTTP->addRoot('www.your_domain.com', __DIR__.'/app');
	
	Worker::runAll();
	
	
	// var_dump($_SESSION);
?>