<?php

namespace App\Architecture\Patterns\Architectural\NakedObject;

class SimpleObject
{
    private string $name;

    private string $desc;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }
}
