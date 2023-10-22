<?php
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Content-Type: application/json");

    $idproduto = $_POST["idProduto"];
    include "connect.php";
    $mysqli = con();
    $querydelete = "DELETE FROM produto WHERE idProduto=$idproduto";
    $mysqli->query($querydelete);
?>