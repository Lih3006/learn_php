<?php

//$name = "Aline Mendonca";
//echo $name . ' criando sessao';

session_start();

$_SESSION['name'] = 'Aline Mendonca';
$_SESSION['auth'] = true;