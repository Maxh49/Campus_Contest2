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
<?php
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
        $sql = "DELETE FROM bookings WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
            $reqselect2 = $pdo->prepare("SELECT * FROM bookings WHERE ".$_GET['id']);
            $reqselect2->execute();
            $datereq2 = $reqselect2->fetch();
            var_dump($datereq2['books_id']);

            $reqselect = $pdo->prepare("SELECT * FROM books WHERE ".$datereq2['books_id']);
            $reqselect->execute();
            $datereq = $reqselect->fetch();
            $mb = $datereq["nb_copy"]+1;
            $req = $pdo->prepare('UPDATE books SET nb_copy="'.$mb.'" WHERE id='.$datereq2['books_id']);
            if($stmt->execute()){
                if($req->execute()){
                    echo "Réservation supprimé !";
                    header('Location: emprunts.php');
                }
            }
?>