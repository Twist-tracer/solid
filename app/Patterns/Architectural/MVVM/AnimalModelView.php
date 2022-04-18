<?php

namespace App\Patterns\Architectural\MVVM;

use App\Patterns\Architectural\MVVM\AnimalModel;
use function view;

/**
 * Class ModelView
 * @package App\Architecture\Patterns\Architectural\MVVM
 */
class AnimalModelView
{

    private AnimalModel $model;

    /**
     * Переменные в шаблон
     *
     * @var array
     */
    private array $variables = [];

    public function __construct()
    {
        $this->model = new AnimalModel("Cat", "Male");
    }

    /**
     * Устанавливает наименование
     *
     * @param string $name
     */
    public function setAnimalName(string $name)
    {
        $this->model->setName($name);
        $this->onPropertyChanged("AnimalName", $name);
    }

    /**
     * Получить наименование
     */
    public function getAnimalName(): string
    {
        return $this->model->getName();
    }

    /**
     * @param string $gender
     */
    public function setAnimalGender(string $gender): void
    {
        $this->model->setGender($gender);
        $this->onPropertyChanged("AnimalGender", $gender);
    }

    /**
     * @return string
     */
    public function getAnimalGender(): string
    {
        return $this->model->getGender();
    }

    /**
     * Байндит событие изменения
     *
     * @param string $propertyName
     * @param string $val
     */
    private function onPropertyChanged(string $propertyName, string $val)
    {
        $this->variables[$propertyName] = $val;
    }

    public function render()
    {
        view('home', $this->variables)->render();
    }
}
