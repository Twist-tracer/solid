<?php

namespace App\Patterns\Structural\Adapter;

/**
 * Адаптируемый класс содержит некоторое полезное поведение, но его интерфейс
 * несовместим с существующим клиентским кодом. Адаптируемый класс нуждается в
 * некоторой доработке, прежде чем клиентский код сможет его использовать.
 */
class Adaptee
{
    public function specificRequest(): string
    {
        return "roivaheb s'tegrat dednetxe ehT";
    }
}
