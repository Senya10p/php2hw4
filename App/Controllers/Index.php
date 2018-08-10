<?php

namespace App\Controllers;

class Index extends \App\Controller
{
    protected function action()
    {
        $this->view->data = \App\Models\Article::findAll(); //Получаем все новости
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

}