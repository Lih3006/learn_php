<?php

// include './13_set_sections.php';

// echo $name;

session_start();

# echo $_SESSION['name'] . ' recuperando sessao';

if (!isset($_SESSION['auth']) ) {
    header('Location:13_set_sections.php');
}

echo 'Painel do admin';