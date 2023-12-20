<?php

namespace App\Patterns\Structural\Broker;

/**
 * Слой клиента, отправляемого сообщение посредством брокера
 *
 * Class Client
 * @package App\Patterns\Structural\Broker
 */
class Client
{
    public function run()
    {
        $clientProxy = new ClientProxy();

        echo "Calling AddIntegers on 10 adn 20..." . PHP_EOL;
        $clientProxy->addIntegers(1, 20);

        echo "Calling AddIntegers on 2500 adn 3000..." . PHP_EOL;
        $clientProxy->addIntegers(2500, 3000);

        echo "Calling getLength on 'Broker in PHP'..." . PHP_EOL;
        $clientProxy->getLength("Broker in PHP");
    }
}
