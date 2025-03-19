<?php
// leggere il file json
$file_json = file_get_contents("./database.json");

//Ricevere il file json e rendere leggibile
$dischi = json_decode($file_json, true);
?>