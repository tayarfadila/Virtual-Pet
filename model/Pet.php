<?php

namespace App\Model;

class Pet extends Model 
{
    public $model_name = "pet_data";

    public function play() : void{
        $this->update([
            'happiness' => min($this->data['happiness'] + 1, 10)
        ]);
    }
    
    public function feed() : void{
        $this->update([
            'hunger' => max($this->data['hunger'] - 1, 0)
        ]);
    }
    
    public function bored() : void{
        $this->update([
            'happiness' => max($this->data['happiness'] - 1, 0)
        ]);
    }
    
    public function hunger() : void{
        $this->update([
            'hunger' => min($this->data['hunger'] + 1, 10)
        ]);
    }
}
