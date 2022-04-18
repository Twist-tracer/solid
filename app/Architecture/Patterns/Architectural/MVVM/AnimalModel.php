<?php

namespace App\Architecture\Patterns\Architectural\MVVM;

/**
 * Class AnimalModel
 * @package App\Architecture\Patterns\Architectural\MVVM
 */
class AnimalModel
{

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $gender;

    /**
     * AnimalModel constructor.
     * @param string $name
     * @param string $gender
     */
    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;

    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;

    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;

    }

    /**
     * @param string $name
     */
    public function setGender(string $name): void
    {
        $this->name = $name;
    }
}
