<?php
// leggere il file json
$file_json = file_get_contents("./database.json");

//Ricevere il file json e rendere leggibile
$dischi = json_decode($file_json, true);

$new_album = [];
if(!empty($_POST)) {
    $new_album["titolo"] = $_POST["titolo"];
    $new_album["artista"] = $_POST["artista"];
    $new_album["cover"] = $_POST["cover"];
    $new_album["anno"] = $_POST["anno"];
    $new_album["genere"] = $_POST["genre"];
    $dischi[] = $new_album;
    $nuovo_array = json_encode($dischi);
    file_put_contents("./database.json", $nuovo_array);
}
?>