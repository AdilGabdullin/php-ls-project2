<?php

namespace Project2;

use Exception;

class Route
{
    public static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controllerName = ucfirst(strtolower($routes[1]));
        }
        // получаем имя действия
        if (!empty($routes[2])) {
            $actionName = strtolower($routes[2]);
        }

        // подцепляем файл с классом контроллера
        $controllerFile = __DIR__ . "/../controllers/$controllerName.php";
        try {
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            } else {
                throw new Exception("File not found");
            }
            $className = '\Project2\\Controllers\\' . $controllerName;
            if (class_exists($className)) {
                $controller = new $className();
            } else {
                throw new Exception("File found but class($className) not found");
            }
            if (method_exists($controller, $actionName)) {
                $controller->$actionName(... array_slice($routes, 3));
            } else {
                throw new Exception("Method not found");
            }
        } catch (Exception $e) {
            require __DIR__ . '/../../errors/404.php';
        }
    }
}
