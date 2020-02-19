<?php
session_start();
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM books WHERE type ='bd' AND nb_copy >= 1");
$stmt->execute();
$data_bd = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="zxx">
<title>Manga++ | Bande dessinée</title>    

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
                    <h2>Univers Bande dessinée</h2>
                    <span class="underline center"></span>
                    <p class="lead">Liste des bandes dessinées disponibles.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li>Univers Bande dessinée</li>
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
                            
                            <div class="filter-options margin-list">
                                <div class="row">                                            
                                    <div class="col-md-9 col-sm-3">
                                        <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <select name="orderby">
                                            <option selected="selected">Trier par prix croissant</option>
                                            <option>Trier par prix décroissant</option>
                                            <option>Trier par nouvauté</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="booksmedia-fullwidth">
                                <?php
                                    foreach ($data_bd as $row) {
                                    $resume_concac = substr($row['resume'], 0, 160); 
                                    echo "<ul>
                                            <li>
                                                <figure>
                                                    <a href='bd_redirect.php?id=".$row['id']."'><img src='".$row['url_picture']."' alt='Book'></a>
                                                    <figcaption>
                                                        <header>
                                                            <h4 small><bd_redirect.php?id=".$row['id'].">".$row['title']."</a></h4 small>
                                                            <p><strong>Author: </strong>"  .$row['author']."</p>
                                                            <p><strong>ISBN: </strong>"  .$row['isbn']."</p>
                                                        </header>
                                                        <p>".$resume_concac.'...'."</p>
                                                        <div class='actions'>
                                                            <ul>
                                                                <li>
                                                                    <a href='bd_redirect.php?id=".$row['id']."' data_bd-toggle='blog-tags' data_bd-placement='top' title='Réserver'>
                                                                        ".$row['price']." € <i class='fa fa-shopping-cart'></i>
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