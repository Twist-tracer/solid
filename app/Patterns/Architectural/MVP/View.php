<?php

namespace App\Patterns\Architectural\MVP;

/**
 * Class View
 * @package App\Architecture\Patterns\Architectural\MVP
 */
class View
{
    public function render($path, array $vars = array()): string
    {
        ob_start();
        extract($vars);
        require($path);
        return ob_get_clean() ?: '';
    }
}
