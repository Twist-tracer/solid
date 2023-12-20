<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Fundamental\ImmutableWrapper\Collection;
use App\Patterns\Fundamental\ImmutableWrapper\Immutable;
use App\Patterns\Fundamental\ImmutableWrapper\ImmutableCollection;
use App\Patterns\Fundamental\ImmutableWrapper\ImmutableExtended;
use App\Patterns\Fundamental\ImmutableWrapper\ImmutableRight;
use App\Patterns\Fundamental\ImmutableWrapper\MutableX;
use PHPUnit\Framework\TestCase;

class ImmutableWrapperTest extends TestCase
{
    /**
     * Пример 1
     */
    public function testImmutableObject(): void
    {
        $immutable = new Immutable(new MutableX());

        $obj1 = md5(serialize($immutable));

        $mutable = $immutable->getX();

        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 === $obj2);
    }

    /**
     * Пример 2. Показывает проблему предыдущего примера - обертка на самом деле изменилась
     */
    public function testMutableObject(): void
    {
        $immutable = new Immutable(new MutableX());

        $obj1 = md5(serialize($immutable));

        $mutable = $immutable->getX();
        $mutable->setY(10);

        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 != $obj2);
    }

    /**
     * Пример 3. Решение проблемы предыдущего примера
     */
    public function testImmutableRightObject(): void
    {
        $mutable = new MutableX();
        $mutable->setX(5);
        $obj1 = md5(serialize($mutable));

        $mutable->setY(10);
        $obj2 = md5(serialize($mutable));

        $this->assertTrue($obj1 != $obj2);

        $mutable = new MutableX();
        $mutable->setX(5);
        $immutable = new ImmutableRight($mutable);
        $obj1 = md5(serialize($mutable));

        $this->expectExceptionMessage('Call to undefined method App\Patterns\Fundamental\ImmutableWrapper\ImmutableRight::setY()');
        $immutable->setY(10);
        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 === $obj2);
    }

    /**
     * Пример 4. Изменяемая коллекция объектов
     */
    public function testImmutableCollection(): void
    {
        $immutable = new ImmutableCollection(new Collection([new MutableX(), new MutableX()]));
        $obj1 = md5(serialize($immutable));

        $mutable = $immutable->getX();
        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 === $obj2);

        $immutable->getX()->get(0)->setY(5);
        $obj3 = md5(serialize($immutable));

        $this->assertTrue($obj1 != $obj3);
    }

    /**
     * Пример 5. Проблема наследования
     *
     * Показывает что при наследовании можно нарушить неизменяемость объекта,
     * поэтому класс обертки должен обязательно быть объявлен как final
     */
    public function testImmutableInheritance(): void
    {
        $mutable = new MutableX();
        $mutable->setX(5);
        $immutable = new ImmutableExtended($mutable);

        $obj1 = md5(serialize($immutable->getX()));
        $obj2 = md5(serialize($immutable->getX()));
        $obj3 = md5(serialize($immutable->getX()));

        $this->assertTrue($obj1 != $obj2);
        $this->assertTrue($obj1 != $obj3);
        $this->assertTrue($obj2 != $obj3);
    }
}
