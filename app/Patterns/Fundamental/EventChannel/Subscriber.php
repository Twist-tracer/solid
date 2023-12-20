<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Класс подписчика
 *
 * @package App\Patterns\Fundamental\EventChannel
 */
class Subscriber implements ISubscriber
{

    /**
     * Идентификатор подписчика
     *
     * @var string
     */
    private string $name;

    /**
     * Subscriber constructor.
     *
     * @param string $name Идентификатор/имя подписчика
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function notify(string $data): void
    {
        echo "Подписчик $this->name оповещен данными $data" . PHP_EOL;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }
}
