<?php
// Recupéraiton des données
// Vérifications des données envoyées
// Affichages des données sur une autre page
// if ((isset($_POST['name'])) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mat']) && isset($_POST['gender']) && isset($_POST['promotion']) && isset($_POST['email'])) {
//     $name = $_POST['name'];
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $matricule = $_POST['mat'];
//     $gender = $_POST['gender'];
//     $promotion = $_POST['promotion'];
//     $email = $_POST['email'];
//     echo $name."<br>".$firstname."<br>".$lastname."<br>".$matricule."<br>".$gender."<br>".$promotion."<br>".$email."<br>";
// } else {
//     echo "Il y a une erreur !"
// }

echo $_POST['name'];
?>