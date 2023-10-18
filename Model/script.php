<?php
    include './connect.php';
    $mysqli = con();
    $quantity = 10;

    for($i = 1; $i <= $quantity; $i++) {
        $productID = uniqid();
        $productFoto = "";
        $productName = range('a', 'z'); //Cria um array de letra de a até z
        shuffle($productName); //Embaralha o array de letras
        $productName = implode('', $productName); //Junta o array transformando ele em uma string

        $productQuantity = rand(0, 500);
        $productPrice = floatval(bcdiv(rand(1000, 2000), rand(1, 10), 2));

        $query = "INSERT INTO produtos VALUES ('$productID', '$productFoto', '$productName', $productQuantity, $productPrice)";
        $mysqli->query($query);
    }
?>