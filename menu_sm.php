<?php

$request_bagels = "SELECT * FROM bagels";
$result_bagels = mysqli_query($db, $request_bagels);

$request_rollsco = "SELECT * FROM rollsco";
$result_rollsco = mysqli_query($db, $request_rollsco);

$request_desserts = "SELECT * FROM desserts";
$result_desserts = mysqli_query($db, $request_desserts);

$request_boissons = "SELECT * FROM boissons";
$result_boissons = mysqli_query($db, $request_boissons);


echo '<!-- tablette -->
<!-- choix produits -->

<div class="row hidden-xs hidden-md hidden-lg fond">

    <!-- navigation produits -->
    <nav class="col-md-8 col-md-offset-2 col-xs-12">
        <ul class="nav nav-pills nav-menu" role="tablist">
            <li role="presentation" class="col-md-3 col-xs-6 active"><a href="#slider1_sm" class="pill-color" aria-controls="slider1_sm" role="tab" data-toggle="pill">Bagels</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider2_sm" class="pill-color" aria-controls="slider2_sm" role="tab" data-toggle="pill">Rolls & Co</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider3_sm" class="pill-color" aria-controls="desserts_sm" role="tab" data-toggle="pill">Desserts</a></li>
            <li role="presentation" class="col-md-3 col-xs-6"><a href="#slider4_sm" class="pill-color" aria-controls="boissons_sm" role="tab" data-toggle="pill">Boissons</a></li>
        </ul>
    </nav>
</div>


<div class="row hidden-xs hidden-md hidden-lg taille">
    <div class="col-xs-12 tab-content">

        ';


//slider bagels



$print_bagels = '';
$counter_bagels = 0;
$counter_div = 0;

$print_bagels .= '
        <div id="slider1_sm" class="carousel slide tab-pane fade in active zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_bagels = mysqli_fetch_assoc($result_bagels))
{
    if ($counter_bagels%2 == 0 || $counter_bagels==0) {

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
                            <div class="col-sm-offset-2';

    $print_bagels .=' col-sm-3 photothumb thumbnail">
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

if ($counter_bagels > 2) {
    $print_bagels .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider1_sm" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider1_sm" data-slide="next">
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
        <div id="slider2_sm" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_rollsco = mysqli_fetch_assoc($result_rollsco))
{
    if ($counter_rollsco%2 == 0 || $counter_rollsco==0) {

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
                            <div class="col-sm-offset-2';


    $print_rollsco .=' col-sm-3 photothumb thumbnail">
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

if ($counter_rollsco > 2) {
    $print_rollsco .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider2_sm" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider2_sm" data-slide="next">
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
        <div id="slider3_sm" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_desserts = mysqli_fetch_assoc($result_desserts))
{
    if ($counter_desserts%2 == 0 || $counter_desserts==0) {

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
                            <div class="col-sm-offset-2';


    $print_desserts .=' col-sm-3 photothumb thumbnail">
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

if ($counter_desserts > 2) {
    $print_desserts .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider3_sm" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider3_sm" data-slide="next">
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
        <div id="slider4_sm" class="carousel slide tab-pane fade in zone-menu" data-ride="carousel" data-interval="false" role="tabpanel">


            <!-- contenu  -->
            <div class="carousel-inner" role="listbox">';


while ($data_boissons = mysqli_fetch_assoc($result_boissons))
{
    if ($counter_boissons%2 == 0 || $counter_boissons==0) {

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
                            <div class="col-sm-offset-2';


    $print_boissons .=' col-sm-3 photothumb thumbnail">
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

if ($counter_boissons > 2) {
    $print_boissons .= '
            <!-- flèches de contrôle -->
            <a class="carousel-control left" href="#slider4_sm" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#slider4_sm" data-slide="next">
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



