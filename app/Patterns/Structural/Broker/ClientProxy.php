<?php

namespace App\Patterns\Structural\Broker;

/**
 * Прокси клиента
 *
 * Class ClientProxy
 * @package App\Patterns\Structural\Broker
 */
class ClientProxy
{
    /**
     * Текущее наименование вызываемого метода
     * @var string
     */
    private string $currMethodName;

    /**
     * Параметры текущего метода
     * @var string
     */
    private string $params;


    /**
     * Вызов метода сложения чисел
     *
     * @param int $a Первое число
     * @param int $b Второе число
     */
    public function addIntegers(int $a, int $b): void
    {
        $this->currMethodName = __FUNCTION__;
        $this->params = "$a|$b";
        $this->prepareData();;
    }

    /**
     * Получить длину строки
     *
     * @param string $str Длина
     */
    public function getLength(string $str): void
    {
        $this->currMethodName = __FUNCTION__;
        $this->params = $str;
        $this->prepareData();;
    }

    /**
     * Подготавливает данные
     */
    private function prepareData(): void
    {
        echo "Client Proxy prepare data..." . PHP_EOL;
        $msgClient = new CallMessage($this->currMethodName, $this->params);

        // Подготовка данных для отправки
        $brokerClient = new BrokerClient($msgClient);

        // Вывод результата
        $this->displayResult($brokerClient);
    }

    /**
     * Выводит данные
     *
     * @param BrokerClient $brokerClient
     */
    private function displayResult(BrokerClient $brokerClient): void
    {
        $result = $brokerClient->getResultMessage()->getResult();

        echo "Your result is:" . $result . PHP_EOL;
    }
}
