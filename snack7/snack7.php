<!-- Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
include __DIR__ . "/utilities/array.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php foreach($classe as $studente) { ?>
            <article>
                <h2>
                    <?php echo $studente["nome"] . " " . $studente["cognome"] ?>
                </h2>
                <p>
                    La media dei voti è: <?php echo (array_sum($studente["voti"]) / (count($studente["voti"]))) ?>
                </p>
            </article>
        <?php } ?>
    </main>
</body>
</html>