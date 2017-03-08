<?php

include 'connect.php';

$db = mysqli_connect(SERVER, USER, PASS, DB);

$id = $_POST['id'];
$pw = $_POST['pw'];

if ($id == ID && $pw == PW) {
    include 'back_office.php';
} else {
    include 'erreur.php';
}


