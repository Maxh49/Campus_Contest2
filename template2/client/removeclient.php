<?php
session_start();
// if(isset($_SESSION["email"])){
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    // $data = $pdo->query("SELECT * FROM clients WHERE address_mail = "+$_SESSION["email"])->fetchAll();
    // if($data["salaried"] == 1){
        $sql = "DELETE FROM clients WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        if($stmt->execute()){
            echo "Livre supprimé !";
            header('Location: index.php');
        }else{
            echo "Erreur !";
        }
    // }
// }else{
    // header("Location: index.php");
// }
?>