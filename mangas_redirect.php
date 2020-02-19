<?php
session_start();
if(isset($_GET["id"])){
    $_SESSION["id_mangas"] = $_GET["id"];
    header("Location: mangas_details.php");
}else{
    header("Location: index.php");
}
?>