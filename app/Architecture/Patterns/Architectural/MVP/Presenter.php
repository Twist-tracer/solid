<?php

namespace App\Architecture\Patterns\Architectural\MVP;

class Presenter
{
    private Model $model;
    private View $view;

    /**
     * Presenter constructor.
     * @param Model $model
     * @param View $view
     */
    public function __construct(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function indexAction(): string
    {
        // Получение данных для передачи в представление
        $data = $this->model->getSomeStuff();
        // Значения установлены и теперь формируем HTML в виде строки
        return $this->view->render('path/to/template.phtml', $data);
    }
}
