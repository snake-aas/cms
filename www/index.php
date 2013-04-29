<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require '.maintenance.php';


define('WWW_DIR', __DIR__);
define('BASE_DIR', __DIR__ . '/..');

define('CONFIG_DIR', BASE_DIR . '/app/config');

define('APP_DIR', BASE_DIR . '/app');
define('LIBS_DIR', BASE_DIR . '/libs');

define('LOG_DIR', BASE_DIR . '/log');
define('TEMP_DIR', BASE_DIR . '/temp');

define('ASSETS_DIR', BASE_DIR . '/app/assets');

// Let bootstrap create Dependency Injection container.
$container = require BASE_DIR . '/app/bootstrap.php';

// Run application.
$container->application->run();
