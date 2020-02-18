<?php
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM books WHERE type ='bd'");
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
                    <h2>Univers BD's</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li>BD's</li>
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
                                    foreach ($data as $row) {
                                        // $length = strlen($row['title']);
                                        // if ($length> 30){
                                        //     $title_concac = substr($row['title'].' ...', 0, 30); 
                                        // }
                                    $resume_concac = substr($row['resume'], 0, 160); 
                                    echo "<ul>
                                            <li>
                                                <figure>
                                                    <a href=mangas_details.php?id=".$row['id']."><img src='".$row['url_picture']."' alt='Book'></a>
                                                    <figcaption>
                                                        <header>
                                                            <h4 small><a href=mangas_details.php?id=".$row['id'].">".$row['title']."</a></h4 small>
                                                            <p><strong>Author: </strong>"  .$row['author']."</p>
                                                            <p><strong>ISBN: </strong>"  .$row['isbn']."</p>
                                                        </header>
                                                        <p>".$resume_concac.' ...'."</p>
                                                        <div class='actions'>
                                                            <ul>
                                                                <li>
                                                                    <a href='mangas_details.php' target='_blank' data-toggle='blog-tags' data-placement='top' title='Réserver'>
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