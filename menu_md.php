<?php

include 'connect.php';

$db = mysqli_connect(SERVER, USER, PASS, DB);
mysqli_set_charset($db,"utf8");

$request_bagels = "SELECT * FROM bagels";
$result_bagels = mysqli_query($db, $request_bagels);

$request_rollsco = "SELECT * FROM rollsco";
$result_rollsco = mysqli_query($db, $request_rollsco);

$request_desserts = "SELECT * FROM desserts";
$result_desserts = mysqli_query($db, $request_desserts);

$request_boissons = "SELECT * FROM boissons";
$result_boissons = mysqli_query($db, $request_boissons);

echo '<!-- desktop -->
<!-- choix produits -->
<div class="row produit">
    <div class="col-xs-12 titreFondBlanc"><h2>Nos produits</h2></div>
</div>

<div class="row hidden-xs hidden-sm fond">

    <!-- navigation produits -->
    <nav class="col-md-8 col-md-offset-2 col-xs-12">
        <ul class="nav nav-pills nav-menu" role="tablist">
            <li role="presentation" class="col-md-3 col-xs-6 active"><a href="#slider1" class="pill-color" aria-controls="slider1" role="tab" data-toggle="pill">Bagels</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider2" class="pill-color" aria-controls="slider2" role="tab" data-toggle="pill">Rolls & Co</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider3" class="pill-color" aria-controls="desserts" role="tab" data-toggle="pill">Desserts</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider4" class="pill-color" aria-controls="boissons" role="tab" data-toggle="pill">Boissons</a></li>
        </ul>
    </nav>
</div>


<div class="row hidden-xs hidden-sm taille">
    <div class="col-xs-12 tab-content">

        ';


    //slider bagels



$print_bagels = '';
$counter_bagels = 0;
$counter_div = 0;

$print_bagels .= '
        <div id="slider1" class="carousel slide tab-pane fade in active zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_bagels = mysqli_fetch_assoc($result_bagels))
    {
        if ($counter_bagels%3 == 0 || $counter_bagels==0) {

            if ($counter_div>0) {
                $print_bagels .= '
                        </div>
                    </div>';
            }
            $print_bagels .= '
            
                    <div class="item';
            if ($counter_bagels==0) {
                $print_bagels .= ' active';
            }
            $print_bagels .= '">
                        <div class="row">';
        $counter_div++;
        }

        $print_bagels .= '
                            <div class="col-md-offset-';
        if ($counter_bagels%3==0 || $counter_bagels==0) {
            $print_bagels .= '2';
        }else {
            $print_bagels .= '1';
            }

        $print_bagels .=' col-md-2 photothumb thumbnail">
                                <img src="'.$data_bagels['photo'].'" alt="'.$data_bagels['name'].'">
                                <div class="caption">
                                    <h3>'.$data_bagels['name'].'</h3>
                                    <p>'.$data_bagels['description'].'</p>
                                    <p class="prix">'.$data_bagels['price'].'</p>
                                </div>
                            </div>';



        $counter_bagels++;
    }

$print_bagels .= '
                        </div>
                    </div>';

$print_bagels .='
            </div>';

    if ($counter_bagels > 3) {
        $print_bagels .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider1" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider1" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>';
            }
     $print_bagels .='
                    </div>';


    echo $print_bagels;



    
    
    // slider rolls

$print_rollsco = '';
$counter_rollsco = 0;
$counter_div = 0;

