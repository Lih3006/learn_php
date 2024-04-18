<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style/style.css">
    <title>MP3 em PHP</title>
</head>
<body>
<div class="container">
    <?php
    include_once "helpers.php";

    if(isset($_GET['page'])){
        if(file("pages/{$_GET['page']}.php")){
            include_once "pages/{$_GET['page']}.php";
    }else{
        include_once "pages/404.php";
    }
        }else{
            include_once "pages/albums.php";
    }
    ?>
</div>

</body>
</html>