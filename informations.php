<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<title>Manga++ | Mes informations</title> 

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
              <h2>Mes informations</h2>
              <span class="underline center"></span>
              <p class="lead">Éditer mes informations</p>
          </div>
          <div class="breadcrumb">
              <ul>
                  <li><a href="index.php">Accueil</a></li>
                  <li>Mes informations</li>
              </ul>
          </div>
      </div>
  </section>
  <div class="container">
  </br>
  <div class="tab-content">
    <div role="tabpanel" id="addclient">
      <?php
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    $query_info = $pdo->prepare("SELECT * FROM clients WHERE address_mail = :address_mail");
    $query_info->bindParam(':address_mail', $_SESSION['email'], PDO::PARAM_STR);
    $query_info->execute();
    $data_info = $query_info->fetch();
        echo '
        <form action="informations.php" method="post">
        <input type="text" class="form-control" name="firstname" placeholder="Prénom" value="'.$data_info['first_name'].'" required><br>
        <input type="text" class="form-control" name="lastname" placeholder="Nom" value="'.$data_info['last_name'].'" required><br>
        <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" value="'.$data_info['phone_number'].'" required><br>
        <input type="text" class="form-control" name="address" placeholder="Adresse" value="'.$data_info['address'].'" required><br>
        <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d adresse" value="'.$data_info['more_address'].'"><br>
        <input type="text" class="form-control" name="cp" placeholder="Code postal" value="'.$data_info['postal_code'].'" required><br>
        <input type="text" class="form-control" name="city" placeholder="Ville" value="'.$data_info['city'].'" required><br>
        <input type="text" class="form-control" name="country" placeholder="Pays" value="'.$data_info['country'].'" required><br>
        <select id="sex" class="form-control"  name="sex" placeholder="Sexe" value="'.$data_info['sex'].'" required><br>
        <option value="0">Homme</option>
        <option value="1">Femme</option>
        </select><br>
        <input type="date" class="form-control" name="birthdate" value="'.$data_info['birth_date'].'" required><br>
        <input type="submit" class="form-control" name="submit" value="Modifier">
        </form>';
      if(isset($_POST['submit'])){
        $stmt_up = $pdo->prepare("UPDATE clients SET first_name='".$_POST['firstname']."', last_name='".$_POST['lastname']."', sex='".$_POST['sex']."', birth_date='".$_POST['birthdate']."',address='".$_POST['address']."', more_address='".$_POST['moreaddress']."', postal_code='".$_POST['cp']."', city='".$_POST['city']."', country='".$_POST['country']."', phone_number='".$_POST['telephone']."' WHERE id=".$data_info['id']);
        if($stmt_up->execute()){
          
        }
      }
      ?>
    </div>
    </br>
  </div>
  </div>

  <!-- End: Page Banner -->
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