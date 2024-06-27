<!-- Snack 8
Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. Nel nostro index.php stampiamo in pagina ognuno di questi array. -->

<?php
include_once __DIR__ . "/utilities/mammiferi.php";
include_once __DIR__ . "/utilities/rettili.php";
include_once __DIR__ . "/utilities/pesci.php";
include_once __DIR__ . "/utilities/altri.php";

foreach($listaMammiferi as $animal) {
    echo $animal["nome"];
};