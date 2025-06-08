<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Photos des invités</title>
</head>
<body>
    <h1>Photos des invités</h1>

    <?php
    $folder = 'uploads/';
    $images = array_diff(scandir($folder), array('.', '..'));
    foreach ($images as $image) {
        echo '<div style="margin: 10px;"><img src="'.$folder.$image.'" width="300"></div>';
    }
    ?>

    <h3><a href="ajout photos.html">Ajouter une photo</a></h3>
    <h3><a href="index.html">Retour à l'accueil</a></h3>
</body>
</html>
