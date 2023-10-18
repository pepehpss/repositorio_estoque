<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require "./connect.php";
        $mysqli = con();
        extract($_POST);
        $query = "INSERT INTO produto(nome,quantidade,preco) VALUES('$nomeProduto', $quantidade, $preco)";
        $mysqli->query($query);
    }

?>