<?php
    $nom = $_GET['name'];
    $email = $_GET['email'];
    $genre = $_GET['genre'];

    // vérifier si les champs sont vide
    if ($nom == "") {
        echo "Veuillez insérer votre nom";
    } elseif ($email == "") {
        echo "Veuillez insérer votre email";
    } elseif ($genre == "") {
        echo "Veuillez insérer votre genre";
    }
?>