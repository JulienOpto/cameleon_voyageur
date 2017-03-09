<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);


if (!empty($_POST['id'])) {
    $id=mysqli_real_escape_string($bdd, trim($_POST['id']));
    if ($id) {
        $req2 = "DELETE FROM messages WHERE id_messages=$id";
        if (mysqli_query($bdd, $req2)) {
            header('Location: messages_bo.php');
        } else {
            echo 'Problème';
        }
    }
} else {
    echo 'cet enregistrement n\'existe pas';
}