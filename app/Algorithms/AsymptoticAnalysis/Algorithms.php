<?php

namespace App\Algorithms\AsymptoticAnalysis;

class Algorithms
{
    /**
     * O(n)
     *
     * @param array<int> $a
     * @param int $x
     *
     * @return int
     */
    public function search(array $a, int $x): int
    {
        foreach ($a as $i => $v) {
            if ($v === $x) {
                return $i;
            }
        }

        return -1;
    }

    /**
     * O(1)
     *
     * @param $a
     * @param $b
     *
     * @return void
     */
    public function swap(&$a, &$b): void
    {
        $t = $a;
        $a = $b;
        $b = $t;
    }

    /**
     * O(1)
     *
     * @return void
     */
    public function cycleO1(): void
    {
        $c = 4;
        for ($i = 0; $i < $c; ++$i) {
            echo $i;
        }
    }

    /**
     * O(n)
     *
     * @param int $n
     *
     * @return void
     */
    public function cycleOn(int $n): void
    {
        for ($i = 0; $i < $n; ++$i) {
            echo $i;
        }
    }

    /**
     * O(n+m)
     *
     * @param int $n
     * @param int $m
     *
     * @return void
     */
    public function cycleOnm1(int $n, int $m): void
    {
        for ($i = 0; $i < $n; ++$i) {
            echo $i;
        }
        for ($i = 0; $i < $m; ++$i) {
            echo $i;
        }
    }

    /**
     * O(n*m)
     *
     * @param int $n
     * @param int $m
     *
     * @return void
     */
    public function cycleOnm2(int $n, int $m): void
    {
        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                echo $i + $j;
            }
        }
    }

    /**
     * O(n^2)
     *
     * n + (n - 1) + (n - 2) + (n - 3) + ... + 1 = n*(n + 1)/2
     * n*(n + 1)/2 = 1/2*(n*n + n) = O(n^2)
     *
     * @param int $n
     *
     * @return void
     */
    public function cycleIJ(int $n): void
    {
        for ($i = 0; $i < $n; ++$i) {
            for ($j = $i; $j < $n; ++$j) {
                echo $i + $j;
            }
        }
    }

    /**
     * O(log(a))
     *
     * Вычисляет сумму цифр в числе
     *
     * @param int $a
     *
     * @return int
     */
    public function cycleLog(int $a): int
    {
        $sum = 0;

        while ($a != 0) {
            $sum += $a % 10;
            $a /= 10;
        }

        return $sum;
    }
}
