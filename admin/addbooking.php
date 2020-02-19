<?php
session_start();
// if(isset($_SESSION["email"])){
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    // $data = $pdo->query("SELECT * FROM clients WHERE address_mail = "+$_SESSION["email"])->fetchAll();
    // if($data["salaried"] == 1){
        $books = $pdo->prepare("SELECT * FROM books");
        $books->execute();
        $data_books = $books->fetchAll();
        
        $clients = $pdo->prepare("SELECT * FROM clients");
        $clients->execute();
        $data_clients = $clients->fetchAll();
        echo '<html>
        <form action="" method="post">';
            
        echo '<label for="livre">Livre</label>
        <select id="livre" name="livre">';
        foreach($data_books as $book){
            if($book["nb_copy"] > 0){
                echo '<option value="'.$book["id"].'">'.$book["id"]." - ".$book["title"].' - x'.$book["nb_copy"].'</option>';
            }
        }
        echo '
        </select><br>
        <label for="client">Client</label>
        <select id="client" name="client">';
        foreach($data_clients as $client){
            echo '<option value="'.$client["id"].'">'.$client["id"]." - ".$client["first_name"].' '.$client["last_name"].'</option>';
        }
        echo '
        </select><br>
        Début réservation<input type="date" id="start" name="start" required><br>
        Fin réservation<input type="date" id="end" name="end" required><br>
        <input id="submit" name="submit" type="submit">
        </form>
        </html>';
        if(isset($_POST['submit'])){
            $reqselect = $pdo->prepare("SELECT nb_copy FROM books WHERE id='".$_POST['livre']."'");
            $reqselect->execute();
            $datereq = $reqselect->fetch();
            $stmt = $pdo->prepare("INSERT INTO bookings (start, end, clients_id, books_id) VALUES (:start, :end, :clients_id, :books_id)");
            $stmt->bindParam(':start', $_POST['start']);
            $stmt->bindParam(':end', $_POST['end']);
            $stmt->bindParam(':clients_id', $_POST['client']);
            $stmt->bindParam(':books_id', $_POST['livre']);
            $mb = $datereq["nb_copy"]-1;
            echo $datereq["nb_copy"]." ".$mb;
            $req = $pdo->prepare('UPDATE books SET nb_copy="'.$mb.'" WHERE id='.$_POST['livre']);
            if($stmt->execute()){
                if($req->execute()){
                    echo "Réservation ajouté !";
                    header('Location: emprunts.php');
                }
            }
        }
// }else{
    // header("Location: index.php");
// }
?>