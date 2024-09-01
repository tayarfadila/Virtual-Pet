<?php

namespace App\Core;

class Router 
{
    public function __construct(public Request $request, public Response $response, public array $routes = []) {
    }
    
    public function get($path, $action) {
        $this->routes['get'][$path] = $action;
    }

    public function post($path, $action) {
        $this->routes['post'][$path] = $action;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $action = $this->routes[$method][$path] ?? false;

        if ($action === false) {
            $this->response->setStatusCode(404);
            echo 'Not Found';
            exit;
        }

        if (is_string($action)) {
            return $this->renderView($action);
        }

        return call_user_func([new $action[0],$action[1]]);

    }

    public function renderView($view, array $args = []) {
        extract($args); 
        include_once Application::$ROOT_RATH . "/View/$view.php";
    }
}
