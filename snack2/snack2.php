<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

$userName = $_GET["userName"] ?? "";
$email = $_GET["email"] ?? "";
$userAge = $_GET["userAge"] ?? "";

if(strlen($userName) >= 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($userAge, FILTER_VALIDATE_INT)) {
    echo "Access Granted";
} else {
    echo "Access Denied!";
};

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>
<body>
    <form action="snack2.php" method="GET">
        <div>
            <label for="userName">Nome utente:</label>
            <input type="text" name="userName" id="userName" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="userAge">Età:</label>
            <input type="number" name="userAge" id="userAge" required>
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>