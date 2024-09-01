<?php

namespace App\Model;

use App\Core\Application;

class Model         
{
    public $data = [];
    public $model_name = "";
    public $table_address;

    public function  __construct() {
        $this->table_address = Application::$ROOT_RATH . "/database/$this->model_name.json";
        $this->data = json_decode(file_get_contents($this->table_address), true);    
    }

    public function update(Array $updates) : bool{
        if (empty($updates) || !empty(array_diff(array_keys($updates), array_keys($this->data)))) {
            return false;
        }

        foreach ($updates as $key => $update) {
            $this->data[$key] = $update; 
        }

        $this->saveData();
        return true;
    }

    public function saveData() : void{
        file_put_contents($this->table_address, json_encode($this->data));
    }
}
