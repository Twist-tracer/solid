<?php

namespace App\Patterns\Structural\ActiveRecord;

class Client
{
    public function mail()
    {
        // Пример вызова метода Active Record
        $articles = Article::findAll();
    }
}
