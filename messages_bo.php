<!--  affichage des messages laissés par l'utilisateur du site dans le formulaire de contact avec bouton répondre ?-->

<?php

include 'connect.php';

$bdd = mysqli_connect(SERVER, USER, PASS, DB);
mysqli_set_charset($bdd,"utf8");

$resultat = mysqli_query($bdd, 'SELECT nom, prenom, email, message, note FROM messages');

include 'header_bo.php';

?>

<div class="row">
    <div class="col-xs_12">

    <h2>Liste des messages</h2><br/>

    <table classe="table">

        <thead>

            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
                <td>Message</td>
                <td>Note</td>
            </tr>

        </thead>

        <?php

        while($donnees = mysqli_fetch_assoc($resultat))
        {
            echo '<tbody>';
                echo '<tr>';
                    echo '<td>'.$donnees['nom'].'</td>';
                    echo '<td>'.$donnees['prenom'].'</td>';
                    echo '<td>'.$donnees['email'].'</td>';
                    echo '<td>'.$donnees['message'].'</td>';
                    echo '<td>'.$donnees['note'].'</td>';
                echo '</tr>';
            echo '</tbody>';
        };

        echo '</table>';

        ?>

    </div>
    
    </div>

<?php

include 'footer_bo.php';

?>

