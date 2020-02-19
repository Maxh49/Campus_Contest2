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
              <h2>Mes informations</h2>
              <span class="underline center"></span>
              <p class="lead">Éditer mes informations</p>
          </div>
          <div class="breadcrumb">
              <ul>
                  <li><a href="index-2.html">Accueil</a></li>
                  <li>Mes informations</li>
              </ul>
          </div>
      </div>
  </section>
  <div class="container">
  </br>
  <div class="tab-content">
    <div role="tabpanel" id="addclient">
      <form action="" method="post">
        <input type="text" class="form-control" name="lastname" placeholder="Nom" required><br>
        <input type="text" class="form-control" name="firstname" placeholder="Prénom" required><br>
        <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" required><br>
        <input type="text" class="form-control" name="address" placeholder="Adresse" required><br>
        <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d adresse"><br>
        <input type="text" class="form-control" name="cp" placeholder="Code postal" required><br>
        <input type="text" class="form-control" name="city" placeholder="Ville" required><br>
        <input type="text" class="form-control" name="country" placeholder="Pays" required><br>
        <input type="date" class="form-control" name="birthdate" placeholder="Date de naissance" required><br>
        <input type="email" class="form-control" name="email" placeholder="Email" required><br>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required><br>
        <input type="submit" class="form-control" name="submit" value="Modifier">
      </form>
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