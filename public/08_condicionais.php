<?php

//$number = 29;
//if ($number % 2 === 0) {
//    echo " O numero é par";
//} elseif ($number / 1 === 1){
//    echo " O numero é igual  1"; }
//else{
//    $result = $number % 3;
//    echo ($result);
//    echo " O numero é impar";
//}
//
//$numberTwo = 29;
//echo '<br>';
//if ($number === $numberTwo):
//    echo "Os numeros são iguais";
//endif;

// TODO - switch case
$number = 2;

switch ($number){
    case $number === 1:
        echo "O numero é 1";
        break;
    case $number === 2:
        echo "O numero é 2";
        break;
    case $number === 3:
        echo "O numero é 3";
        break;
    default:
        echo "O numero é diferente de 1, 2 e 3";
        break;
}