<?php

namespace App\Patterns\Structural\FrontController;

/**
 * Реализация шаблона Единая точка входа
 *
 * Class FrontController
 * @package App\Patterns\Structural\FrontController
 */
class FrontController
{
    /**
     * Экземпляр диспетчера
     */
    private Dispatcher $dispatcher;

    public function __construct()
    {
        // Композиция диспетчера запросов
        $this->dispatcher = new Dispatcher();
    }


    /**
     * Авторизован ли запрос
     */
    private function isAuthenticUser(): bool
    {
        echo "User is authenticated successfully.";
        return true;
    }

    /**
     * Лог запроса
     *
     * @param string $request
     */
    private function trackRequest(string $request): void
    {
        echo "Page requested: " . $request . PHP_EOL;
    }

    /**
     * Обработка запроса
     *
     * @param string $request
     */
    public function dispatchRequest(string $request): void
    {
        //log each request
        $this->trackRequest($request);
        //authenticate the user
        if ($this->isAuthenticUser()) {
            $this->dispatcher->dispatch($request);
        }
    }
}
