<?php
require_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITunes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <h1 class="text-center my-3">Playlist personale</h1>
    <div class="container d-flex my-3 gap-3 flex-wrap">
        <?php
        foreach ($dischi as $disco) {
            echo '<div class="card text-center" style="width: 18rem;">'; ?>
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $disco["titolo"]  ?></h5>
                <p class="card-text"><?php echo $disco["artista"]  ?></p>
                <span class="card-text"><?php echo $disco["genere"]  ?></span>
                <span class="card-text"><?php echo $disco["anno"]  ?></span>
            </div>
        <?php
            echo '</div>';
        };

        ?>
    </div>

    <div class="form my-5 ms-auto me-auto w-50 text-center">
        <h2>Aggiungi un nuovo album</h2>
        <form action="" method="POST">
            <div class="pb-3">
                <label class="d-block" for="titolo">Titolo album</label>
                <input class="w-50" type="text" name="titolo">
            </div>
            <div class="pb-3">
                <label class="d-block" for="artista">Nome Artista</label>
                <input class="w-50" type="text" name="artista">
            </div>
            <div class="pb-3">
                <label class="d-block" for="cover">Url cover album</label>
                <input class="w-50" type="text" name="cover">
            </div>
            <div class="pb-3">
                <label class="d-block" for="anno">Anno di pubblicazione</label>
                <input class="w-50" type="number" name="anno" min=1500 max=2100>
            </div>
            <div class="pb-3">
                <label class="d-block" for="genre">Genere</label>
                <select class="w-50 text-center" name="genre" id="">
                    <option value="">--Scegli genere--</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Classica">Classica</option>
                    <option value="Blues">Blues</option>
                    <option value="Country">Country</option>
                    <option value="Rap Hip/Hop">Rap Hip/Hop</option>
                    <option value="R&B">R&B</option>
                    <option value="Elettronic">Elettronic</option>
                    <option value="Reggae">Reggae</option>
                    <option value="Folk">Folk</option>
                    <option value="Metal">Metal</option>
                    <option value="Punk">Punk</option>
                    <option value="Soul">Soul</option>
                    <option value="Disco">Disco</option>
                    <option value="Gospel">Gospel</option>
                    <option value="Alternative">Alternative</option>
                    <option value="Indie">Indie</option>
                    <option value="Funk">Funk</option>
                    <option value="Techno">Techno</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Aggiungi alla playlist</button>
        </form>
    </div>
</body>

</html>