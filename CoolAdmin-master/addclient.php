<?php
session_start();
// if(isset($_SESSION["email"])){
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
    // $data = $pdo->query("SELECT * FROM clients WHERE address_mail = "+$_SESSION["email"])->fetchAll();
    // if($data["salaried"] == 1){
        // echo '<html>
        // <form action="#" method="post">
        // <input type="text" class="form-control" name="lastname" placeholder="Nom" required><br>
        // <input type="text" class="form-control" name="firstname" placeholder="Prénom" required><br>
        // <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" required><br>
        // <input type="text" class="form-control" name="address" placeholder="Adresse" required><br>
        // <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d adresse"><br>
        // <input type="text" class="form-control" name="cp" placeholder="Code postal" required><br>
        // <input type="text" class="form-control" name="city" placeholder="Ville" required><br>
        // <input type="text" class="form-control" name="country" placeholder="Pays" required><br>
        // <select id="sex" class="form-control"  name="sex" placeholder="Sexe" required><br>
        // <option value="0">Homme</option>
        // <option value="1">Femme</option>
        // </select><br>
        // <input type="date" class="form-control" name="birthdate" placeholder="Date de naissance" required><br>
        // <input type="email" class="form-control" name="email" placeholder="Email" required><br>
        // <input type="password" class="form-control" name="password" placeholder="Mot de passe" required><br>
        // <input type="submit" class="form-control" name="submit" value="Ajouter">
        // </form>
        // </html>';
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
                    header('Location: index.php');
                }
            }else{
                echo "Adresse mail déjà utilisé";
            }
        }
// }else{
    // header("Location: index.php");
// }
?>