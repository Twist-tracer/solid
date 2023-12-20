<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Класс издателя
 *
 * @package App\Patterns\Fundamental\EventChannel
 */
class Publisher implements IPublisher
{

    /**
     * Тема топика
     *
     * @var string
     */
    private string $tag;

    /**
     * Канал событий
     *
     * @var IEventChannel
     */
    private IEventChannel $eventChannel;

    /**
     * Publisher constructor.
     *
     * @param string $tag Тема топика
     * @param IEventChannel $eventChannel Канал событий
     */
    public function __construct(string $tag, IEventChannel $eventChannel)
    {
        $this->tag = $tag;
        $this->eventChannel = $eventChannel;
    }

    /**
     * @inheritDoc
     */
    public function publish(string $data): void
    {
        $this->eventChannel->publish($this->tag, $data);
    }
}
