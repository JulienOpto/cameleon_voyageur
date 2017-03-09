<?php

include 'header_bo.php';
include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
// Change character set to utf8
mysqli_set_charset($bdd,"utf8");

echo '<h2>Liste</h2>';
?>

    <ul class="nav nav-tabs" role="tablist" >
        <li role="presentation" class="active" ><a href="#bagels" role="tab" data-toggle="tab" aria-controls="bagels">Bagels</a></li>
        <li role="presentation" ><a href="#rollsco" role="tab" data-toggle="tab" aria-controls="rollsco">Rolls & Co</a></li>
        <li role="presentation" ><a href="#desserts" role="tab" data-toggle="tab" aria-controls="desserts">Desserts</a></li>
        <li role="presentation" ><a href="#boissons" role="tab" data-toggle="tab" aria-controls="boissons">Boissons</a></li>
    </ul>
<div class="tab-content">
    <div id="bagels" class="tab-pane active fade in "role="tabpanel">

    <?php

    $req = "SELECT *
                FROM bagels;";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row taille_div">';
    while($data = mysqli_fetch_assoc($res))
    {
        echo '
              <div class="col-sm-3">
                <div class="thumbnail">
                  <img src="'.$data['photo'].'" alt="...">
                  <div class="caption">
                    <h3>'.$data['price'].''.$data['name'].'</a></h3>
                    <p>'.$data['description'].'</p>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="type" value="bagels"/>
                        <input type="hidden" name="id" value="'.$data['id'].'"/>
                        <input  class="btn btn-danger" type="submit" value="Supprimer" name="delete" data-toggle="modal" data-target="#confirmModal"/>
                        <a href="form_bo.php?id='.$data['id'].'" class="btn btn-primary">Modifier '.'</a>
                    </form>
                  </div>
                </div>
              </div>     
            ';

    }

    echo '</div></div>
          <div id="rollsco" class="tab-pane fade in" role="tabpanel">';


    $req = "SELECT *
                FROM rollsco;";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row taille_div">';
    while($data = mysqli_fetch_assoc($res))
    {
        echo '
              <div class="col-sm-3">
                <div class="thumbnail">
                  <img src="'.$data['photo'].'" alt="...">
                  <div class="caption">
                    <h3>'.$data['price'].''.$data['name'].'</a></h3>
                    <p>'.$data['description'].'</p>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="'.$data['id'].'"/>
                        <input type="hidden" name="type" value="rollsco"/>
                        <input  class="btn btn-danger" type="submit" value="Supprimer" name="delete" data-toggle="modal" data-target="#confirmModal"/>
                        <a href="form_bo.php?id='.$data['id'].'" class="btn btn-primary">Modifier '.'</a>
                    </form>
                  </div>
                </div>
              </div>
            ';

    }

    echo '</div> </div>
          <div id="desserts" class="tab-pane  fade in" role="tabpanel">';


    $req = "SELECT *
                FROM desserts;";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row taille_div">';
    while($data = mysqli_fetch_assoc($res))
    {
        echo '
              <div class="col-sm-3">
                <div class="thumbnail">
                  <img src="'.$data['photo'].'" alt="...">
                  <div class="caption">
                    <h3>'.$data['price'].''.$data['name'].'</a></h3>
                    <p>'.$data['description'].'</p>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="'.$data['id'].'"/>
                        <input type="hidden" name="type" value="desserts"/>
                        <input  class="btn btn-danger" type="submit" value="Supprimer" name="delete" data-toggle="modal" data-target="#confirmModal"/>
                        <a href="form_bo.php?id='.$data['id'].'" class="btn btn-primary">Modifier '.'</a>                       
                    </form>
                  </div>
                </div>
              </div>
            ';

    }

    echo '</div></div>
          <div id="boissons" class="tab-pane fade in " role="tabpanel">';


    $req = "SELECT *
                FROM boissons;";
    $res = mysqli_query($bdd, $req);


    echo '<div class="row taille_div">';
    while($data = mysqli_fetch_assoc($res))
    {
        echo '
              <div class="col-sm-3">
                <div class="thumbnail">
                  <img src="'.$data['photo'].'" alt="...">
                  <div class="caption">
                    <h3>'.$data['price'].''.$data['name'].'</a></h3>
                    <p>'.$data['description'].'</p>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="'.$data['id'].'"/>
                        <input type="hidden" name="type" value="boissons"/>
                        <input  class="btn btn-danger" type="submit" value="Supprimer" name="delete" data-toggle="modal" data-target="#confirmModal"/>
                        <a href="form_bo.php?id='.$data['id'].'" class="btn btn-primary">Modifier '.'</a>
                    </form>
                  </div>
                </div>
              </div>
            ';

    }

echo '


      </div></div></div> ';

include 'footer_bo.php'

?>