<?php

namespace App\Patterns\Structural\ValueListHandler;

use Exception;

/**
 * Реализация паттерна Value List Handler.
 * Эмулируем работу списка проектов.
 *
 * Class ProjectListHandler
 * @package App\Patterns\Structural\ValueListHandler
 */
class ProjectListHandler extends ValueListHandler
{

    /**
     * Объект доступа к данным
     * @var ProjectDAO
     */
    private ProjectDAO $projectDAO;

    /**
     * Условия выбора
     *
     * @var ProjectTO
     */
    private ProjectTO $projectCriteria;

    /**
     * ProjectListHandler constructor.
     * @param ProjectTO $projectTO
     */
    public function __construct(ProjectTO $projectTO)
    {
        $this->projectDAO = new ProjectDAO();
        $this->setProjectCriteria($projectTO);
        // Выполняем выборку
        $this->executeSearch();
    }

    /**
     * Устанавливает условие поиска
     *
     * @param ProjectTO $projectTO
     */
    public function setProjectCriteria(ProjectTO $projectTO): void
    {
        $this->projectCriteria = $projectTO;
    }

    /**
     * Выполняет поиск
     */
    public function executeSearch()
    {
        if (!$this->projectCriteria->getFields()) {
            throw new Exception("Unknown criteria");
        }

        $result = $this->projectDAO->executeSelect($this->projectCriteria);

        // Устанавливаем результата в обработчик значений
        $this->setList($result);
    }
}
