<?php

namespace App\Patterns\Architectural\NakedObject;

use App\Patterns\Architectural\NakedObject\HomePageViewModel;

/**
 * Простое приложение
 *
 * Class SimpleApplication
 * @package App\Architecture\Patterns\Architectural\NakedObject
 */
class SimpleApplication
{

    /**
     * Точка входа
     */
    public static function init(): void
    {
        $home = new HomePageViewModel();
        $home->title();
        $home->show();
    }
}
