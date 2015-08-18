<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		
		$router = new RouteList();
		$router[] = new Route('admin/<presenter>/<action>', array (
		    'module' => 'Admin',
		    'presenter' => 'Sign',
		    'action' => 'in'
		    ));
		$router[] = new Route('<presenter>/<action>/[id]', array (
		    'module' => 'Front',
		    'presenter' => 'Homepage',
		    'action' => 'default'
		    
	                          
		    ));	             
                    return $router;
	}

}
