<?php
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM booking WHERE");
$stmt->execute();
$data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="zxx">
    

<!-- Start: head Section -->
    <?php include("head.php"); ?>
<!-- End: head Section -->

    <body class="layout-v3">
    
        <!-- Start: Header Section -->
        <?php include("header.php"); ?>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Mes réservations</h2>
                    <span class="underline center"></span>
                    <p class="lead">Gerer mes réservations</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li>Mes réservations</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                            </section>
                            <!-- End: Search Section -->
                            <div class="booksmedia-fullwidth">
                            <?php
                                foreach ($data as $row) {
                                    // $length = strlen($row['title']);
                                    // if ($length> 30){
                                    //     $title_concac = substr($row['title'].' ...', 0, 30); 
                                    // }
                                    $resume_concac = substr($row['resume'], 0, 160); 
                                    $start= $row['start'];
                                    $end= $row['end'];
                                    $echeance= $end - $start;
                                   echo "<ul class='myTable'>
                                        <li>
                                            <figure>
                                                <a href=mangas_details.php?id=".$row['id']."><img src='".$row['url_picture']."' alt='Book'></a>
                                                <figcaption>
                                                    <header>
                                                        <h4 small><a href=mangas_details.php?id=".$row['id'].">".$row['title']."</a></h4 small>
                                                        <p><strong>Author: </strong>"  .$row['author']."</p>
                                                        <p><strong>ISBN: </strong>"  .$row['isbn']."</p>
                                                        </br>
                                                    </header>
                                                    <p>".$resume_concac.' ...'."</p>
                                                    <div class='actions'>
                                                        <ul>
                                                            <li>
                                                                <a href='#' target='_blank' data-toggle='blog-tags' data-placement='top'>
                                                                    ".$echeance." € <i class='fa fa-shopping-cart'></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>                                                
                                        </li>
                                    </ul>";
                                }
                                ?>
                            </div>
                        </div>
                                    
        <!-- Start: Footer Section-->
        <?php include("footer.php"); ?>
        <!-- End: Footer Section-->

        <!-- Start: formulaire_popup Section-->
        <?php include("formulaire_popup.php"); ?>
        <!-- End: formulaire_popup Section-->

        <!-- Start: SCRIPTS Section-->
        <?php include("script_js.php"); ?>
        <!-- End: SCRIPTS Section-->
    </body>


</html>