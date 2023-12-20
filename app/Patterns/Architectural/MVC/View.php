<?php

namespace App\Patterns\Architectural\MVC;

class View
{
    private Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function output()
    {
        return "<p>" . $this->model->string . "</p>";
    }
}
