<?php
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM clients");
$stmt->execute();
$data = $stmt->fetchAll();
echo "<a href='addclient.php'>Ajouter un client</a>";
echo "<table border=1>";
echo "<tr><td>ID</td><td>Prénom</td><td>Nom</td><td>Adresse Mail</td><td>Sexe (0H/1F)</td><td>Date de naissance</td><td>Salarié ? (1oui/0non)</td><td>Administrateur ? (1oui/0non)</td><td>Adresse</td><td>Téléphone</td><td>Supprimer</td><td>Modifier</td><tr>";
foreach ($data as $row) {
    $stmt2 = $pdo->prepare("SELECT * FROM informations WHERE id=".$row['id']);
    $stmt2->execute();
    $data2 = $stmt2->fetch();
    echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['address_mail']."</td><td>".$row['sex']."</td><td>".$row['birth_date']."</td><td>".$row['salaried']."</td><td>".$row['admin']."
        </td><td>".$data2['address'].", ".$data2['more_address'].", ".$data2['postal_code']." ".$data2['city'].", ".$data2['country']."</td><td>".$data2['phone_number']."</td>
        <td><a href='removeclient.php?id=".$row['id']."'>X</a></td><td><a href='modifyclient.php?id=".$row['id']."'>I</a></td></tr>";
}
?>