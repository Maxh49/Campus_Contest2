<?php
        session_start();
        $pdo_bd = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
        $stmt_bd = $pdo_bd->prepare("SELECT * FROM books WHERE id =".$_SESSION["id_bd"]);
        $stmt_bd->execute();
        $data_bd = $stmt_bd->fetch();
        ?>
        <!DOCTYPE html>
<html lang="zxx">
    

<!-- Start: head Section -->
<?php include("head.php"); ?>
<!-- End: head Section -->

    <body class="layout-v3">
    
        <!-- Start: Header Section -->
        <?php include("header.php"); 
        ?>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2><?php echo $data_bd["title"];?></h2>
                    <span class="underline center"></span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="bd.php">Univers Bande dessinée</a></li>
                        <li><?php echo $data_bd["title"];?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div>
                                        <div class="post-thumbnail">
                                            <img src="<?php echo $data_bd["url_picture"];?>" alt="Book Image">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            <h2><?php echo $data_bd["title"];?></h2>
                                            <p><strong>Auteur : </strong><?php echo $data_bd["author"];?></p>
                                            <p><strong>ISBN : </strong><?php echo $data_bd["isbn"];?></p>
                                            <p><strong>Éditeur: </strong><?php echo $data_bd["title"];?></p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="reservation.php?id=<?php echo $data_bd["id"];?>" data_bd-toggle="blog-tags" data_bd-placement="top" title="" data_bd-original-title="Réserver">
                                                        <?php echo $data_bd["price"];?> € <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <p><strong>Résumé :</strong> <?php echo $data_bd["resume"];?> </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
        
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