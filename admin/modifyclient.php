<?php
session_start();
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$data_admin = $pdo->prepare("SELECT * FROM clients WHERE address_mail = :address_mail");
$data_admin->bindParam(':address_mail', $_SESSION['email'], PDO::PARAM_STR);
$data_admin->execute();
if($data_admin->fetch()["salaried"] == false){
    header("Location: /index.php");
}
?>
<html>
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
</html>
<?php
session_start();
// if(isset($_SESSION["email"])){
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    $query = $pdo->prepare("SELECT * FROM clients WHERE id = :id");
    $query->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch();
    // $data = $pdo->query("SELECT * FROM clients WHERE address_mail = "+$_SESSION["email"])->fetchAll();
    // if($data["salaried"] == 1){
        echo '<html>
        </br>
        <form action="#" method="post">
        <input type="text" class="form-control" name="firstname" placeholder="Prénom" value="'.$data['first_name'].'" required><br>
        <input type="text" class="form-control" name="lastname" placeholder="Nom" value="'.$data['last_name'].'" required><br>
        <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" value="'.$data['phone_number'].'" required><br>
        <input type="text" class="form-control" name="address" placeholder="Adresse" value="'.$data['address'].'" required><br>
        <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d adresse" value="'.$data['more_address'].'"><br>
        <input type="text" class="form-control" name="cp" placeholder="Code postal" value="'.$data['postal_code'].'" required><br>
        <input type="text" class="form-control" name="city" placeholder="Ville" value="'.$data['city'].'" required><br>
        <input type="text" class="form-control" name="country" placeholder="Pays" value="'.$data['country'].'" required><br>
        <select id="sex" class="form-control"  name="sex" placeholder="Sexe" value="'.$data['sex'].'" required><br>
        <option value="0">Homme</option>
        <option value="1">Femme</option>
        </select><br>
        <input type="date" class="form-control" name="birthdate" value="'.$data['birth_date'].'" required><br>
        <input type="email" class="form-control" name="email" placeholder="Email" value="'.$data['address_mail'].'" required><br>
        <input type="submit" class="form-control" name="submit" value="Modifier">
        </form>
        </html>';
        if(isset($_POST['submit'])){
                $stmt = $pdo->prepare("UPDATE clients SET first_name='".$_POST['firstname']."', last_name='".$_POST['lastname']."', address_mail='".$_POST['email']."', sex='".$_POST['sex']."', birth_date='".$_POST['birthdate']."', address='".$_POST['address']."', more_address='".$_POST['moreaddress']."', postal_code='".$_POST['cp']."', city='".$_POST['city']."', country='".$_POST['country']."', phone_number='".$_POST['telephone']."' WHERE id=".$_GET['id']);
                if($stmt->execute()){
                    header('Location: index.php');
                }
        }
// }else{
    // header("Location: index.php");
// }
?>