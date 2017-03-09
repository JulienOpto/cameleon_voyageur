<?php

print_r($_POST);

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

if (!empty($_POST['id'])) {


    $id=mysqli_real_escape_string($bdd, trim($_POST['id']));
    if ($id) {
        $req = "DELETE FROM $_POST[type] WHERE id=$id";
        if (mysqli_query($bdd, $req)) {
            header('Location: liste_bo.php');
        } else {
            echo 'Page introuvable';
        }
    }
} else {
    echo 'WARNING';
};
