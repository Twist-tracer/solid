<?php

namespace App\Patterns\Architectural\VIPER;

use App\Patterns\Architectural\VIPER\TripEntity;
use App\Patterns\Architectural\VIPER\TripListPresenter;

class TripListView
{

    private TripListPresenter $presenter;

    /**
     * TripListView constructor.
     * @param TripListPresenter $presenter
     */
    public function __construct(TripListPresenter $presenter)
    {
        $this->presenter = $presenter;
    }

    public function render()
    {
        /** @var TripListPresenter $item */
        foreach ($this->presenter as $item) {
            /** @var TripEntity $trip */
            foreach ($item->model->trips as $trip) {
                $trip->showFrame();
            }
        }
    }
}
