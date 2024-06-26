<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
Create una cartella per ogni snack, nella stessa repo. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $divClass = "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <?php foreach($db as $key => $element) { ?>
            <div <?php echo ($key === 'pm') ? "class='green'" : "class='gray'"?>>
                <?php foreach($element as $person) { ?>
                    <article>
                        <p>
                            <?php echo $person["name"] ?> <?php echo $person["lastname"] ?>
                        </p>
                    </article>
                <?php } ?>
            </div>
        <?php } ?>
    </main>
</body>
</html>