<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php

$userName = $_GET["userName"] ?? "";
$email = $_GET["email"] ?? "";
$userAge = $_GET["userAge"] ?? "";

if(strlen($userName) <= 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($userAge, FILTER_VALIDATE_INT)) {
    echo "Access Granted";
} else {
    echo "Access Denied!";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./snack2.php" method="GET">
        <input type="text" name="userName" id="userName">
        <input type="email" name="email" id="email">
        <input type="number" name="userAge" id="userAge">
        <button>Submit</button>
    </form>
</body>
</html>