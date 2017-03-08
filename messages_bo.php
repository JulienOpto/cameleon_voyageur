<!--  affichage des messages laissés par l'utilisateur du site dans le formulaire de contact avec bouton répondre ?-->

<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

$resultat = mysqli_query($bdd, 'SELECT * FROM messages');


include 'header_bo.php';


echo '<table classe="tableau">';

echo '<tr>
        <td>Nom<td>
        <td>Prénom</td>
        <td>Email</td>
        <td>Message</td>
        <td>Note</td>
        </tr>';


while($donnees = mysqli_fetch_assoc($resultat))
{
    echo '<tr>';
    echo '<td>'.$donnees['nom'].'</td>';
    echo '<td>'.$donnees['prenom'].'</td>';
    echo '<td>'.$donnees['email'].'</td>';
    echo '<td>'.$donnees['message'].'</td>';
    echo '<td>'.$donnees['note'].'</td>';
    echo '</tr>';
};

echo '</table>';

include 'footer_bo.php';

?>

