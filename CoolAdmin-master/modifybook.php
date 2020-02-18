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
    $query = $pdo->prepare("SELECT * FROM books WHERE id = :id");
    $query->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch();
    // $data = $pdo->query("SELECT * FROM clients WHERE address_mail = "+$_SESSION["email"])->fetchAll();
    // if($data["salaried"] == 1){
        echo '<html>
        <form action="#" method="post">
        <input type="text" class="form-control" rows="5" cols="133"  name="isbn" placeholder="isbn" value="'.$data['isbn'].'" required><br>
        <input type="text" class="form-control" name="title" placeholder="title" value="'.$data['title'].'" required><br>
        <input type="text" class="form-control" name="author" placeholder="author" value="'.$data['author'].'" required><br>
        <input type="text" class="form-control" name="year" placeholder="year" value="'.$data['year'].'" required><br>
        <input type="text" class="form-control" name="url_picture" placeholder="url_picture" value="'.$data['url_picture'].'"><br>
        <textarea id="resume" name="resume" rows="5" cols="133" required>'.$data['resume'].'</textarea><br>
        <select id="type" class="form-control"  name="type" placeholder="type" value="'.$data['type'].'" required><br>
        <option value="manga">Manga</option>
        <option value="bd">Bande dessinée</option>
        </select><br>
        <input type="text" class="form-control" name="nb_copy" placeholder="nb_copy" value="'.$data['nb_copy'].'" required><br>
        <input type="text" class="form-control" name="price" placeholder="price" value="'.$data['price'].'" required><br>
        <input type="submit" class="form-control" name="submit" value="Modifier">
        </form>
        </html>';
        if(isset($_POST['submit'])){
            $stmt = $pdo->prepare('UPDATE books SET isbn="'.$_POST['isbn'].'", title="'.$_POST['title'].'", author="'.$_POST['author'].'", year="'.$_POST['year'].'", url_picture="'.$_POST['url_picture'].'", resume="'.$_POST['resume'].'", 
            type="'.$_POST['type'].'", nb_copy="'.$_POST['nb_copy'].'", price="'.$_POST['price'].'" WHERE id="'.$_GET['id'].'"');
            if($stmt->execute()){
                header('Location: stocks.php');
            }
        }
// }else{
    // header("Location: index.php");
// }
?>