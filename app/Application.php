<?php
namespace App;

class Application
{
    public static function process()
    {
        $controllerName = 'AuthController';
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