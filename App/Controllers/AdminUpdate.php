<?php

namespace App\Controllers;

class AdminUpdate extends \App\Controller
{
    protected function action() //Редактирование новостей
    {
        $data = \App\Models\Article::findById( $_POST['update'] );

        $data->header = $_POST['header'];
        $data->text = $_POST['text'];

        $data->save(); //сохраняем данные

        header('Location: /../../admin/index.php');
    }

}