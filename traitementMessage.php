<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];
$note = $_POST['note'];

$req = "INSERT INTO messages (nom, prenom, email, message, note) VALUES ('$nom', '$prenom', '$email', '$message', '$note')";

if (mysqli_query($bdd, $req)) {
    header('Location: index.php');
};

?>


