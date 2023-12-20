<?php

namespace App\Patterns\Structural\BusinessDelegate;

/**
 * Служба поиска
 *
 * Class BusinessLookUp
 * @package App\Patterns\Structural\BusinessDelegate
 */
class BusinessLookUp
{
    /**
     * Получить бизнес сервис
     *
     * @param string $serviceType Тип конкретного сервиса
     * @return BusinessService
     */
    public function getBusinessService(string $serviceType): BusinessService
    {
        if ($serviceType == "first") {
            return new ConcreteService1();
        }
        return new ConcreteService2();
    }
}
