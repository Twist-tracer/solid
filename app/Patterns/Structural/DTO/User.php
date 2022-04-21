<?php

namespace App\Patterns\Structural\DTO;

/**
 * Класс предметной области. Представляет каркас классов, которые могут составлять другие объекты до такой степени,
 * что сериализация применяется ко всем объектам.
 *
 * ORM обычно нарушают восстановление всего графа объекта, помещая их в ленивую загрузку.
 */
class User
{
    private $_name;
    private $_groups = array();

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

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function addGroup(Group $group)
    {
        $this->_group = $group;
    }

    public function getGroups()
    {
        return $this->_groups;
    }
}
