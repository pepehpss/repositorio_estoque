<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idproduto = $_POST["idProduto"];
        include "connect.php";
        $mysqli = con();
        $querydelete = "DELETE FROM produto WHERE idProduto=$idproduto";
        $mysqli->query($querydelete);
    }
?>