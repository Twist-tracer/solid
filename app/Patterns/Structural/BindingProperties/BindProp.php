<?php

namespace App\Patterns\Structural\BindingProperties;

/**
 * Байндит переменные
 *
 * Class BindProp
 * @package App\Patterns\Structural\BindingProperties
 */
class BindProp
{
    private static array $binders = [];

    public static function bindProp(IMenu $valOne, IMenu &$valTwo)
    {
        self::$binders[spl_object_hash($valOne)] = $valTwo;
    }

    public static function getBindObject(IMenu $valOne): ?IMenu
    {
        $hash = spl_object_hash($valOne);
        return self::$binders[$hash] ?? null;
    }
}
