<?php
if(isset($_GET["out"])){
    if($_GET["out"] == true){
        session_destroy();
        header('Location: index.php');
    }
}
?>
<header id="header" class="navbar-wrapper">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="menu-wrap">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <h1>
                                <a href="index.php">
                                    <img src="images/100100.png" alt="Manga ++" />
                                </a>
                            </h1>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="navbar-collapse hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li class="accueil"><a href="index.php">Accueil</a></li>
                            <li><a href="mangas.php">Univers Manga</a></li>
                            <li><a href="bd.php">Univers Bande dessinée</a></li>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-md">
                                <div class="topbar-links">
                                    <?php
                                        if(isset($_SESSION['email'])){
                                            $pdo3 = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
                                            $stmt = $pdo3->prepare("SELECT * FROM clients WHERE address_mail='".$_SESSION['email']."'");
                                            $stmt->execute();
                                            $data = $stmt->fetch();
                                            echo '<li class="dropdown"><a class="fa fa-user" href="informations.php">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href=""></a>
                                            <ul class="dropdown-menu">';
                                            if($data["salaried"]){
                                                echo '<li><a class="lien" href="admin/clients.php">Gestion des clients</a></li>
                                                <li><a class="lien" href="admin/stocks.php">Gestion des livres</a></li>
                                                <li><a class="lien" href="admin/emprunts.php">Gestion des réservations</a></li>
                                                ';
                                            }else if(!$data["salaried"]){
                                                echo '  <li><a class="lien" href="reservations.php">Mes réservations</a></li>';
                                            }
                                            echo '
                                            <li><a class="lien" href="informations.php">Mes informations</a></li>
                                            <li><a class="lien" href="index.php?out=true">Déconnexion</a></li>
                                            </ul>
                                            </a>';
                                        }else{
                                            echo "<a href='#' data-toggle='modal' data-target='#modal-form'><i class='fa fa-lock'></i>Se connecter | S'inscrire</a>";
                                        }
                                    ?>
                                </div>
                            </div>
                        <!-- Header Topbar -->
                    </div>
                    <div class="header-socialbar hidden-sm hidden-xs">
                        <ul class="social-links">
                            <li><a href="http://facebook.com/manga++"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://twitter.com/manga++"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://instagram.com/manga++"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://linkedin.com/manga++"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <ul class="share-links">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="fa fa-share"></i>
                                </a>
                                <div class="dropdown-menu social-dropdown">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-md hidden-lg">
                <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Menu</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="index.php">Accueil</a>
                            </li>
                            <li>
                                <a href="">Librairie</a>
                                <ul>
                                    <li><a href="mangas.php">Univers Manga</a></li>
                                    <li><a href="bd.php">Univers Bande dessinée</a></li>
                                </ul>
                            </li>
                            <li><a href="a-propos.html">A propos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
