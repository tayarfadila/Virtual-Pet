<?php

namespace App\Core;

class Request
{
    public  function getPath() : string {
        return $_SERVER['PATH_INFO'] ?? '/';
    } 

    public  function getMethod() : string {
        return strtolower($_SERVER['REQUEST_METHOD']);
    } 
}
