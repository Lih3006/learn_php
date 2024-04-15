<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>

    <body>
<!--    header -->
<?php
include('includes/header.php');
// TODO - alem do include tem o include_once inclui apenas um vez
require('includes/header.php');
// TODO - alem do require tem o require_once inclui apenas um vez o require significa que o arquivo é obrigatorio
?>
    <br>
    <main>
        <h1>
        <?php
            echo "Ola eu sou um site";
            ?>
        </h1>
    </main>
<!-- footer -->
<?php
include('includes/footer.php')
?>
    <br>

    </body>
</html>