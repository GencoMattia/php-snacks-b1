<?php
include_once __DIR__ . "/animals.php";

$listaMammiferi = [];

foreach ($animals as $animal) {
    if ($animal['classe'] === 'Mammifero') {
        $listaMammiferi[] = $animal;
    }
}