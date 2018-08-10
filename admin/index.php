<?php

//4. Точка входа для админ-панели
require __DIR__ . '/../autoload.php';

$uri = $_SERVER['REQUEST_URI']; //в Apach преобразование адресов
$parts = explode('/', $uri);

$name = !empty($parts[1]) ? ucfirst($parts[1]) : 'Admin';

if ( isset( $_POST['header'], $_POST['text'] ) ) {
    $name = 'AdminAdd';
}
if ( isset( $_POST['update'] ) ) {
    $name = 'AdminUpdate';
}
if ( isset( $_POST['del'] ) ) {
    $name = 'AdminDel';
}
$class = '\App\Controllers\\' . $name; //роутер
$ctrl2 = new $class;
$ctrl2->dispatch();
