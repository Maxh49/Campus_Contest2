<?php
session_start();
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");

$data_mail = $pdo->prepare("SELECT * FROM clients WHERE address_mail = :address_mail");
$data_mail->bindParam(':address_mail', $_SESSION['email'], PDO::PARAM_STR);
$data_mail->execute();
$data_id = $data_mail->fetch();
$stmt2 = $pdo->prepare("SELECT * FROM bookings WHERE clients_id=".$data_id["id"]);
$stmt2->execute();
$data2 = $stmt2->fetchAll();
?>

<!DOCTYPE html>
<html lang="zxx">
<title>Manga++ | Mes réservations</title> 

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
                    <p class="lead">Voir mes réservations</p>
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
                                foreach ($data2 as $row) {
                                    $start = strtotime($row['start']);
                                    $end = strtotime($row['end']);
                                    $nbJoursTimestamp = $end - $start;
                                    $nbJours = $nbJoursTimestamp/86400;
                                    $query_info3 = $pdo->prepare("SELECT * FROM books WHERE id = :id");
                                    $query_info3->bindParam(':id', $row['books_id'], PDO::PARAM_STR);
                                    $query_info3->execute();
                                    $data_info3 = $query_info3->fetch();
                                   echo "<ul class='myTable'>
                                        <li>
                                            <figure>
                                                <a href='#'><img src='".$data_info3['url_picture']."' alt='Book'></a>
                                                <figcaption>
                                                    <header>
                                                    <h3 small><a href='#'>".$data_info3['title']."</a></h3 small><br>
                                                    <h4 small><a href='#'>".$data_info3['author']."</a></h4 small>
                                                        </br>
                                                    </header>
                                                    <p>'".substr($data_info3['resume'], 0, 160)."...</p>
                                                    <div class='actions'>
                                                        <ul>
                                                            <li>
                                                                ".$nbJours." jours restants
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