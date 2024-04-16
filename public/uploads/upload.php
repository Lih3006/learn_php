<?php

echo '<pre>';
$photos = $_FILES['files'];
$path = 'imgs/';
// ? caso o path não exista, cria o diretório
if (!is_dir($path)) {
    mkdir($path, 0777, true);

}
for ($i = 0, $iMax = count($photos['name']); $i < $iMax; $i++) {
    if(move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i])){
        echo 'File uploaded for photo ' . $i . '<br>';
    } else {
        echo 'Error uploading file';
    }
}