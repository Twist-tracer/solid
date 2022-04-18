<?php

namespace App\Architecture\Patterns\Architectural\PAC;

/**
 * Контроль
 * Class PersonControl
 * @package App\Architecture\Patterns\Architectural\PAC
 */
class PersonControl
{
    /**
     * @var PersonAbstraction
     */
    private PersonAbstraction $person;

    private PersonPresentation $presentation;


    public function __construct(PersonPresentation $presentation, PersonAbstraction $person)
    {
        $this->presentation = $presentation;
        $this->person = $person;
    }

    public function populateBirthDate(): void
    {
        $format = new SimpleDateFormat();
        // PAC дочерние - обращаясь к дочерним A

        $this->presentation->renderBirthDate($format->format($this->person->getBirthDate()));
    }
}
