<?php

namespace App\Patterns\Structural\FrontController;

/**
 *
 * Пример отображения страницы
 *
 * Class HomeView
 * @package App\Patterns\Structural\FrontController
 */
class HomeView
{

    /**
     * Отобразить содержимое страницы
     */
    public function show()
    {
        echo "Displaying Home Page" . PHP_EOL;
    }
}
