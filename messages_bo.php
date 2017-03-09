<!--  affichage des messages laissés par l'utilisateur du site dans le formulaire de contact avec bouton répondre ?-->

<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);


$resultat = mysqli_query($bdd, 'SELECT * FROM messages');

include 'header_bo.php';

?>


<div class='row'>
    <div class='col-xs_12'>

    <h2>Liste des messages</h2><br/>

    <table>

        <thead>

            <tr>
                <td>Id</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
                <td>Message</td>
                <td>Note</td>
                </tr>

        </thead>

        <tbody>

        <?php

            while($donnees = mysqli_fetch_assoc($resultat))
            {
                echo '<tr>';
                    echo '<td>'.$donnees['id_messages'].'</td>';
                    echo '<td>'.$donnees['nom'].'</td>';
                    echo '<td>'.$donnees['prenom'].'</td>';
                    echo '<td>'.$donnees['email'].'</td>';
                    echo '<td>'.$donnees['message'].'</td>';
                    echo '<td>'.$donnees['note'].'</td>';
                    echo '<td>'.'<form method="POST" action="deleteMessage.php">
                                    <input type="hidden" name="id" value="'.$donnees['id_messages'].'"/>
                                    <input  class="btn btn-danger" type="submit" value="Supprimer" name="delete"/>
                                </form>'.'</td>';
                echo '</tr>';
            };

        ?>

        </tbody>

    </table>

    </div>

</div>

<?php

include 'footer_bo.php';

?>

