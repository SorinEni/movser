<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;

        // RouteList for the "Admin" module without showing the module name in the URL
        $adminModuleRouter = new RouteList('Admin');
        $adminModuleRouter->addRoute('admin/<presenter>/<action>[/<id \d+>]', [
            'presenter' => 'Dashboard',  // Default presenter for Admin module
            'action' => 'default',       // Default action
        ]);

        // RouteList for the "Front" module without showing the module name in the URL
        $frontModuleRouter = new RouteList('Front');
        $frontModuleRouter->addRoute('<presenter>/<action>[/<id \d+>]', [
            'presenter' => 'Home',       // Default presenter for Front module
            'action' => 'default',       // Default action
        ]);

        // Add the module routes to the main router
        $router[] = $adminModuleRouter;
        $router[] = $frontModuleRouter;

        return $router;
    }
}




