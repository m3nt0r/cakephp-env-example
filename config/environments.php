<?php
App::import('Vendor', 'Environment');

// config

Environment::configure('development', 
	array(
		'server' => 'localhost' //< if SERVER_NAME == 'localhost'
	),
	array(
		'debug' => 2 //> Configure::write('debug', 2)
	)
);

Environment::configure('staging', 
	array(
		'server' => 'dev.myapp.com' //< if SERVER_NAME == 'dev.myapp.com'
	),
	array(
		'debug' => 1 //> Configure::write('debug', 1)
	)
);

Environment::configure('production', 
	true, //< any other host is production
	array(
		'debug' => 0 //> Configure::write('debug', 0)
	)
);

// run

Environment::start();