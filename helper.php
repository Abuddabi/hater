<?php
//phpinfo(); die;

//ВКЛЮЧЕНИЕ ОТЧЕТА ОБ ОШИБКАХ
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function (string $className) {
    $file = __DIR__ .'/'. str_replace('\\', '/', $className) . '.php';
//    echo $file; die;
    if (file_exists($file)) {
        require "$file";
    } else {
        echo "Ошибка автозагрузки классов";
    }
});