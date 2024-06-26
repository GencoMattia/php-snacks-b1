<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$postList = [
    "25-03-3019" => [
        [
            "title" => "Il ritorno del Re Stregone?",
            "author" => "Gandalf il Grigio",
            "text" => "Ombre oscure si addensano su Mordor. Dobbiamo rimanere vigili."
        ],
        [
            "title" => "Un nuovo giorno per Gondor",
            "author" => "Aragorn, Erede di Isildur",
            "text" => "La speranza rinasce nella Terra di Mezzo. Gondor risorge!"
        ]
    ],
]

?>