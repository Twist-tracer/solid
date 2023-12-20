<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Шаблон канала событий.
 * Для подписчиков реализует единый канал подписки на события издателей.
 *
 * @package App\Patterns\Fundamental\EventChannel
 */
final class EventChannel implements IEventChannel
{
    /**
     * Подписчики на темы событий
     *
     * @var array
     */
    private array $tagSubscribers = [];


    /**
     * @inheritDoc
     */
    public function publish(string $tag, string $data): void
    {
        if (!empty($this->tagSubscribers[$tag])) {
            /** @var ISubscriber $subscriber */
            foreach ($this->tagSubscribers[$tag] as $subscriber) {
                $subscriber->notify($data);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function subscribe(string $tag, ISubscriber $subscriber): void
    {
        $this->tagSubscribers[$tag][] = $subscriber;
        echo $subscriber->getName() . " подписан на $tag" . PHP_EOL;
    }
}
