<?php
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Content-Type: application/json");

    require "./connect.php";
    $mysqli = con();
    extract($_POST);
    $query = "INSERT INTO produto(nome,quantidade,preco) VALUES('$nomeProduto', $quantidade, $preco)";
    $mysqli->query($query);
?>