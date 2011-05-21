<?php
class DATABASE_CONFIG {

	// This is the default, generate by bake
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'test',
		'encoding' => 'utf8'
	);
	
	// Add properties for each of our environments
	
	var $development = array(
		'login' => 'dev',
		'password' => 'dev-pw',
		'database' => 'myapp_development',	
	);
	
	var $staging = array(
		'login' => 'staging',
		'password' => 'staging-pw',
		'database' => 'myapp_staging',	
	);
	
	var $production = array(
		'login' => 'live',
		'password' => 'live-pw',
		'database' => 'myapp_live',	
	);
	
	// Then add a __construct to this class to run some code when cake loads it
	
	function __construct() {
		
		// once Environment has decided where we at, it will write the name into Configure.
		if ($environment = Configure::read('Environment.name')) {
			
			// now i am gonna test if theres a property of the same name
			if (isset($this->{$environment})) {
				
				// if so, i then merge any options into $default.
				$this->default = array_merge($this->default, $this->{$environment});
			}
		}
		
		// if everything above went smooth, $this->default now has the correct login info.
		// Since we are using $default i dont need to change anything else in my app.
	}
}
?>