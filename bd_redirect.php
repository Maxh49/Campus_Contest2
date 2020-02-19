<?php
session_start();
if(isset($_GET["id"])){
    $_SESSION["id_bd"] = $_GET["id"];
    header("Location: bd_details.php");
}else{
    header("Location: index.php");
}
?>