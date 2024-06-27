<?php
include_once __DIR__ . "/animals.php";

$listaMammiferi = array_filter($animals, "Mammifero", ARRAY_FILTER_USE_KEY);