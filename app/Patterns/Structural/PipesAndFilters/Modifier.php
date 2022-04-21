<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Модификаторы
 *
 * Class Modifier
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Modifier
{
    /**
     * Утюги
     *
     * @var Iron
     */
    private Iron $iron;

    /**
     * Плечики
     *
     * @var Shoulder
     */
    private Shoulder $shoulder;

    /**
     * Иголка и нитка
     *
     * @var ThreadNeedle
     */
    private ThreadNeedle $thread;

    /**
     * Modifier constructor.
     * @param Shoulder $shoulder Плечики
     * @param ThreadNeedle $thread Иголки
     * @param Iron $iron Утюг
     */
    public function __construct(Shoulder $shoulder, ThreadNeedle $thread, Iron $iron)
    {
        $this->iron = $iron;
        $this->shoulder = $shoulder;
        $this->thread = $thread;
    }

    /**
     * Модификация
     *
     * @param array $list Список
     * @return array
     */
    public function modify(array $list): void
    {
        // Одежда на глажку
        $actualList = array_filter($list, fn(Clothes $clothes) => $clothes->isDirty());

        foreach ($actualList as $item) {
            $process = $this->matches($item);

            /** @var Process $proc */
            foreach ($process as $proc) {
                $proc->process();
            }
        }
    }

    /**
     * Назначает задания для одежды
     *
     * @param Clothes $clothes
     * @return array
     */
    private function matches(Clothes $clothes): array
    {
        $processes = [];
        if ($clothes->isIron()) {
            $processes[] = new Iron();
        }

        if ($clothes->isShoulders()) {
            $processes[] = new Shoulder();
        }

        if ($clothes->isThreadNeed()) {
            $processes[] = new ThreadNeedle();
        }
        return $processes;
    }
}
