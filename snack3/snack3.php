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

    "12-08-3018" => [
        [
            "title" => "La foresta di Lothlórien in pericolo",
            "author" => "Legolas Greenleaf",
            "text" => "Orchi e ragni giganti minacciano la nostra amata foresta."
        ]
    ],

    "02-02-3017" => [
        [
            "title" => "Le miniere di Moria risvegliate",
            "author" => "Gimli, Figlio di Glóin",
            "text" => "Un antico male si agita nelle profondità della terra."
        ],
        [
            "title" => "Il peso dell'Unico Anello",
            "author" => "Frodo Baggins",
            "text" => "Il fardello è pesante, ma la missione deve essere compiuta."
        ]
    ]
]

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts of the Rings</title>
</head>
<body>
    <?php foreach($postList as $key => $posts) { ?>
        <div class="blog-post">
            <h2>
                <?php
                echo $key;
                ?>
            </h2>
        </div>
    <?php } ?>
</body>
</html>