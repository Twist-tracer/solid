<?php

namespace App\Patterns\Creational\LazyInitialization;

/**
 * Пример отложенного вычисления свойства объекта
 *
 * @package App\Patterns\Creational\LazyInitialization
 */
class LazyURL
{

    /**
     * Урл ресурса
     *
     * @var string
     */
    private string $url;

    /**
     * Наименование объекта
     *
     * @var string
     */
    private string $domain;

    /**
     * LazyURL constructor.
     *
     * @param string $url Полный путь
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Получение наименование домена с ленивой инициализацией
     *
     * @return string
     */
    public function getDomain(): string
    {
        // Ленивая инициализация свойства объекта
        if (empty($this->domain)) {
            $this->domain = (string)parse_url($this->url, 1);
        }
        return $this->domain;
    }
}
