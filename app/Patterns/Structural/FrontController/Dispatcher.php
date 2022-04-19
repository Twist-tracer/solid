<?php

namespace App\Patterns\Structural\FrontController;

/**
 * Пример класса Диспетчера
 *
 * Class Dispatcher
 * @package App\Patterns\Structural\FrontController
 */
class Dispatcher
{
    private StudentView $studentView;
    private HomeView $homeView;

    public function __construct()
    {
        $this->studentView = new StudentView();
        $this->homeView = new HomeView();
    }

    /**
     * Обработка запроса диспетчером
     *
     * @param string $request
     */
    public function dispatch(string $request): void
    {
        if ($request == "STUDENT") {
            $this->studentView->show();
        } else {
            $this->homeView->show();
        }
    }
}
