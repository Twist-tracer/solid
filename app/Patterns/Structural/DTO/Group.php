<?php

namespace App\Patterns\Structural\DTO;

/**
 * Another Domain Model class.
 */
class Group
{
    private $_name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }
}
