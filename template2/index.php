<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>Manga++ | Accueil</title>

        <!-- Favicon -->
        <link href="images/favicon.png" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="layout-v3">
        
        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="menu-wrap">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index.php">
                                            <img src="images/logo.png" alt="Manga ++" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="accueil"><a href="index.php">Accueil</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="">Librairie</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="mangas.html">Univers Manga</a></li>
                                            <li><a href="bd.html">Univers Bande dessinée</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="a-propos.html">A propos</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-md">
                                    <div class="topbar-links">
                                        <a href="#" data-toggle="modal" data-target="#modal-form"><i class="fa fa-lock"></i>Se connecter | S'inscrire</a>
                                    </div>
                                </div>
                                <!-- Header Topbar -->
                            </div>
                            <div class="header-socialbar hidden-sm hidden-xs">
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                                            <li><a href="mangas.html">Univers Manga</a></li>
                                            <li><a href="bd.html">Univers Bande dessinée</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="a-propos.html">A propos</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="images/fond-blanc.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Il y a quoi dans la librairie ?</h2>
                            <p>La librairie vous donne accès à des <strong>Mangas,</strong> et des <strong>Bandes Dessinées</strong>.</p>
                            <div class="filter-box">
                                <form action="http://libraria.demo.presstigers.com/index.php" class="banner-filter-box" method="get">
                                    <div class="form-group">
                                        <label class="sr-only" for="keywords">Recherche par mots-clés</label>
                                        <input class="form-control" placeholder="Recherche par mots-clés" id="keywords" name="keywords" type="text">
                                    </div>
                                    <div class="form-group">
                                        <select name="category" id="category" class="form-control"> 
                                            <option>Manga</option>
                                            <option>Bande dessinée</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input class="form-control" type="submit" value="Rechercher">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider Section -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Bienvenue sur la librairie en ligne !</h2>
                                <span class="underline left"></span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->

        <!-- Start: Meet Staff -->
        <section class="meet-staff-box section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="center-content">
                        <h2 class="section-title">Le staff</h2>
                        <span class="underline center"></span>
                    </div>
                    <div class="staff-list">
                        <?php
                            $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
                            $data = $pdo->query("SELECT * FROM clients WHERE salaried = true")->fetchAll();
                            foreach ($data as $row) {
                                if($row["admin"] == "1"){
                                    $admin = "Directeur";
                                }else{
                                    $admin = "Salarié";
                                }
                                echo "
                                <div class='staff-member'>
                                    <figure>
                                        <img src='images/".$row["first_name"].".jpg' alt='team' />
                                    </figure>
                                    <div class='content-block'>
                                        <div class='staff-info'>
                                            <h4>".$row["first_name"]." ".$row["last_name"]."</h4>
                                            <span class='designation'>".$admin."</span>
                                            <p>".$row["address_mail"]."</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Meet Staff -->
        
 <!-- Start: Footer -->
        <footer class="site-footer" id="contact">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">À propos de la Librairie</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    Le principe de notre site de vente de mangas et bandes-dessinée repose sur l'utilisation de commandes à travers un site doté d'une base de données bibliographiques d'un millier de références, d'une plate-forme logistique avec un stock de près de 50 000 références.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>1600 Pennsylvania Ave NW, Washington, DC 20500, États-Unis.</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">manga++@gmail.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+337-80-48-48-05</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                        
                                <h3 class="footer-widget-title">Horaire</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Lun-Mar: 9h - 21h</time>
                                    <time datetime="2017-02-13">Jeu-Ven: 9h - 18h</time>
                                    <time datetime="2017-02-13">Sam: 9h - 17h</time>
                                    <time datetime="2017-02-13">Dim: 14h - 18h </time>
                                    
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title"> Tweets récents</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@Manga++</a> Nous avons reçu le nouveau tome de Naruto venez le commandez. <a href="index.php">manga++.com</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@Manga++</a> Un beau ciel bleu est prévu dans 2 jours, commandez votre manga ou bd à temps pour le lire dehors ! <a href="index.php">manga++.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>   
            </div>
        </footer>
        <!-- End: Footer -->
        <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <img src="images/logo.png" alt="Manga ++" />
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Connexion</a></li>
                                             <li><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Créer un compte</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="login">
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                       <input type="submit" class="form-control" name="submit" value="Se connecter">
                                                       <a href="https://www.facebook.com/templatemo">Mot de passe oublié ?</a>
                                                  </form>
                                             </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="lastname" placeholder="Nom" required>
                                                       <input type="text" class="form-control" name="firstname" placeholder="Prénom" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" required>
                                                       <input type="text" class="form-control" name="address" placeholder="Adresse" required>
                                                       <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d'adresse">
                                                       <input type="text" class="form-control" name="cp" placeholder="Code postal" required>
                                                       <input type="text" class="form-control" name="city" placeholder="Ville" required>
                                                       <input type="text" class="form-control" name="country" placeholder="Pays" required>
                                                       <select id="sex" class="form-control"  name="sex" placeholder="Sexe" required>
                                                        <option value="0">Homme</option>
                                                        <option value="1">Femme</option>
                                                       </select>
                                                       <input type="date" class="form-control" name="birthdate" placeholder="Date de naissance" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                       <input type="submit" class="form-control" name="submit" value="S'inscrire">
                                                  </form>
                                                  <?php
		                                            if(isset($_POST['submit'])){
                                                        $stmt = $pdo->prepare("INSERT INTO informations (address, more_address, postal_code, city, 
                                                        country, phone_number) VALUES (:address, :more_address, :postal_code, :city, :country, :phone_number)");
                                                        $stmt->bindParam(':address', $_POST['address']);
                                                        $stmt->bindParam(':more_address', $_POST['moreaddress']);
                                                        $stmt->bindParam(':postal_code', $_POST['cp']);
                                                        $stmt->bindParam(':city', $_POST['city']);
                                                        $stmt->bindParam(':country', $_POST['country']);
                                                        $stmt->bindParam(':phone_number', $_POST['telephone']);
                                                        
                                                        $id = $pdo->lastInsertId();
                                                        $stmt2 = $pdo->prepare("INSERT INTO clients (first_name, last_name, address_mail, password, 
                                                        sex, birth_date, salaried, admin, informations_id) VALUES (:first_name, :last_name, :address_mail, :password, :sex, :birth_date, :salaried, :admin, :informations_id)");
                                                        $stmt2->bindParam(':first_name', $_POST['firstname']);
                                                        $stmt2->bindParam(':last_name', $_POST['lastname']);
                                                        $stmt2->bindParam(':address_mail', $_POST['email']);
                                                        $stmt2->bindParam(':password', $_POST['password']);
                                                        $stmt2->bindParam(':sex', $_POST['sex']);
                                                        $stmt2->bindParam(':birth_date', $_POST['birthdate']);
                                                        $stmt2->bindParam(':salaried', "0");
                                                        $stmt2->bindParam(':admin', "0");
                                                        $stmt2->bindParam(':informations_id', $id);
                                                        
                                                        if ($stmt->execute()) { 
                                                            echo "1Work";
                                                         } else {
                                                            echo " 1dont Work";
                                                         }
                                                        if ($stmt2->execute()) { 
                                                            echo "2Work";
                                                         } else {
                                                            echo " 2dont Work";
                                                         }
                                                    }
                                                  ?>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/swiper.js"></script>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>