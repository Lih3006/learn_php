<?php

// * operadores ariticmeticos
//echo 1 + 2 . "<br>"; // soma
//echo 1 - 2 . "<br>"; // subtração
//echo 1 * 2 . "<br>"; // multiplicação
//echo 1 / 2 . "<br>"; // divisão
//echo 5 % 5 . "<br>"; // modulo (resto da divisão)

// ! a ordem da execucao das operacoes no php sao primeiro multiplicacao e divisao, depois soma e subtracao

$result = (2 + 2 - 8 / 4) * 2;
echo $result . "<br>";

// * operadores de atribuicao

$a = 12; // = atribui o valor 12 a variavel $a
$a += 12; // $a = $a + 12
$a -= 12; // $a = $a - 12
$a *= 12; // $a = $a * 12
$a /= 12; // $a = $a / 12

echo $a . "<br>";

// * operadores de incremento e decremento

$a = 2;

$a++; // $a = $a + 1 pós incremento
++$a; // $a = $a + 1 pré incremento
$a--; // $a = $a - 1 pós decremento
--$a; // $a = $a - 1 pré decremento

// a diferenca entre o pré e pós incremento é que o pré incremento incrementa antes de mostrar o valor e o pós incremento mostra o valor antes de incrementar
$a = 2;
$b = 2;
echo $a + $b++; // 4
$b = 2;
echo $a + ++$b; // 5

// * operadore aritmeticos
// == igual
// != diferente
// > maior
// < menor
// >= maior ou igual
// <= menor ou igual


// * operadores logicos
// && and
// || or
// ! not

// * operadores de comparação ou relacionais
// === identico
// !== não identico
// <> diferente
// <=> spaceship
