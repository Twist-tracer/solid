<?php

namespace App\Patterns\Structural\BusinessDelegate;

/**
 * Реализует шаблон Бизнес-делегат
 *
 * Class BusinessDelegate
 * @package App\Patterns\Structural\BusinessDelegate
 */
class BusinessDelegate
{
    private BusinessLookUp $lookupService;
    private string $serviceType;

    /**
     * BusinessDelegate constructor.
     */
    public function __construct()
    {
        $this->lookupService = new BusinessLookUp();
    }

    /**
     * Устанавливает тип сервиса
     *
     * @param string $serviceType
     */
    public function setServiceType(string $serviceType): void
    {
        $this->serviceType = $serviceType;
    }

    /**
     * Выполняет делегирование
     */
    public function doTask(): void
    {
        $businessService = $this->lookupService->getBusinessService($this->serviceType);
        $businessService->doProcessing();
    }
}
