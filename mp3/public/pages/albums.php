
<h1>Álbums</h1>
    <a href="?page=new_album" class="btn btn-success">Adicionar Álbum</a>
<div class="row">
    <hr>

    <?php
    $albums = getAlbums();

    foreach($albums as $album):
        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
<div class="col-4 album">
   <a href="?page=musics&album=<?= $nameAlbum ?>">
       <img src="<?= $imgAlbum ?>" alt=<?= $nameAlbum ?> class="img-album">
       <h3><?=  strtoupper($nameAlbum) ?></h3>
   </a>
</div>
    <?php
    endforeach;
    ?>
</div>