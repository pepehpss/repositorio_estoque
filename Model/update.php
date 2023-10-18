<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fieldUpdate=$_POST["nome"];
        $newValue=$_POST["newValue"];
        $idProduct=$_POST["idProduto"];
        include "connect.php";
        $mysqli = con();
        $query="UPDATE produto SET $fieldUpdate='$newValue' WHERE idProduto=$idProduct";
        $mysqli->query($query);
    }
?>