$print_rollsco .= '
        <div id="slider2" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_rollsco = mysqli_fetch_assoc($result_rollsco))
{
    if ($counter_rollsco%3 == 0 || $counter_rollsco==0) {

        if ($counter_div>0) {
            $print_rollsco .= '
                        </div>
                    </div>';
        }
        $print_rollsco .= '
            
                    <div class="item';
        if ($counter_rollsco==0) {
            $print_rollsco .= ' active';
        }
        $print_rollsco .= '">
                        <div class="row">';
        $counter_div++;
    }

    $print_rollsco .= '
                            <div class="col-md-offset-';
    if ($counter_rollsco%3==0 || $counter_rollsco==0) {
        $print_rollsco .= '2';
    }else {
        $print_rollsco .= '1';
    }

    $print_rollsco .=' col-md-2 photothumb thumbnail">
                                <img src="'.$data_rollsco['photo'].'" alt="'.$data_rollsco['name'].'">
                                <div class="caption">
                                    <h3>'.$data_rollsco['name'].'</h3>
                                    <p>'.$data_rollsco['description'].'</p>
                                    <p class="prix">'.$data_rollsco['price'].'</p>
                                </div>
                            </div>';



    $counter_rollsco++;
}

$print_rollsco .= '
                        </div>
                    </div>';

$print_rollsco .='
            </div>';

if ($counter_rollsco > 3) {
    $print_rollsco .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider2" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider2" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>';
}
$print_rollsco .='
                    </div>';


echo $print_rollsco;





// slider desserts 

$print_desserts = '';
$counter_desserts = 0;
$counter_div = 0;

$print_desserts .= '
        <div id="slider3" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_desserts = mysqli_fetch_assoc($result_desserts))
{
    if ($counter_desserts%3 == 0 || $counter_desserts==0) {

        if ($counter_div>0) {
            $print_desserts .= '
                        </div>
                    </div>';
        }
        $print_desserts .= '
            
                    <div class="item';
        if ($counter_desserts==0) {
            $print_desserts .= ' active';
        }
        $print_desserts .= '">
                        <div class="row">';
        $counter_div++;
    }

    $print_desserts .= '
                            <div class="col-md-offset-';
    if ($counter_desserts%3==0 || $counter_desserts==0) {
        $print_desserts .= '2';
    }else {
        $print_desserts .= '1';
    }

    $print_desserts .=' col-md-2 photothumb thumbnail">
                                <img src="'.$data_desserts['photo'].'" alt="'.$data_desserts['name'].'">
                                <div class="caption">
                                    <h3>'.$data_desserts['name'].'</h3>
                                    <p>'.$data_desserts['description'].'</p>
                                    <p class="prix">'.$data_desserts['price'].'</p>
                                </div>
                            </div>';



    $counter_desserts++;
}

$print_desserts .= '
                        </div>
                    </div>';

$print_desserts .='
            </div>';

if ($counter_desserts > 3) {
    $print_desserts .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider3" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider3" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>';
}
$print_desserts .='
                    </div>';


echo $print_desserts;




// slider boissons

$print_boissons = '';
$counter_boissons = 0;
$counter_div = 0;

$print_boissons .= '
        <div id="slider4" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_boissons = mysqli_fetch_assoc($result_boissons))
{
    if ($counter_boissons%3 == 0 || $counter_boissons==0) {

        if ($counter_div>0) {
            $print_boissons .= '
                        </div>
                    </div>';
        }
        $print_boissons .= '
            
                    <div class="item';
        if ($counter_boissons==0) {
            $print_boissons .= ' active';
        }
        $print_boissons .= '">
                        <div class="row">';
        $counter_div++;
    }

    $print_boissons .= '
                            <div class="col-md-offset-';
    if ($counter_boissons%3==0 || $counter_boissons==0) {
        $print_boissons .= '2';
    }else {
        $print_boissons .= '1';
    }

    $print_boissons .=' col-md-2 photothumb thumbnail">
                                <img src="'.$data_boissons['photo'].'" alt="'.$data_boissons['name'].'">
                                <div class="caption">
                                    <h3>'.$data_boissons['name'].'</h3>
                                    <p>'.$data_boissons['description'].'</p>
                                    <p class="prix">'.$data_boissons['price'].'</p>
                                </div>
                            </div>';



    $counter_boissons++;
}

$print_boissons .= '
                        </div>
                    </div>';

$print_boissons .='
            </div>';

if ($counter_boissons > 3) {
    $print_boissons .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider4" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider4" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>';
}
$print_boissons .='
                    </div>';


echo $print_boissons;






echo '
    </div>
</div>';

?>