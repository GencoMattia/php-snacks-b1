<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
$randomNumberList = [

];

while (count($randomNumberList) < 15) {
    $randomNumber = random_int(1, 50);
    if(array_search($randomNumber, $randomNumberList) === false) {
        $randomNumberList[] = $randomNumber;
    }
};

var_dump($randomNumberList);

?>