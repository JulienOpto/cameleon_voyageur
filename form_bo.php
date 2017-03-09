<?php

    include 'header_bo.php';
    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASS, DB);
    $textButton = 'Créer';
    $name = $price = $photo = $description = $type = $id='';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $req = "SELECT * FROM bagels WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $photo = $data['photo'];
            $price = $data['price'];
            $name = $data['name'];
            $description = $data['description'];
            $id = $data['id'];
        }
        $textButton = 'Modifier';
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $req = "SELECT * FROM rollsco WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $photo = $data['photo'];
            $price = $data['price'];
            $name = $data['name'];
            $description = $data['description'];
            $id = $data['id'];
        }
        $textButton = 'Modifier';
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $req = "SELECT * FROM desserts WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $photo = $data['photo'];
            $price = $data['price'];
            $name = $data['name'];
            $description = $data['description'];
            $id = $data['id'];
        }
        $textButton = 'Modifier';
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $req = "SELECT * FROM boissons WHERE id=$id";
        $res = mysqli_query($bdd, $req);
        while($data = mysqli_fetch_assoc($res)) {
            $photo = $data['photo'];
            $price = $data['price'];
            $name = $data['name'];
            $description = $data['description'];
            $id = $data['id'];
        }
        $textButton = 'Modifier';
    }

    if (!empty($_POST)) {

        foreach ($_POST as $key=>$data) {
            $postClean[$key] = mysqli_real_escape_string($bdd, htmlentities(trim($data)));
        }


        if (isset($_POST['btnSubmit'])) {
            $photo = $postClean['photo'];
            $name = $postClean['name'];
            $price = $postClean['price'];
            $description = $postClean['description'];
            $id = $postClean['id'];
            $type = $postClean['type'];

            if ($id) {
                print_r($id);
                $req = "UPDATE $type SET 
                    name='$name',description='$description',price='$price',photo='$photo',WHERE id=$id";
                echo $req;
            } else {
                $req = "INSERT INTO $type (name, description, price, photo) VALUES 
                    ('$name', '$description', '$price', '$photo')";
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
?>
    <div class="row">
        <div class="formu col-sm-4 col-sm-offset-3 col-xs-12 ">
<?php
            echo '<h1>Fiche création Produit</h1>';

            echo '    <form method="POST" action="form_bo.php">
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
                            <label for="name">Nom:</label>
                            <input class="form-control" type="text" value="'.$name.'" name="name"  id="name"/>
                        </div>
                        
                         <div class="form-group">
                            <label for="desc">Description:</label>
                            <textarea class="form-control"  name="description" id="desc">'.$description.'</textarea>
                        </div>
            
                        <div class="form-group">
                            <label for="price">Prix:</label>
                            <input class="form-control" type="text"  value="'.$price.'"  name="price" id="price"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="photo">Lien Image:</label>
                            <input class="form-control" type="text"  value="'.$photo.'"  name="photo" id="photo"/>
                        </div>                       
                            <input type="hidden" name="id" value="'.$id.'"/>
                            <input class="btn btn-default" type="reset" name="btnReset" value="Vider" />
                            <input class="btn btn-success" type="submit" name="btnSubmit" value="'.$textButton.'" />
                    </form>';
?>
        </div>
    </div>
<?php
 include 'footer_bo.php';
?>