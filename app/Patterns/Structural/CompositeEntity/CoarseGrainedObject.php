<?php

namespace App\Patterns\Structural\CompositeEntity;

/**
 * Объект со своим собственных жизненным циклом, который управляет жизненным циклом зависимых объектов
 *
 * @package App\Patterns\Structural\CompositeEntity
 */
class CoarseGrainedObject
{

    /**
     * Зависимый объект
     *
     * @var DependentObject1
     */
    private DependentObject1 $do1;

    /**
     * Зависимый объект второй
     *
     * @var DependentObject2
     */
    private DependentObject2 $do2;

    /**
     * CoarseGrainedObject constructor.
     */
    public function __construct()
    {
        $this->do1 = new DependentObject1();
        $this->do2 = new DependentObject2();
    }

    /**
     * Устанавливает значения для управляемых объектов
     *
     * @param string $data1 Значения для первого зависимого объекта
     * @param string $data2 Значения для второго зависимого объекта
     */
    public function setData(string $data1, string $data2): void
    {
        $this->do1->setData($data1);
        $this->do2->setData($data2);
    }

    /**
     * Получить данные объекта общего назначения
     *
     * @return array
     */
    public function getData(): array
    {
        return [$this->do1->getData(), $this->do2->getData()];
    }
}
