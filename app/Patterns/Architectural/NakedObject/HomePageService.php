<?php

namespace App\Patterns\Architectural\NakedObject;

use App\Patterns\Architectural\NakedObject\HomePageViewModel;

/**
 * Сервис для вывода главной страницы
 *
 * Class HomePageService
 * @package App\Architecture\Patterns\Architectural\NakedObject
 */
class HomePageService
{

    /**
     * @var HomePageViewModel
     */
    private HomePageViewModel $model;

    /**
     * HomePageService constructor.
     */
    public function __construct()
    {
        $this->model = new HomePageViewModel();
    }

    /**
     * Вывести главную страницу
     */
    public function homePage(): HomePageViewModel
    {
        return $this->model;
    }
}
