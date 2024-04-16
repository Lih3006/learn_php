<?php

echo '<pre>';
$photo = $_FILES['file'];
$path = 'imgs/';

if(move_uploaded_file($photo['tmp_name'], $path . $photo['name'])){
    echo 'File uploaded';
} else {
    echo 'Error uploading file';
}