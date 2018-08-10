<?php

//Точка входа
require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI']; //в Apach преобразование адресов
$parts = explode('/', $uri);

if ( $parts[1] == 'admin' ) { //если в начале admin
    $name = ucfirst($parts[1]);

} else {
    $name = !empty($parts[1]) ? ucfirst($parts[1]) : 'Index'; //выбираем один из двух вариантов //роутер
    $path = __DIR__ . '/App/Controllers/' . $name . '.php';

    if ( false == file_exists($path) ) {
        header('Location: /');
    }
}

//$name = $_GET['ctrl'] ?? 'Index'; //3. Продумали систему адресов пример: index.php?ctrl=CTRL, где CTRL - имя контроллера (каждый контроллер выполняет одно действие)
$class = '\App\Controllers\\' . $name; //роутер

$ctrl = new $class;
$ctrl->dispatch();
