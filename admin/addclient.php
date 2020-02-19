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
        if(isset($_POST['submit'])){
            $query = $pdo->prepare("SELECT address_mail FROM clients WHERE address_mail = :email");
            $query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() == 0) {
                $i = 0;
                $stmt2 = $pdo->prepare("INSERT INTO clients (first_name, last_name, address_mail, password, sex, birth_date, salaried, admin, address, more_address, postal_code, city, country, phone_number) VALUES (:first_name, :last_name, :address_mail, :password, :sex, :birth_date, :salaried, :admin, :address, :more_address, :postal_code, :city, :country, :phone_number)");
                $stmt2->bindParam(':first_name', $_POST['firstname']);
                $stmt2->bindParam(':last_name', $_POST['lastname']);
                $stmt2->bindParam(':address_mail', $_POST['email']);
                $stmt2->bindParam(':password', $_POST['password']);
                $stmt2->bindParam(':sex', $_POST['sex']);
                $stmt2->bindValue(':birth_date', $_POST['birthdate']);
                $stmt2->bindParam(':salaried', $i);
                $stmt2->bindParam(':admin', $i);
                $stmt2->bindParam(':address', $_POST['address']);
                $stmt2->bindParam(':more_address', $_POST['moreaddress']);
                $stmt2->bindParam(':postal_code', $_POST['cp']);
                $stmt2->bindParam(':city', $_POST['city']);
                $stmt2->bindParam(':country', $_POST['country']);
                $stmt2->bindParam(':phone_number', $_POST['telephone']);
                if($stmt2->execute()){
                    echo "Client ajouté !";
                    header('Location: clients.php');
                }
            }else{
                echo "Adresse mail déjà utilisé";
            }
        }
?>