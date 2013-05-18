<?php
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


/**
 * Router factory.
 */
class RouterFactory {

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter() {
		$router = new RouteList();

		$router[] = new Route('index.php', array(
			'module'	=>	'Front',
			'presenter'	=>	'Homepage',
			'action'	=>	'default'
		), Route::ONE_WAY);

		$router[] = new Route('admin[/<presenter>[/<action>[/<id>]]]', array(
			'module'	=>	'Admin',
			'presenter'	=>	'Homepage',
			'action'	=>	'default',
			'id'		=>	NULL
		));

		$router[] = new Route('[/<presenter>[/<action>[/<id>]]]', array(
			'module'	=>	'Front',
			'presenter'	=>	'Homepage',
			'action'	=>	'default',
			'id'		=>	NULL
		));

		return $router;
	}

}
