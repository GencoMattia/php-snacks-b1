<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matchList = [
    [
        "Squadra di casa" => "Draghi Rossi",
        "Squadra Ospite" => "Aquile Bianche",
        "Stadio" => "Palazzetto dello Sport -Fuoco e Ghiaccio-",
        "Risultato" => rand(1,100) . " - " . rand(1,100),
    ],
    [
        "Squadra di casa" => "Lupi Solitari",
        "Squadra Ospite" => "Pantere Nere",
        "Stadio" => "Arena 'Cuore Selvaggio'",
        "Risultato" => rand(1,100) . " - " . rand(1,100),
    ],
    [
        "Squadra di casa" => "Giganti di Pietra",
        "Squadra Ospite" => "Folletti Verdi",
        "Stadio" => "Stadio 'Montagna Incantata'",
        "Risultato" => rand(1,100) . " - " . rand(1,100),
    ],
    [
        "Squadra di casa" => "Squali Martello",
        "Squadra Ospite" => "Delfini Blu",
        "Stadio" => "Piscina Olimpica 'Oceano Profondo'",
        "Risultato" => rand(1,100) . " - " . rand(1,100),
    ],
    [
        "Squadra di casa" => "Falchi Pellegrini",
        "Squadra Ospite" => "Gufi Reali",
        "Stadio" => "Cattedrale 'Cielo Stellato'",
        "Risultato" => rand(1,100) . " - " . rand(1,100),
    ],
];

foreach($matchList as $key => $match) {
    foreach($match as $key => $info) {
        echo $info["Squadra di casa" . " - " . "Squadra Ospite" . " | " . "Risultato"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite de Baskett</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach($matchList as $key => $match) { ?>
                
            <?php } ?>
        </ul>
    </main>
</body>
</html>