<?php

namespace App\Patterns\Structural\BusinessDelegate;

/**
 * Клиент, использующий для выполнения задачи бизнес-делегат
 * Class Client
 * @package App\Patterns\Structural\BusinessDelegate
 */
class Client
{
    private BusinessDelegate $businessService;

    public function __construct(BusinessDelegate $businessService)
    {
        $this->businessService = $businessService;
    }

    /**
     * Передает выполнение бизнес-делегату
     */
    public function doTask(): void
    {
        $this->businessService->doTask();
    }
}
