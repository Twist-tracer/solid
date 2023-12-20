<?php


namespace App\Patterns\Fundamental\Delegation;


class RemoteHostA extends Host
{

    /**
     * Переопределяет метод родителя
     *
     * @return string
     */
    public function getHost(): string
    {
        $str = "RemoteHostA logic with host: " . $this->host;
        return $this->prepareOutput($str);
    }

    /**
     * Метод декорирует вывод хоста
     *
     * @param string $host Хост
     *
     * @return string
     */
    public function prepareOutput(string $host): string
    {
        return "[" . $host . "]";
    }
}
