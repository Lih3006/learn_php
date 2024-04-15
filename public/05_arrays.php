<?php
//
//$carros = ["Gol", 1, "Celta", "Fusca", "Palio"];
//
//var_dump($carros);

//$cars = array("Volvo", "BMW", "Toyota");
//
//var_dump($cars);

// TODO array composto
$car = [
    'car'=> 'Gol',
    'color'=> 'red',
    'year'=> 2020,
];
//echo $car['som']='vrum vrum';
//var_dump($car['som']);

// TODO array multidimensional
$cars = [
    'Gol' => [
        'car'=> 'Gol',
        'color'=> 'red',
        'year'=> 2020,
    ],
    'Fusca' => [
        'car'=> 'Fusca',
        'color'=> 'blue',
        'year'=> 2021,
    ],
    'Celta' => [
        'car'=> 'Celta',
        'color'=> 'green',
        'year'=> 2022,
    ],
];
var_dump($cars['Gol']);
var_dump($cars['Gol']['color']);
echo $cars['Gol']['color'];