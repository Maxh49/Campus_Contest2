<?php
session_start();
if(isset($_SESSION["email"])){
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    $reqselect = $pdo->prepare("SELECT * FROM clients WHERE address_mail='".$_SESSION['email']."'");
    $reqselect->execute();
    $datereq = $reqselect->fetch();

    $reqselect2 = $pdo->prepare("SELECT * FROM books WHERE id='".$_GET['id']."'");
    $reqselect2->execute();
    $datereq2 = $reqselect2->fetch();

    $stmt = $pdo->prepare("INSERT INTO bookings (start, end, clients_id, books_id) VALUES (:start, :end, :clients_id, :books_id)");
    $start = date("Y-m-d h:i:s");
    $end = date("Y-m-d h:i:s", strtotime("+14 days"));
    $stmt->bindParam(':start', $start);
    $stmt->bindParam(':end', $end);
    $stmt->bindParam(':clients_id', $datereq['id']);
    $stmt->bindParam(':books_id', $datereq2['id']);
    $mb = $datereq2["nb_copy"]-1;
    $req = $pdo->prepare('UPDATE books SET nb_copy="'.$mb.'" WHERE id='.$datereq2['id']);
    if($stmt->execute()){
        if($req->execute()){
            header('Location: reservations.php');
        }
    }
}else{
    header("Location: index.php");
}
?>