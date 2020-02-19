<?php
$pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
$stmt = $pdo->prepare("SELECT * FROM books");
$stmt->execute();
$data = $stmt->fetchAll();
echo "<a href='addbook.php'>Ajouter un livre</a>";
echo "<table border=1>";
echo "<tr><td>ID</td><td>ISBN</td><td>Titre</td><td>Auteur</td><td>Année</td><td>Type</td><td>Date de création</td><td>Supprimer</td><td>Modifier</td><tr>";
foreach ($data as $row) {
    echo "<tr><td>".$row['id']."</td><td>".$row['isbn']."</td><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['year']."</td><td>".$row['type']."</td><td>".$row['created_at']."</td><td><a href='removebook.php?id=".$row['id']."'>X</a></td><td><a href='modifybook.php?id=".$row['id']."'>I</a></td></tr>";
}
?>