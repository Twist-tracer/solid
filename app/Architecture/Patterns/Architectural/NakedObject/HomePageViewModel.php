<?php

namespace App\Architecture\Patterns\Architectural\NakedObject;

class HomePageViewModel
{

    /**
     * @var string
     */
    private string $title;

    public function title(): string
    {
        $this->title = "Главная страница";
        return $this->title;
    }

    /**
     * Получает массив объектов для отображения
     *
     * @return array
     */
    private function getObjects(): array
    {
        $title = SimpleObjects::getByName("title");
        $title->setName($this->title);

        $body = SimpleObjects::getByName("body");
        $body->setName("body");
        $body->setDesc("Some description");

        return [$title, $body];

    }

    /**
     * Выводит модель
     */
    public function show(): void
    {
        [$title, $body] = $this->getObjects();

        $str = <<<EOD
<title>{$title->getName()}</title>
<body>{$body->getDesc()}</body>
EOD;

        echo $str;
    }
}
