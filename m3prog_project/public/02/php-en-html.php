<?php
$titelpagina = "PHP en HTML combineren";
$image = "https://cdn.pixabay.com/photo/2023/04/11/13/27/bird-7917250_1280.jpg";
$titelAfbeelding = "een vogel";
$auteur = "denton2920";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titelpagina;?></title>
</head>
<body>
    <img src="<?= $image;?>" alt="<?= $titelAfbeelding?>">
    <p><?= $auteur;?></p>
    
</body>
</html>