<?php

namespace App\Patterns\Architectural\MVC;

/**
 * Class Controller
 * @package App\Architecture\Patterns\Architectural\MVC
 */
class Controller
{
    private Model $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function clicked()
    {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}
