<?php

namespace App;

class Base
{
    public $test = "test";

    public function show($viewName)
    {
        require_once __DIR__ . "/views/$viewName.php";
    }
}