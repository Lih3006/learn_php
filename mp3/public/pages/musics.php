
<h1>Musicas do album <?=strtoupper($_GET['album'])?></h1>


<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Cadastrar nova musica</a>

<div class="row">
    <hr>
    <?php
    $album = $_GET['album'];
    $musics = getMusics($album);
    foreach($musics as $music):
        $infoMusic = explode('/', $music);
        $nameMusic = $infoMusic[3];
    ?>
    <div class="col-4 album">
        <audio controls>
            <source src="<?= $music ?>" type="audio/mpeg">
        </audio>
        <h3><?= strtoupper($nameMusic) ?></h3>
    </div>

    <?php
    endforeach;
    ?>
    <a href="?page=albums" class="btn btn-success">Voltar</a>
