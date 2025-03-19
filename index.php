<?php
require_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITunes</title>
</head>

<body>
    <h1>Dischi aggiunti alla playlist personale</h1>
    <div class="container">
        <?php
        foreach ($dischi as $disco) {
            echo '<div class="card">'; ?>
            <h3><?php echo $disco["titolo"]  ?></h3>
            <p><?php echo $disco["artista"]  ?></p>
            <span><?php echo $disco["genere"]  ?></span>
            <span><?php echo $disco["anno"]  ?></span>
        <?php };
        echo '</div>';
        ?>
    </div>

    <div class="form">
        <h2>Aggiungi un nuovo album</h2>
        <form action="" method="POST">
            <div>
                <label for="titolo">Titolo album</label>
                <input type="text" name="titolo">
            </div>
            <div>
                <label for="artista">Nome Artista</label>
                <input type="text" name="artista">
            </div>
            <div>
                <label for="cover">Url cover album</label>
                <input type="text" name="cover">
            </div>
            <div>
                <label for="anno">Anno di pubblicazione</label>
                <input type="number" name="anno" min=1500 max=2100>
            </div>
            <div>
                <label for="genre">Genere</label>
                <select name="genre" id="">
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
            <button type="submit">Aggiungi alla playlist</button>
        </form>
    </div>
</body>

</html>