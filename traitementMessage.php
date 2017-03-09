<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);


if (!empty($_POST)) {

    foreach ($_POST as $key => $data) {
        $postclean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
    }

    if (isset($_POST['btnSubmit'])) {
        $nom = $postclean['nom'];
        $prenom = $postclean['prenom'];
        $email = $postclean['email'];
        $message = $postclean['message'];
        $note = $postclean['note'];

        $req1 = "INSERT INTO messages (nom, prenom, email, message, note) VALUES ('$nom', '$prenom', '$email', '$message', '$note')";
    }

    if (mysqli_query($bdd, $req1)) {
        header('Location: index.php');
    }

}

?>


