<?php

// * funcoes

echo "<h2>Funções</h2>";


// * funcao com parametros
function imprimeNome($nome)
{
    return  "Olá, $nome <br>";
}

echo imprimeNome("João");


function sum(int $a, int $b): int
{
    return $a + $b;
}

$result = sum(1,3);
echo $result;


// * parametros opcionais

echo "<h3>Parametros opcionais</h3>";
function sumTwo(int $a, int $b = 20): int
{
    return $a + $b;
}

$result = sumTwo(1, );
echo $result;

// * escopo de funcao


$taxa = 2;

function calcula(int $a, int $b): array
{   global $taxa;
    $taxaTwo = 3;
    $teste = ($a + $b) * $taxa;
    return [
        'teste' => $teste,
        'taxaTwo'=>$taxaTwo
    ];

}


$result =  calcula(1, 2);
var_dump($result['taxaTwo']);

// * funcoes recursivas

function  factorial(int $number): int
{
    if($number <= 1)
        $number = $number;
    else
        $number *= factorial($number - 1);
    return $number;
}

$result = factorial(4);

echo $result;