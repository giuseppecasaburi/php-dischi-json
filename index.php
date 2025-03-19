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
        foreach($dischi as $disco) {
            echo '<div class="card">'; ?>
               <h3><?php echo $disco["titolo"]  ?></h3>
               <p><?php echo $disco["artista"]  ?></p>
               <span><?php echo $disco["genere"]  ?></span>
               <span><?php echo $disco["anno"]  ?></span>
            <?php };
             echo '</div>';
        ?>
    </div>
</body>
</html>