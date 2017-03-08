
<?php

include 'header_bo.php';
include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
// Change character set to utf8
mysqli_set_charset($bdd,"utf8");

echo '<h2>Liste</h2>';

$req = "SELECT name id, description, price, photo, name
            FROM bagels;";
$res = mysqli_query($bdd, $req);


echo '<div class="row">';
while($data = mysqli_fetch_assoc($res))
{
    echo '
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="http://placehold.it/200x200" alt="...">
              <div class="caption">
                <h3><a href="detailEleve.php?id='.$data['id'].'">'.$data['price'].''.$data['name'].'</a></h3>
                <p>'.$data['description'].'</p>
                <form method="POST" action="deleteEleve.php">
                    <input type="hidden" name="id" value="'.$data['id'].'"/>
                    <input  class="btn btn-danger" type="submit" value="Delete" name="delete"/>
                </form>
              </div>
            </div>
          </div>
        ';

}

echo '</div>';


include 'footer_bo.php'

?>