<?php

namespace App\Patterns\Behavioral\Visitor;

/**
 * Интерфейс Посетителя объявляет набор методов посещения, соответствующих
 * классам компонентов. Сигнатура метода посещения позволяет посетителю
 * определить конкретный класс компонента, с которым он имеет дело.
 */
interface Visitor
{
    // Типа Visitor посещает объекты конткретных компонентов, для этого интерфейс объявляет конкретные метооды посещения
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}
