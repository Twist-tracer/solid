<?php

namespace App\Patterns\Structural\DTO;

/**
 * The Data Transfer Object for User.
 * В нем хранятся обязательные данные для конкретного варианта использования - например, игнорирование групп,
 * и обеспечение простой сериализации.
 */
class UserDTO
{
    /**
     * В более сложных реализациях ответственность за DTO может лежать. объекта Assembler,
     * что также нарушит любую зависимость между User и UserDTO.
     */
    public function __construct(User $user)
    {
        $this->_name = $user->getName();
        $this->_role = $user->getRole();
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getRole()
    {
        return $this->_role;
    }

    // нет сеттеров, потому что эти варианты использования не требуют модификации данных
    // однако в целом DTO не обязательно должны быть неизменяемыми.
}
