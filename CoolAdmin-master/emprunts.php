<?php
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM bookings");
$stmt->execute();
$data = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="Manga ++" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a href="clients.php">
                                    <i class="fas fa-user-md"></i>Gestion Clients</a>
                            </li>
                            <li>
                                <a href="stocks.php">
                                    <i class="fas fa-book"></i>Gestion des stocks</a>
                            </li>
                            <li>
                                <a href="emprunts.html">
                                    <i class="fas fa-book"></i>Gestion des emprunts</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo.png" alt="Manga ++" />
                    Manga ++
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-user-md"></i>Gestion Clients</a>
                        </li>
                        <li>
                            <a href="stocks.php">
                                <i class="fas fa-book"></i>Gestion des stocks</a>
                        </li>
                        <li class="active has-sub">
                            <a href="emprunts.php">
                                <i class="fas fa-book"></i>Gestion des emprunts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h3 class="red">Bienvenue sur le panel Administration de Manga ++</h3>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Gestion des emprunts</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher par titre ..." title="Type in a name">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href='#' data-toggle='modal' data-target='#modal-form'><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Ajouter</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12">
                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Client</th>
                                                    <th>Titre du livre</th>
                                                    <th>Date début</th>
                                                    <th>Date fin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach ($data as $row) {
                                                    $stmt_client = $pdo->prepare("SELECT * FROM clients WHERE id = ".$row['clients_id']);
                                                    $stmt_client->execute();
                                                    $data_client = $stmt_client->fetch();
                                                    $stmt_book = $pdo->prepare("SELECT * FROM books WHERE id = ".$row['books_id']);
                                                    $stmt_book->execute();
                                                    $data_book = $stmt_book->fetch();
                                                    echo '<tr>
                                                        <td>
                                                            <div class="table-data-feature">
                                                            <a href=removebooking.php?id='.$row['id'].'>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        <td>'.$data_client['first_name']." ".$data_client['last_name'].'</td>
                                                        <td>'.$data_book['title'].'</td>
                                                        <td>'.$row['start'].'</td>
                                                        <td>'.$row['end'].'</td>
                                                    </tr>';
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div id="form" class="modal-content modal-popup">

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <img src="images/icon/logo.png" alt="Manga ++" />
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#addbook" aria-controls="sign_up" role="tab" data-toggle="tab">Ajouter une réservations</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" id="addbook">
                                             <?php
                                                $books = $pdo->prepare("SELECT * FROM books");
                                                $books->execute();
                                                $data_books = $books->fetchAll();
                                                
                                                $clients = $pdo->prepare("SELECT * FROM clients");
                                                $clients->execute();
                                                $data_clients = $clients->fetchAll();
                                                echo '<html>
                                                <form action="addbooking.php" method="post">';
                                                    
                                                echo '<label for="livre">Livre : </label>
                                                <select id="livre" name="livre">';
                                                foreach($data_books as $book){
                                                    if($book["nb_copy"] > 0){
                                                        echo '<option value="'.$book["id"].'">'.$book["id"]." - ".$book["title"].' - x'.$book["nb_copy"].'</option>';
                                                    }
                                                }
                                                echo '
                                                </br></select><br></br>
                                                <label for="client">Client : </label>
                                                <select id="client" name="client">';
                                                foreach($data_clients as $client){
                                                    echo '<option value="'.$client["id"].'">'.$client["id"]." - ".$client["first_name"].' '.$client["last_name"].'</option>';
                                                }
                                                echo '
                                                </br></select><br></br>
                                                Début réservation : <input type="date" id="start" name="start" required><br></br>
                                                Fin réservation : <input type="date" id="end" name="end" required><br></br>
                                                <input id="submit" name="submit" type="submit">
                                                </form>
                                                </html>';
                                            ?>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
    
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
        }
    </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
<!-- end document-->
