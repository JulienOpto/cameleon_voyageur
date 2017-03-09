<?php

$bdd = mysqli_connect('localhost', 'isabelle', 'I$abe77e', 'cameleon');

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


