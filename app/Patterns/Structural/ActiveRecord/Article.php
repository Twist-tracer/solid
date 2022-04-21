<?php

namespace App\Patterns\Structural\ActiveRecord;

/**
 * Пример класса с Active Record
 * Class Article
 * @package App\Patterns\Structural\ActiveRecord
 */
class Article extends ActiveRecordEntity
{
    /** @var string */
    private string $name;

    /** @var string */
    private string $text;

    /** @var string */
    private string $authorId;

    /** @var string */
    private string $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Возврат наименования таблицы
     * @return string
     */
    protected static function getTableName(): string
    {
        return "articles";
    }
}
