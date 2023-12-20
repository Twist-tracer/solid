<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Модификаторы
 *
 * Class Modifier
 *
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Modifier
{
    /**
     * Модификация
     *
     * @param array<Clothes> $clothes Список
     *
     * @return void
     */
    public function modify(array $clothes): void
    {
        $processableClothes = array_filter($clothes, fn(Clothes $item) => $item->isProcessable());

        foreach ($processableClothes as $item) {
            $processes = $this->matches($item);

            foreach ($processes as $process) {
                $process->process();
            }
        }
    }

    /**
     * Назначает задания для одежды
     *
     * @param Clothes $clothes
     *
     * @return array<Process>
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
