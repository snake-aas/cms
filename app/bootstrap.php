<?php

// Load Nette Framework or autoloader generated by Composer

use Nette\Config\Configurator;

require LIBS_DIR . '/autoload.php';

$configurator = new Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode(TRUE);
$configurator->enableDebugger(LOG_DIR);

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(TEMP_DIR);
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(CONFIG_DIR . '/config.neon', Configurator::NONE);
$configurator->addConfig(CONFIG_DIR . '/config.local.neon', Configurator::NONE);

// Load necessary compiler extensions
$webloaderExtension = new WebLoader\Nette\Extension();
$webloaderExtension->install($configurator);

Kdyby\Console\DI\ConsoleExtension::register($configurator);
Kdyby\Events\DI\EventsExtension::register($configurator);
Kdyby\Doctrine\DI\OrmExtension::register($configurator);


// Let's create a container
$container = $configurator->createContainer();

return $container;
