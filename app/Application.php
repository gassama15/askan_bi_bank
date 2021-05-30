<?php
namespace App;

use App\Controllers\AdminController;

class Application
{
    public static function process()
    {
        $controllerName = 'AdminController';
        $task = 'index';

        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }

        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }

        $controllerName = '\App\Controllers\\' . $controllerName;

        // $controllerName = '\Controllers\\' . $controllerName;

        $controller = new $controllerName();
        $controller->$task();
    }
}