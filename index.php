<?php

require_once 'helper.php';

use App\Base;
use App\Dynamic;

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/") {

    require 'App/views/mainPage.php';

} elseif ($uri === "/static") {

    $base = new Base();
    $base->show("staticContent");

} elseif ($uri === "/dynamic") {

    require_once 'db.php';

    $dynamic = new Dynamic($pdo);
    $dynamic->show("dynamicContent");

} else require_once 'App/views/404.php';

