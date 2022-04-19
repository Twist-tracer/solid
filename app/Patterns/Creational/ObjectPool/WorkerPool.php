<?php

declare(strict_types=1);

namespace App\Patterns\Creational\ObjectPool;

use Countable;

class WorkerPool implements Countable
{
    /**
     * Занятые исполнители
     *
     * @var StringReverseWorker[]
     */
    private array $occupiedWorkers = [];

    /**
     * Свободные исполнители
     *
     * @var StringReverseWorker[]
     */
    private array $freeWorkers = [];

    /**
     * Получает исполнителя. Если есть уже созданные свободные объекты - возвращает их
     *
     * @return StringReverseWorker
     */
    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * Очищает и удаляет объект из пула
     *
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * Количество объектов в пуле
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
