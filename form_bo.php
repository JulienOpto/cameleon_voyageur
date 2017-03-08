 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/html">
     <head>
         <title>Le Caméléon voyageur</title>
         <link href="https://fonts.googleapis.com/css?family=Boogaloo|Gloria+Hallelujah|Indie+Flower|Oxygen" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/admin.css">
         <meta charset="utf-8">
     </head>



<?php

    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASS, DB);
    $textButton = 'Créer';
    $nom = $prix = $photo = $description = $type = $id='';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $req = "SELECT * FROM bagels WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $photo = $data['photo'];
            $prix = $data['prix'];
            $nom = $data['nom'];
            $description = $data['description'];
        }
        $textButton = 'Modifier';
    }



    if (!empty($_POST)) {

        foreach ($_POST as $key=>$data) {
            $postClean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
        }


        if (isset($_POST['btnSubmit'])) {
            $photo = $postClean['photo'];
            $nom = $postClean['nom'];
            $prix = $postClean['prix'];
            $description = $postClean['description'];
            $id = $postClean['id'];
            $type = $postClean['type'];

            if ($id) {
                $req = "UPDATE $type SET 
                    name='$nom',description='$description',price='$prix',photo='$photo',' WHERE id=$id";
                echo $req;
            } else {
                $req = "INSERT INTO $type (name, description, price, photo) VALUES 
                    ('$nom', '$description', '$prix', '$photo')";
            }

            if (mysqli_query($bdd, $req)) {
                header('Location: liste_bo.php');
            }


        }
    }

    $tabType = ['Bagel'=>'bagels',
        'Rolls & CO'=>'rollsco',
        'Dessert'=>'desserts',
        'Boissons'=>'boissons'
    ];

    echo '<h1>Fiche création Produit</h1>';

    echo '    <form method="POST" action="crea.php">
                <div class="form-group">
                    <label for="type">Produit</label>
                    <select class="form-control" name="type" id="type">';

    foreach ($tabType as $label=>$value) {
        $selected='';
        if ($type==$value) {
            $selected = 'selected="selected"';
        }
        echo '<option value="'.$value.'" '.$selected.'>'.$label.'</option>';
    }

    echo ' </select>
                </div>
    
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input class="form-control" type="text" value="'.$nom.'" name="nom" placeholder="nom" id="nom"/>
                </div>
                
                 <div class="form-group">
                    <label for="desc">Description:</label>
                    <textarea class="form-control"  name="description" id="desc">'.$description.'</textarea>
                </div>
    
                <div class="form-group">
                    <label for="prix">Prix:</label>
                    <input class="form-control" type="text"  value="'.$prix.'"  name="prix" id="prix"/>
                </div>
                
                <div class="form-group">
                    <label for="photo">Lien Image:</label>
                    <input class="form-control" type="text"  value="'.$photo.'"  name="photo" id="photo"/>
                </div>';

    echo '</div>             
            <input type="hidden" name="id" value="'.$id.'"/>
            <input class="btn btn-default" type="reset" name="btnReset" value="Vider" />
            <input class="btn btn-success" type="submit" name="btnSubmit" value="'.$textButton.'" />
        </form>
        <div class="row">
            <a href="index.php" class="btn btn-primary">Retour à l\'accueil</a>
        </div>';


    ?>