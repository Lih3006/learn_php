
<h1>New Album</h1>
<a href="?page=albums" class="btn btn-success">Voltar</a>
<div class="container">
<form class="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="name">
        Nome do Álbum
    </label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do album">
    </div>
    <div class="form-group">
    <label for="image">
        Insira uma imagem </label>
    <input type="file" name="image" id="image" class="form-control" placeholder=".jpg">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
</div>

<?php
// ! ini_set('display_errors', 1);
//var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   $name = $_POST['name'];
    var_dump($_SERVER['REQUEST_METHOD']);


    $path = "albums/{$name}";
    if(!is_dir($path)){
        mkdir($path);
    }
    $image = $_FILES['image'];
    $fileInfo = explode('.', $image['name']);
    $extension = $fileInfo[1];
    $nameImage = "{$_POST['name']}.{$extension}";

    var_dump('123');


    if(move_uploaded_file($image['tmp_name'], "{$path}/{$nameImage}")){
var_dump('teste');
        echo "Arquivo salvo com sucesso";
    } else {
        var_dump('teste1');

        echo "Erro ao salvar arquivo";
    }}

?>