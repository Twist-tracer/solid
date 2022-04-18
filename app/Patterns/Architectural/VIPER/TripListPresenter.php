<?php

namespace App\Patterns\Architectural\VIPER;

use App\Patterns\Architectural\VIPER\TripListInteractor;

/**
 * Представитель поездки
 * Class TripListPresenter
 * @package App\Architecture\Patterns\Architectural\VIPER
 */
class TripListPresenter
{

    /**
     * @var TripListInteractor
     */
    public TripListInteractor $interactor;

    /**
     * TripListPresenter constructor.
     * @param TripListInteractor $interactor
     */
    public function __construct(TripListInteractor $interactor)
    {
        $this->interactor = $interactor;
    }

    public function addButton()
    {
        $this->interactor->addNewButton();
    }

    public function addNewTrip()
    {
        $this->interactor->addNewTrip();
    }
}
