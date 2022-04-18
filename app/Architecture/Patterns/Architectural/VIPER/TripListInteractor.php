<?php

namespace App\Architecture\Patterns\Architectural\VIPER;

/**
 * Class TripListInteractor
 * @package App\Architecture\Patterns\Architectural\VIPER
 */
class TripListInteractor
{
    public DataModel $model;

    /**
     * TripListInteractor constructor.
     * @param DataModel $model
     */
    public function __construct(DataModel $model)
    {
        $this->model = $model;
    }

    /** Добавляет новую поездку */
    public function addNewTrip()
    {
        $this->model->addTrip(new TripEntity("Новая поездка"));
    }

    /** Добавляет новую кнопку */
    public function addNewButton()
    {
        $this->model->addTrip(new ButtonEntity());
    }
}
