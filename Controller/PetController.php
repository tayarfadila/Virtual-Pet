<?php 

namespace App\Controller;

use App\Model\Pet;

class PetController
{
    public function __construct(public Pet $pet = new Pet()) {
        
    }
    public function feed() {
        $this->pet->feed();
        header('Location: /');
        exit();
    }

    public function play() {
        $this->pet->play();
        header('Location: /');
        exit();
    }

    public function bored() {
        $this->pet->bored();
        header('Location: /');
        exit();
    }

    public function hunger() {
        $this->pet->hunger();
        header('Location: /');
        exit();
    }

    public function info() {
        return json_encode($this->pet->data);
    }
}
