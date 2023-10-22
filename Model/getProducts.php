<?php
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Content-Type: application/json");

    include "connect.php";
    $mysqli = con();
    $queryselect = "SELECT * FROM produtos";
    $returnmy = $mysqli->query($queryselect);
    $productslist=[];
    while($row = $returnmy->fetch_array(MYSQLI_ASSOC)){
        $productslist[] = $row;
    };
    $jsonresponse=(object)["products"=>$productslist];
    echo json_encode($jsonresponse);

?>