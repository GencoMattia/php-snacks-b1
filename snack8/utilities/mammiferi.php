<?php
include_once __DIR__ . "/animals.php";

$listaMammiferi = []; // Inizializza l'array vuoto per i mammiferi

foreach ($animals as $animal) {
    if ($animal['classe'] === 'Mammifero') {
        $listaMammiferi[] = $animal; // Aggiungi l'animale all'array se è un mammifero
    }
}