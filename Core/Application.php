<?php

namespace App\Core;

class Application 
{
    public Router $router;
    public static $ROOT_RATH;
    public static Application $app;
    
    public function __construct(string $rootPath, 
        public Request $request = new Request(), 
        public Response $response = new Response()
    ){
        self::$ROOT_RATH = $rootPath;
        self::$app = $this;
        $this->router = new Router($request, $response);
    }

    public function run() {
        echo $this->router->resolve();
    }
}
