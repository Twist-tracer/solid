<?php

namespace App\Patterns\Architectural\VIPER;

use App\Patterns\Architectural\VIPER\ButtonEntity;
use App\Patterns\Architectural\VIPER\DataModel;
use App\Patterns\Architectural\VIPER\TripEntity;

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
