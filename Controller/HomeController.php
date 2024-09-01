<?php 

namespace App\Controller;

use App\Core\Application;
use App\Model\Pet;

class HomeController 
{
    public function index() {
        $pet = new Pet();
        
        return Application::$app->router->renderView('home', ['pet' => $pet]);
    }
}
