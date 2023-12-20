<?php

namespace App\Patterns\Structural\ValueListHandler;

/**
 * Реализация класса доступа в базе проектов
 *
 * Class ProjectDAO
 * @package App\Patterns\Structural\ValueListHandler
 */
class ProjectDAO
{
    /**
     * Определяет таблицы для получения данных
     *
     * @var string
     */
    private string $tableName = "projects";

    /**
     * Таблицы
     * @var array|string[]
     */
    private array $fields = [
        "id", "name", "description",
    ];

    public function executeSelect(ProjectTO $projectCriteria): array
    {
        $sql = "SELECT " . implode(",", $this->fields) . " FROM " . $this->tableName . " WHERE 1 = 1";

        foreach ($projectCriteria->getFields() as $name => $value) {
            $sql .= " AND $name = '" . $value . "'";
        }

        echo "Execute sql:" . $sql . PHP_EOL;

        // Тут эмулирование получение запроса в базе
        $resultData = [];
        for ($i = 0; $i < 5; $i++) {
            $project = new ProjectTO();
            $project->setId($i);
            $project->setName("name_" . $i);
            $project->setName("description_" . $i);
            $resultData[] = $project;
        }

        return $resultData;
    }
}
