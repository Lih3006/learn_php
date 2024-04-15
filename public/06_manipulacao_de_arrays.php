<?php

$name = "John";
$company = "Doe";
$founder = "Jane";
$age = 30;

$infoCompany = compact('name', 'company', 'age');
//var_dump($infoCompany);
//
//
//var_dump(in_array('John2', $infoCompany, true));

//var_dump(array_keys($infoCompany));
//var_dump(array_values($infoCompany));
var_dump(count($infoCompany));

$newCompany = [
    'teste' => 'John',
    'total' => 'Doe',
];


$infoCompany2 = array_merge($infoCompany, $newCompany);
//var_dump($infoCompany2);


//var_dump(array_pop($cart));
//var_dump(array_shift($cart));
//unset($cart[0]);
//$cart1 = array_push($cart,'peixe'); // adiciona no final
//array_unshift($cart, 'frango'); // adiciona no inicio
//array_unshift($cart,'peixe');
//$cart2 = array_unique($cart);
//var_dump($cart2);
//var_dump($cart);

echo '<pre>';
$cart = [
    0 => 'arroz',
    1 => 'feijao',
    2 => 'macarrao',
    3 => 'carne',
    4 => 'batata',
];
//arsort($cart);
//asort($cart);

// TODO - ultimo elemento do array

//echo $cart[4];
//echo '<hr>';
//echo $cart[count($cart)-1];
//echo '<hr>';
//echo end($cart);
//echo '<hr>';
//var_dump($cart);

// TODO - array filter
$ages = [10, 20, 30, 40, 50, 60, 70, 80, 90];
$agesFiltered = array_filter($ages, function ($age){
    return $age >= 50;
});
//var_dump($ages);
//var_dump($agesFiltered);

// TODO - map
$names = ['John', 'Doe', 'Jane', 'Doe', 'John', 'Doe'];

//$names[0] = strtoupper($names[0]);
//
//echo $names[0];
$names = array_map( static function ($name) {
    return strtoupper($name);},$names);
var_dump($names);