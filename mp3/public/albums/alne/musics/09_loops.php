<?php

$names = ['Alex', 'Billy', 'Dale', 'John', 'Jane'];

// * loop for
for ($i =0, $iMax = count($names); $i < $iMax; $i++){
    echo "{$names[$i]} <br>";
}

echo "<br>";

// * loop for each

foreach ($names as $key => $name){
    echo "{$name} novo {$key} <br>";
}


// * loop while

$i = 1;

$i = 1;

while ($i < 10){
    echo  "{$i} é menor do que 10 <br>";
    $i++;
}

// * loop do while - primeiro ele faz o loop depois a verificacao
$i = 1;
$i = 11;
do {
    echo "{$i} é menor do que 10 <br>";
    $i++;
}   while($i < 10);