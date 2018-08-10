<?php

namespace App\Controllers;

use App\Models;

class AdminAdd extends \App\Controller
{
    protected function action() //Добавление новостей
    {
        if ( '' !== $_POST['header'] ) { //проверка введен ли заголовок
            if ( '' !== $_POST['text'] ) { //введён ли текст статьи

                $data = new Models\Article();

                $data->header = $_POST['header'];
                $data->text = $_POST['text'];

                $data->save(); //добавляет новую статью
            }
        }
        header('Location: /../../admin/index.php');
    }

}