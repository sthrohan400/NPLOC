<?php
namespace Modules;

class RoutesServiceProvider {
    public function __construct(){
    }
    public  function runRoutes(){
        require_once(base_path('Modules/Users/routes.php'));
        require_once(base_path('Modules/Company/routes.php'));
    }

}
