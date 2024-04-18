
<h1>New Music</h1>
<a href="?page=albums" class="btn btn-success">Voltar</a>
<div class="container">
<form class="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="name">
        Nome da Musica
    </label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do album">
    </div>
    <div class="form-group">
    <label for="music">
        Insira uma imagem </label>
    <input type="file" name="music" id="music" class="form-control" placeholder=".php">
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
//    var_dump($_SERVER['REQUEST_METHOD']);
    $album = $_GET['album'];


    $path = "albums/$album/musics/";
    if(!is_dir($path)){
        mkdir($path);
    }
    $music = $_FILES['music'];
    # $musicInfo = explode('.', $music['name']);
    # $extension = $musicInfo[1];
    $nameMusic = $_FILES['music']['name'];




    if(move_uploaded_file($music['tmp_name'], "{$path}/{$nameMusic}")){
        header("Location: ?page=musics&album=$album");
        echo "Arquivo salvo com sucesso";
    } else {
        echo "Erro ao salvar arquivo";
    }}

?>