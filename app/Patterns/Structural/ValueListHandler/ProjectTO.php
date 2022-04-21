<?php

namespace App\Patterns\Structural\ValueListHandler;

/**
 * Критерии выбора проектов
 *
 * Class ProjectTO
 * @package App\Patterns\Structural\ValueListHandler
 */
class ProjectTO
{
    /**
     * Поля фильтров
     *
     * @var array|string[]
     */
    private array $fields = [];

    /**
     * Возвращает фильтры
     *
     * @return array|string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Идентификатор
     *
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->fields["id"] = $id;
    }

    /**
     * Получение идентификатора
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->fields["id"];
    }

    /**
     * Установить имя
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->fields["name"] = $name;
    }

    /**
     * Возвращает наименование
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->fields["name"];
    }
}
