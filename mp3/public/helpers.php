<?php

// * faz a leitura do diretório albuns

function getAlbums(){
    return glob('albums/*');
}

function getMusics($album)
{
    return glob("albums/{$album}/musics/*.php");
}

