<?php
session_start();
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$data_admin = $pdo->prepare("SELECT * FROM clients WHERE address_mail = :address_mail");
$data_admin->bindParam(':address_mail', $_SESSION['email'], PDO::PARAM_STR);
$data_admin->execute();
$data_final = $data_admin->fetch();
if($data_final["salaried"] == false){
    header("Location: /clients.php");
}
$stmt = $pdo->prepare("SELECT * FROM clients");
$stmt->execute();
$data = $stmt->fetchAll();
// $stmt2 = $pdo->prepare("SELECT * FROM informations WHERE id=".$row['id']);
// $stmt2->execute();
// $data2 = $stmt2->fetch();
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
    <title>Manga++ - Gestion des Clients</title>

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
                        <a class="logo" href="clients.php">
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
                <a href="clients.php">
                    <img src="images/icon/logo.png" alt="Manga ++" />
                    Manga ++
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
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
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $data_final["first_name"]." ".$data_final["last_name"];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $data_final["first_name"]." ".$data_final["last_name"];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $data_final["address_mail"];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="../informations.php">
                                                        <i class="zmdi zmdi-account"></i>Mes informations</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../index.php?out=true">
                                                    <i class="zmdi zmdi-power"></i>Déconnexion</a>
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
                            <div class="col-md-9">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Gestion des clients</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher par Nom/Prénom" title="Type in a name">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href='#' data-toggle='modal' data-target='#modal-form'><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Ajouter</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-9">
                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom/Prénom</th>
                                                    <th>Adresse</th>
                                                    <th>CP</th>
                                                    <th>Ville</th>
                                                    <th>Pays</th>
                                                    <th>Adresse Mail</th>
                                                    <th>Téléphone</th>
                                                    <th>Sexe</th>
                                                    <th>Anniversaire</th>
                                                    <th>Admin</th>
                                                    <th>Salarié</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach ($data as $row) {
                                                        $stmt2 = $pdo->prepare("SELECT * FROM informations WHERE id=".$row['id']);
                                                        $stmt2->execute();
                                                        $data2 = $stmt2->fetch();
                                                        echo '<tr>
                                                            <td>
                                                                <div class="table-data-feature">
                                                                <a href=modifyclient.php?id='.$row['id'].'>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                                        <i class="zmdi zmdi-edit"></i>
                                                                    </button>
                                                                </a>
                                                                <a href=removeclient.php?id='.$row['id'].'>
                                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                                        <i class="zmdi zmdi-delete"></i>
                                                                    </button>
                                                                </a>
                                                                </div>
                                                            </td>
                                                            <td>'.$row['last_name'].' '.$row['first_name'].'</td>
                                                            <td>'.$row['address'].'</td>
                                                            <td>'.$row['postal_code'].'</td>
                                                            <td>'.$row['city'].'</td>
                                                            <td>'.$row['country'].'</td>
                                                            <td>'.$row['address_mail'].'</td>
                                                            <td>'.$row['phone_number'].'</td>';
                                                            if($row['sex'] == TRUE){
                                                                echo "<td>Femme</td>";
                                                            }else{
                                                                echo "<td>Homme</td>";
                                                            }
                                                            echo '<td>'.$row['birth_date'].'</td>';
                                                            if($row['admin'] == TRUE){
                                                                echo "<td>Oui</td>";
                                                            }else{
                                                                echo "<td>Non</td>";
                                                            }
                                                            if($row['salaried'] == TRUE){
                                                                echo "<td>Oui</td>";
                                                            }else{
                                                                echo "<td>Non</td>";
                                                            }
                                                        echo '</tr>';
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

    <section class="modal fade" id="modal-form" tabclients="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                             <li class="active"><a href="#addclient" aria-controls="sign_up" role="tab" data-toggle="tab">Ajouter d'un client</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" id="addclient">
                                             <form action="addclient.php" method="post">
                                                <input type="text" class="form-control" name="lastname" placeholder="Nom" required><br>
                                                <input type="text" class="form-control" name="firstname" placeholder="Prénom" required><br>
                                                <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" required><br>
                                                <input type="text" class="form-control" name="address" placeholder="Adresse" required><br>
                                                <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d adresse"><br>
                                                <input type="text" class="form-control" name="cp" placeholder="Code postal" required><br>
                                                <input type="text" class="form-control" name="city" placeholder="Ville" required><br>
                                                <input type="text" class="form-control" name="country" placeholder="Pays" required><br>
                                                <select id="sex" class="form-control"  name="sex" placeholder="Sexe" required><br>
                                                <option value="0">Homme</option>
                                                <option value="1">Femme</option>
                                                </select><br>
                                                <input type="date" class="form-control" name="birthdate" placeholder="Date de naissance" required><br>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required><br>
                                                <input type="password" class="form-control" name="password" placeholder="Mot de passe" required><br>
                                                <input type="submit" class="form-control" name="submit" value="Ajouter">
                                            </form>
                                             </div>
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
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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