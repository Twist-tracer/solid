<?php

namespace App\Patterns\Structural\SessionFacade;

/**
 * Эмулирует работу с сессионными данными
 *
 * Class SessionObject
 * @package App\Patterns\Structural\SessionFacade
 */
class SessionObject
{
    /**
     * Метод получает из сессии необходимые данные и инициализирует создание сессионного объема
     */
    public static function getSessionData(): self
    {
        //get from $_SESSION data
        return new SessionObject;
    }
}
