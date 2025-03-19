<?php
// Prendo il file json
$file_json = file_get_contents("./database.json");

// Decodifico il file json in un array associativo php
$dischi = json_decode($file_json, true);

// Array per il nuovo album
$new_album = [];

// Effettuo una verifica su $_POST, se è vuoto non fa niente, in alternativa preleva tutti i valori passategli dal form e li salvo nell'array del nuovo album
if(!empty($_POST)) {
    $new_album["titolo"] = $_POST["titolo"];
    $new_album["artista"] = $_POST["artista"];
    $new_album["cover"] = $_POST["cover"];
    $new_album["anno"] = $_POST["anno"];
    $new_album["genere"] = $_POST["genre"];

    // Prendo l'array del nuovo album e lo aggiungo all'array di album principale
    $dischi[] = $new_album;

    // Codifico di nuovo l'album in json e lo invio al file .json per salvare l'aggiunta del nuovo album
    $nuovo_array = json_encode($dischi);
    file_put_contents("./database.json", $nuovo_array);
}
?>